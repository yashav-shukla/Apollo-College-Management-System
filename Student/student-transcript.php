<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginStudent"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>


<!doctype html>
<html lang="en">
	<head>
		<title>Student - Transcript</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?> 
        <title>Student - Transcript</title>

    <div class="container mt-4">
        <div class="text-danger text-center m-auto">
            <img src="../Images/logo-1.png" alt="" width="100" height="100">
            <h4 class="text-dark mt-3"> APOLLO INSTITUTE OF TECHNOLOGY- AIT</h4>
            <h4 class="text-dark">  Affiliated to AKTU, BTE, Lucknow, CSJM Kanpur and approved by AICTE, New Delhi  </h4>
            <h4 class="text-dark"> ( College Code : AKTU: 353 | BTE : 3334 | CSJMU: KN-199 )</h4>
        </div>
    </div>
    <div class="container-fluid mb-4 text-dark">
        <div class="program-info">
            <?php  
                $roll_no = $_SESSION['LoginStudent'];
                $query = "select * from student_info inner join sessions on sessions.session=student_info.session where roll_no = '$roll_no'";
                $run = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($run)){ ?>
                    <h5>Student Transcript - <?php echo $row['course_code']; ?> Program</h5>
        </div>
        <div class="d-flex mt-3">
            <div>
                <h5>Student Name : <?php echo $row['first_name']. " ". $row['middle_name']. " ". $row['last_name']; ?></h5>
                <h5>S/O : <?php echo $row['father_name']; ?></h5>
            </div>
            <div class="ml-auto">
                <h5>Student I.D  : <?php echo $row['roll_no']; ?></h5>
                <h5>Year of Admission : <?php echo intval($row['admission_date']) . " ". $row['admission_date']; ?></h5>
            </div>
        </div>
        <?php }
        ?>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4 class="">Student Oneview</h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<section class="mt-3">
							<table class="w-100 table-elements mb-5 table-three-tr" cellpadding="10" >
								<tr class="text-center text-white table-three table-tr-head">
									<th>Term</th>
									<th>Course</th>
									<th>Subject</th>
									<th>Cr.Hr</th>
									<th>Total Marks</th>
									<th>Obtain Marks</th>
									<th>Grade</th>
									<th>CGPA</th>
								</tr>
								<?php 
								$cgpa=0;
								$gpa=0;
								$total_marks=0;
								$obtain_marks=0;
								$count=0;
									$roll_no=$_SESSION['LoginStudent'];
									$query="select * from class_result cr inner join course_subjects cs on cr.subject_code=cs.subject_code where cr.roll_no='$roll_no'";
									$run=mysqli_query($con,$query);
									while ($row=mysqli_fetch_array($run)) { ?>
										<tr class="text-center">
											<td><?php echo $row['course_code']."-".$row['semester'] ?></td>
											<td><?php echo $row['course_code'] ?></td>

                                            <td><?php echo $row['subject_code'] ?></td>
											<td><?php echo $row['credit_hours'] ?></td>
											<td><?php echo $row['total_marks'] ?></td>
											<td><?php echo $row['obtain_marks'] ?></td>
											<?php  
												if ($row['obtain_marks']>85) {
													$grade='A+';
													$credits=4.0;
												}
												else if ($row['obtain_marks']>80) {
													$grade='A';
													$credits=4.0;
												}
												else if ($row['obtain_marks']>75) {
													$grade='B+';
													$credits=3.7;
												}
												else if ($row['obtain_marks']>70) {
													$grade='B';
													$credits=3.3;
												}
												else if ($row['obtain_marks']>65) {
													$grade='C+';
													$credits=3.0;
												}
												else if ($row['obtain_marks']>60) {
													$grade='C';
													$credits=2.7;
												}
												else if ($row['obtain_marks']>55) {
													$grade='D+';
													$credits=2.5;

												}
												else if ($row['obtain_marks']>50) {
													$grade='D';
													$credits=2.0;
												}
												else {
													$grade='F';
													$credits=0.0;
												}
											?>
											<td><?php echo $grade ?></td>
											<td><?php echo $credits ?></td>
										</tr>
									<?php
										$count++; 
										$score=$credits*$row['credit_hours'];
										$gpa=$gpa+$score;
										$cgpa=$cgpa+$row['credit_hours'];
										$obtain_marks=$obtain_marks+$row['obtain_marks'];
										$total_marks=$total_marks+$row['total_marks'];
									}
								?>
								<tr class=" text-white bg-success text-center">
									<td><?php echo"1." ?></td>
									<td><?php echo"FINAL RESULT " ?></td>
									<td><?php echo $count; ?></td>
									<td><?php echo $cgpa ?></td>
									<td><?php echo $total_marks; ?></td>
									<td><?php echo $obtain_marks; ?></td>
									<?php  
										$marks_grade= $total_marks == true ? ($obtain_marks*100)/$total_marks : "";
										$marks_grade=round($marks_grade);
										if ($marks_grade>85) {
											$final='A+';
										}
										else if ($marks_grade>80) {
											$final='A';										
										}
										else if ($marks_grade>75) {
											$final='B+';
										}
										else if ($marks_grade>70) {
											$final='B';
										}
										else if ($marks_grade>65) {
											$final='C+';
										}
										else if ($marks_grade>60) {
											$final='C';
										}
										else if ($marks_grade>55) {
											$final='D+';
										}
										else if ($marks_grade>50) {
											$final='D';
										}
										else {
											$marks_grade == true ? $final='F' : $final = "0";
										}
									?>
									<td><?php echo $final ?></td>
									<td><?php echo $gpa > 0 ? round($total_cgpa=$gpa/$cgpa,2) : "0" ?></td>

								</tr>
							</table>	
						</section>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>


                               
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    <div class="row text-center font-weight-bold mb-5">
        <div class="col-xl-4 text-right">CONTROLLER OF EXAMINATIONS</div>
    </div>
</div>


    <section class="mt-3">
                        <table class="w-100 table-elements mb-5 table-three-tr" cellpadding="10">
                            <!-- Your table content goes here -->
                        </table>
                        <div class="text-center">
                            <button onclick="window.print()" class="btn btn-primary" style="background-color: #2c3e50;">Print</button>
                        </div>
                    </section>
</body>
</html>




