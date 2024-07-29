<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .payment-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .payment-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .payment-form .form-group {
            margin-bottom: 15px;
        }
        .payment-form .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .payment-form .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .payment-form .form-group i {
            margin-right: 10px;
        }
        .payment-form button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .payment-form button:hover {
            background: #45a049;
        }
        .btn
        {
             font-size:25px;
             align-items:center;  
              color:black;
              padding:15px; 
              margin-left:138px; 
              background-color:orange;
              border-radius:10px;  
        }
    </style>
</head>
<body>
    <div class="payment-form">
        <h2>Payment Form</h2>
        <p>Customer Details:</p>
        <form action="process_payment.php" method="POST">
            <div class="form-group">
                <label for="name"><i class="fas fa-user"></i> Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="hidden" value="<?php echo 'OLD'.rand(100,100);?>" name="orderid" required>
                <input type="hidden" value="<?php echo 1;?>" name="amount">
            </div>
            <div class="form-group">
                <label for="mobile"><i class="fa fa-mobile"></i>Mobile</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="address"><i class="fas fa-home"></i> Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <input type="submit" value="pay now" class="btn">
        </form>
    </div>
</body>
</html>
