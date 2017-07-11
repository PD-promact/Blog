<html>
    <head>
        <title>My View</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
        <body>
             <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">BLOGGING</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                <li><a href="<?php echo base_url()?>register_controller/index"><span class="glyphicon glyphicon-log-in"></span>REGISTER</a></li>
              </ul>
            </div>
           </nav>
<!--                <?php
              if($this->session->userdata('role')==''){ ?>
            <ul class="nav navbar-nav">
              <li class="active"><a href=''></a></li>
              <li><a href="<?php echo base_url();?>register_controller/login">Login</a></li>
            </ul>
            <?php } ?>
                <?php
                if($this->session->userdata('role')=='admin'){ ?>
            <ul class="nav navbar-nav">
              <li class="active"><a href=''></a></li>
              <li><a href="<?php echo base_url();?>admin_controller/index">Home</a></li>
              <li><a href='<?php echo base_url();?>users_list_controller/index'>Check Employees List</a></li>
            </ul>
            <?php } ?>
             <?php
                if($this->session->userdata('role')=='employee'){ ?>
            <ul class="nav navbar-nav">
              <li class="active"><a href=''></a></li>
              <li><a href="<?php echo base_url();?>employee_controller/index">Back To Profile</a></li>
            </ul>
            <?php } ?>
          </div>
        </nav>
        </body>
        </head>
        <body>-->
        <div class="containter">
            <br/><br/><br/>
            <form method="post" action="<?php echo base_url()?>register_controller/form_validation">
                <?php
                if($this->uri->segment(2)=="inserted")
                {
                    echo '<p class="text-success">Registered Successfully!! Now you can Login!!</p>';
                }
                ?>
                <?php
                if(isset($user_data))
                {
                    foreach($user_data->result() as $row)
                    {
                        ?>
                <h1 align="center"><b>Update Your Details</b></h1><br/>
                                 <div class="form-group">
                                    <label>Enter Your First Name</label>
                                    <input type="text" name="fname" value="<?php echo $row->first_name; ?>" class="form-control"/>
                                    <span class="text-danger"><?php echo form_error("fname"); ?></span>
                                </div>        
                                 <div class="form-group">
                                    <label>Enter Your Last Name</label>
                                    <input type="text" name="lname" value="<?php echo $row->last_name; ?>" class="form-control"/>
                                    <span class="text-danger"><?php echo form_error("lname"); ?></span>
                                </div>            
                                  <div class="form-group">
                                    <label>Enter Your User Name</label>
                                    <input type="text" name="uname" value="<?php echo $row->login_name; ?>" class="form-control"/>
                                    <span class="text-danger"><?php echo form_error("uname"); ?></span>
                                </div>
                                  <div class="form-group">
                                    <label>Enter Your Email</label>
                                    <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control"/>
                                    <span class="text-danger"><?php echo form_error("email"); ?></span>
                                </div>           
                                  <div class="form-group">
                                    <label>Enter Your Password</label>
                                    <input type="password" name="password" value="<?php echo $row->password; ?>" class="form-control"/>
                                    <span class="text-danger"><?php echo form_error("password"); ?></span>
                                </div>            
                                  <div class="form-group">
                                    <label>Enter Your Birth Date</label>
                                    <input type="date" name="date_of_birth" value="<?php echo $row->date_of_birth; ?>" class="form-control"/>
                                       <span class="text-danger"><?php echo form_error("date_of_birth"); ?></span>
                                </div> 
                                <div>
                                     <label>Enter Department</label>
                                     <select name="department" class="form-control">
                                         <option value="">Select</option>
                                    <?php if(count($getDepts)): ?>
                                         <?php foreach($getDepts as $departments): ?>
                                          <option value="<?php echo $departments->dept_id ?>"<?php if($row->department==$departments->dept_id) echo 'selected="selected"'; ?>><?php echo $departments->dept_title ?></option>
                                         <?php endforeach;?>
                                     <?php else :?>
                                         <?php endif; ?>
                                    </select>
                                        <span class="text-danger"><?php echo form_error("department"); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Employee Code</label>
                                        <input type="text" name="employee_code" value="<?php echo $row->employee_code; ?>" class="form-control"/>
                                        <span class="text-danger"><?php echo form_error("employee_code"); ?></span>
                                    </div>
                                    <div>
                                         <label>Enter Designation</label>
                                         <select name="designation" class="form-control">
                                             <option value="">Select</option>
                                        <?php if(count($getDes)): ?>
                                             <?php foreach($getDes as $designations): ?>
                                              <option value="<?php echo $designations->des_id ?>"<?php if($row->designation==$designations->des_id) echo 'selected="selected"'; ?>><?php echo $designations->des_title ?></option>
                                             <?php endforeach;?>
                                         <?php else :?>
                                             <?php endif; ?>
                                        </select>
                                            <span class="text-danger"><?php echo form_error("designation"); ?></span>
                                    </div>
                                        <div class="form-group">
                                                 <label>Role:</label>
                                            <select name="role" class="form-control"/>
                                            <option value="<?php echo $row->role ?>"><?php echo $row->role ?></option>
                                        </select>
                                        </div>        
                                      <div class="form-group">
                                <input type="hidden" name="hidden_id" value="<?php echo $row->emp_id; ?>">
                              <input type="submit" name="update" value="update" class="btn btn-info"/>
                        </div>            
                        <?php
                    }
                }
                else{
                ?>
                <fieldset class="well the-fieldset">
                  <div class="form-group">
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
                <?php } ?>
            </form>
        </div>
        <br/><br/><br/>
</html>