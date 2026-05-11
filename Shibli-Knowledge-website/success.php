<?php
// success.php - simple landing after verification (optional)
echo '<h2>Payment result</h2>';
echo '<p>' . htmlspecialchars(file_get_contents('php://input')) . '</p>';
echo '<p>Or check server logs / database for verification result.</p>';
?>