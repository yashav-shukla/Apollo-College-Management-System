<?php
session_start();
if (!$_SESSION["LoginStudent"]) {
    header('location:../login/login.php');
}
if ($_SESSION['LoginStudent']) {
    $_SESSION['LoginAdmin'] = "";
}
require_once "../connection/connection.php";

// Your PHP code for calendar functionality can go here

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - Calendar</title>
    <!-- Add your CSS and JavaScript links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <?php include('../common/common-header.php') ?>
    <?php include('../common/student-sidebar.php') ?>

    <main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
        <div class="sub-main">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div>
                        <section class="mt-3">
                            <!-- Calendar Section -->
                            <div class="btn btn-block table-one text-light d-flex">
                                <span class="font-weight-bold"><i class="fa fa-calendar mr-3" aria-hidden="true"></i>Calendar </span>
                            </div>
                            <div class="collapse show mt-2" id="calendarSection">
                                <!-- Your calendar HTML and PHP code goes here -->
                                <?php
// Get current month, year, and number of days in the month
$month = date('m');
$year = date('Y');
$days_in_month = date('t');

// Get the first day of the month and the number of the first day of the week
$first_day = date('N', strtotime("$year-$month-01"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your CSS links here -->
    <style>
        table {
            border-collapse: collapse;
            
        }

        body {
            display: center;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
   
    <h3><?php echo date('F Y'); ?></h3>

    <table>
        <thead>
            <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Get current month, year, and number of days in the month
            $month = date('m');
            $year = date('Y');
            $days_in_month = date('t');

            // Get the first day of the month and the number of the first day of the week
            $first_day = date('N', strtotime("$year-$month-01"));
            
            // Loop through each day of the month
            $day_counter = 1;
            for ($week = 1; $week <= 6; $week++) {
                echo "<tr>";
                for ($day = 1; $day <= 7; $day++) {
                    if ($week == 1 && $day < $first_day) {
                        // Fill in blank cells before the first day of the month
                        echo "<td></td>";
                    } elseif ($day_counter > $days_in_month) {
                        // Fill in remaining blank cells after the last day of the month
                        echo "<td></td>";
                    } else {
                        // Display the day of the month
                        echo "<td>$day_counter</td>";
                        $day_counter++;
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

                                <!-- Example: -->
                                <div id="calendar">
                                    <!-- Calendar content will be generated here -->
                                </div>
                            </div>
                            <!-- End of Calendar Section -->
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
    <script>
        // Your JavaScript code for calendar functionality can go here
    </script>
</body>
</html>


