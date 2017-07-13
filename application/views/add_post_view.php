<!DOCTYPE html>
<html>
    <head>
        <title>Create Blog Form</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        .glyphicon {
    font-size: 20px;
}
    </style>
    <body>
       <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">BLOGGING</a>
          </div>
              <div class="nav navbar-nav pull-right">                        
                <ul class="nav navbar-nav">
                     <a href="<?php echo base_url()?>post_controller/index"><input type="submit" name="insert" value="CREATE POST" class="btn btn-primary btn-sx"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <li class="dropdown pull-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span>
                 <ul class="dropdown-menu">
                   <li><a href="#">ADMIN</a></li>
                   <li><a href="#">LOGOUT</a></li>                          
                 </ul>
               </li>
             </ul>
           </div>       
        </div>
       </nav>
        <div class="container">
            <br/>
            <form method="post" action="<?php echo base_url();?>post_controller/post_form_validation">
                 <?php
                if($this->uri->segment(2)=="inserted_post")
                {
                    echo '<p class="text-success">Your Post Is Uploaded Successfully!!</p>';
                }
                ?>
                <h1><b>Create Post</b></h1>
                <fieldset class="well the-fieldset">
                <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" name="post_title" class="form-control">
                    <span class="text-danger"><?php echo form_error('post_title');?></span>
                </div>
                <div class="form-group">
                    <label>Post Content</label><br>
                    <textarea rows="5" cols="154" name="post_content"></textarea>
                    <span class="text-danger"><?php echo form_error('post_content');?></span>
                </div>
                <div>
                    <label>Category</label>
                     <select name="category" class="form-control">
                         <option value="">Select Category</option>
                    <?php if(count($getCat)): ?>
                         <?php foreach($getCat as $categories): ?>
                          <option value=<?php echo $categories->category_id ?>><?php echo $categories->category_name ?></option>
                         <?php endforeach;?>
                     <?php else :?>
                         <?php endif; ?>
                    </select>
                       <span class="text-danger"><?php echo form_error("category"); ?></span>
                </div>
                    <br>
                <div>
                    <label>Tags</label><br>
                    <select class="form-control" id="tag" multiple class="form-control" name="tag[]">
                        <option value="">Select Tags</option>
                   <?php if(count($getTag)): ?>
                        <?php foreach($getTag as $tags): ?>
                      <option value=<?php echo $tags->tag_id ?>><?php echo $tags->tag_name ?></option>
                        <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?>
                   </select>
                      <span class="text-danger"><?php echo form_error("tag"); ?></span>
               </div>
                <div class="form-group">
                    <input type="submit" name="insert_post" value="SUBMIT" class="btn btn-primary center-block btn-sx">
                    <?php echo $this->session->flashdata("error");?>
                </div>
                </fieldset>
             </form>
        </div>
    </body>
     <script type="text/javascript">
         $(document).ready(function(){
       $('#tag').multiselect();
       });
     </script>
</html>
