<?php
//$connection = mysqli_connect("localhost","root","","parking");
// $query = "Select * from space";
//
//    $result = mysqli_query($connection,$query);
//                    if(!$result)
//                        die("erroe due to ".mysqli_error($connection));
//    while($row = mysqli_fetch_assoc($result)){
//        $status = $row['status'];
//        
//        $number = $row['number'];
//        $address = $row['address'];
//                    if($status == '0'){
//                       echo "<div class='box1'>";
//                    }else{
//                        echo "<div class='box2'>";
//                    }
//    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>status</title>
</head>
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
                        die("erroe due to ".mysqli_error($connection));
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
        
?>;
}
    
    .box2 {
    width: 200px;
    height: 100px;
    border: none;
    box-sizing: border-box;
    background-color: <?php
        $connection = mysqli_connect("localhost","root","","parking");
 $query = "Select * from space";

    $result = mysqli_query($connection,$query);
                    if(!$result)
                        die("erroe due to ".mysqli_error($connection));
    while($row = mysqli_fetch_assoc($result)){
        $status = $row['status'];
        
        $number = $row['number'];
        $address = $row['address'];
                    if($status == '1'and $number == '2'){
                       echo "green;";
                       
                    }else{
                      echo "red;";  
                    } 
    }
        
?>;
}
    .text {
        font-size: 20px;
        text-align: center;
        color: black;
    }
    
</style>
<body>
   
   <div class="box1">
      <div class="text">
         Slot 1
       </div>
   </div>
   
   <div class="box2">
         <div class="text">
          Slot 2
       </div>
   </div>
    
</body>
</html>