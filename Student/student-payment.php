<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - Payment Mode</title>
    <link rel="stylesheet" href="../common/styles.css"> <!-- Assuming you have a styles.css file for common styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .sidebar {
            flex: 0 0 20%; /* Sidebar width */
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
        }
        .main-content {
            flex: 0 0 75%; /* Main content width */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }
        .main-content h2 {
            background-color: #6D0505;
            color: #fff;
            padding: 15px;
            margin: 0;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .payment-box {
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .payment-box p {
            margin: 0;
        }
        .payment-box img {
            max-width: 50%; /* Reduced the QR Code size */
            height: auto;
            display: block;
            margin: 20px auto;
            cursor: pointer; /* Adding cursor pointer to indicate it's clickable */
        }
    </style>
</head>
<body>
    <?php include('../common/common-header.php') ?>
    <?php include('../common/student-sidebar.php') ?>  
    <main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
        <div class="sub-main">
            <div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
                <h4 class="">Payment Method</h4>
            </div>
            <div class="main-content">
                <div>
                    
                    <p>For Online Fees Submission College Account Details : - </p>
                </div>
                <div class="container">
                    <div class="payment-section">
                        <h2>QR Code</h2>
                        <div class="payment-box">
                            <p>Click the QR code to view it:</p>
                            <!-- Wrap the image with an <a> tag -->
                            <a href="images/Pay.png" target="_blank">
                                <img src="images/Pay.png" alt="UPI QR Code">
                            </a>
                            <h2>UPI ID</h2>
                        <div class="payment-box">
                            <p>Use the UPI ID below to make the payment:</p>
                            <!-- UPI ID -->
                            <p>UPI ID: 7355223218@centralbank</p>
                        </div>
                    </div>
                    <div class="payment-section">
                        
                        </div>
                    </div>
                    <!-- New section for Account Details -->
                    <div class="payment-section">
                        <h2>Account Details</h2>
                        <div class="payment-box">
                            <p>Use the following bank account details to make the payment:</p>
                            <!-- Bank Account Details -->
                            <p>Account Name: Apollo Institute of Technology</p>
                            <p>Account Number: 10550200021479 </p>
                            <p>Bank Name: Bank of Baroda</p>
                            <p>IFSC Code: BARB0CIVKAN ( FIFTH CHARACTER IS ZERO )</p>
                            <p>Address: Civil Lines Kanpur Nagar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Include any necessary scripts or stylesheets here -->
</body>
</html>
