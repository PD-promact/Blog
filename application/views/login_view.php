<!DOCTYPE html>
<html>
    <head>
        <title>Weblesson | <?php echo $title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
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
            <a class="navbar-brand" href="<?php echo base_url()?>front_controller/index">BLOGGING</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url()?>register_controller/login"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
            <li><a href="<?php echo base_url()?>register_controller/index"><span class="glyphicon glyphicon-log-in"></span>REGISTER</a></li>
          </ul>
        </div>
       </nav>
        <div class="container">
            <br/><br/><br/>
            <form method="post" action="<?php echo base_url();?>register_controller/login_validation">
                <fieldset class="well the-fieldset">
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo set_value('password');?>" class="form-control">
                    <span class="text-danger"><?php echo form_error('password');?></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" value="LOGIN" class="btn btn-primary center-block btn-sx">
                    <?php echo $this->session->flashdata("error");?>
                </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
