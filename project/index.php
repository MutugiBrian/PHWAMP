<?php
include 'sections/header.php';
?>


<?php
  if(isset($_GET['page'])){ 
  
  if($_GET['page']=='logout'){
  // LOGGED OUT ALERT CODE COMES HERE

  /*if(isset($_SESSION['id'])){
    //UPDATE TO DB AS OFFINE
    $ts = time();
    $uid = $_SESSION['id']; 
    $indreg = "UPDATE `users` SET `lsts` = '' WHERE `users`.`id` = $uid";   
    $indregarray = $conn->query($indreg); 
    if ($indregarray === TRUE) {
    //code to alert the update
    }else{
    //code to alert the error
    } 
    }
    session_destroy();
    echo "<script>window.location='?';</script>";*/ 
   
   
   }else{
  
              
              if($_GET['page']=='home')include('includes/home.php');              
              else {
                if (!file_exists('pages/'.$_GET['page'].'.php')){
                  echo "<script>alert('PAGE UNDER CONSTRUCTION');</script>";                
                } 
                
                include('pages/'.$_GET['page'].'.php');
              } }
            }else{
include 'pages/home.php';
}










include 'sections/footer.php';
?>



  