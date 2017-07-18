<html>
    <head>
        <title>My View</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      <style>
             
/* Set padding to keep content from hitting the edges */
.body-content {
    padding-left: 15px;
    padding-right: 15px;
}
.navbar {
    border-radius: 0px;
}
.glyphicon {
    font-size: 15px;
}
/* Override the default bootstrap behavior where horizontal description lists 
   will truncate terms that are too long to fit in the left column 
*/
.dl-horizontal dt {
    white-space: normal;
}

/* Set width on the form input elements since they're 100% wide by default */
input,
select,
textarea {
    max-width: 280px;
}

/*#region Blog*/
.blogContainer {
    overflow: hidden;
    margin-top: 50px;
}

    .mainblogview hr {
        width: 95%;
        margin: 0 auto;
    }

.mainblogbar {
    width: 29%;
    min-height: 500px;
    float: right;
}

    .mainblogbar .blogControlPanel {
        background-color: rgba(255, 255, 255, 0.50);
        border: solid #750000 0.5px;
        -moz-box-shadow: 0 1px 4px #999;
        -webkit-box-shadow: 0 1px 4px #999;
        box-shadow: 0 1px 4px #999;
        width: 99%;
        margin-bottom: 5px;
        overflow: hidden;
    }

        .mainblogbar .blogControlPanel .blogCtrlTable {
            width: 100%;
            margin-top: 5px;
        }

            .mainblogbar .blogControlPanel .blogCtrlTable td {
                padding: 1px 5px;
            }

            .mainblogbar .blogControlPanel .blogCtrlTable .blgCtrlPnl {
                text-decoration: none;
                color: blue;
                font-size: 14px;
            }

    .mainblogbar .adminBlogCtrl {
        background-color: rgba(255, 255, 255, 0.50);
        border: solid #750000 0.5px;
        -moz-box-shadow: 0 1px 4px #999;
        -webkit-box-shadow: 0 1px 4px #999;
        box-shadow: 0 1px 4px #999;
        width: 99%;
        margin-bottom: 5px;
        overflow: hidden;
    }

        .mainblogbar .adminBlogCtrl table {
            margin: 10px;
        }

            .mainblogbar .adminBlogCtrl table td a {
                text-decoration: none;
                color: blue;
            }

/*#endregion Blog*/

/*#region Posts*/

.postDescContainer {
    border: solid 0.5px;
    background-color: rgba(255, 255, 255, 0.50);
    border-radius: 10px;
    width: 800px;
    margin: 10px auto;
    padding: 10px;
    overflow: hidden;
}

    .postDescContainer a {
        text-decoration: none;
        color: blue;
        width: 80%;
    }

    .postDescContainer .postDescTitle {
        width: 80%;
    }

        .postDescContainer .postDescTitle h3 {
            margin: 5px 0;
        }

    .postDescContainer .postPubDate {
        font-style: italic;
        color: #5f80ff;
        margin: 5px 0;
        float: right;
    }

    .postDescContainer .postDescCategory {
        display: inline-block;
        margin: 5px 0;
    }

        .postDescContainer .postDescCategory .postDescCatNames {
            float: left;
        }

        .postDescContainer .postDescCategory label {
            float: left;
            font-style: italic;
            font-weight: bold;
        }

    .postDescContainer .postDescBody {
        margin-bottom: 10px;
    }

    .postDescContainer .postVidCont {
        float: right;
        width: 200px;
    }

    .postDescContainer .postVidThumb {
        width: 200px;
        height: 50px;
    }

        .postDescContainer .postVidThumb img {
            margin-bottom: 5px;
        }

.mainblogview .paging {
    position: absolute;
    bottom: 0;
}

.mainblogview #spacer {
    width: 100%;
    height: 50px;
    float: left;
    display: inline-block;
}

.mainblogview .pagination-container {
    margin-left: 20px;
}

.mainblogview .pagenum {
    margin-left: 20px;
}
/*#endregion Posts*/

/*#region Allposts*/
.postsTable {
    background-color: rgba(255, 255, 255, 0.50);
    -moz-box-shadow: 0 1px 4px #999;
    -webkit-box-shadow: 0 1px 4px #999;
    box-shadow: 0 1px 4px #999;
    width: 100%;
    border-collapse: collapse;
}

    .postsTable a {
        text-decoration: none;
        color: blue;
    }

    .postsTable th {
        border: solid #750000 0.5px;
        text-align: center;
        padding: 5px;
    }

    .postsTable td {
        padding: 5px;
        border: solid #750000 0.5px;
    }

    .postsTable .tableTitle {
        width: 200px;
    }

/*#endregion Allposts*/

