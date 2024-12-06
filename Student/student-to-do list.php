<?php
session_start();
if (!$_SESSION["LoginStudent"]) {
    header('location:../login/login.php');
}
if ($_SESSION['LoginStudent']) {
    $_SESSION['LoginAdmin'] = "";
}
require_once "../connection/connection.php";

// Function to mark task as done
if (isset($_GET['markDone'])) {
    $index = $_GET['markDone'];
    if (isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index]['done'] = true;
    }
}

// Function to add task
if (isset($_POST['addTask'])) {
    $task = $_POST['task'];
    if (!empty($task)) {
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }
        $_SESSION['tasks'][] = ['task' => $task, 'done' => false];
    }
}

// Function to delete task
if (isset($_GET['deleteTask'])) {
    $index = $_GET['deleteTask'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student - To-do list</title>
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

<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
    <div class="sub-main">
        
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <section class="mt-3">
                        <!-- ToDo List Section -->
                        <div class="btn btn-block table-one text-light d-flex">
                            <span class="font-weight-bold"><i class="fa fa-check-square-o mr-3"
                                                              aria-hidden="true"></i>ToDo List</span>
                            <a href="" class="ml-auto" data-toggle="collapse" data-target="#collapseToDo"><i
                                        class="fa fa-plus text-light" aria-hidden="true"></i></a>
                        </div>
                        <div class="collapse show mt-2" id="collapseToDo">
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="task" placeholder="Enter your task">
                                </div>
                                <button type="submit" class="btn btn-primary" name="addTask">Add Task</button>
                            </form>
                            <?php
                            // Display tasks
                            if (isset($_SESSION['tasks']) && !empty($_SESSION['tasks'])) {
                                echo "<h4>Tasks</h4>";
                                echo "<ul>";
                                foreach ($_SESSION['tasks'] as $index => $taskData) {
                                    $task = $taskData['task'];
                                    $done = $taskData['done'];
                                    $taskClass = $done ? 'task-done' : '';
                                    $tickClass = $done ? 'fa-check-circle' : 'fa-circle-o';
                                    echo "<li class='$taskClass'>$task 
                                              <a href='?deleteTask=$index'>Delete</a> 
                                              <a href='?markDone=$index'><i class='fa $tickClass'></i></a>
                                          </li>";
                                }
                                echo "</ul>";
                            } else {
                                echo "<p>No tasks added yet.</p>";
                            }
                            ?>
                        </div>
                        <!-- End of ToDo List Section -->
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


