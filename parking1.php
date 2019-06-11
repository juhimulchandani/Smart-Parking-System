<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
    position: relative;
    width: 100%;
    max-width: 400px;
}
    body {
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("parking1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
    
    }

.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 50%;
  margin-left: 145%;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 12px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    
    .text {
        font-family: 'Monotype Corsiva';
        text-align: center;
        color: antiquewhite;
        margin-top: 100px;
        font-size: 45px; 
        
    }
    .decoration{
        text-decoration: none;
        color: white;
    }
</style>
</head>
<body>

<div class="text">
    Smart Parking System
</div>

<div class="container">
    <button class="button"><a href="output.php" class="decoration"><span>Check Status</span></a></button>
</div>

</body>
</html>
