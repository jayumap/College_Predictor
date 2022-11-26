<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
  <style>
    
.button1 {
  background-color: #21b9ff; /* Green */
  border: none;
  color: white;
  padding: 15px 380px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 20px;

}
</style>
  <div class="container">
    <div class="title">Edit Collage Data</div>
    <div class="content">
      <form action="EditPopup.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">College Name</span>
            <input id="CllgName" name="CllgName" type="text" placeholder="Enter College name" required>
          </div>
          <div class="input-box">
            <span class="details">Rank</span>
            <input id="Rank" name="Rank"  type="number" placeholder="Enter Ranking" required>
          </div>
          <div class="input-box">
            <span class="details">Cutoff</span>
            <input id="Cutoff" name="Cutoff" type="text" placeholder="Enter The Cutoff" required>
          </div>
          <div class="input-box">
            <span class="details">Total Fees</span>
            <input id="Total_Fee" name="Total_Fee"  type="text" placeholder="Enter Total-Fees" required>
          </div>
          <div class="input-box">
            <span class="details">Total Faculty</span>
            <input id="Total_Faculty" name="Total_Faculty" type="number" placeholder="Enter Total Faculty" required>
          </div>
          <div class="input-box">
            <span class="details">Estd Year</span>
            <input id="Estd_Year" name="Estd_Year" type="number" placeholder="Confirm Established Year" required>
          </div>
          <div class="input-box">
            <span class="details">Approval</span>
            <input id="Approval" name="Approval"  type="text" placeholder="Enter the Aprrroved System" required>
          </div>
          <div class="input-box">
          <span class="details">Link</span>
          <input id="Link" name="Link"  type="text" placeholder="Enter the Officail Link" required>
          </div> 
          <div>
            <span class="details"> Enter Logo </span>
            <input type="file" 
                   name="filename" 
                   value="" />
          </div>

        </div>
        <div class="button">
        <input type="submit" name="submit" value="submit">
        </div>
        <!-- <div class="button1" >
        <a href=admin.php>Go Back:: </a>
        </div> -->


  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

