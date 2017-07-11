<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">BLOGGING</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-chevron-down"></span></span></a></li>
        </ul>
      </div>
     </nav>
<style>
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
  <a href="#">Manage Posts</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
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
  <div class="form-group">
           <a href="<?php echo site_url('cat_tag_controller/form_cat'); ?>" class="btn btn-info" >Add</a>
                </div>
<h1 align="center"><b>Manage Categories</b></h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Sr. No.</th>
                    <th>Category Name</th>
                    <th>Operations</th>
                </tr>
                <?php
            
                if($fetch_cat->num_rows()> 0)
                {
                    foreach($fetch_cat->result() as $row)
                    {
                        ?>
                <tr>
                    <td><?php echo $row->category_id; ?></td>
                    <td><?php echo $row->category_name; ?></td>
                    <td><a href="#" class="delete_data" id="<?php echo $row->category_id; ?>">Delete</a>|
                    <a href="<?php echo base_url(); ?>cat_tag_controller/update_cat/<?php echo $row->category_id; ?>">Edit</a></td>
                </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                <tr>
                    <td colspan="2">No Data Found</td>
                </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
    <script>
    $(document).ready(function(){
        $('.delete_data').click(function(){
            var category_id=$(this).attr("id");
            if(confirm("Are you sure wanna delete this?"))
            {
                window.location="<?php echo base_url(); ?>cat_tag_controller/delete_cat/"+category_id;
            }
            else
            {
                return false;
            }
        });
    });
</script>
    
</body>
</html> 
