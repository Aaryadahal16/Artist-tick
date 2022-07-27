<?php
session_start();
if(isset($_SESSION['ticket'])){
  header("location:userprofile.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Tick</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="jumbotron firstdiv" >
<video autoplay muted loop playsinline class="responsive">
  <source src="videos/pink.mp4" type=video/mp4>
  </video>
<div class="videoverlay">
  <h1 class="display-4 align" >Art Gallery!</h1>
  <p class="lead font"> Get lost in the mysterious beauty of art.</p>
  <hr class="my-4">
  <p class="font">A platform for young artists to achieve their dreams</p>
</div>
</div>

<style>
  video {
    width: 1256px;
    height:500px;
    object-fit: fill;
    position: relative;
  }
  .videoverlay{
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    margin-left: 300px;
    margin-top: 95px;
    text-align: center;
  }
  .firstdiv{
    position: relative;
  }
  .font{
    font-size: 30px;
  }
  @media only screen and (min-width: 600px;){
    .responsive{
      width: 300px;
    }
  }
 

  </style>
  <!--Section: Content-->
  <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/love.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card posts">
                <h5 class="card-title">Motherly Love</h5>
                <p class="card-text">
                  Unconditional Love.
                </p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class=" card posts">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/charlie chaplin.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card posts">
                <h5 class="card-title">Charlie Chaplin</h5>
                <p class="card-text">
                Let us strive for the impossible.
                </p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card posts">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/abstract.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card">
                <h5 class="card-title">Feelings</h5>
                <p class="card-text">
                 Unexpressed Feelings. 
                </p>

              </div>
            </div>
          </div>
        </div>

      </section>
      <!--Section: Content-->

  <!--Footer-->
 <!-- Footer -->

<?php 
include('footer.php');
?>

</body>
</html>
