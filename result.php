

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<br><br><br><br>
		<div>
		<center>
		<img src="img.jpg" alt="Sree Dattha" width="400" height="145">
		<br><br>
		<h2>Welcome to Our Results Portal !</h2>
		<div class="tab">

		  <button class="tablinks" onclick="openCity(event, 'SDES')" id="defaultOpen" >SDES</button>
		  <button class="tablinks" onclick="openCity(event, 'SDGI')">SDGI</button>
		</div>
		<br>
		<div id="SDES" class="tabcontent">
		<br>
		  <form method="POST">
		  <div>
		  <select name="course">
			<option value="B.Tech" selected>B.Tech</option>
			<option value="M.Tech">M.Tech</option>
			<option value="Diploma">Diploma</option>
			<option value="B.Ed">B.Ed</option>
		  </select>
		  <select name="regulation">
			<option value="R09">R09</option>
			<option value="R13" selected>R13</option>
			<option value="R15">R15</option>
		  </select>
		  <br><br>
		  <div>
		  <input type="radio" name="exam" value="regular"> Regular  
		   <input type="radio" name="exam" value="supply"> Supply  
		  <br></br>
		  </div>
		  <div>
		  <select name="semester">
			<option value="Not selected" selected>Select Your Semester</option>
			<option value="1-1">1-1</option>
			<option value="1-2">1-2</option>
			<option value="2-1">2-1</option>
			<option value="2-2">2-2</option>
			<option value="3-1">3-1</option>
			<option value="3-2">3-2</option>
			<option value="4-1">4-1</option>
			<option value="4-2">4-2</option>
		  </select>
		  <br></br>
		  </div>
		  <div>
		  <input type="text" name="htnumber" placeholder="Hall Ticket Number">
		  <br></br>
		  </div>
		  <br>
		  <input type="submit" name="Submit" value="Get Result">
		</div>
		</form>
		<br><br>
		</div>

		<div id="SDGI" class="tabcontent">
		<br>
		  <form method="POST">
		  <div>
		  <select name="course_sdgi">
			<option value="B.Tech" selected>B.Tech</option>
			<option value="M.Tech">M.Tech</option>
			<option value="Diploma">Diploma</option>
			<option value="B.Ed">B.Ed</option>
		  </select>
		  <select name="regulation_sdgi">
			<option value="R09">R09</option>
			<option value="R13" selected>R13</option>
			<option value="R09">R15</option>
		  </select>
		  <br><br>
		  <div>
		  <input type="radio" name="exam_sdgi" value="other"> Regular  
		   <input type="radio" name="exam_sdgi" value="other"> Supply  
		  <br></br>
		  </div>
		  <div>
		  <select name="semester_sdgi">
			<option value="Not selected" selected>Semester</option>
			<option value="1-1">1-1</option>
			<option value="1-2">1-2</option>
			<option value="2-1">2-1</option>
			<option value="2-2">2-2</option>
			<option value="3-1">3-1</option>
			<option value="3-2">3-2</option>
			<option value="4-1">4-1</option>
			<option value="4-2">4-2</option>
		  </select>
		  <br></br>
		  </div>
		  <div>
		  <input type="text" name="htnumber_sdgi" placeholder="Hall Ticket Number">
		  <br></br>
		  </div>
		  <br>
		  <input type="submit" value="Get Result" name="Submit_sdgi">
		</div>
		</div>
		</form>
		<br><br>
		</div>

		
		<!-- FOR SDES RESULT -->
		<?php
		if(isset($_POST['Submit'])) {
			
			include('Core/init.php');

			$course = $_POST['course'];
			$regulation = $_POST['regulation'];
			$exam = $_POST['exam'];
			$semester = $_POST['semester'];
			$htnumber = $_POST['htnumber'];

			$results = mysqli_query($conn, "SELECT * FROM `sdes` WHERE (course='$course' AND regulation='$regulation' AND exam='$exam' AND semester='$semester' AND hall_ticket_number='$htnumber')");

			$results_array=mysqli_fetch_assoc($results);
			
		if(mysqli_num_rows($results) <= 0)
		{
		   echo "No Data Found";
		}
		else
		{?>
		 
		
		<TABLE border="1">
			<TR>
				<TD>HT NO. </TD>
				<TD><?php echo $htnumber; ?></TD>
				<TD>NAME </TD>
				<TD><?php echo $results_array['name']; ?></TD>
			</TR>
			<TR>
				<TD>FATHER NAME </TD>
				<TD><?php echo $results_array['father_name']; ?></TD>
				<TD>COLLEGE CODE </TD>
				<TD><?php echo $results_array['college_code']; ?></TD>
			</TR>
		</TABLE>
		
		<TABLE border="1">
			<TR>
				<TH>SUBJECT CODE </TH>
				<TH>SUBJECT NAME</TH>
				<TH>INTERNAL MARKS</TH>
				<TH>EXTERNAL MARKS</TH>
				<TH>TOTAL</TH>
				<TH>RESULT</TH>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_1']; ?></TD>
				<TD><?php echo $results_array['sub_name_1']; ?></TD>
				<TD><?php echo $results_array['int_marks_1']; ?></TD>
				<TD><?php echo $results_array['ext_marks_1']; ?></TD>
				<TD><?php echo $results_array['int_marks_1']+$results_array['ext_marks_1']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_2']; ?></TD>
				<TD><?php echo $results_array['sub_name_2']; ?></TD>
				<TD><?php echo $results_array['int_marks_2']; ?></TD>
				<TD><?php echo $results_array['ext_marks_2']; ?></TD>
				<TD><?php echo $results_array['int_marks_2']+$results_array['ext_marks_2']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_3']; ?></TD>
				<TD><?php echo $results_array['sub_name_3']; ?></TD>
				<TD><?php echo $results_array['int_marks_3']; ?></TD>
				<TD><?php echo $results_array['ext_marks_3']; ?></TD>
				<TD><?php echo $results_array['int_marks_3']+$results_array['ext_marks_3']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_4']; ?></TD>
				<TD><?php echo $results_array['sub_name_4']; ?></TD>
				<TD><?php echo $results_array['int_marks_4']; ?></TD>
				<TD><?php echo $results_array['ext_marks_4']; ?></TD>
				<TD><?php echo $results_array['int_marks_4']+$results_array['ext_marks_4']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_5']; ?></TD>
				<TD><?php echo $results_array['sub_name_5']; ?></TD>
				<TD><?php echo $results_array['int_marks_5']; ?></TD>
				<TD><?php echo $results_array['ext_marks_5']; ?></TD>
				<TD><?php echo $results_array['int_marks_5']+$results_array['ext_marks_5']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_6']; ?></TD>
				<TD><?php echo $results_array['sub_name_6']; ?></TD>
				<TD><?php echo $results_array['int_marks_6']; ?></TD>
				<TD><?php echo $results_array['ext_marks_6']; ?></TD>
				<TD><?php echo $results_array['int_marks_6']+$results_array['ext_marks_6']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_7']; ?></TD>
				<TD><?php echo $results_array['sub_name_7']; ?></TD>
				<TD><?php echo $results_array['int_marks_7']; ?></TD>
				<TD><?php echo $results_array['ext_marks_7']; ?></TD>
				<TD><?php echo $results_array['int_marks_7']+$results_array['ext_marks_7']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_8']; ?></TD>
				<TD><?php echo $results_array['sub_name_8']; ?></TD>
				<TD><?php echo $results_array['int_marks_8']; ?></TD>
				<TD><?php echo $results_array['ext_marks_8']; ?></TD>
				<TD><?php echo $results_array['int_marks_8']+$results_array['ext_marks_8']; ?></TD>
				<TD></TD>
			</TR>
		</TABLE>
		
		<?php } }?>
		
		
		<!-- For SDGI RESULT -->
		
		<?php
		if(isset($_POST['Submit_sdgi'])) {
			
			include('Core/init.php');

			$course = $_POST['course_sdgi'];
			$regulation = $_POST['regulation_sdgi'];
			$exam = $_POST['exam_sdgi'];
			$semester = $_POST['semester_sdgi'];
			$htnumber = $_POST['htnumber_sdgi'];

			$results = mysqli_query($conn, "SELECT * FROM `sdgi` WHERE (course='$course_sdgi' AND regulation='$regulation_sdgi' AND exam='$exam_sdgi' AND semester='$semester_sdgi' AND hall_ticket_number='$htnumber_sdgi')");

			$results_array=mysqli_fetch_assoc($results);
			
		if(mysqli_num_rows($results) <= 0)
		{
		   echo "No Data Found";
		}
		else
		{?>
		 
		
		<TABLE border="1">
			<TR>
				<TD>HT NO. </TD>
				<TD><?php echo $htnumber; ?></TD>
				<TD>NAME </TD>
				<TD><?php echo $results_array['name']; ?></TD>
			</TR>
			<TR>
				<TD>FATHER NAME </TD>
				<TD><?php echo $results_array['father_name']; ?></TD>
				<TD>COLLEGE CODE </TD>
				<TD><?php echo $results_array['college_code']; ?></TD>
			</TR>
		</TABLE>
		
		<TABLE border="1">
			<TR>
				<TH>SUBJECT CODE </TH>
				<TH>SUBJECT NAME</TH>
				<TH>INTERNAL MARKS</TH>
				<TH>EXTERNAL MARKS</TH>
				<TH>TOTAL</TH>
				<TH>RESULT</TH>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_1']; ?></TD>
				<TD><?php echo $results_array['sub_name_1']; ?></TD>
				<TD><?php echo $results_array['int_marks_1']; ?></TD>
				<TD><?php echo $results_array['ext_marks_1']; ?></TD>
				<TD><?php echo $results_array['int_marks_1']+$results_array['ext_marks_1']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_2']; ?></TD>
				<TD><?php echo $results_array['sub_name_2']; ?></TD>
				<TD><?php echo $results_array['int_marks_2']; ?></TD>
				<TD><?php echo $results_array['ext_marks_2']; ?></TD>
				<TD><?php echo $results_array['int_marks_2']+$results_array['ext_marks_2']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_3']; ?></TD>
				<TD><?php echo $results_array['sub_name_3']; ?></TD>
				<TD><?php echo $results_array['int_marks_3']; ?></TD>
				<TD><?php echo $results_array['ext_marks_3']; ?></TD>
				<TD><?php echo $results_array['int_marks_3']+$results_array['ext_marks_3']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_4']; ?></TD>
				<TD><?php echo $results_array['sub_name_4']; ?></TD>
				<TD><?php echo $results_array['int_marks_4']; ?></TD>
				<TD><?php echo $results_array['ext_marks_4']; ?></TD>
				<TD><?php echo $results_array['int_marks_4']+$results_array['ext_marks_4']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_5']; ?></TD>
				<TD><?php echo $results_array['sub_name_5']; ?></TD>
				<TD><?php echo $results_array['int_marks_5']; ?></TD>
				<TD><?php echo $results_array['ext_marks_5']; ?></TD>
				<TD><?php echo $results_array['int_marks_5']+$results_array['ext_marks_5']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_6']; ?></TD>
				<TD><?php echo $results_array['sub_name_6']; ?></TD>
				<TD><?php echo $results_array['int_marks_6']; ?></TD>
				<TD><?php echo $results_array['ext_marks_6']; ?></TD>
				<TD><?php echo $results_array['int_marks_6']+$results_array['ext_marks_6']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_7']; ?></TD>
				<TD><?php echo $results_array['sub_name_7']; ?></TD>
				<TD><?php echo $results_array['int_marks_7']; ?></TD>
				<TD><?php echo $results_array['ext_marks_7']; ?></TD>
				<TD><?php echo $results_array['int_marks_7']+$results_array['ext_marks_7']; ?></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD><?php echo $results_array['sub_code_8']; ?></TD>
				<TD><?php echo $results_array['sub_name_8']; ?></TD>
				<TD><?php echo $results_array['int_marks_8']; ?></TD>
				<TD><?php echo $results_array['ext_marks_8']; ?></TD>
				<TD><?php echo $results_array['int_marks_8']+$results_array['ext_marks_8']; ?></TD>
				<TD></TD>
			</TR>
		</TABLE>
		
		<?php } }?>
		
		
		
		
		<style>
		/* Style the tab */
		div.tab {
			overflow: hidden;
			border: none;
			background-color: none;
		}

		/* Style the buttons inside the tab */
		div.tab button {
			background-color: inherit;
			float: center;
			border: 1px solid #ffdfaa ;
			border-radius: 10px;
			outline: none;
			cursor: pointer;
			padding: 10px 15px;
			transition: 0.3s;
		}

		/* Change background color of buttons on hover */
		div.tab button:hover {
			background-color: #ffdfaa;
		}

		/* Create an active/current tablink class */
		div.tab button.active {
			background-color: #f9ba54;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: none;
			border: 1px solid #ffdfaa;
			width: 25%;
		}
		</style>
		<script>
		function openCity(evt, cityName) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		</script>

	</body>
</html>