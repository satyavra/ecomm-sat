<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.razorpay-payment-button{
			background-color: #008CBA;
			border: none;
			border-radius: 4px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.razorpay-payment-button:hover {
			background-color: #72a5b6;
		}
	</style>
</head>
<body>

	<div class="container d-flex justify-content-center mt-5 " >
	<form class="" action="<?= base_url('checkout/razorpay_success') ?>" method="POST" style="margin-top: 150px;">
		<script
		src="https://checkout.razorpay.com/v1/checkout.js"
		data-key="rzp_test_NHaQfetQmiP98m" // Enter the Key ID generated from the Dashboard
 		data-currency="INR"
		data-buttontext="Pay with Razorpay"
		data-name="GROCERY"
		data-description="Online Grocery store"
		data-image=""
		data-prefill.name="satyavrat"
		data-prefill.email="satyavrat@mail.com"
		data-prefill.contact="9975414623"
		data-theme.color="#F37254"
		></script>
		<input type="hidden" custom="Hidden Element" name="hidden">
	</form>
	</div>
</body>
</html>