/*#region Post*/
.postContainer {
    background-color: rgba(255, 255, 255, 0.70);
    border-radius: 10px;
    width: 95%;
    margin: 0 auto;
    padding: 10px;
    overflow: hidden;
}

    .postContainer .postHeader {
        overflow: hidden;
    }

    .postContainer a {
        text-decoration: none;
        color: blue;
    }

    .postContainer .postTitle {
        text-align: center;
    }
    
     .postContainer .postBody {
        width: 90%;
        margin: 10px auto;
        position: relative;
        padding: 10px;
        -ms-word-wrap: break-word;
        word-wrap: break-word;
    }

    .postContainer .postBody pre, .commentBody pre {
            padding: 10px;
            border-radius: 10px;
            background-color: #750000;
            color: #ffffff;
            margin-bottom: 10px;
        }

    .postContainer .postBody {
        width: 90%;
        margin: 10px auto;
        position: relative;
        padding: 10px;
        -ms-word-wrap: break-word;
        word-wrap: break-word;
    }

        .postContainer .postBody pre, .commentBody pre {
            padding: 10px;
            border-radius: 10px;
            background-color: #750000;
            color: #ffffff;
            margin-bottom: 10px;
        }
        input[type=text] {
            width: 160px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-position: 10px 10px; 
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }
        input[type=text]:focus {
            width: 100%;
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
                   <?php  if($this->session->userdata('role')==''){ ?>
                  <li><a href="<?php echo base_url()?>register_controller/login"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                <li><a href="<?php echo base_url()?>register_controller/index"><span class="glyphicon glyphicon-log-in"></span>REGISTER</a></li>
                   <?php } ?>
                  <?php  if($this->session->userdata('role')=='admin'){ ?>
                 <a href="<?php echo base_url()?>post_controller/index"><input type="submit" name="insert" value="CREATE POST" class="btn btn-primary btn-sx"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="dropdown pull-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>front_controller/admin">ADMIN</a></li>
                             <li><a href="<?php echo base_url()?>front_controller/get_profile">YOUR POSTS</a></li>
                            <li><a href="<?php echo base_url()?>front_controller/logout">LOGOUT</a></li>                          
                          </ul>
                        </li>
                   <?php } ?>
                 <?php  if($this->session->userdata('role')=='user'){ ?>
                 <a href="<?php echo base_url()?>post_controller/index"><input type="submit" name="insert" value="CREATE POST" class="btn btn-primary btn-sx"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="dropdown pull-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>front_controller/get_profile">YOUR POSTS</a></li>
                            <li><a href="<?php echo base_url()?>front_controller/logout">LOGOUT</a></li>                          
                          </ul>
                        </li>
                   <?php } ?>        
              </ul>
            </div>
           </nav>          
            <form class="form-inline" role="form" method="post" action="<?php echo base_url()?>front_controller/search_post">
            <div class="form-group">
                <input type="text" class="form-control" name="search" id="search" placeholder="Search Post">
            </div>
                <button type="submit" class="btn btn-info" name="submit">Search&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span></button>
            </form>
            <div class="pull-left">
             <?php if($fetch_data!='')
                {
                    foreach($fetch_data as $row)
                    {
                        ?>
                 <div class="blogContainer" id="blog">
                <div class="mainblogview">
                 <div ng-app="PostModule" ng-controller="PostCtrl" style="overflow:hidden;width:100%;">
                   <div ng-repeat="posts in postsData" class="postDescContainer">
                       <div class="postDescTitle"><h3><b><?php echo $row->post_title ?></b></h3></div>
                         <br>
                       <div class="postPubDate">
                            <label>Posted On :</label> <?php echo $row->date?>
                        </div>
                       <div class="postDescCategory">
                           Posted By <b><?php echo $row->user_name ?></b> in <b><?php echo $row->category_name ?></b>
                        </div>
                         <br><br>
                       <div class="postDescBody">
                            <?php echo substr($row->post_content,0,550) ?>
                    </div>
                    </div>
                       <a href="<?php echo base_url();?>front_controller/read_more/<?php echo $row->post_id?>" class="btn btn-primary active" role="button">Read More</a>
                </div>
                </div>
                </div>
                       <?php } ?>
            <?php }?>
                  <?php echo $links ?>   
                    </div>
                  <div class="pull-right">
                  <ul class="list-group">
                      <li class="list-group-item">
                          <h2>Categories</h2></li>                          
                        <?php if(count($getCat)): ?>
                        <?php foreach($getCat as $categories): ?>                   
                      <a href="<?php echo base_url();?>front_controller/fetch_cat/<?php echo $categories->category_id?>"><li class="list-group-item"><?php echo $categories->category_name ?></li></a>
                            <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?>
                     </ul>
                 <ul class="list-group">
                     <li class="list-group-item">
                         <h2>Tags</h2></li>
                   <?php if(count($getTag)): ?>
                        <?php foreach($getTag as $tags): ?>
                     <a href="<?php echo base_url();?>front_controller/fetch_tag/<?php echo $tags->tag_id?>"><li class="list-group-item"><?php echo $tags->tag_name ?></li></a>
                        <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?>
                 </ul>
               </div>
        </body>
</html>