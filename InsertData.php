

<!DOCTYPE html>
<html lang="en">
<title>InsertData</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/fonts1/css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="InsertData.html" class="w3-bar-item w3-button w3-padding-large">Insert</a>
    <a href="UpdateData.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Update</a>
    <a href="DeleteData.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Delete</a>
    <a href="ConnecttoDB.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">View</a> 
<a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>   
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<head>
    <title>Insert data to PostgreSQL with php - creating a simple web application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    li {
    list-style: none;
    }
    </style>
</head>
</body>
<body style='background-color:#EFF8FB;margin-top:10%'>
<div align="center">
<h1>INSERT DATA TO DATABASE</h1>
    <h2>Enter data into produce table</h2>
    <ul>
        <form name="InsertData" action="insert.html" method="POST" >
    <li>NameID:</li><li><input type="text" name="NameID" /></li>
    <li>NameCustomer:</li><li><input type="text" name="NameCustomer" /></li>
    <li>Price:</li><li><input type="text" name="Price" /></li>
    <li><input type="submit" value="Save" /></li>
        </form>
    </ul>
</body>
</html>
