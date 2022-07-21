<!DOCTYPE html>
<html>
<head>
    <title>File Complaints</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  height: 100vh;
  background-position: center;
  background-size: cover;
  background-image: url("brgy.jpg");
  min-height: 100%;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  width: 178px;
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">File Complaints</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
    
    <a href = "dashboard_Staffs.php">
    <button type="submit" class="button">Go to Dashboard</button>
    </a>
      <style>
      
    .button{
    background-color: #F8F9FA;
	border: 2px solid #2196F3;
    width: 178px;
    height: 50px;
    font-family: Helvetica, sans-serif;
    text-decoration: none;
    font-size: 17px;
    transition-duration: 0.3s;
    color: #576574;
    }
    
    .button:hover /*animation ng button*/
{
    background-color: #2196F3; /* blue */
    color: white;
}
       </style>



</body>
</html>
