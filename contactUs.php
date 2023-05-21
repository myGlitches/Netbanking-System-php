<html>
<head>
	<title>Contact Us</title>
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
	      padding: 40px 105px 40px 105px;
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
	      padding: 40px 95px 40px 95px;
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
	<script type="text/javascript">
		function validated(){
			var subject = document.ema.subject.value;
			var message = document.ema.message.value;
			if(subject==""){	
				window.alert("Please enter your issue!");
				document.ema.subject.focus();
				return false;
			}
			if(message==""){	
				window.alert("Please enter your desciption!");
				document.ema.message.focus();
				return false;
			}
		}
	</script>
</head>

<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px">
<a href="user_account.php">

<?php include_once('header.php'); ?>

<form action='email_commit.php' method='post'  name='ema' onsubmit='return validated()'; bgcolor="#9c7af0">
	<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0"  cellpadding="10" cellspacing="0" bgcolor="#9c7af0">
		<tr>
			<td align="left" width="40%">
    			<div style="background-color: #9c7af0; color: white;font-family: Comic Sans MS, cursive, sans-serif; font-size: 40px">
  					<p style="margin: 0px; padding: 10px 10px 0px 20px;">Drop Us Your Query!</p>
				</div>
			</td>
    		<td  width="5%">&nbsp;</td>
    		<td width="55%">&nbsp;</td>
		</tr>
		<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px">
			<td align="left" width="40%" style="padding-left: 35px">What is the issue about</td>
    		<td  width="5%">:</td>
    		<td width="55%" ><input style="color:#9c7af0;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. Deposit Failure/Balance not showing" type='text' name="subject" size=48 maxlength=100></td>
		</tr>
		<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px">
			<td align="left" width="40%" style="padding-left: 35px">Describe Your Issue</td>
    		<td  width="5%">:</td>
    		<td width="55%" >
    			<textarea style="padding: 17px; color:#9c7af0;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; border: 1px solid grey; border-radius: 10px" name="message" rows="7" cols="51" placeholder="Eg. My previous deposit dated dd/mm/yyyy at hh:mm hrs is not reflecting in my account statement. Would request a quick resolution on the same."></textarea>
    		</td>
		</tr>
	</table>

	<div class="mt-5" width="100%" border="0"  cellpadding="2" cellspacing="0">
	  <div class="row m-0"> 
	    <div class="col-6 d-flex justify-content-center">
	       <button class="button button1" type="submit">Submit</button>
	      </div>
	      <div class="col-6 d-flex justify-content-center">
	        <button class="button button2" type="reset" onclick="location.href='user_account.php'">Go Back To Home</button>
	    </div>
	  </div>
	</div>
</form>
</body>
</html>