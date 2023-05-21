<html>
<head>
	<title>About Us</title>
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
	      padding: 40px 40px 40px 40px;
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
	</style>
</head>
<body onload="renderTime();" bgcolor='#9c7af0' style="margin: 0px">
	<a href="user_account.php">


		<?php include_once('header.php'); ?>
		
	<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width='99%' border='0' align='center' bgcolor='#9c7af0'>
		<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 23px">
			<td style="text-align: justify; padding: 20px;">
					Purple Bank is an online banking system and has been developed to manage operations like Balance Enquiry, 
					generating account statements, transferring funds from one account to another account etc. It allows the 
					customer to access the website for viewing their account details and enables them to perform transactions 
					like withdrawal, deposit and money transfer.
			</td>
		</tr>
	</table>
	<div class="my-5 m-0">
		    <div class="row m-0 justify-content-center">
		    	<div class="d-flex justify-content-center">
				   <form action='user_account.php' method='post'>
				   	<button class="button button1" type="submit">Go Back To Home Page</button>				   	
				   </form>
				</div>
			</div>
	</div>
</body>
</html>