<?php
$connection = mysqli_connect("localhost","root","","parking");

$source="";
if(isset($_GET['source'])){
    $source=$_GET['source'];
    if($source=="0"){
        $number = $_GET['number'];
        $query = "UPDATE space SET status=1 where number=$number";
        $fire = mysqli_query($connection,$query);
    }else if($source=="1"){
        $number = $_GET['number'];
        $query1 = "UPDATE space SET status=0 where number=$number";
        $fire1 = mysqli_query($connection,$query1);
    }
}    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>output</title>
<!--  -->
<style>
    
        .box1 {
    width: 200px;
    height: 100px;
    border: none;
    box-sizing: border-box;
    background-color: <?php
        $connection = mysqli_connect("localhost","root","","parking");
 $query = "Select * from space";

    $result = mysqli_query($connection,$query);
                    if(!$result)
                        die("error due to ".mysqli_error($connection));
    while($row = mysqli_fetch_assoc($result)){
        $status = $row['status'];
        
        $number = $row['number'];
        $address = $row['address'];
                    if($status == '1'and $number == '1'){
                       echo "green;";
                       
                    }else{
                      echo "red;";  
                    } 
    }
        
        ?>; }
            
        .box2 {
    width: 200px;
    height: 100px;
    border: none;
    box-sizing: border-box;
    background-color:  <?php
        $connection = mysqli_connect("localhost","root","","parking");
 $query = "Select * from space";

    $result = mysqli_query($connection,$query);
                    if(!$result)
                        die("erroe due to ".mysqli_error($connection));
    while($row = mysqli_fetch_assoc($result)){
        $status = $row['status'];
        
        $number = $row['number'];
        $address = $row['address'];
                    
    }
    if($status == '1'and $number == '2'){
                       echo "green;";
                       
                    }else{
                      echo "red;";  
                    } 
        
?>; }
    
    .box3 {
        width: 30px;
        height: 20px;
        border: none;
        box-sizing: border-box;
        background-color: red;
    }
    
    .box4 {
        width: 30px;
        height: 20px;
        border: none;
        box-sizing: border-box;
        background-color: green;
    }
    

.content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}  


</style>

</head>

<body>
  <div class="container">
   <div class="display">
    <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" >Slot Number</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
   <tbody>
       <tr>
           <th scope="row">1</th>
           <th><div class="box1"></div></th>
       </tr>
       
       <th scope="row">2</th>
       <th><div class="box2"></div></th>
   </tbody>
    </table>
    </div>
    </div><!--.container-->

    
    <div class="content">
        <h1>Status Details</h1>
        <h4>If the slot is EMPTY : </h4><div class="box3"></div>
        <h4>If the slot is FULL : </h4><div class="box4"></div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
