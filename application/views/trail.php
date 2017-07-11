<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css"></script>
    </head>
    <form>
    <div>
        <label>Tags</label>
        <select class="form-control" id="tags" multiple="multiple" name="tags">
            <option value="">Select Tags</option>
       <?php if(count($getTag)): ?>
            <?php foreach($getTag as $tags): ?>
          <option value=<?php echo $tags->tag_id ?>><?php echo $tags->tag_name ?></option>
            <?php endforeach;?>
        <?php else :?>
            <?php endif; ?>
       </select>
   </div>
    </form>
    <script type="text/javascript" id="example">
       $('#tags').multiselect({
           enableClickableOptGroups:true
       });
     </script>
</html>