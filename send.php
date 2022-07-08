<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
  <title>
    Transaction Detail
  </title>
   <link rel="stylesheet" type="text/css" href="css/styles.css">
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
table, th, td {
  border: 1px solid black;
  padding: 2px;
}
table {
  border-spacing: 10px;
}

</style>
<body>


 <section>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 bg-dark" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">BANKING SYSTEM</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="customer.php">View All Customer</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="transaction.php">Transactions</a></li>
                    </ul>
                </div>
            </div>
        </nav>
   </section>  
  <!-- header with connection and sql code -->
    <?php 

    require 'connection.php';
  $Name=NULL;

if(!empty($_GET["name"]) ) 
   $Name = $_GET["name"];
  $from='';
  $to='';
  $amount='';
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];
    
    check_name($from,$to,$amount);
   }
    ?>
<div class="container my-4">
      <h2 class="text-center">Transer Money</h2>
    </div>
    <div class="container my-3">
  <form action="<?php $_PHP_SELF ?>" method="post" style="width:60%;margin-left:20%;">
  <div class="mb-3">
    <label for="From" class="form-label">From</label>
    <input type="text" class="form-control" id="From" name="from"  value='<?php echo $Name; ?>' required/>
    
  </div>
  <div class="mb-3">
    <label for="To" class="form-label">To</label>
    <input type="text" class="form-control" id="To" name="to" required/>
   
  </div>
  <div class="mb-3">
    <label for="Amount" class="form-label">Amount</label>
    <input type="number" class="form-control" id="Amt" name="amount" required/>
    <div id="emailHelp" class="form-text">We'll never share your Detail with anyone else.</div>
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="check" required/>
    <label class="form-check-label" for="exampleCheck1" >Are you sure?</label>
  </div> -->
  <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Send</button>
</form>
</div>
   













   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 

</body>
</html>