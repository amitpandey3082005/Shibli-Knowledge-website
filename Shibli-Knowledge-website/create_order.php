<?php
require 'config.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    echo json_encode(['error' => 'POST required']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$amount = isset($input['amount']) ? intval($input['amount']) : 100;
if($amount <= 0) $amount = 100;
$amount_paise = $amount * 100;

$postData = [
    'amount' => $amount_paise,
    'currency' => 'INR',
    'payment_capture' => 1,
    'receipt' => 'rcpt_' . time()
];

$ch = curl_init('https://api.razorpay.com/v1/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, RAZORPAY_KEY_ID . ':' . RAZORPAY_KEY_SECRET);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if($error){
    http_response_code(500);
    echo json_encode(['error' => $error]);
} else {
    echo $response;
}
?>
