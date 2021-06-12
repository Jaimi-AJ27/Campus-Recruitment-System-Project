<?php
  session_start();
  
  require_once("connect.php");
  $loginid =  mysqli_real_escape_string($conn, $_POST['loginid']);
  	
	$sqli="SELECT user_id FROM user_reg  WHERE login_id='$loginid'";
                $result = $conn->query($sqli);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
				  
				  
				  $uid= $row['user_id'];
				  
				  }}
              
			   $query="SELECT username FROM tbl_login  WHERE login_id='$loginid'";
                $result = $conn->query($query);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
				  
				  
				  $email= $row['username'];
				  
				  }}
               ?>

        


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resume_<?php echo $_POST['TemplateList'];?>_stylesheet.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				print();
			});
		</script>
	</head>
	<body>
		<div id="main">
		  <?php 
	$sql="SELECT * FROM user_reg  WHERE login_id='$loginid'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>

		<h1 id="name"><?php echo $row['fname']." ".$row['lname'];?></</h1>
		</div>
			
		
			
		<div class="table">
		<h2 id="heading">Personal  Details</h2>
			
				<p>Date of Birth : <?php echo $row['dob']." | Gender : " .$row['gender'] ." | Mobile : ".$row['mobile']."  |  Email : ".$email; }}?> | Address: 
				
				 <?php 
	$add="SELECT * FROM tbl_address where user_id='$uid'";
                $result = $conn->query($add);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                   echo $row['address']."  |  City : ".$row['city']; }}?>
				
				 </p>
				
		</div>
		
		</div>
		
		<div class="table" >
		<h2 id="heading">Education</h2>	
				<table>
					<tr>
						<th >Percentage</th>
						<th>Institute</th>
						<th>Course</th>
						<th>Year</th>
					</tr>
					<tr>
					
					
					<?php
					$sq="SELECT * FROM tbl_education  WHERE user_id='$uid'";
                $result = $conn->query($sq);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>
						<td class="year"><?php echo $row['passout'];?></td>
						<td class="institute"><?php echo $row['college'];?></td>
						<td class="course"><?php echo $row['course'];?></td>
						<td class="percent"><?php echo $row['percent']; 
												if(!empty($row['sem']))
												{echo "( till ".$row['sem']." semester )";}
											?></td>
					</tr>
					
					<tr>
						<td class="year"><?php echo $row['pass'];?></td>
						<td class="institute"><?php echo $row['school'];?></td>
						<td class="course">12th</td>
						<td class="percent"><?php echo $row['plustwo'];?></td>
					</tr>
					<tr>
						<td class="year"><?php echo $row['passs'];?></td>
						<td class="institute"><?php echo $row['schl'];?></td>
						<td class="course">10th</td>
						<td class="percent"><?php echo $row['tenth'];?></td>
					</tr>
					<?php
					}}
					?>
				</table>
		</div>		
		
		<div class="table">
		<h2 id="heading">Projects Undertaken</h2>
				<ul>
					<?php
					$sq="SELECT * FROM tbl_project  WHERE user_id='$uid'";
                $result = $conn->query($sq);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>
			   <p>Project Name : <?php echo $row['project'];?></p>
			  
			   <?php
			   }}
			   
			   
			   ?>
				</ul>
		</div>	
		<div class="table">
		<h2 id="heading">Achievements</h2>
				<ul>
					<?php
					$sq="SELECT * FROM tbl_achieve  WHERE user_id='$uid'";
                $result = $conn->query($sq);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>
			   <p> <?php echo $row['ac1'];?></p>
			   <p> <?php echo $row['ac2'];?></p>
			   <p> <?php echo $row['ac3'];?></p>
			   <?php
			   }}
			   
			   
			   ?>
				</ul>
		</div>	
		<div class="table">
		<h2 id="heading">Skills</h2>
				<ul>
					
				<?php
					$sq="SELECT * FROM tbl_skills  WHERE user_id='$uid'";
                $result = $conn->query($sq);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>
			   <p> <?php echo $row['skill1'];?></p>
			   <p> <?php echo $row['skill2'];?></p>
			   <p> <?php echo $row['skill3'];?></p>
			   <?php
			   }}
			   
			   
			   ?>
				
				</ul>
		</div>
		
			
	</body>
</html>	