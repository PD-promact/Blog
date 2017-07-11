<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <body>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="">Admin Panel</a>
        </div>
        <ul class="nav navbar-nav">
<!--          <li class="active"><a href="#">Home</a></li>-->
          <li><a href='<?php echo base_url();?>register_controller/index'>Employee Registration Form</a></li>
          <li><a href='<?php echo base_url();?>users_list_controller/index'>Employees List</a></li>
          <li><a href='<?php echo base_url();?>salary_controller/index'>Salary Entry Form</a></li>
          <li><a href='<?php echo base_url();?>salary_list_controller/index'>Salary Details</a></li>
          <li><a href='<?php echo base_url();?>department_controller/index'>Departments</a></li>
          <li><a href='<?php echo base_url();?>admin_controller/logout'>Logout</a></li>
        </ul>
      </div>
    </nav>
        <h1>Hi welcome, you login as <b><?php echo $login_name; ?></b></h1>
    </body>
</html>