<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/aboutt.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="super_container">
		
		<div class="home">
			<div class="parallax_background parallax-window" style="opacity:0.5;" data-parallax="scroll"  data-image-src="images/box_1.jpg"></div>
			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container"/>
					</div>
				</div>			
				<section class="navigation">
					<div class="nav-container">
						<div class="brand">
							<a href="index.php">HMS</a>
						</div>
						<nav>
						<div class="nav-mobile">
								<a id="nav-toggle" href="#"><span></span></a>
							</div>
							
							<ul class="nav-list">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#">User Login</a>
										<ul class="nav-dropdown">
										<li><a href="login/doctor/index.php">Doctor's Login</a></li>
										<li><a href="login/patient/index.php">Patient's Login</a></li>
										<li><a href="login/admin/index.php">Admin Login</a></li>
									</ul>
								</li>
								<li><a href="#">Sign-Up</a>
									<ul class="nav-dropdown">
										<li><a href="Signup/doctorsignup/signupdoctor.php">As a Doctor</a></li>
										<li><a href="Signup/patientsignup/signuppateint.php">As a Patient</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</section>
			</header>
		</div>
	</div>	

	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">About us</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about">
		<div class="row">
			<div class="col text-center">
				<div class="section_title">A few words about us</div>
				<div class="section_subtitle">too choose from</div>
			</div>
		</div>	
		<div class="row about_row row-eq-height">
			<div class="col-lg-4">
				<p>Our <b>mission</b> is to care for our patients and their families when it matters most.</p>
				<p>Our <b>vision</b> is to invent the future of health care.</p>
				<p>Our <b>values</b> are: excellence, collaboration, accountability, respect and engagement.</p>
				<p>Xyz's groundbreaking research changes the way patients are treated around the world.</p>
			</div>
			<div class="col-lg-4">
				<p>Covering all aspects of the hospital environment, {Our website name} provides both clinical and senior administrative 
				staff with instant access to a comprehensive reference source introducing technologies, services and procedures our audience 
				can employ to improve the management of their facilities. We have treated around 50 thousand people over the 
				lifespan of our Hospital and we wish for the safety of all people and the families  </p>
			</div>
			<div class="col-lg-4">
				<div class="about_image"><img src="images/about_1.jpg" alt=""></div>
			</div>
		</div>
	</div>


	<div class="milestones">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_7.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="365">0</div>
							<div class="milestone_text">Days a year</div>
						</div>
					</div>

				</div>

				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_6.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="15" data-sign-after="k">0</div>
							<div class="milestone_text">Patients a year</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_8.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="100">0</div>
							<div class="milestone_text">Amazing Doctors</div>
						</div>
						
					</div>
				</div>

				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_9.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="10" data-sign-after="k">0</div>
							<div class="milestone_text">Lab Results</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="text-center">
		<div class="section_title"><hr><br>Our Best Doctors</div>
		<div class="section_subtitle">to choose from</div><br>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-md-6">
				<div class="doctor">
					<div class="doctor_image"><img src="images/doc_9.jpg" alt=""></div>
					<div class="doctor_content">
						<div class="section_title"><h4>Dr. Monaksh Shah</h4></a></div>
						<button class="myBtn_multi">More</button>
						<div class="modal modal_multi">
							<div class="modal-content">
								<span class="close close_multi"></span>
								<p><h4><b>Dr. Monaksh Shah </b></h4> <h6 style="color:Red">Cardiologist</h6>Dr. Shah is an Indian interventional 
								cardiologist, credited with the performance of over 50,000 angiograms and 20,000 angioplasties, which has been 
								included in the Limca Book of Records, a reference book for achievements and records from an Indian perspective. 
								He graduated in Medicine (MBBS) from the Jawaharlal Nehru Medical College, Aligarh Muslim University in 1978.
								Later, moving to UK for higher education, he served as a cardiologist at the Queen Elizabeth Hospital of Birmingham 
								University till 1988. During this period, he did advanced training to secure memberships of the Royal College of 
								Physicians of London (MRCP) in 1984 and the Royal College of Physicians of Ireland (MRCP) in 1986. He returned to 
								India in 1988 and joined the Escorts Heart Institute, New Delhi</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
	
			<div class="col-xl-4 col-md-6">
				<div class="doctor">
					<div class="doctor_image"><img src="images/doc_11.jpg" alt=""></div>
					<div class="doctor_content">
						<div class="section_title"><h4>Dr. Anjila Aneja</h4></a></div>
						<button class="myBtn_multi">More</button>
						<div class="modal modal_multi">
							<div class="modal-content">
								<span class="close close_multi"></span>
								<p><h4><b>Dr. Anjila Aneja </b></h4> <h6 style="color:Red">Gynaecologist</h6> Dr. Aneja is an MBBS Graduate from Maharishi Dayanand
								University, Rohtak and completed her MD (Obstetrics Gynaecology) from P.G.I.M.E.R. Chandigarh in 1992. She has also 
								done her DNB (Obstetrics Gynaecology) in 1992 and has completed her MRCOG from the Royal College of Obstetricians 
								Gynaecologists, London in 1998. She holds a Diploma in Pelvic Laparoscopy from Keil School of Endoscopic Surgery,
								Germany and Gisson School of Endoscopic Surgery, Germany in 2006. She was also awarded Fellowship of Royal College
								of Obstetricians Gynaecologists (FRCOG) London in 2010. With a rich experience of over 21 years to her credit,
								Dr. Aneja has been  associated with several prestigious organizations like Apollo Hospitals, New Delhi and Moolchand 
								Hospital. Her last assignment was with Max Super Specialty Hospital, Saket, New Delhi as Lead Consultant Head 
								Unit Obstetrics Gynaecology.</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		
			<div class="col-xl-4 col-md-6">
				<div class="doctor">
					<div class="doctor_image"><img src="images/doc_10.jpg" alt=""></div>
					<div class="doctor_content">
						<div class="section_title"><h4>Swaroop Gopal</h4></a></div>
						<button class="myBtn_multi">More</button>
						<div class="modal modal_multi">
							<div class="modal-content">
								<span class="close close_multi"></span>
								<p><h4><b>Swaroop Gopal </b></h4> <h6 style="color:Red">Gastrologist</h6>Dr. Gopal is a consultant gastroenterologist 
								practicing in South Mumbai. After completing his undergraduate medical training at Maharashtra University of Health 
								Sciences, he pursued his post-graduate training at the prestigious Jaslok Hospital and Research Centre, Mumbai. Dr. 
								Gopal completed his super specialty training in gastroenterology at P.D. Hinduja Hospital, Mumbai.Later he joined 
								Tata Memorial Hospital, Mumbai, in the department of digestive diseases and clinical nutrition where he trained in 
								advanced endoscopic procedures. Dr. Hardik Shah has done numerous diagnostic and therapeutic endoscopic procedures. 
								His field of interest is in managing patients with liver disease, inflammatory bowel disease, and pancreatitis. aims 
								to provide comprehensive care to patients for diseases in the liver, gallbladder and pancreas. He specialises in 
								Crohn’s disease, ulcerative colitis, hepatitis B-C and gallstones.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-xl-4 col-md-6">
				<div class="doctor">
					<div class="doctor_image"><img src="images/doc_6.jpg" alt=""></div>
					<div class="doctor_content">
						<div class="section_title"><h4>Nina Patel </h4></a></div>
						<button class="myBtn_multi">More</button>
						<div class="modal modal_multi">
							<div class="modal-content">
								<span class="close close_multi"></span>
								<p><h4><b>Nina Patel</b></h4> <h6 style="color:Red">Lab Assistant</h6> Mrs. Patel completed her B. M. L. T. 
								(Bachelor of Medical Laboratory Technology)from Haldia Institute of Health Sciences, West Bengal in 2013.
								Later on completed D. M. L. T. (Bachelor of Medical Laboratory Technology) from Delhi in 2015.					
								She also worked as an Intern at Midnapur Medical College and Hospital,West Bengal. Mrs. Patel is an experienced 
								and highly skilled Lab assistant with a track record of success in assisting patients. She has demonstrated expertise in promoting patient health 
								and wellbeing by assisting with dedicated rehabilitation processes.She has done her Expertise inCT Scan Technicians, 
								Renal Dialysis ,Optical Laboratory ,Sleep Laboratory and many more..She is a life member of IAP(Indian Association of Physiotherapy).She has been a teacher and guide for 
								'The Falaram University '. She has to her credits Aha Certified Acls Holder, Ergonomist.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-4 col-md-6">
				<div class="doctor">
					<div class="doctor_image"><img src="images/doc_12.jpg" alt=""></div>
					<div class="doctor_content">
						<div class="section_title"><h4>Dr. Amit Shrivastava</h4></a></div>
						<button class="myBtn_multi">More</button>
						<div class="modal modal_multi">
							<div class="modal-content">
								<span class="close close_multi"></span>
								<p><h4><b>Dr. Amit Shrivastava </b></h4> <h6 style="color:Red">Neurologist</h6>Dr. Shrivastava did his MBBS and MD in 
								Medicine from MGM Medical College ,Indore MP and subsequently went on to do his DM in Neurology from the prestigious 
								Christian Medical College ,Vellore ,Tamil Nadu in the year 2006. He has a lot of research work on white matter 
								disease (Multiple Sclerosis, ADEM etc) as a student. He won the first Prize for his paper on the clinical profile of
								ADEM at National conference of Neurology (IANCON) in 2009 held at kochi. He worked as an Assistant Professor of 
								Neurology for 2 years at CMC Vellore .Before joining DNSH, Dr.Shrivastava has worked in many reputed private 
								Hospitals in Delhi NCR. During his 17 years of Medical career ,he has delivered many lectures on various medical 
								forums or National repute. He was instrumental in establishing the Acute Stroke Management protocols in two of the 
								previous Hospitals.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-xl-4 col-md-6">
				<div class="doctor">
					<div class="doctor_image"><img src="images/doc_13.jpg" alt=""></div>
					<div class="doctor_content">
						<div class="section_title"><h4>Nareshi Trehan</h4></a></div>
						<button class="myBtn_multi">More</button>
						<div class="modal modal_multi">
							<div class="modal-content">
								<span class="close close_multi"></span>
								<p><h4><b>Nareshi Trehan </b></h4> <h6 style="color:Red">Surgeon</h6> Mrs. Trehan is an cardiovascular and 
								cardiothoracic surgeon. After graduating from King George Medical College, Lucknow, India, she went on to
								practice at New York University Medical Center Manhattan USA from 1971 to 1988. She returned to India and started 
								Escorts Heart Institute and Research Centre. She serves as the chairman and managing director and chief cardiac 
								surgeon of MedantaTM-The Medicity. She has served as personal surgeon to the President of India since 1991, has 
								received numerous awards, including the Padma Shri, Padma Bhushan, Lal Bahadur Shastri National Award and
								Dr. B. C. Roy Award.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<hr>
	<br>
	<div class="text-center section_title">Patients Reviews</div>
	<br>
	<div class=" row container">
		<div class="col-md-4 review">
			<img src="images/patient4.jpg" alt="">
			<h3>Mokshi Sharma</h3>
			5.0
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<p class="reviews">An excellent Doctor with so much of positive energy... 
			We are blessed to have such a wonderful Doc to deliver our baby boy "Ethan" by her caring hands. I recommend Dr. Aneja !</p>
		</div>
		<div class="col-md-4 review">
			<img src="images/patient1.png" alt="">
			<h3>Sharman Gupta</h3>
			5.0
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<p class="reviews">Dr. Amit and everyone associated with his practice are very knowledgable, friendly and helpful.
			I have received nothing but great care and respect from their team.</p>
		</div>
		<div class="col-md-4 review">
			<img src="images/patient2.png" alt="">
			<h3>Ganesh Chakraborty </h3>
			5.0
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<p class="reviews">Indeed, the most treasured of the Doctors I have been privileged to meet. Dr. Trehan treated me as if I was 
			a family member during all my meetings with him, before sessions, and after. The treatment was undoubtedly successful, 
			and the results were as described.</p>
		</div>
		<div class="col-md-4 review">
			<img src="images/patient6.jpg" alt="">
			<h3>Divya Joshi</h3>
			4.0
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<p class="reviews">I recommend Dr. Monaksh shah. He is very friendly. Listens with patience 
			and prescribes always with the right medications. I am very satisfied with the doctor issue Treatment. 
			He is like a family doctor . Thank you Dr. Monaksh !</p>
		</div>
		<div class="col-md-4 review">
			<img src="images/patient3.png" alt="">
			<h3>Mukesh Tripathi</h3>
			4.0
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<p class="reviews">Very polite and friendly doctor. Explain everything in detail and will answer all question in favourable
			language. 101% I recommend Dr Shrivastava for a genuine opinion.</p>
		</div>
		<div class="col-md-4 review">
			<img src="images/patient5.jpg" alt="">
			<h3>Raj Panchal</h3>
			4.0
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>
			<p class="reviews">Great Experience, I wish all the doctors and clinics work the way these guys do. Always responsive and 
			willing to help.</p>
		</div>
	</div>
	<hr>
	
	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="HMS">
								<a href="#">HMS</a>	
							</div>
							<div class="footer_about_text">HOSPITAL MANAGEMENT SYSTEM</div>
							<div class="copyright">
								Copyright &copy; 2020
								All rights reserved | This project is made by Akramul and Malav</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="quickaction.php" method="post" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name"name="name" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" name="email" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" name="textarea" required="required"></textarea>
									<button class="footer_contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>
				<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script>
		var modalparent = document.getElementsByClassName("modal_multi");
	    var modal_btn_multi = document.getElementsByClassName("myBtn_multi");
		var span_close_multi = document.getElementsByClassName("close_multi");
	    function setDataIndex() {
			for (i = 0; i < modal_btn_multi.length; i++){
				modal_btn_multi[i].setAttribute('data-index', i);
				modalparent[i].setAttribute('data-index', i);
				span_close_multi[i].setAttribute('data-index', i);
			}
		}
		
		for (i = 0; i < modal_btn_multi.length; i++){
			modal_btn_multi[i].onclick = function(){
				var ElementIndex = this.getAttribute('data-index');
				modalparent[ElementIndex].style.display = "block";
			};
			span_close_multi[i].onclick = function(){
				var ElementIndex = this.getAttribute('data-index');
				modalparent[ElementIndex].style.display = "none";
			};
		}
	
		window.onload = function(){
			setDataIndex();
		};
		
		window.onclick = function(event) {
			if (event.target === modalparent[event.target.getAttribute('data-index')]) {
				modalparent[event.target.getAttribute('data-index')].style.display = "none";
			}
		}
		
	</script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
</body>
</html>