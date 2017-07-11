<!DOCTYPE html>
<html>
    <head>
        <title>Create Blog Form</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    </head>
    <style>
        .glyphicon.glyphicon-user {
            font-size: 25px;
        }   
    </style>
    <body>
       <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">BLOGGING</a>
          </div>
             <div class="nav navbar-nav navbar-right">
                 <input type="submit" name="insert" value="CREATE POST" class="btn btn-primary btn-sx"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span></a>
                  </div>
        </div>
       </nav>
        <div class="container">
            <br/>
            <form method="post" action="<?php echo base_url();?>create_blog_controller/blog_form_validation">
                 <?php
                if($this->uri->segment(2)=="inserted")
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
                    <select class="form-control" id="tag" multiple="multiple" name="tag">
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
                    <input type="submit" name="insert" value="SUBMIT" class="btn btn-primary center-block btn-sx">
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
