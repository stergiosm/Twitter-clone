<!doctype html>
<html>

<head>
  <meta charset="utf-8">
    <title><?php echo $pageTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/PHP_course/Mwitter/views/css/bootstrap.min.css" rel="stylesheet">
    <link href="/PHP_course/Mwitter/views/css/main.css" rel="stylesheet">
    <script src="/PHP_course/Mwitter/views/js/bootstrap.min.js"></script>
</head>

<body> 

<div class="container-fluid"> 

            
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost:8888/PHP_course/Mwitter/">Mwitter</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul> -->
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Navigate<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8888/PHP_course/Mwitter/user/mypage">My Page</a></li>
                <li><a href="http://localhost:8888/PHP_course/Mwitter/post/showAll">Wall</a></li>
                <li><a href="http://localhost:8888/PHP_course/Mwitter/user/followers">Followers</a></li>
                <li class="divider"></li>
                <li><a href="http://localhost:8888/PHP_course/Mwitter/user/logout">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>
<div id="main">

