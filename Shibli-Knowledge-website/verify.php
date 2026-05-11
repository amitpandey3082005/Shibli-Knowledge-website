<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'POST required';
    exit;
}

$order_id = $_POST['razorpay_order_id'] ?? '';
$payment_id = $_POST['razorpay_payment_id'] ?? '';
$signature = $_POST['razorpay_signature'] ?? '';

if (!$order_id || !$payment_id || !$signature) {
    http_response_code(400);
    echo 'Missing parameters';
    exit;
}

$payload = $order_id . '|' . $payment_id;
$expectedSignature = hash_hmac('sha256', $payload, RAZORPAY_KEY_SECRET);

$verified = hash_equals($expectedSignature, $signature);
$deliveryDate = date('d-m-Y', strtotime('+7 days')); // delivery date = today + 7 days
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment Receipt</title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Hide buttons when printing */
    @media print {
      .no-print { display: none !important; }
      body { -webkit-print-color-adjust: exact; }
    }
    .receipt-card {
      max-width: 800px;
      margin: 30px auto;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.08);
    }
    .brand {
      font-weight: 700;
      letter-spacing: .5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php if ($verified): ?>
      <div id="receipt" class="receipt-card bg-white">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h3 class="brand">Payment Receipt</h3>
            <small class="text-muted">Thank you for your purchase!</small>
          </div>
          <div class="text-end">
            <small class="text-muted">Date: <?php echo date('d-m-Y'); ?></small>
            <div><small class="text-muted">Receipt ID: <?php echo htmlspecialchars($payment_id); ?></small></div>
          </div>
        </div>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row" style="width:40%;">Payment ID</th>
              <td><?php echo htmlspecialchars($payment_id); ?></td>
            </tr>
            <tr>
              <th scope="row">Order ID</th>
              <td><?php echo htmlspecialchars($order_id); ?></td>
            </tr>
            <tr>
              <th scope="row">Delivery Date</th>
              <td><?php echo htmlspecialchars($deliveryDate); ?></td>
            </tr>
            <tr>
              <th scope="row">Notes</th>
              <td>Your order will be delivered within 7 days. For tracking or queries call: <strong>9956794787</strong></td>
            </tr>
          </tbody>
        </table>

        <div class="mt-3">
          <p class="mb-1"><strong>Important:</strong> Keep this receipt safe for future reference.</p>
        </div>
      </div>

      <div class="text-center my-3 no-print">
        <!-- Buttons -->
        <button id="downloadPdf" class="btn btn-primary me-2">Download PDF</button>
        <button id="printBtn" class="btn btn-secondary me-2">Print Receipt</button>
        <a href="./college.php" class="btn btn-outline-secondary">Back to Home</a>
      </div>

      <!-- jsPDF + html2canvas -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

      <script>
        document.getElementById('printBtn').addEventListener('click', function () {
          window.print();
        });

        document.getElementById('downloadPdf').addEventListener('click', function () {
          const receipt = document.getElementById('receipt');

          // Make sure fonts render properly by giving a small delay for browsers
          html2canvas(receipt, { scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png');

            // jsPDF usage
            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF('p', 'mm', 'a4');

            const pageWidth = pdf.internal.pageSize.getWidth();
            const pageHeight = pdf.internal.pageSize.getHeight();

            // Calculate image dimensions to fit A4 while keeping aspect ratio
            const imgProps = pdf.getImageProperties(imgData);
            const imgWidth = pageWidth - 20; // 10mm margin each side
            const imgHeight = (imgProps.height * imgWidth) / imgProps.width;

            let position = 10; // top margin 10mm

            // If image height is bigger than page height, scale down further
            if (imgHeight > pageHeight - 20) {
              const scale = (pageHeight - 20) / imgHeight;
              pdf.addImage(imgData, 'PNG', 10, position, imgWidth * scale, imgHeight * scale);
            } else {
              pdf.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
            }

            // filename will include payment id for easy reference
            const fileName = 'receipt_<?php echo preg_replace("/[^A-Za-z0-9_\-]/", "_", $payment_id); ?>.pdf';
            pdf.save(fileName);
          }).catch(err => {
            alert('Could not generate PDF. Please try printing instead.');
            console.error(err);
          });
        });
      </script>

    <?php else: ?>
      <div class="alert alert-danger mt-5" role="alert">
        <h4 class="alert-heading">Verification failed</h4>
        <p>Invalid signature - verification failed. We cannot generate a receipt.</p>
        <hr>
        <p class="mb-0">If you believe this is an error, please contact support and provide the payment and order IDs.</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>