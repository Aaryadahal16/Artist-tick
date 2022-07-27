<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
body{
  background: pink;
}
.float{
  margin-left: 580px;
  margin-top: -700px;
}

</style>
<div class="container py-5">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col">
      <div class="card my-4 shadow-3">
        <div class="row g-0">
          <div class="col-md-6 d-xl-block bg-image">
          <img src="images/tulip.jpg" alt="Sample photo"
              class="img-fluid" />
            
          <div class="col-md-12 float">
            <div class="card-body p-md-5 text-black">
              <h3 class="mb-4 text-uppercase">ADD PRODUCTS</h3>
              <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1m" class="form-control form-control-lg" name="title" />
                    <label class="form-label" for="form3Example1m">TITLE</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1n" class="form-control form-control-lg" name="artist" />
                    <label class="form-label" for="form3Example1n">Artist</label>
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example8" class="form-control form-control-lg" name="description"/>
                <label class="form-label" for="form3Example8">DESCRIPTION</label>
              </div>



              <div class="row">
                <div class="col-md-6 mb-4">

                  <select class="select" name="type">
                    <option selected hidden disabled>TYPE</option>
                    <option value="Photographs">Photographs</option>
                    <option value="Paintings">Paintings</option>
                    <option value="Abstract">Abstract</option>
                    <option value="sketches">sketches</option>
                  </select>

                </div>
                <div class="col-md-6 mb-4">

                  

                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control form-control-lg" name="price" />
                <label class="form-label" for="form3Example3">Price</label>
              </div>

              <div class="form-outline mb-4">
                <input type="file" id="form3Example2" class="form-control form-control-lg" name="picture"/>
                <label class="form-label" for="form3Example2">Upload a file</label>
              </div>
              <div class="d-flex justify-content-end pt-3">
                <button type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " name="addproduct">Add Product</button>
                  <button type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " name="Cancel">Cancel</button>
 
              </div>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>