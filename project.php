<!DOCTYPE html>
<html>
<head>
    <title>Project Submission</title>
    <link rel="shortcut icon" href="./Images/logo-1.png" type="image/x-icon">
    <style>
        .row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .course-col {
            width: calc(20% - 20px); /* Adjust the width as needed */
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1); /* Realistic shadow effect */
            background-color: rgba(255, 255, 255, 0.7); /* Transparent background color */
            text-align: center; 
        }

        .course-col h2 {
            font-size: 20px;
            color: #930603 ;
        }

        .course-col p {
            font-size: 14px;
            color: #000000;
        }

        
    </style>
</head>
<body>
    <?php include('common/header.php') ?>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="academic-area-headings">
            </div>
            <section class="bg-light text-center">
                <div class="w-100 pt-5 m-auto" style="
                    width:100%;
                    padding-right:15px;
                    padding-left:15px;
                    margin-right:auto;
                    margin-left:auto;
                ">
                    <div class="col-sm-12">
                        <h2 style="color: #760704;">
                        OUR TEAM MEMBER'S
                        </h2>
                        <span class="dash"></span>
                    </div>
                    <p style="font-size: 15px; color: #000000; line-height: 1.6; text-align: center; font-family: 'Open Sans', sans-serif; font-weight: 400; font-style: normal;">
                    Apollo CMS simplifies educational admin, empowering quality education with efficient features for records, scheduling, and faculty management.</p>
                </div>
            </section>

            <div class="row">
                <div class="course-col">
                    <img src="images/praveen.jpg" class="card-img img-fluid">
                    <h2><strong>Praveen kumar</strong></h2>
                    <p>Roll no.  2003530100014</p>
                    <p>B.Tech(CSE), IV year</p>
                </div>

                <div class="course-col">
                    <img src="images/sristi2.jpg" class="card-img img-fluid">
                    <h2><strong>Km. Srasti Srivastava</strong></h2>
                    <p>Roll no.   2103530109008</p>
                    <p>B.Tech(CSE), IV year</p>
                </div>
                <div class="course-col">
                    <img src="images/yashav.jpg" class="card-img img-fluid">
                    <h2><strong>Yashav Shukla</strong></h2>
                    <p>Roll no.- 2003530100020 </p>
                    <p>B.Tech(CSE), IV year</p>    
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include('common/footer.php') ?>
    </div>

</body>
</html>
