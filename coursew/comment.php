<?php
session_start();
if (!$_SESSION['ticket']) {
    header('location:login.php');
}
$userid = $_SESSION['userid'];
include('database.php');
$query = "select * from gallery where id='$userid'";
$result = $conn->query($query);
$datauser = $result->fetch_assoc();
$id=$_GET['id'];
$query = "select * from fineart where id='$id'";
$result = $conn ->query($query);
$data = $result->fetch_assoc();
?>
<?php
include('navbar.php');
?>
<form action="action.php" method="post">
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <input type="hidden" name="userid" value="<?php echo $datauser['id'];?>">
            <input type="hidden" name="productid" value="<?php echo $data['id'];?>">
            <input type="hidden" name="username" value="<?php echo $datauser['username'];?>">

            <img src="uploads/<?php echo $data['picture'];?>"
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
              alt="Laptop" />
            <a href="#!">
              <div class="mask"></div>
            </a>
          </div>
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-dark"><?php echo $data['title'];?></p>
                <p class="small text-muted">Artist : <?php echo $data['artist'];?></p>
              </div>

                <!-- <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="small text-muted">Rated 4.0/5</p>
              </div> -->
            
          </div>
          <hr class="my-0" />
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
            <p style="margin-left:-15px;" class="small text-muted"><?php echo $data['price'];?></p>
            </div>
            <p style="margin-left:-15px;" class="small text-muted"><?php echo $data['description'];?></p>
</div>
          <hr >
          <?php
          $userid = $_SESSION['userid'];
          $query = "select * from comment where productid='$id'";
          $result = $conn ->query($query);
          while($data = $result->fetch_assoc()){
          ?>
          <p class="small text-muted"><?php echo $data['username'];?>: <?php echo $data['comment'];?></p>
          <hr>
          <?php
          }
          ?>
            <?php  if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="user")) {
        ?>
           <p class="form-control-lg"><textarea name="commen" placeholder="Comment Here"></textarea></p>

          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <!-- <a href="#!" class="text-dark fw-bold">Cancel</a> -->
              <button type="submit" name="comment">Comment</button>
            </div>
            
<div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <a href="display.php" class="text-dark fw-bold">Back</a>
              
            </div>  
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

