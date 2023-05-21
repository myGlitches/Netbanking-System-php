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
<title>My Transactions</title>
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
        padding: 40px 70px 40px 70px;
        background-color: #ba55fa; 
        color: black; 
        box-shadow: 0 0 0 10px black;
        border-radius: 10px;
    }
    .button1:hover 
    {
      padding: 40px 60px 40px 60px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
    .button2
    {
        padding: 40px 70px 40px 70px;
        background-color: #ba55fa; 
        color: black; 
        box-shadow: 0 0 0 10px black;
        border-radius: 10px;
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
  </style>
</head>
<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px">
  <a href="user_account.php">
<?php include_once('header.php'); ?>	
<table width="100%" border="0"  cellpadding="2" cellspacing="0">
  <tr> 
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td> 
            <?php

		include 'connection.php';
		$query = "SELECT * FROM  transactions WHERE account_number='$_SESSION[current_accountnumber]' ORDER BY id DESC";
		$result = mysqli_query($conn,$query);
		echo "<table style='margin-top:105px; border: 5px solid black; border-radius: 10px;' width='100%' border='0' align='center' bgcolor='#9c7af0'>";
		echo "<tr style='color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px'>
		<td align='center'>No</td>";
		echo "<td align='center'>Details</td>";
		echo "<td align='center'>Amount (Rs)</td>";
		echo "<td align='center'>Date</td>";
		echo "<td align='center'>Time</td></tr>";
		$counter=1;
		while ($row = mysqli_fetch_array($result))  {
			$account_number=$row["account_number"];
			$amount=$row["amount"];
			$details=$row["details"];
			$time=$row["time"];
			$day=$row["day"];
			
			echo "<tr style='color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px'>
			<td align='center'>$counter</td>";
			echo "<td align='center'>$details</td>";
			echo "<td align='center'>Rs $amount</td>";
			echo "<td align='center'>$day</td>";
			echo "<td align='center'>$time</td></tr>";
			$counter++;
			}
			echo "</table>";
			?>
          </td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td >&nbsp;</td>
  </tr>
</table>
<div>
    <div class="row my-5 m-0" >
    <div class="col-6 d-flex justify-content-center">
      <form action='user_account.php' method='post'>
        <button class="button button1" type="submit">Go Back To Home</button>
      </form>
    </div>
    <div class="col-6 d-flex justify-content-center">
      <form action='download.php' method='post'>
        <button class="button button2" type="submit">Download Statement</button>
      </form>
    </div>
</div>
</div>
</body>
</html>