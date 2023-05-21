<?php
session_start();
session_destroy();
?>
<html>
<head>
<title>Purple Bank</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script language="JavaScript">
		function validated(){

			var account_number = document.creds.account_number.value;
			var password = document.creds.password.value;
			
			if(account_number==""){	
				window.alert("Please enter your account number!");
				document.creds.account_number.focus();
				return false;
			}
			if(password==""){	
				window.alert("Please enter your password!");
				document.creds.password.focus();
				return false;
			}
}
</script>
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
          background-color:#ba55fa; 
          border: 1px #9c7af0;
          color: #9c7af0;
          font-family: Comic Sans MS, cursive, sans-serif; 
          font-size: 20px;
          transition-duration: 0.4s;
          cursor: pointer;
    }
    .button1
    {
      padding: 12px 35px 12px 35px;
      background-color: #9c7af0; 
      color: white; 
      box-shadow: 0 0 0 5px black;
      border-radius: 10px;
      margin-right: 5px;
    }   
    .button2
    {
      padding: 12px 35px 12px 35px;
      background-color: #9c7af0; 
      color: white; 
      box-shadow: 0 0 0 5px black;
      border-radius: 10px;
      margin-left: 5px;
    }
    .button1:hover 
    {
      padding: 12px 35px 12px 35px;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
    .button2:hover 
    {
      padding: 12px 35px 12px 35px;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ba55fa;
    }
    .login-header {
      font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #fff; font-size:40px
    }
</style>
</head>

<body >
<br><br><br><br><br>
<form action='credentials.php' method='post' name='creds' onsubmit='return validated()';>

<div class="d-flex justify-content-center flex-column w-100 m-0 p-5" style="background: #ba55fa">
  <div class="row m-0 justify-content-center"> 
    <div class="d-flex justify-content-center" style="background: #ba55fa">
      <span class="login-header">Purple Bank</span>
    </div>
  </div>
  <div class="d-flex justify-content-center"> 
    <div>&nbsp;</div>
    <div  class="my-4"><input required="required" style="color:#9c7af0;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Account Number" type='text' name='account_number' size=20 maxlength=20></div>
    <div>&nbsp;</div>
  </div>
  <div class="d-flex justify-content-center"> 
    <div>&nbsp;</div>
    <div  class="my-4"><input required="required" style="color:#9c7af0;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Password" type='password' name='password' size=20 maxlength=10></div>
    <div>&nbsp;</div>
  </div>
  <div class="d-flex justify-content-center"> 
    <div>&nbsp;</div>
    <div  class="d-flex justify-content-center">
    <button class="button button1 mx-3" type="reset" onclick="location.href='registration.php'">Sign Up</button>	
    <button class="button button2 mx-3" type="submit">Sign In</button>
	</div>
  <br>
  <br>
  </div>
</div>
</form>
</body>
</html>