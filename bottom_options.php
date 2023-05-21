
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<script type="text/javascript" src="script.js"></script>





<div class="row m-0" >
   <div class="row w-100">
      <div class="col-md-3 col-sm-6">
         <form action='checkBalance.php' method='post'>
            <button class="button button1 w-100 m-3" type="submit">Check Balance</button>
         </form>
      </div>
      <div class="col-md-3 col-sm-6">
         <form action='makeDeposit.php' method='post'>
            <button class="button button2 w-100 m-3" type="submit">Deposit</button>
         </form>
      </div>
      <div class="col-md-3 col-sm-6">
         <form action='makeWithdrawal.php' method='post'>
            <button class="button button3 w-100 m-3" type="submit">Withdrawal</button>	
         </form>
      </div>
      <div class="col-md-3 col-sm-6">
         <form action='makeTransfer.php' method='post'>
            <button class="button button4 w-100 m-3" type="submit">Transfer</button>
         </form>
      </div>
      <div class="col-lg-12">
         <form action='index.php' method='post'>
            <button class="button button5 w-100 m-3" type="submit">Sign Out</button>
         </form>
      </div>
   </div>
</div>