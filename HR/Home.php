
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
	   <button class="open-button" onclick="openForm()">lOGOUT</button>
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
<li><a href="Addjob.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>ADD VACANCY</a></li>
<li><a href="viewapplicant.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>VIEW APPLICANT</a></li>

<li><i class="icon-search"></i>MEDIA<i class="fa fa-angle-down" aria-hidden="true"></i>
<div class="submainu4">
<ul>
<li><a href="News.php">Add  News</a></li>
<li><a href="Report.php">Add Annual Report</a></li>
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

<div class="ann">

    List of Apllicant
    
	
<?php  
	include_once '../db.php';
$result = mysqli_query($conn,"SELECT * FROM application");
if (mysqli_num_rows($result) > 0) {
	
?>

  <table>
  
  <tr >
    <th >APPLICANT Id</th>
	<th >Position</th>
    <th >First Name</th>
	<th >Last Name</th>
    <th >City</th>
    <th>Date Of Birth</th>
	<th >Address</th>
	<th >Phone</th>
	<th >Email</th>
	<th >Application Letter</th>
	<th >Cv</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td ><?php echo $row["Applicant_ID"]; ?></td>
	<td ><?php echo $row["Position"]; ?></td>
    <td ><?php echo $row["F_Name"]; ?></td>
	<td ><?php echo $row["L_Name"]; ?></td>
	<td ><?php echo $row["City"]; ?></td>
	<td ><?php echo $row["Date_Of_Birth"]; ?></td>
    <td ><?php echo $row["Address"]; ?></td>
	<td ><?php echo $row["phone"]; ?></td>
	<td ><?php echo $row["Email"]; ?></td>
	<td ><?php echo $row["Application_letter"]; ?></td>
	<td ><?php echo $row["CV"]; ?></td>
	<td ><a href="Application.php">Replay</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

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

