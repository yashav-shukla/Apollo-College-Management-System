<?php
session_start();
if (!$_SESSION["LoginStudent"]) {
    header('location:../login/login.php');
}
if ($_SESSION['LoginStudent']) {
    $_SESSION['LoginAdmin'] = "";
}
require_once "../connection/connection.php";

// Check if a file is uploaded
if (isset($_FILES['abc_id'])) {
    $file_name = $_FILES['abc_id']['name']; // Get the name of the uploaded file
    $file_id = uniqid(); // Generate a unique ID for the file
    // You can save the file name and ID in the database here or perform any other necessary actions
    // For demonstration purposes, let's just echo the file ID
    echo "Uploaded File ID: $file_id";
}

$file_path = ""; // Initialize file path variable

// Check if the file exists and set the file path
if (isset($file_name) && !empty($file_name)) {
    $uploads_directory = "../uploads/"; // Directory where uploaded files are stored
    $file_path = $uploads_directory . $file_name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student - Id</title>
    <!-- Add your CSS and JavaScript links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Additional styles for the tick mark circle */
        .task-done .fa-check-circle {
            color: green;
        }
    </style>
</head>
<body>
<?php include('../common/common-header.php') ?>
<?php include('../common/student-sidebar.php') ?>

<!-- HTML form to upload the file -->
<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
    <div class="sub-main">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <section class="mt-3">
                        <div class="btn btn-block table-one text-light d-flex">
                            <span class="font-weight-bold"><i class="fa fa-upload mr-3" aria-hidden="true"></i>Upload File</span>
                        </div>
                        <div class="collapse show mt-2" id="uploadSection">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="abc_id">Upload ABC id</label>
                                    <input type="file" class="form-control-file" id="abc_id" name="abc_id">
                                </div>
                                <button type="submit" class="btn btn-primary" name="uploadFile">Upload</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Display uploaded document -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <section class="mt-3">
                        <div class="btn btn-block table-one text-light d-flex">
                            <span class="font-weight-bold"><i class="fa fa-file-text-o mr-3" aria-hidden="true"></i>Uploaded Document</span>
                        </div>
                        <div class="collapse show mt-2" id="documentSection">
                            <?php if (!empty($file_path)) : ?>
                                <!-- Display uploaded document using an iframe -->
                                <iframe src="<?php echo $file_path; ?>" width="100%" height="500px" frameborder="0"></iframe>
                            <?php else : ?>
                                <p>No document uploaded yet.</p>
                            <?php endif; ?>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Rest of your dashboard content goes here -->
        </div>
    </div>
</main>

<!-- Add your JavaScript libraries here -->
<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
