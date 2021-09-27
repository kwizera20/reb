<?php

    include "backend/connect.php";
    
    if(isset($_POST["register"])){
        $email=$_POST["email"];
		$checkmail="SELECT * from users where email='$email';";
		$sql1=mysqli_query($db,$checkmail);
		if(mysqli_num_rows($sql1)>0){
		echo "<script>alert('Email already exists')</script>";
		}else{
			$pwd=$_POST["pwd"];
        $cpwd=$_POST["cpwd"];

		
        if($pwd !== $cpwd){
            echo "<script>alert('Passwords don't match')</script>";        
        }else{
            $title=$_POST["title"];
        $firstname=$_POST["first_name"];
        $lastname=$_POST["last_name"];
        $department=$_POST["department"];
        $unit=$_POST["unit"];
        $gender=$_POST["gender"];
		$role="other";
        $function=$_POST["role"];
        $phone=$_POST["phone"];
		$hashed=password_hash($pwd,PASSWORD_DEFAULT);
        $image=$_FILES['picture']['name'];
        $imgTmpName=$_FILES['picture']['tmp_name']; 
        $extension=explode('.', $image);
        $actualExt=strtolower(end($extension));
        $imgNewName=uniqid('',true).'.'.$actualExt;
        $target_dir="images/team/".$imgNewName;
        $move=move_uploaded_file($imgTmpName, $target_dir);
        if($move){
            $insert="INSERT INTO users(title,firstname,lastname,gender,phone,email,role,function,department,unit,pwd,picture)values( '$title','$firstname','$lastname','$gender','$phone','$email','$role'.'$function','$department','$unit','$hashed','$imgNewName');";
    		$sql=mysqli_query($db,$insert);
    if($sql){
      echo "<script>alert('Registration Successful.')</script>";
      
    }else{
      echo "<script>alert('Register failed,please try again!')</script>";
    }

        }else{
            echo "<script>alert('Cannot upload this image. Please try again')</script>";
          }
        }
		}
        
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registration Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<style>
		.header{
			opacity:0.4;
		}
		.header ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;		
		background-color: #333;
		
		
		}

		li {
		float: left;
		}

		li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		}

		li a:hover {
		background-color: #111;
		}
</style>
</head>
<body class="form-v10">
	<div class="header" style="">
		<ul>
			<li><a class="active" href="../login.php">Home</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	</div>
		

	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="POST" id="myform" enctype="multipart/form-data">
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						<select name="title">
						    <option class="option" value="title">Title</option>
                            <option class="option" value="Prof.">Professor</option>
						    <option class="option" value="Dr.">Doctor</option>
						    <option class="option" value="Mr.">Mister</option>
						    <option class="option" value="Mrs">Misses</option>
                            <option class="option" value="Ms">Miss</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>                    
					<div class="form-row">                    
						<select name="department" id="select" onchange="unitDispaly()" required>                        
						    <option value="">department</option>
                            <?php

                            $select="SELECT * FROM department;";
                            $query=mysqli_query($db,$select);
                            while($row=mysqli_fetch_assoc($query)){

                            ?>
						    <option value="<?php echo $row["dptname"]; ?>"><?php echo $row["dptname"]; ?></option>
                            <?php                       
                                    
                                }
                            ?>
						</select>
                        
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
                    <div class="form-row">
						<select name="unit" id="unit" onchange="roleDisplay()" required>
						    <option value="" >Unit</option>
							<script>
							const unitDispaly=()=>{
								
								const department=document.getElementById('select').value;
								if(department==""){
									document.getElementById('unit').innerHTML="<option value='' >Unit</option>";
								}
								else if(department=="ICT")
								{
									document.getElementById('unit').innerHTML="<option value='' >Unit</option> <option value='digital_content'>Digital Content</option> <option value='engineering_tech'>Engineering Tech</option>";
								}else if(department=="TDM"){
									document.getElementById('unit').innerHTML="<option value=''>Unit</option> <option value='teacher_taining'>Teacher Taining</option> <option value='teacher_management'>Teacher Mgnt and Staffing</option>";
								}else{
									document.getElementById('unit').innerHTML="<option value=''>Unit</option> <option value='Maths And Science subjects unit'>Maths And Science subjects unit</option> <option value='Language Subjects Unit'>Language Subjects Unit</option>";
								}
							}              
						 </script>

              
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>


					</div>
					<div class="form-row">
						<select name="role" class="role" id="role" required>
						    <option value="" >Function</option>
							<script>
							const roleDisplay=()=>{
								
								const unit=document.getElementById('unit').value;
								if(unit==""){
									document.getElementById('role').innerHTML="<option value='' >Function</option>";
								}
								else if(unit=="digital_content")
								{
									document.getElementById('role').innerHTML="<option value='' >Unit</option> <option value='Connectivity Engineer'>Connectivity Engineer</option> <option value='Animation Programmer Engineer'>Animation Programmer Engineer</option>";
								}else if(unit=="teacher_taining"){
									document.getElementById('role').innerHTML="<option value=''>Unit</option> <option value='Biology TT Officer'>Biology TT Officer</option> <option value='>English And French TT officer'>English And French TT officer</option>";
								}else if(unit=="engineering_tech"){
									document.getElementById('role').innerHTML="<option value=''>Unit</option> <option value='Virtual Lab Specialist'>Virtual Lab Specialist</option> <option value='Special Needs Tech Officer'>Special Needs Tech Officer</option>";
								}else if(unit=="teacher_management"){
									document.getElementById('role').innerHTML="<option value=''>Unit</option> <option value='Teacher Licencing Officer'>Teacher Licencing Officer</option> <option value='Teacher Conduct Officer'>Teacher Conduct Officer</option>";
									}
									else{
									document.getElementById('role').innerHTML="<option value=''>Unit</option> <option value='Maths carricula officer'>Maths carricula officer</option> <option value='Phyisics Carricullar oficer'>Phyisics Carricullar oficer</option>";
								}
							}              
						 </script>


              
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>


					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<select name="gender" required>
                            <option value="#">gender</option>
							    <option value="Male">Male</option>
							    <option value="female">Female</option>							    
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
                    <div class="form-row">
						<input type="text" name="email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email" required>
					</div>
					<div class="form-group">                    
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code muted" id="code" placeholder="Code +250" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-row">
						<input type="password" name="pwd" id="your_email" class="input-text" placeholder="Your password(5 characters minimum)" minlength="5" required>
					</div>
                    <div class="form-row">
                        <input type="password" name="cpwd" id="your_email" class="input-text" placeholder="Confirm password" required>
					</div>
                    <div class="form-row">
                        <label for="image">Upload image</label>
                        <input type="file" name="picture" id="your_email" class="input-text" placeholder="Upload image">
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>