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
  ::placeholder
  {
    color:#9c7af0;
    opacity: 1;
    font-family: Comic Sans MS, cursive, sans-serif;
    font-size: 18px;
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
      padding: 40px 90px 40px 90px;
      background-color: #ba55fa; 
      color: black;
      box-shadow: 0 0 0 10px black;
      border-radius: 10px;
    }   
    .button2
    {
      padding: 40px 30px 40px 30px;
      background-color: #ba55fa; 
      color: black;
      box-shadow: 0 0 0 10px black;
      border-radius: 10px;
    }
    .button1:hover 
    {
      padding: 40px 80px 40px 80px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
    .button2:hover 
    {
      padding: 40px 20px 40px 20px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
</style>
<title>Deposit</title>
<script language="JavaScript">
		function validated(){

			var deposit = document.deps.deposit.value;
			var depositint = parseInt(deposit);
			var deposit2 = deposit <= 99;
			
			if(deposit==""){	
				window.alert("Please enter deposit value!");
				document.deps.deposit.focus();
				return false;
			}
			if(isNaN(depositint)){	
				window.alert("Please enter deposit value!");
				document.deps.deposit.focus();
				return false;
			}
			if(deposit2){	
				window.alert("Sorry, deposit must not be less than 100 rupees!");
				return false;
			}
			
}
</script>
</head>
<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px;">
  <a href="user_account.php">
    
	<?php include_once('header.php'); ?>

<form action='deposit_commit.php' method='post'  name='deps' onsubmit='return validated()';>
<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0"  cellpadding="2" cellspacing="0" bgcolor="#9c7af0">
  <tr> 
    <td width="58%">
      <div style="background-color: #9c7af0; color: white; font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; font-size: 30px">
        <p style="margin: 0px; padding: 20px 10px 60px 20px;">Please Enter The Amount To Deposit In :</p>
      </div>
    </td>
    <td width="6%">&nbsp;</td>
    <td width="36%">&nbsp;</td>
  </tr>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td style="padding-left: 150px" align="left">Account Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
      <td style="padding-left: 10px" align="left"><?php echo"$_SESSION[current_accountnumber]"; ?></td>
      <td>
	     <?php	
         date_default_timezone_set("Asia/Kolkata");
			   $day=date("j M Y");
			   $time=date( "g:i:sa");
			   echo "<input type='hidden' name='day' value='$day'>";
			   echo "<input type='hidden' name='time' value='$time'>";
			 ?>
	</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <td style="padding-left: 150px" align="left">Deposit Amount In Rupees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
    <td align="left">
      <input style="color:#9c7af0;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Deposit Value" type='text' name='deposit' size=10 maxlength=10>
	  </td>
    <td>&nbsp;</td>
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
      <button class="button button1" type="submit">Deposit</button>
    </form>
    </div>
    <div class="col-6 justify-content-center d-flex">
    <form action='user_account.php' method='post' style="margin: 0px;">
      <button class="button button2" type="submit">Go Back To Home</button>
    </form>
  </div>
  </div>
</div>
</body>
</html>
