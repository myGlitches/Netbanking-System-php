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
	<title>Delete Your Account</title>
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
	      padding: 40px 100px 40px 100px;
	      background-color: #ba55fa; 
	      color: black; 
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
	    }   
	    .button2
	    {
	      padding: 40px 105px 40px 105px;
	      background-color: #ba55fa; 
	      color: black; 
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
	    }
	    .button1:hover 
	    {
	      padding: 40px 90px 40px 90px;
	      border: 1px solid black;
	      background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
	      color: #ba55fa;
	    }
	    .button2:hover 
	    {
	      padding: 40px 95px 40px 95px;
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


	<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#9c7af0">
		  <tr> 
		    <td align="left" width="50%">
		    	<div style="background-color: #9c7af0; color: white;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px">
		  			<p style="margin: 0px; padding: 10px 10px 0px 20px;">Are You Sure You Want To Delete This Account?</p>
				</div>
			</td>
		    <td align="center">&nbsp;</td>
		    <td>&nbsp;</td>
		  </tr>
		  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
		    <td width="33%" align="center"><b>Account Number</b></td>
		    <td width="6%" align="center">:</td>
		    <td width="61%"><b><?php echo"$account_number"; ?></b></td>
		  </tr>
		  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
		    <td align="center"><b>Full Name</b></td>
		    <td align="center">:</td>
		    <td><b><?php echo"$username"; ?></b></td>
		  </tr>
		  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
		    <td align="center"><b>Activated On</b></td>
		    <td align="center">:</td>
		    <td><b><?php echo"$day"; ?></b></td>
		  </tr>
		  <tr> 
		    <td align="right" style="padding-bottom: 50px">&nbsp;</td>
		    <td align="center">&nbsp;</td>
		    <td>&nbsp;</td>
		  </tr>
	</table>
	<?php
	  }
	?>
	<div class="row my-5 m-0">
	  <div class="row m-0 justify-content-between"> 
	    <div class="col-6 d-flex justify-content-center align-items-center">
	    	<form action='delete_commit.php' method='post' style="margin: 0px">
      			<button class="button button1" type="submit">Confirm</button>
	   		</form>
	    </div>
		<div class="col-6 d-flex justify-content-center align-items-center">
			<form action='user_account.php' method='post' style="margin: 0px">
        		<button class="button button2" type="submit">Go Back</button>
	      	</form>
	  	</div>
	  </div>
	</div>
</body>
</html>