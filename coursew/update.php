<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php include('database.php'); ?>

<?php 
    
    $id = $_GET['id'];
    $query = "select * from fineart where id='$id'";
    $result = $conn->query($query); //query run garekooo
    $data = $result->fetch_assoc();
    
    ?>
<style>
  .title-style{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 700;
font-size: 20px;
color: hsl(52, 0%, 98%);
}
.title-quote{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 400;
color: hsl(52, 0%, 98%);
}
</style>
<div class="container py-5">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col">
      <div class="card my-4 shadow-3">
        <div class="row g-0">
          <div class="col-xl-6 d-xl-block bg-image">
          <img src="images/tulip.jpg" alt="Sample photo"
              class="img-fluid" />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
              <div class=" justify-content-center align-items-center h-100">
                <div class=" text-center" style="margin-top: 220px;">
                  <i class="fas fa-truck text-white fa-3x"></i>
                  <p class="text-white title-style">Lorem ipsum delivery</p>
                  <p class="text-white mb-0"></p>

                  <figure class="text-center mb-0">
                    <blockquote class="blockquote text-white">
                      <p class="pb-3">
                        <i class="fas fa-quote-left fa-xs text-primary"
                          style="color: hsl(210, 100%, 50%) ;"></i>
                        <span class="lead font-italic">Everything at your doorstep.</span>
                        <i class="fas fa-quote-right fa-xs text-primary"
                          style="color: hsl(210, 100%, 50%) ;"></i>
                      </p>
                    </blockquote>

                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
              <h3 class="mb-4 text-uppercase">Update PRODUCTS</h3>
              <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" value="<?php echo $data ['title'] ?>" class="form-control form-control-lg" name="uptitle" 
                   />
                    <label class="form-label">TITLE</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" value="<?php echo $data ['artist'] ?>" class="form-control form-control-lg" name="upartist" />
                    <label class="form-label" for="form3Example1n">Artist</label>
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" value="<?php echo $data ['description'] ?>" class="form-control form-control-lg" name="updescription"/>
                <label class="form-label" for="form3Example8">DESCRIPTION</label>
              </div>



              <div class="row">
                <div class="col-md-6 mb-4">

                  <select class="select" name="uptype">
                    <option selected hidden disabled>TYPE</option>
                    <option >Photographs</option>
                    <option >Paintings</option>
                    <option >Abstract</option>
                  </select>

                </div>
                <div class="col-md-6 mb-4">

                  

                </div>
              </div>

              <input type="hidden" name="id" value="<?php echo $data ['id'] ?>"/>
              <div class="form-outline mb-4">
                <input type="text" value="<?php echo $data ['price'] ?>" class="form-control form-control-lg" name="upprice" />
                <label class="form-label" for="form3Example3">Price</label>
              </div>
              <div class="d-flex justify-content-end pt-3">
                <button type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " name="updateproduct">Update Product</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>