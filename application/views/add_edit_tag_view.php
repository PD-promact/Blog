<!DOCTYPE html>
<html>
        <head>
               
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">BLOGGING</a>
                </div>
                <div class="nav navbar-nav pull-right">                        
                         <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url()?>after_login_controller/index">HOME</a></li>
                        <li class="dropdown pull-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>after_login_controller/logout">LOGOUT</a></li>                          
                          </ul>
                        </li>
                      </ul>
                    </div>       
              </div>
             </nav>
        <style>
            .glyphicon {
            font-size: 20px;
        }
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
        </head>
        <body>

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="<?php echo base_url()?>cat_tag_controller/index">Manage Categories</a>
          <a href="<?php echo base_url()?>cat_tag_controller/tag">Manage Tags</a>
          <a href="<?php echo base_url()?>post_controller/post">Manage Posts</a>
        </div>

        <div id="main">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Managing Options</span>
        </div>

        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
        }
        </script>
        <div class="containter">
            <br/><br/><br/>
            <form method="post" action="<?php echo base_url()?>cat_tag_controller/tag_validation">
                <?php
                if($this->uri->segment(2)=="inserted")
                {
                    echo '<p class="text-success">Category is inserted</p>';
                }
                ?>
                <?php
                if(isset($user_data))
                {
                    foreach($user_data->result() as $row)
                    {
                        ?>
                <h1 align="center"><b>Edit Tag</b></h1><br/>
                                 <div class="form-group">
                                    <label>Tag Name</label>
                                    <input type="text" name="tag" value="<?php echo $row->tag_name; ?>" class="form-control"/>
                                    <span class="text-danger"><?php echo form_error("tag"); ?></span>
                                </div>                
                                  <div class="form-group">
                                <input type="hidden" name="hidden_id" value="<?php echo $row->tag_id; ?>">
                              <input type="submit" name="update_tag" value="SAVE" class="btn btn-primary center-block btn-sx"/>
                              <input type="reset" name="reset" value="CANCEL" class="btn btn-primary center-block btn-sx"/>
                                </div>            
                        <?php
                    }
                }
                else{
                ?>
                <h1 align="center"><b>Add Tag</b></h1><br/>
                  <div class="form-group">
                    <label>Tag Name</label>
                    <input type="text" name="tag" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("tag"); ?></span>
                </div>           
                  <div class="form-group">
                      <input type="submit" name="insert_tag" value="SAVE" class="btn btn-primary center-block btn-sx"/>
                      <input type="reset" name="reset" value="CANCEL" class="btn btn-primary center-block btn-sx"/>
                </div>
               
                <?php } ?>
            </form>
        </div>
        <br/><br/><br/>
</html>