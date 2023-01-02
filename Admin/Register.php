<?php
  require_once "../db.php";

  if(isset($_SESSION['user_id'])!="") {
    header("Location:admin/home.php");
  }

    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $name_error = "Name must contain only alphabets and space";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
        }       
        if(strlen($mobile) < 10) {
            $mobile_error = "Mobile number must be minimum of 10 characters";
        }
        if($password != $cpassword) {
            $cpassword_error = "Password and Confirm Password doesn't match";
        }
        if (!$error) {
            if(mysqli_query($conn, "INSERT INTO user(name, email, mobile ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
             header("location: Register.php");
             exit();
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<META charset="UTF-8">
 <link rel="icon" type="image/png" href="Img/5.png"/>
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>Harbu Micro Finance Institute</title>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/main.js"></script>
	<link href="../styles/bootstrap.min.css" rel="stylesheet">
  <link href="../styles/backend.css" rel="stylesheet">
  <link href="../styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../style/style.css">
<link rel="stylesheet" href="../style/login.css">
</head>
<body>

<div class="header1">
<div class="social">
<ul>

        <li><i class="fa fa-phone">+25111 618 5510</i></li>
		    <li><a href="Service.php"><i class="fa fa-envelope"></i>Harbumfi@gmail</a></li>
        
       </ul>
	   <button class="open-button" onclick="openForm()"><?php   echo $username;?></button>
	  <script>
	  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</div>
<div class="hlogo">
<img src="../img/logo.png" />
</div>
<center>
<div class="harbuhead">
<h1>ሀርቡ ማይክሮ ፋይናንስ ኢንስቲቲውት አ.ማ <br>
Harbu Microfinance Institute S.C</h1>
</div>
</center>
<div class ="menu">
<ul>
<li ><a  href="Home.php"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
<li><i class="fa fa-list" aria-hidden="true"></i></i>ABOUT US<i class="fa fa-angle-down" aria-hidden="true"></i></li>
<li><i class="fa fa-bed" aria-hidden="true"></i>PRODUCTS & SERVICES<i class="fa fa-angle-down" aria-hidden="true"></i></li>
<li><i class="fa fa-bullhorn" aria-hidden="true"></i>ANNOUNCEMENT<i class="fa fa-angle-down" aria-hidden="true"></i>
<div class="submainu3">
<ul>

<li><a href="Bid.php">Bid Announcement</a></li>

</ul>

</div
</li>
<li><i class="icon-search"></i>MEDIA<i class="fa fa-angle-down" aria-hidden="true"></i>
<div class="submainu4">
<ul>
<li><a href="News.php">Harbu News</a></li>
<li><a href="Report.php">Annual Report</a></li>
<li><a href="Gallary.php">Gallay</a></li>
<li><a href="Downloads.php">Downloads</a></li>
</ul>

</div
</li>

</ul>

</div>
</div>
</div>
</div>
               
			  
		  
<div class="main">


<div class="contact">
<div class="contactform">
 <p>Please fill all fields in the form</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="">
                        <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>  

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <input type="submit" class="btn btn-primary" name="signup" value="submit">
                </form>
  </div>
  <script src="script.js"></script>

    </div>




<div class="footer">

     <div class="Product">
	 
	 <div class="Footer_loan">
	  <center>
  <ul >
<h1>loan services</h1>
<li><a href="Womenentrepreneur.php">Women entrepreneur & Bussiness owners(WEDP)</a></li>
<li><a href="SME.php">Small & Medium Enterprise loan(SME)</a></li>
<li><a href="MSE.php">Macro & Small Enterprise loan(MSE) </a></li>
<li><a href="Individualbussiness.php">Individual bussiness Loan</a></li>
<li><a href="GoupLoan.php">Goup Loan for youth & Women Enterprineurs</a></li>
<li><a href="EmployeeLoan.php">Employee Loan</a></li>
<li><a href="CleanEnergy.php">Clean Energy Loan </a></li>
<li><a href="EduFinance.php">Edu Finance</a></li>
<li><a href="GeneralAgericalture.php">General Agericalture</a></li>
<li><a href="CropSpacific.php">Crop Spacific</a></li>
<li><a href="ValueChain.php">Value Chain</a></li>
</ul>
 </center>
</div>
 
	 <div class="Footer_save" >
	 <center>
<ul>
<h1>saving service</h1>
<li><a href="RSF.php">Rural Facility Saving</a></li>
<li><a href="timediposite.php">time Diposit</a></li>
<li><a href="Voluntary.php">Passbook Saving</a></li>
<li><a href="Pre-loan.php">Pre-loan Saving</a></li>
<li><a href="BoxSaving.php">Box Saving</a></li>
<li><a href="ChildSaving.php">Child Saving</a></li>
<li><a href="insurance.php">Credit life Insurance</a></li>
</ul>
 </center>
	 </div>	
	
	 <div class="footer_nofinance">
	  <center>
<ul>
 <h1>Non Finantial Service</h1>
<li><a href="training.php">Training Offered by in-house & outsourced expert</a></li>
<li><a href="FinancialManagement.php">Financial Management</a></li>
<li><a href="BussinessPlann.php">Bussiness Plann preparation</a></li>
<li><a href="Enetrprineurship.php">Enetrprineurship, Accounting and Bookkeeping</a></li>
<li><a href="CustomerService.php">Customer Service and Urban agriculture</a></li>

</ul>
 </center>
	 </div>
	 <div class="followfoot">  
 <center>	 
		               <ul>
					   <h1>About Us</h1>
	                    <li><a href="History.php">History of Institute</a></li>
                         <li><a href="Philosophy.php">Philosophy</a></li>
                          <li><a href="ChairpersonMessage.php">Board Chairperson's Message</a></li>
                          <li><a href="ManagerMessage.php">General Manager's Message</a></li>
						  <li><a href="BoardOfDirectors.php">Board Of Directors</a></li>
                           <li><a href="SeniorManagementTeam.php">Senior Management Team</a></li>
                           <li><a href="OrganizationalStructure.php">Organizational Structure</a></li>
                      </ul>
 </center>
        </div> 
	
	 </div> 
		 
		


<div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br>Aurope Microfinance awards 2010
          </div>

          <div class="banner-social">
		  <a href="#" class="banner-social__link">
            <i class="icon-mail"></i>
          </a>
		  <a href="#" class="banner-social__link">
            <i class="icon-telegram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            
          </div>

        </div>
      </div>
<div class="copy">
<center>
        <p>Copyright &copy; 2022 Harbu Microfinance||Designed by Harbumfi MIS Department  </p>    
        
	</center> 
	</div>
<div class="contactman">
<a href="tel:0909" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
</div>
</div>
</div>
</body>
</html>

