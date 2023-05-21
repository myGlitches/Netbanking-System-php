<?php
session_start();
if ($_SESSION["current_authorization"] != "user")
{
  header("Location: index.php");
  exit();
}
?>
<html>
<head>
	<title>My Profile</title>
	<script type="text/javascript" src="script.js"></script>
	<style type="text/css">
		::-webkit-scrollbar 
		  {
		      background: black;
		      width: 12px;
		  }
		   
		  ::-webkit-scrollbar-track 
		  {
		      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		      border-radius: 10px;
		  }
		   
		  ::-webkit-scrollbar-thumb 
		  {
		      border-radius: 10px;
		      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
		  }
		  ::-webkit-scrollbar-thumb 
		  {
		    background: white;
		  }
		  ::-webkit-scrollbar-thumb:hover 
		  {
		    background: #ba55fa;
		  }

		.button 
		{	
          border: 1px solid grey; 
          border-radius: 10px;
          background-color:#ba55fa; 
          color: #9c7af0;
          font-weight: bold; 
          font-family: Comic Sans MS, cursive, sans-serif; 
          font-size: 25px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}
		.button1
		{
		  padding: 40px 40px 40px 40px;
		  background-color: #ba55fa; 
		  color: black; 
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
		}		
		.button2
		{
		  padding: 40px 70px 40px 70px;
		  background-color: #ba55fa; 
		  color: black;  
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
		}
		.button3
		{
		  padding: 40px 50px 40px 50px;
		  background-color: #ba55fa; 
		  color: black; 
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
		}		
		.button4
		{
		  padding: 40px 60px 40px 60px;
		  background-color: #ba55fa; 
		  color: black;  
		  box-shadow: 0 0 0 10px black;
		  border-radius: 10px;
		}
		.button5
		{
		  padding: 40px 55px 40px 55px;
		  background-color: #ba55fa; 
		  color: black;  
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
		}
		.button1:hover 
		{
		  padding: 40px 30px 40px 30px;	
		  border: 1px solid black;
		  background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
		  color: #ba55fa;
		}
		.button2:hover 
		{
		  padding: 40px 60px 40px 60px;
		  border: 1px solid black;
		  background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
		  color: #ba55fa;
		}
		.button3:hover 
		{
		  padding: 40px 40px 40px 40px;	
		  border: 1px solid black;
		  background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
		  color: #ba55fa;
		}
		.button4:hover 
		{
		  padding: 40px 50px 40px 50px;	
		  border: 1px solid black;
		  background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
		  color: #ba55fa;
		}
		.button5:hover 
		{
		  padding: 40px 45px 40px 45px;	
		  border: 1px solid black;
		  background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
		  color: #ba55fa;
		}

	</style>
</head>

<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px">
<?php
include 'connection.php';
$query = "SELECT * FROM  user_account WHERE account_number='$_SESSION[current_accountnumber]'";
$result = mysqli_query($conn,$query) or die("SQL select statement failed");

while ($row = mysqli_fetch_array($result))  {
      $account_number=$row["account_number"];
      $unique_id=$row["unique_id"];
      $username=$row["username"];
      $day=$row["day"];
?>
	<a href="user_account.php">
	

	<?php include_once('header.php'); ?>


<div style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0"  cellpadding="10" cellspacing="0" bgcolor="#9c7af0">
  <div> 
    <div align="left" width="40%">
    	<div style="background-color: #9c7af0; color: white;font-family: Comic Sans MS, cursive, sans-serif; font-size: 40px">
  			<p style="margin: 0px; padding: 10px 10px 0px 20px;">Welcome Back User!</p>
		</div>
	</div>
	<br>
	<br>
  </div>
  <div class="row w-100 justify-content-between d-flex fw-bold" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <div class="col-4 d-flex align-items-left ps-4">Account Number</div>
    <div class="col-4">:</div>
    <div class="col-4"><?php echo"$account_number"; ?></div>
  </div>
  <div class="row w-100 justify-content-between d-flex fw-bold" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <div class="col-4 d-flex align-items-left ps-4">
		<b>Unique Identification Number</b>
	</div>
    <div class="col-4">:</div>
    <div class="col-4">
		<b><?php echo"$unique_id"; ?></b>
	</div>
  </div>
  <div class="row w-100 justify-content-between d-flex fw-bold" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <div class="col-4 d-flex align-items-left ps-4"><b>Full Name</b></div>
    <div class="col-4">:</div>
    <div class="col-4"><b><?php echo"$username"; ?></b></div>
  </div>
  <div class="row w-100 justify-content-between d-flex fw-bold" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <div class="col-4 d-flex align-items-left ps-4"><b>Activated On</b></div>
    <div class="col-4">:</div>
    <div class="col-4"><b><?php echo"$day"; ?></b></div>
  </div>
  <div> 
    <div align="right" style="padding: 10px">&nbsp;</div>
    <div >&nbsp;</div>
    <div>&nbsp;</div>
  </div>
</div>

<?php include_once('bottom_options.php'); ?>

</div>
<?php
  }
?>
</body>
</html>
