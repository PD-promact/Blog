<html>
    <head>
        <title>My View</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <style>
            .navbar {
            border-radius: 0px;
        }
        </style>
    </head>
        <body>
             <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">BLOGGING</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo base_url()?>register_controller/login"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                <li><a href="<?php echo base_url()?>register_controller/index"><span class="glyphicon glyphicon-log-in"></span>REGISTER</a></li>
              </ul>
            </div>
           </nav>               
        <div class="containter">
            <br/><br/><br/>
            <form method="post" action="<?php echo base_url()?>register_controller/form_validation">
                <?php
                if($this->uri->segment(2)=="inserted")
                {
                    echo '<p class="text-success">Registered Successfully!! Now you can Login!!</p>';
                }
                ?>
                <fieldset class="well the-fieldset">
                  <div class="form-group">
                 <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user_name" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("user_name"); ?></span>
                </div>           
                    <label>Email ID</label>
                    <input type="text" name="email" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("email"); ?></span>
                </div>           
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("password"); ?></span>
                </div>   
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="passconf" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("passconf"); ?></span>
                </div>     
                  <div class="form-group">
                      <input type="submit" name="insert" value="REGISTER" class="btn btn-primary center-block btn-sx"/>
                </div>
                </fieldset>
            </form>
        </div>
        <br/><br/><br/>
</html>