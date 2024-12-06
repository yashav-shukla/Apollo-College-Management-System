<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="shortcut icon" href="./Images/logo-1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include('common/header.php'); ?>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Online Admission Form</h2>
        <form action="form_action.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Full Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Father Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="fname" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Mother Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="mname" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Address:</label>
                        </div>
                        <div class="col-sm-8">
                            <textarea name="address" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Mobile No:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="mobile" maxlength="10" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">DOB:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Category:</label>
                        </div>
                        <div class="col-sm-8">
                            <select name="category" class="form-control" required>
                                <option value="">Select your category</option>
                                <option value="SC">ST</option>
                                <option value="ST">SC</option>
                                <option value="OBC">OBC</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Gender:</label>
                        </div>
                        <div class="col-sm-8">
                            <select name="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label class="label">Course:</label>
                        </div>
                        <div class="col-sm-8">
                            <select name="course" class="form-control" required>
                                <option value="">Select Course</option>
                                <option value="B-Tech">B-Tech</option>
            <option value="MBA">MBA</option>
            <option value="BBA">BBA</option>
            <option value="BCA">BCA</option>
            <option value="B.COM(HONS.)">B.COM(HONS.)</option>
            <option value="Polytechnic">Polytechnic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group" style="float: right;">
                                <label class="label">Photo:</label>
                                <div style="border: 1px solid black; height: 150px; width: 150px; background: #F5FAFF;">
                                    <img id="output" width="150" height="150" style="display:none">
                                </div>
                                <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*">
                                <script>
                                    var loadFile = function(event) {
                                        var reader = new FileReader();
                                        reader.onload = function(){
                                            var output = document.getElementById('output');
                                            output.src = reader.result;
                                        };
                                        $('#output').show();
                                        reader.readAsDataURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group" style="float: right;">
                                <label class="label">Signature:</label>
                                <div style="border: 1px solid black; height: 120px; width: 150px; background: #F5FAFF;">
                                    <img id="outputs" width="150" height="120" style="display:none">
                                </div>
                                <input type="file" name="simage" id="simage" onchange="loadFiles(event)" class="form-control" required accept="image/*">
                                <script>
                                    var loadFiles = function(event) {
                                        var reader = new FileReader();
                                        reader.onload = function(){
                                            var output = document.getElementById('outputs');
                                            output.src = reader.result;
                                        };
                                        $('#outputs').show();
                                        reader.readAsDataURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <input type="checkbox" name="declare" required>
                        <label class="label">Declaration: I declare that I have read and filled the above information. If the information given by me is incorrect, you have the right to cancel without informing me.</label>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success" name="form_submit">Submit</button>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>
</html>


