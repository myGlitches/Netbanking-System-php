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
      padding: 40px 100px 40px 100px;
      background-color: #ba55fa; 
      color: black; 
      box-shadow: 0 0 0 10px black;
      border-radius: 10px;
    }   
    .button2
    {
      padding: 40px 40px 40px 40px;
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
      padding: 40px 30px 40px 30px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
</style>
<title>Transfer</title>
<script language="JavaScript">
		function validated(){

			var transfer_account = document.tranf.transfer_account.value;
			var user_account = document.tranf.user_account.value;
			
			if(transfer_account==""){	
				window.alert("Please enter account number!");
				document.tranf.transfer_account.focus();
				return false;
			}
			if(transfer_account==user_account){	
				window.alert("You are not allowed to transfer to your own account!");
				return false;
			}
}
</script>
</head>
<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px;">
  <a href="user_account.php">
<?php include_once('header.php'); ?>  
<form action='makeTransfer2.php' method='post'  name='tranf' onsubmit='return validated()';>
  <table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0"  cellpadding="2" cellspacing="0" bgcolor="#9c7af0">
    <tr> 
      <td width="50%">
        <div style="background-color: #9c7af0; color: white;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; font-size: 29px">
          <p style="margin: 0px; padding: 20px 10px 60px 20px;">Please Enter The Account To Transfer To :</p>
        </div>
      </td>
      <td width="6%">&nbsp;</td>
      <td width="44%">&nbsp;</td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td style="padding-left: 300px" align="left">Account Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
      <td align="left">&nbsp;</td>
      <td align="left">  
        <input style="color:#9c7af0;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Account Number" type='text' name='transfer_account' size=10 maxlength=20>
        <input type='hidden' name='user_account' value='<?php echo"$_SESSION[current_accountnumber]"; ?>'>
        </td>
    </tr>
    <tr> 
      <td style="padding-bottom: 20px">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td >&nbsp; </td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table class="my-5 m-0" width="100%" border="0"  cellpadding="2" cellspacing="0">
  <tr class="row m-0"> 
    <td class="col-6 d-flex justify-content-center">
      <button class="button button1" type="submit">Confirm</button>
       </form>
      </td>
	  <td class="col-6 d-flex justify-content-center">
	<form action='user_account.php' method='post' style="margin: 0px;">
        <button class="button button2" type="submit">Go Back To Home</button>
      </form>
    </td>
  </tr>
 </table>
</body>
</html>
