
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Shadows+Into+Light&display=swap" rel="stylesheet">
  </button>
  <style>
    h1{
      font-family: 'Shadows Into Light', cursive;
      font-weight: bold;
    }
    h1 span{
      font-family: 'Parisienne', cursive;
    }
    .margin-left{
      margin-left:800px;
    }
    .class{
      margin-left:800px;
    }
    .height{
      height:50px;
      background-color: #e2bef1;
    }
    </style>
    <?php if(isset($_SESSION['ticket'])){ ?>
<nav class="navbar navbar-expand-lg height">

  <a class="navbar-brand" href="userprofile.php"><h1>Artist<span>_Tick</span></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <?php  if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin")) {
        ?>
      <li class="nav-item">
        <a class="nav-link" href="add_arts.php">Add Product</a>
      </li>
      <?php
    }
    else {
      ?>
       <li class="nav-item">
        <a class="nav-link" href="aboutus.php">Features</a>
      </li>
    <?php }
    ?>
      <li class="nav-item">
        <a class="nav-link" href="display.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link margin-left" href="logout.php">Logout</a>
      </li>
     
    </ul>
  </div>
</nav>
<?php }
else{
?>
<nav class="navbar navbar-expand-lg height">
  <a class="navbar-brand" href="index.php"><h1>Artist<span>_Tick</span></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display.php">Arts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">SignUp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link class" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
<?php } ?>
