
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">





</head>

<body>
   <form action="" method="POST">
    <table class="table">
        <thead>
            <tr>
                <th>slot number</th>
                <th>status</th>
                
            </tr>
        </thead>
       
        <tbody>
            <tr>
                <td>1</td>
                <td><?php
                 if(isset($_POST['refresh'])){
    $connection = mysqli_connect("localhost","root","","parking");
    if(!$connection){
        die("Check Conn");
    }
                     $query = "Select * from space";

    $result = mysqli_query($connection,$query);
                    if(!$result)
                        die("erroe due to ".mysqli_error($connection));
    while($row = mysqli_fetch_assoc($result)){
        $status = $row['status'];
        
        $number = $row['number'];
        $address = $row['address'];
                    if($status == '0'){
                        echo "empty";
                    }else{
                        echo "not Empty";
                    }
    }
                 }
                    
?>
           </td>
            </tr>
           
        </tbody>
    </table>
    
    <button type="submit" name="refresh">Show</button>
</form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

</script>
</body>
</html>

    