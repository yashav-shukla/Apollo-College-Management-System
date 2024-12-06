	<div class="row w-100">
		<button class="show-btn button-show ml-auto">
		<i class="fa fa-bars py-1" aria-hidden="true"></i>
		</button> 
	</div>
		<nav id="sidebarMenu" class="">
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
				<div class="sidebar-header">
					<div class="nav-item">
						<a class="nav-link text-white" href="../student/student-index.php">
							<span class="home"></span>
							<i class="fa fa-home mr-2" aria-hidden="true"></i> Dashboard 
						</a>
					</div>
				</div>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="../admin/display-student.php">
						<span data-feather="file"></span>
						<i class="fa fa-user mr-2" aria-hidden="true"></i> Personal Profile
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-personal-information.php">
						<span data-feather="file"></span>
						<i class="fa fa-info-circle mr-2" aria-hidden="true"></i> Personal Information
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-result.php">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-th-list mr-2" aria-hidden="true"></i> Student Results
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-transcript.php">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-th-list mr-2" aria-hidden="true"></i> Student Transcript
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-fee.php">
						<span data-feather="users"></span>
						<i class="fa fa-credit-card-alt mr-2" aria-hidden="true"></i> Student Fee
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-payment.php">
						<span data-feather="bar-chart-2"></span>
						<i class="fa fa-money mr-2" aria-hidden="true"></i> Payment Mode
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-password.php">
						<span data-feather="bar-chart-2"></span>
						<i class="fa fa-key mr-2" aria-hidden="true"></i> Change Password
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-to-do list.php">
						<span data-feather="bar-chart-2"></span>
						<i class="fa fa-pencil mr-2" aria-hidden="true"></i>   To-do list
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-calender.php">
						<span data-feather="bar-chart-2"></span>
						<i class="fa fa-calendar mr-2" aria-hidden="true"></i> Calender
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="https://erp.aktu.ac.in/Login.aspx">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-university mr-2" aria-hidden="true"></i> AKTU - ERP
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://aktu.ac.in/circulars.html">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-paper-plane mr-2" aria-hidden="true"></i> AKTU Circulars
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://oneview.aktu.ac.in/WebPages/aktu/OneView.aspx">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-pie-chart mr-2" aria-hidden="true"></i> AKTU Oneview
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="mailto:exam.helpline@aktu.ac.in">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-pied-piper-pp mr-2" aria-hidden="true"></i> AKTU Exam Issue
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="mailto:payment.helpline@aktu.ac.in">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-inr mr-2" aria-hidden="true"></i> AKTU Pay Issue
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="mailto:helpdesk@apolloit.ac.in">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-envelope mr-2" aria-hidden="true"></i> Student Help
						</a>
					</li>
				
				</ul>
			</div>
		</nav>
		
		<script>
			const toggleBtn = document.querySelector(".show-btn");
			const sidebar = document.querySelector(".sidebar");
			// undefined
			toggleBtn.addEventListener("click",function(){
				sidebar.classList.toggle("show-sidebar");
			});
		</script>