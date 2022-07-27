<?php   
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Packages</title>

    <!--<link rel="stylesheet" href="packages.css"> -->

    <?php include('database.php'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

    <?php include('navbar.php'); ?>
     
<div class="container">
<div class="row">  
<?php 

$query = "select * from fineart";
$result = $conn ->query($query); // query run gareko 

// $data = $result->fetch_assoc(); // fetches data from db , esley tara single row ko data matra tanxa multiple tandaina so loop launu parxa 
// print_r($data);  data fetch aako xa ki xaina herney tarika incase of database



while($data = $result->fetch_assoc()){ ?> <!-- esley chai harek row ko laagi data fetch garera lyaunxa -->

   <style>
    .picture{
        height: 360px;
        width: 250px;
        object-fit:contain;
        background-color: rgb(122, 108, 108, 0.2);
        border-radius: 25px;
    }
    .float{
        float: left;
    }
    </style>
    <?php $type=$_GET['type'];
if($type==$data['type']){
?>
            <div class="col-md-4">
                <div>
                <p><a href="comment.php?id=<?php echo $data['id'];?>"><img src="uploads/<?php echo $data['picture']; ?>" class="img-thumbnail picture"></a></p>
</div>

                <h2><?php echo $data['title']?></h2> <!-- database ma vaako title tanxa esleyy-->
                <p><?php echo $data['description']?></p> <!-- database ma vaako description tanxa esleyy-->
                <p><?php echo $data['artist']?></p>
                <p><?php echo $data['price']?></p>
                <p><?php echo $data['type']?></p>


                <?php  if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin")) {
        ?>
                
                <a href="action.php?productid=<?php echo $data ['id'] ?>">DELETE</a>
                <a href="update.php?id=<?php echo $data ['id'] ?>"> UPDATE</a>
                
                <?php } ?>



            </div>
     

<?php
}
}



?>

    

</div>
    </div>
<?php 
include('footer.php');
?>

</body>
</html>