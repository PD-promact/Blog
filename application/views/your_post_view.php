<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
               <li><a href="<?php echo base_url()?>after_login_controller/get_profile">YOUR POSTS</a></li>
               <li><a href="<?php echo base_url()?>after_login_controller/logout">LOGOUT</a></li>                          
             </ul>
           </li>
         </ul>
       </div>       
      </div>
     </nav>
<h1 align="center"><b>Your Posts</b></h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Sr. No.</th>
                    <th>Post Name</th>
                    <th>Operations</th>
                </tr>
                <?php
            
                if($my_data->num_rows()> 0)
                {
                    foreach($my_data->result() as $row)
                    {
                        ?>
                <tr>
                    <td><?php echo $row->post_id; ?></td>
                    <td><?php echo $row->post_title; ?></td>
                    <td><a href="#" class="delete_post" id="<?php echo $row->post_id; ?>">Delete</a>|
                    <a href="<?php echo base_url(); ?>post_controller/update_your_post/<?php echo $row->post_id; ?>">Edit</a></td>
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
        $('.delete_post').click(function(){
            var post_id=$(this).attr("id");
            if(confirm("Are you sure wanna delete this?"))
            {
                window.location="<?php echo base_url(); ?>after_login_controller/delete_post/"+post_id;
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