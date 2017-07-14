<html>
    <head>
        <title>My View</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
              /* Set padding to keep content from hitting the edges */
 .glyphicon {
    font-size: 20px;
}
.body-content {
    padding-left: 15px;
    padding-right: 15px;
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

.postLikes {
    border-radius: 10px;
    margin-top: 10px;
}

.postDislikes {
    border-radius: 10px;
    margin-top: 10px;
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

.submitBtnLink {
    border: none;
    cursor: pointer;
    color: blue;
    font-weight: bold;
    background: none;
    font-size: 16px;
}

.postsSearch {
    width: 100%;
    margin: 50px 0 10px 0;
    overflow: hidden;
}

    .postsSearch .allPostsForm {
        float: right;
    }

.postsFilter {
    float: left;
    max-width: 700px;
}

    .postsFilter table th {
        text-align: left;
        display: table-cell;
        vertical-align: text-top;
    }

    .postsFilter .postsFltInp {
        width: 100px;
        float: left;
    }

    .postsFilter .postFiltBtn {
        font-size: 18px;
        border: 1.5px groove;
        border-top: none;
        border-left: none;
        border-radius: 5px;
        float: right;
        background-color: rgba(255, 255, 255, 0.58);
        margin-top: 10px;
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

    .postContainer .postVote {
        float: left;
        margin-left: -10px;
        overflow: hidden;
        background: linear-gradient(lightgreen,#ff6d6d);
        border-radius: 0 10px 10px 0;
        min-width: 50px;
    }

        .postContainer .postVote table {
            margin: 0 auto;
        }

    .postContainer .postShare {
        float: right;
        margin-right: -10px;
        border-radius: 10px 0 0 10px;
        background: linear-gradient(#bdbdff,#a4a4fc);
        width: 40px;
    }

        .postContainer .postShare table {
            margin: 0 auto;
        }

    .postContainer .postVideo {
        width: 560px;
        margin: 0 auto;
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
        
.bottomContainer {
    width: 95%;
    margin: 0 auto;
    margin-top: 50px;
    padding: 10px;
    overflow: hidden;
}

.postMenu {
    overflow: hidden;
    margin-bottom: 10px;
}

    .postMenu .postMenuSub {
        width: 55px;
        float: right;
    }

.commentMenu {
    width: 60px;
    float: right;
    overflow: hidden;
    margin-bottom: 10px;
}

/*#endregion Post*/

/*#region EditPost*/
.editPostContainer {
    background-color: rgba(255, 255, 255, 0.70);
    border-radius: 10px;
    width: 95%;
    margin: 0 auto;
    padding: 10px;
    overflow: hidden;
}

    .editPostContainer .editPostId {
        width: 100%;
        overflow: hidden;
        float: left;
        display: inline-block;
        margin-bottom: 10px;
    }

        .editPostContainer .editPostId .editPostIdLbl {
            float: left;
            margin-right: 10px;
        }

        .editPostContainer .editPostId .editPostIdInp {
            width: 50px;
            display: block;
            border-radius: 10px;
            text-align: center;
        }

    .editPostContainer .editPostTitle {
        width: 100%;
    }

        .editPostContainer .editPostTitle .editPostTitleLbl {
            text-align: center;
            float: left;
        }

        .editPostContainer .editPostTitle .editPostTitleInp {
            width: 100%;
            display: block;
        }
            </style>    
    </head>
            
        <body>
             <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">BLOGGING</a>
                  </div>
                     <div class="nav navbar-nav pull-right">
                          <?php  if($this->session->userdata('role')=='admin'){ ?>
                         <ul class="nav navbar-nav">
                              <a href="<?php echo base_url()?>post_controller/index"><input type="submit" name="insert" value="CREATE POST" class="btn btn-primary btn-sx"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="dropdown pull-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span>
                          <ul class="dropdown-menu">
                            <li><a href="<?php base_url()?>admin">ADMIN</a></li>
                            <li><a href="<?php base_url()?>logout">LOGOUT</a></li>                          
                          </ul>
                        </li>
                      </ul>
                        <?php } ?>
                          <?php  if($this->session->userdata('role')=='user'){ ?>
                         <ul class="nav navbar-nav">
                              <a href="<?php echo base_url()?>post_controller/index"><input type="submit" name="insert" value="CREATE POST" class="btn btn-primary btn-sx"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="dropdown pull-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-menu-down"></span></span>
                          <ul class="dropdown-menu">
                            <li><a href="<?php base_url()?>logout">LOGOUT</a></li>                          
                          </ul>
                        </li>
                      </ul>
                        <?php } ?>
                    </div>                          
                  </div>                   
               </nav>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <form class="navbar-form navbar" role="search">
                <span class="glyphicon glyphicon-search"></span>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Post">
              </div>
            </nav>
            <div class="pull-left">
                  <?php if($fetch_data!='')
                {
                    foreach($fetch_data as $row)
                    {
                        ?>
                 <div class="blogContainer">
                <div class="mainblogview">
                 <div ng-app="PostModule" ng-controller="PostCtrl" style="overflow:hidden;width:100%;">
                   <div ng-repeat="posts in postsData" class="postDescContainer">
                       <div class="postDescTitle"><h3><b><?php echo $row->post_title ?></b></h3></div>
                       <br>
                       <div class="postPubDate">
                            <label>Posted On :</label><?php echo $row->date ?>
                        </div>
                        <div class="postBy">
                            Posted By <b><?php echo $row->user_name ?></b> in <b><?php echo $row->category_name ?></b>
                        </div>
                           <br>
                       <div class="postDescBody">
                            <?php echo substr($row->post_content,0,550) ?>                          
                    </div>
                        </div>
                    </div>
             </div>
                 </div>
                  <?php } ?>
            <?php }?>
                 <p><?php echo $links ?>Hii There are links</p>
            </div>
                  <div class="pull-right">
                  <ul class="list-group">
                        <li class="list-group-item">
                             <h2>Categories</h2></li>                            
                        <?php if(count($getCat)): ?>
                        <?php foreach($getCat as $categories): ?>          
                  <li class="list-group-item"><?php echo $categories->category_name ?></li>
                            <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?></li>
                     </ul>
                 <ul class="list-group">
                   <li class="list-group-item">
                       <h2>Tags</h2></li>
                   <?php if(count($getTag)): ?>
                       <?php foreach($getTag as $tags): ?>
                   <li class="list-group-item"><?php echo $tags->tag_name ?></li>
                        <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?>
                 </ul>
               </div>
        </body>
</html>
