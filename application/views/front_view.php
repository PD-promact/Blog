<html>
    <head>
        <title>My View</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
      <style>
                body {
    padding-top: 50px;
    padding-bottom: 20px;
}

/* Set padding to keep content from hitting the edges */
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

.mainblogview {
    width: 70%;
    min-height: 500px;
    float: left;
    position: relative;
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
    width: 100%;
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

.commentContainer {
    width: 70%;
    min-width: 520px;
    overflow: hidden;
}

    .commentContainer .commHeader {
        width: 98%;
        padding: 5px;
        color: #5353f6;
    }

        .commentContainer .commHeader .commentSort {
            float: right;
        }

            .commentContainer .commHeader .commentSort td {
                padding-left: 15px;
            }

                .commentContainer .commHeader .commentSort td a {
                    text-decoration: none;
                    color: blue;
                }

                .commentContainer .commHeader .commentSort td #active {
                    color: rgba(0, 49, 116, 0.57);
                }


.collapseComment {
    display: none;
}

blockquote {
    padding: 0 5px;
    background-color: rgba(255, 255, 0, 0.33);
}

.newComment {
    width: 93%;
    margin: 0 auto;
    margin-bottom: 5px;
    overflow: hidden;
}

    .newComment .comImg {
        float: left;
        margin-right: 5px;
    }

    .newComment .comTextdiv {
        width: 98%;
        min-height: 40px;
        max-height: 350px;
        border: 1.5px groove;
        border-bottom: none;
        border-right: none;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.58);
        overflow: auto;
        overflow-x: hidden;
        padding: 5px;
        line-height: 10px;
        font-size: 18px;
    }

    .newComment .comTextarea {
        width: 98%;
        min-height: 100px;
        border: 1.5px groove;
        border-bottom: none;
        border-right: none;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.58);
        overflow: auto;
        overflow-x: hidden;
        padding: 15px;
        font-size: 14px;
    }

    .newComment .comTextBtn {
        font-size: 24px;
        border: 1.5px groove;
        border-top: none;
        border-left: none;
        border-radius: 5px;
        float: right;
        background-color: rgba(255, 255, 255, 0.58);
        margin-top: 10px;
    }

[contentEditable=true]:empty:not(:focus):before {
    line-height: 40px;
    color: #aaa4a4;
    content: attr(data-ph);
}

.commentContainer .userImage {
    height: 50px;
    float: left;
    margin-right: 10px;
}

.commentContainer .userComment {
    width: 90%;
    padding: 10px;
    margin: 0 auto;
    margin-bottom: 5px;
    border: 1.5px groove;
    border-bottom: none;
    border-right: none;
    border-radius: 10px;
}

    .commentContainer .userComment .commentControl {
        float: right;
    }

        .commentContainer .userComment .commentControl a {
            text-decoration: none;
            color: blue;
            cursor: pointer;
        }

    .commentContainer .userComment .parentReply {
        width: 95%;
        padding: 10px 0 0 20px;
        margin-bottom: 5px;
    }

        .commentContainer .userComment .parentReply .childReply {
            padding: 10px 0 0 30px;
            margin-bottom: 5px;
        }

.commentContainer .commentUserName {
    color: blue;
}

    .commentContainer .commentUserName .cmntTime {
        color: gray;
        font-size: smaller;
    }

.commentContainer .commentDate {
    color: #5f80ff;
    font-style: italic;
}

.commentContainer .commentBody {
    margin-top: 25px;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}

.replySubMenu {
    margin-bottom: 10px;
    overflow: hidden;
    width: 100%;
    height: 25px;
    padding: 5px;
}

    .replySubMenu a {
        text-decoration: none;
        font-style: italic;
        color: #7575fb;
        line-height: 25px;
        margin: 0 5px;
        float: left;
    }

    .replySubMenu img {
        width: 20px;
        height: 20px;
    }

    .replySubMenu .shareParent {
        overflow: hidden;
        display: inline-block;
        position: relative;
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
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <form class="navbar-form navbar-right" role="search">
                <span class="glyphicon glyphicon-search"></span>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Post">
              </div>
            </nav>
           
                
                  <div class="right">
                  <ul class="list-group pull-right">
                        <h2>Categories</h2>
                        <li class="list-group-item">
                        <?php if(count($getCat)): ?>
                        <?php foreach($getCat as $categories): ?>          
                        <li><?php echo $categories->category_name ?></li>
                            <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?>
                     </ul>
                </div>
             
                
                
                  <br><br><br><br><br><br><br><br><br>
                <div class="container">
                 <ul class="list-group pull-right">
                      <h2>Tags</h2>
                   <li class="list-group-item">
                   <?php if(count($getTag)): ?>
                        <?php foreach($getTag as $tags): ?>
                        <li><?php echo $tags->tag_name ?></li>
                        <?php endforeach;?>
                    <?php else :?>
                        <?php endif; ?>
                 </ul>
               </div>
               
                                          
          
            <div class="blogContainer">
                <div class="mainblogview">
                 <div ng-app="PostModule" ng-controller="PostCtrl" style="overflow:hidden;width:100%;">
                   <div ng-repeat="posts in postsData" class="postDescContainer">
                           <div class="postDescTitle"><h3>{{posts.Title}}</h3></div>
                       <div class="postPubDate">
                            <label>Posted On :</label> {{posts.PostedOn | date:'dd/MM/yyyy'}}
                        </div>
                       <div class="postDescCategory">
                            <label>Category:&nbsp;</label> {{posts.CategoryId}}
                        </div>
                       <div class="postDescBody">
                            {{posts.ShortDescription}}
                            @Html.ActionLink("Read More....", "Index", "Home", new { area = "" }, new { @class = "navbar-brand" })
                    </div>
               </div>
           </div>
    </div>
</div>
        </body>
</html>
