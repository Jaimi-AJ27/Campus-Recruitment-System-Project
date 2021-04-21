<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
   background: linear-gradient(to bottom left, #000 0%, #003366 100%);

  padding: 20px 10px;
  
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #black;
  color: white;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        color: #fff;
    }
    .fixed-header{
        top: 0;
    }
	.header a.ac {
  
  color: white;
}
      
</style>
</head>
<body>
<div class="fixed-header">
<div class="header">
  <a href="#default" class="logo">CRMS</a>
  <div class="header-right">
    <a class="active" href="../index.html">HOME</a>
    <a class="ac" href="../login.php">LOGIN</a>
  
  </div>
</div>
</div>



</body>
</html>
