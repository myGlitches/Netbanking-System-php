<?php
session_start();
if ($_SESSION['current_authorization'] != 'user')
{
	header("Location: index.php");
	exit();
}
?>
<html>
<head>
<title>Balance Check</title>
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
    .topnav 
    {
      position: fixed;
        overflow: hidden;
        background-color: #000000;
        top: 65;
        width: 100%;
        z-index: 3;
    }
    .topnav a 
    {
      float: left;
      color: #ba55fa;
      font-weight: bold; 
      font-family: Comic Sans MS, cursive, sans-serif;
      text-align: center;
      padding: 14px 30px 14px 30px;
      text-decoration: none;
      font-size: 20px;
      transition-duration: 0.4s;
    }
    .topnav a:hover 
    {
      padding: 14px 20px 14px 20px;
      background-color: #ba55fa;
      color: black;
    }

    .topnav a.active 
    {
      background-color: #9c7af0;
      color: #ba55fa;
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
        padding: 40px 35px 40px 35px;
        background-color: #ba55fa; 
        color: black; 
        box-shadow: 0 0 0 10px black;
        border-radius: 10px;
    }   
    .button2
    {
        padding: 40px 45px 40px 45px;
        background-color: #ba55fa; 
        color: black;  
        box-shadow: 0 0 0 10px black;
        border-radius: 10px;
    }
    .button1:hover 
    {
      padding: 40px 25px 40px 25px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
    .button2:hover 
    {
      padding: 40px 35px 40px 35px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
  </style>
</head>
<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px;">
<?php
include 'connection.php';
$query = "SELECT * FROM  user_account WHERE account_number='$_SESSION[current_accountnumber]'";
$result = mysqli_query($conn,$query) or die("SQL select statement failed");

while ($row = mysqli_fetch_array($result))  {
			$account_number=$row["account_number"];
			$balance=$row["balance"];
?>
  <a href="user_account.php">
<?php include_once('header.php'); ?>
<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0"  cellpadding="2" cellspacing="0" bgcolor="#9c7af0">
  <div> 
    <td width="30%">
      <div style="background-color: #9c7af0; color: white;font-family: Comic Sans MS, cursive, sans-serif; font-size: 50px">
        <p style="margin: 0px; padding: 20px 10px 60px 20px;">Balance Details</p>
      </div>
    </td>
    <td width="6%">&nbsp;</td>
    <td width="44%">&nbsp;</td>
  </div>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <td >Account Number</td>
    <td >:</td>
    <td ><b><?php echo"$account_number"; ?><b></td>    
  </tr>
  <tr> 
    <br>
    <br>
  </tr>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <td >Your Current Balance Is</td>
    <td >:</td>
    <td ><b>Rs <?php echo"$balance"; ?></b></td>
  </tr>
  <tr> 
    <td style="padding-bottom: 50px">&nbsp;</td>
    <td >&nbsp; </td>
    <td>&nbsp;</td>
  </tr>
</table>



<div>
    <div class="row my-5 m-0">
    <div class="col-6 justify-content-center d-flex">
    <form action='checkTransaction.php' method='post'>
    <button class="button button1" type="submit">Check Transactions</button>
    </form>
    </div>
    <div class="col-6 justify-content-center d-flex">
    <form action='user_account.php' method='post'>
      <button class="button button2" type="submit">Go Back To Home</button>
    </form>
  </div>
  </div>


<?php
	}
?>
</body>
</html>
