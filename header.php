<style>
    	.topnav 
		{
			position: fixed;
  			overflow: hidden;
  			background-color: #000000;
  			top: 65;
  			width: 100%;
  			z-index: 3;
		}

        .topnav-custom {
            position: fixed;
  			overflow: hidden;
  			background-color: #000000;
  			top: 65;
  			width: 100%;
        }

        .topnav-custom .nav-link {
            color: white
        }

        .topnav-custom a {
		  color: #ba55fa;
		  font-weight: bold; 
		  font-family: Comic Sans MS, cursive, sans-serif;
		  text-align: center;
		  padding: 14px 30px 14px 30px;
		  text-decoration: none;
		  font-size: 20px;
        }

        .topnav-custom ul {
		  z-index: 99;
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
        .btn:hover {
            color:white !important
        }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script type="text/javascript" src="script.js"></script>

<div class="row m-0" style="z-index: 999; overflow: hidden; margin-top:0px; width: 100%;  position: fixed; top: 0; background-color: #ba55fa; font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #9c7af0; font-size:40px; text-align: center; padding: 5px;">
  		<p class="m-0 text-white">Purple Bank</p>
	</div>
</a>
<!-- <div style="color: #ba55fa; padding-top: 5px;padding-right:10px; float: right; font-family:Comic Sans MS, cursive, sans-serif; " id="clock" class="container"></div> -->

<!-- <div class="topnav">
  <a class="btn active" href="user_account.php">Home</a>
  <a class="btn" href="ourbranches.php">Our Branches</a>
  <a class="btn" href="aboutUs.php">About Us</a>
  <a class="btn" href="deleteAccount.php">Delete Your Account</a>
  <a class="btn" href="contactUs.php">Contact Us</a>
</div> -->

<nav class="topnav-custom navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="btn">
            <a class="nav-link active fw-bold" href="user_account.php" aria-current="page">Home</a>
        </li>
        <li class="btn">
          <a class="btn" href="ourbranches.php" aria-current="page">Our Branches</a>
        </li>
        <li class="btn">
          <a class="btn" href="aboutUs.php" aria-current="page">About Us</a>
        </li>
        <li class="btn">
          <a class="btn" href="deleteAccount.php" aria-current="page">Delete Account</a>
        </li>
        <li class="btn">
          <a class="btn" href="contactUs.php" aria-current="page">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
