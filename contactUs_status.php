<!DOCTYPE html>
<html>
<head>
	<title>Query Status</title>
	
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
    	.button1:hover 
    	{
    	  padding: 40px 30px 40px 30px;	
	      border: 1px solid black;
	      background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
	      color: #ba55fa;
    	}

		.topnav-custom {
			margin-top: 70px
		}
	</style>
</head>
<body onload="renderTime();"  style="margin: 0px">


  <?php include_once('header.php'); ?>
  
  <table style="background: #9c7af0; margin-top: 40px; margin-left: 7px; border: 5px solid black; border-radius: 10px" width="99%";>
  	<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 32px">
			<td style="text-align: justify; padding: 20px;">
					Dear Customer, your issue has been forwarded to our team.<br>
					You can rest assured that your issue will be resolved soon. Our executives would be contacting you on your registered Email-ID shortly.<br>
					Till then you can continue to use our services.<br>
					Thank You!
			</td>
		</tr>
  </table>
  <div>
		    <div class="row my-5 m-0">
		    	<div class="d-flex justify-content-center">
				   <form action='user_account.php' method='post'>
				   	<button class="button button1" type="submit">Go Back To Home Page</button>				   	
				   </form>
				</div>
			</div>
	</div>
</body>
</html>