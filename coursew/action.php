<?php 
session_start();
include("database.php");

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $pass = md5($_POST['pass']);
    $repass = md5($_POST['repass']);
    if($pass==$repass){ 
        $queryone = "select * from gallery where mail='$mail'";
        $result= $conn->query($queryone);
        $userdata = $result->fetch_assoc();
        $count = $result->num_rows;
        if (!$count==0) {
            header("location:register.php?message=invalid");
        }
        else {

            $query = "insert into gallery (id, username, mail, pass) values (NULL, '$username', '$mail', '$pass' )";
        $conn->query($query);
        header("location:login.php");
    }

    }
    else {
        header("location:register.php?pass=invalid");
    }

}

//logincode
if(isset($_POST['login'])) {
    $mail = $_POST['mail'];
    $pass = md5($_POST['pass']);
    $query = "select * from gallery where mail='$mail' and pass='$pass'"; //suru ko mail database sanga milnu parxa
    $result = $conn->query($query); //query run gareko
    //fetches data from the database;
    $userdata = $result->fetch_assoc();
    $count = $result->num_rows; //khojna janxa rows ma xa ki xaena tyo value
    if ($count==0) {
        //login detail fail
        header("location:login.php?pass=invalid"); 
    }
    else{
        if($userdata['usertype']=='admin'){
            $_SESSION['usertype']='admin';
            $_SESSION['ticket'] = 'okay';
            $_SESSION['userid'] = $userdata['id'];
            header('location:userprofile.php');
        }
        else{

      
        $_SESSION['usertype']='user';
        $_SESSION['ticket'] = 'okay';
        $_SESSION['userid'] = $userdata['id']; //last ko id database bata taneko
        header('location:userprofile.php');
    }
    }
}
//addproduct
if(isset($_POST['addproduct'])) {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $description = $_POST['description'];
    echo $type = $_POST['type'];
    $price = $_POST['price'];
    $picture = $_FILES['picture'] ['name'];
    $ext = pathinfo($_FILES['picture'] ['name'], PATHINFO_EXTENSION);
    $random = rand(1,1000000);
    $newpicname = $random. "_myartgaller." .$ext;
    if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='gif'){
        
    move_uploaded_file($_FILES['picture'] ['tmp_name'], "uploads/".$newpicname);
$query = "insert into fineart (id, title, artist, description, type, price, picture ) values (NULL, '$title',  '$artist', '$description', '$type', '$price', '$newpicname' )";
$conn->query($query);
}
    else{
    echo "please upload files with jpg, png, jpeg or gif extensions.";
    }
    header("location:display.php");
}

//update product
if(isset($_POST['updateproduct'])) {
    $title = $_POST['uptitle'];
    $artist = $_POST['upartist'];
    $description = $_POST['updescription'];
    $type = $_POST['uptype'];
    $price = $_POST['upprice'];
    $id = $_POST['id'];

$query = "update fineart set title='$title', artist='$artist', description='$description', type='$type', price='$price' where id='$id'";
$conn->query($query);
header("location:display.php");
}

//delete product
if(isset($_GET['productid'])){
    $id=$_GET['productid'];
    $query = "delete from fineart where id= $id";
    $conn->query($query);
    header("location:display.php");
}
//comments
if(isset($_POST['comment'])){
    $comment=$_POST['commen'];
    $userid=$_POST['userid'];
    $productid=$_POST['productid'];
    $username=$_POST['username'];
    $query = "insert into comment (id,userid,productid,username,comment) values (NULL,'$userid','$productid','$username','$comment')";
    $conn->query($query);
    //echo "$comment";
   header("location:display.php");
}
//userprofileupdate
if(isset($_POST['updateuserprofile'])){
    $username=$_POST['username'];
    $mail=$_POST['mail'];
    $number=$_POST['number'];
    $id=$_POST['id'];
    $query = "update gallery set username='$username', mail='$mail', number='$number' where id='$id' ";
    $conn->query($query);
    header("location:userprofile.php");
}
//cancel 
if(isset($_POST['Cancel'])){
    header("location:display.php");
}
?>