<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Teacher Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="adminpage_teacher.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="main.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logoKU.gif" alt="KU logo" id="logo"style="width:200px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><span><i class="fas fa-chalkboard"></i> เพิ่มรายวิชา</span></a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="#"><span><i class="fas fa-graduation-cap"></i>  เพิ่มอาจารย์</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><span><i class="fas fa-user-graduate"></i> เพิ่มนักเรียน</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><span><i class="fas fa-key"></i> เปลี่ยนรหัสผ่าน</span></a>
    </li>
    <button class="btn btn-outline-danger" id = "logout"><i class="fa fa-circle-o-notch"></i></span>Logout</span></button> 
  </ul>
</nav>


<span style="font-weight:bold" id = "obj">เพิ่มอาจารย์ </span>
<div class="form-group">
  <label for="info" id = "code-label"><span class="badge badge-dark">รหัสอาจารย์</span></label>
  <input type="text" class="form-control" id="code">
  <label for="info" id = "name-label"><span class="badge badge-dark">ชื่ออาจารย์</span></label>
  <input type="text" class="form-control" id="name">
  <label for="info" id = "faculty-label"><span class="badge badge-dark">คณะ</span></label>
  <input type="text" class="form-control" id="faculty">
  <label for="info" id = "department-label"><span class="badge badge-dark">ภาควิชา</span></label>
  <input type="text" class="form-control" id="department">
  <label for="info" id = "email-label"><span class="badge badge-dark">Email</span></label>
  <input type="text" class="form-control" id="email">
</div>
<button type="button" class="btn btn-outline-success"id="submitinfo">SUBMIT</button>

</body>
</html>