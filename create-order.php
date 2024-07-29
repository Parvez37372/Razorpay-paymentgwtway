<?php
header('Content-Type: application/json');

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

$apiKey = 'rzp_test_4Y2e1ha5xuVo2J';
$apiSecret = 'https:// checkout.razorpay.com/v1/checkout.js';

$api = new Api($apiKey, $apiSecret);

$input = json_decode(file_get_contents('php://input'), true);

$name = $input['name'];
$email = $input['email'];
$phone = $input['phone'];
$address = $input['address'];

$orderData = [
    'receipt'         => 3456,
    'amount'          => 50000, // amount in the smallest currency unit
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);
$orderId = $razorpayOrder['id'];

$response = [
    'id' => $orderId,
    'amount' => $orderData['amount']
];

echo json_encode($response);
?>
