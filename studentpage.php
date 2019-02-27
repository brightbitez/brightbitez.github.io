<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="studentpage.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="main.js"></script>
    
</head>
<body>
<img src="logoKU.gif" alt="KU logo" id="logo">
    <label id = "status"class="text">Logged in as: </label>
<form action="get">
<p id="pyear"class ="text">Year:</p>
<select id = "year" class = "select">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<p id="psemester" class="text">Semester:</p>
<select id = "semester"class ="select">
  <option value="first">First</option>
  <option value="second">Second</option>
</select>
</form>
<button class="control" id = "show-result"><i class="fa fa-file-text"></i>รายงานผลการเรียน</button>

<button class="control" id = "logout"><i class="fa fa-circle-o-notch"></i> Logout</button>



</body>
</html>