<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
  <title>
   Customer Detail
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

<!--
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>
</div>-->

 <section>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 bg-dark" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">BANKING SYSTEM</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="bank.php#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="customer.php">View All Customer</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="transaction.php">Transactions</a></li>
                    </ul>
                </div>
            </div>
        </nav>
   </section>  

<body>

 <div class="container"> 
<main id="main"class="main">

<div class="container bg-white shadow">
    <div class="py-5 mt-5"> 
    <h4 class="text-center pb-3">Customer Details</h4>
    <div class="table-responsive">
    <table class="table-hover text-center"style="width:100%">
    <tr class="bg-dark text-white">
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile no</th> 
        <th>Amount</th>
        <th>Action</th>
    </tr>
    <?php 
    include 'connection.php';
    if( mysqli_num_rows($result) > 0){
        while( $rows = mysqli_fetch_assoc($result) ){
             echo "<tr>
                    <th scope='row'>".$rows['id']."</th>
                    <td>".$rows['Name']."</td>
                    <td>".$rows['Email']."</td>
                    <td>".$rows['Mobile_no']."</td>
                    <td>".$rows['Amount']."</td>
                    <td><a href='send.php?name=".$rows['Name']."'><button type='button' class='btn btn-primary btn-sm'>Send</button></a></td>
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

</html>