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

 $sql = "SELECT * FROM `transaction`";

 $result = mysqli_query($conn,$sql);
 $num_of_entry = mysqli_num_rows($result); 
  ?>

  <!-- main container -->
 

 <div class="container"> 
<main id="main"class="main">

<div class="container bg-white shadow">
    <div class="py-5 mt-5"> 
    <h4 class="text-center pb-3">Transaction Details</h4>
    <div class="table-responsive">
    <table class="table-hover text-center"style="width:100%">
    <tr class="bg-dark text-white">
        <th>ID</th>
        <th>From</th>
        <th>To</th>
        
        <th>Amount</th>
       
    </tr>
    <?php 
                  if($num_of_entry>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <th scope='row'>".$row['Tran_ID']."</th>
                        <td>".$row['From']."</td>
                        <td>".$row['To']."</td>
                        <td>".$row['Amount']."</td>
                        </tr>";

                    }
                  }else{
                    echo "<script>alert('No data found in table!');</script>";
                  }
                  ?>
     </tr>
    </table>
  </div>
   
    </div>
</div>

</main>
</div>

  <!-- Vendor JS Files -->
 
  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>