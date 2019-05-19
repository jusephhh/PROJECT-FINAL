<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Profile</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">

<link rel="icon" href="profile.png" type="image/x-icon" />
<link rel="shortcut icon" href="profile.png" type="image/x-icon" />

  <style>
    .navbar .navbar-nav .nav-link:not(.btn) i.fa{
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px;
    }
  </style>


</head>
<body class="index-page sidebar-collapse">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="20">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" target="_blank">
                    Welcome
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">Home
                            <p class="d-lg-none d-xl-none"></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">Profile
                            <p class="d-lg-none d-xl-none"></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/CreativeTim" target="_blank">Settings
                            <p class="d-lg-none d-xl-none"></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">Log Out
                            <p class="d-lg-none d-xl-none"></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <div class="wrapper">
        <div class="page-header page-header-small clear-filter">
            <div class="page-header-image" data-parallax="true" style="background-image: url('img/cover.jpg');">
            </div>
            <div class="container">
            <div class="row">
               <div class="content-left brand col-md-4">
                <img class="n-logo" src=img/profile.jpg alt="">
                <h2 class="h1-seo">Bill Gates</h2>
                <h3>I'm Just a billionnaire</h3>
               </div>
              </div>
            </div>
        </div>

        <div class="main">

    <div class="section">
      
    <div class="navtabs">
        <ul class="nav nav-tabs">
         <li class="nav-item">
          <a class="nav-link active" href="#post" role="tab" data-toggle="tab">Posts</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="#aboutme" role="tab" data-toggle="tab">About me</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="#friends" role="tab" data-toggle="tab">Friends</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#photos" role="tab" data-toggle="tab">Photos</a>
         </li>
        </ul>
</div>


<div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="post">
            <h1 id="profile_posts" >Posts</h1>
          <div id="posts_cards">
            <div class="card" style="max-width: 900px;">
              <img class="card-img-top" src="..." alt="Card image cap" style="max-width: 900px;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

          <div role="tabpanel" class="tab-pane" id="aboutme">
              <div class="about_me_section">
                  <h1 id="about_me" >About Me</h1>
                   <div class="section section-basic">
                     <div class="container text-center">
                       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, sequi expedita 
                         voluptatibus dolore, nihil libero earum dignissimos assumenda delectus neque 
                         exercitationem, adipisci eligendi nostrum illum odio doloremque similique eius 
                         commodi.
                       </p>
                     </div>
                   </div>
              </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="friends">
            <h1 id="friends_header">Friends</h1>
            <div id="friends_cards" >
              <div class="card mb-3" style="max-width: 350px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="..." class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
           </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="photos">
            <h1 id="photos_header">Photos</h1>
            <div id="photos_cards" >
              <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>           
           </div>                 
          </div>
        </div>

    </div>
      
    <footer class="footer">
      <div class="container">
       <nav>
        <ul>
         <li>
          <a href="https://github.com/jusephhh">Joseph</a>
         </li>
         <li>
          <a href="https://github.com/zon031997">Zon</a>
         </li>
         <li>
          <a href="https://www.kalskillsakademie.training/front-end-course">Web Dev Class</a>
         </li>
         <li>
          <a href="https://www.kalskillsakademie.training">KSA Certified</a>
         </li>
        </ul>
       </nav>
        <div class="copyright">&copy;
                <script>
                document.write(new Date().getFullYear())
                </script>, 
                Made possible by
                <a id="rightside_footer" href="https://www.kalskillsakademie.training" target="_blank">KSA</a>. Coded by <a id="2rightsidefooter" target="_blank">Joseph & Zon</a>.
            </div>
      </div>
     </footer>

    </div>
</body>


<!--   Core JS Files   -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/popper.min.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/bootstrap.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/nouislider.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-datepicker.js"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/now-ui-kit.js"></script>

</html>
