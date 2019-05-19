<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>ADMIN - Database</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
  <link rel="stylesheet" href="database.css">
  <link rel="icon" href="database.png" type="image/x-icon" />
  <link rel="shortcut icon" href="database.png" type="image/x-icon" />

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
    <!-- Navbar -->
   
    <nav class="navbar navbar-expand-lg top">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" target="_blank">
                    ADMIN - Database
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
                        <a class="nav-link" href="#" target="_blank">Home
                            <p class="d-lg-none d-xl-none"></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">Profile
                            <p class="d-lg-none d-xl-none"></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"" target="_blank">Settings
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

    <!-- End Navbar -->
    <!-- content -->
    <div class="wrapper">
     <div class="page-header clear-filter">
      <div class="container">
       <div class="brand">
        <h1 id="database">Database</h1>
         <div class="database_settings">
          <div class="row">
           <div class="col-3 left_side">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
             <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</a>
             <a class="nav-link" id="v-pills-posts-tab" data-toggle="pill" href="#v-pills-posts" role="tab" aria-controls="v-pills-posts" aria-selected="false">Posts</a>
             <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Comments</a>
             <a class="nav-link" id="v-pills-users-tab" data-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false">Users</a>
             <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
             <a class="nav-link" id="v-pills-sessions-tab" data-toggle="pill" href="#v-pills-sessions" role="tab" aria-controls="v-pills-sessions" aria-selected="false">Sessions</a>
            </div>
           </div>
            <div class="col-9 right_side">
             <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
               <h3 id="header_right">Dashboard</h3>
                <div class="dashboard">
                  <div class="row">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Posts</h5>
                          <p class="card-text">With supporting text.</p>
                          <a href="#" class="btn">View Posts</a>
                        </div>
                      </div>
                      <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Comments</h5>
                            <p class="card-text">With supporting text</p>
                            <a href="#" class="btn">View Comments</a>
                          </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Users</h5>
                              <p class="card-text">With supporting text.</p>
                              <a href="#" class="btn">View Users</a>
                            </div>
                          </div>
                    </div>      
                </div>
              </div>
               <div class="tab-pane fade" id="v-pills-posts" role="tabpanel" aria-labelledby="v-pills-posts-tab">
                <h3 id="header_right">Posts</h3>
                 <div class="posts">
                    <div class="search_posts">
                        <input class="form-control" type="text" placeholder="Search Posts" aria-label="Search Posts">
                      </div><br>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                 </div>
               </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                 <h3 id="header_right">Comments</h3>
                  <div class="comments">
                      <div class="search_comments">
                          <input class="form-control" type="text" placeholder="Search Comments" aria-label="Search Posts">
                        </div><br>
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab">
                 <h3 id="header_right">Users</h3>  
                  <div class="users">
                      <div class="search_users">
                          <input class="form-control" type="text" placeholder="Search Users" aria-label="Search Posts">
                        </div><br>
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                 <h3 id="header_right">Profile</h3>  
                  <div class="profile"></div>
                </div>
                <div class="tab-pane fade" id="v-pills-sessions" role="tabpanel" aria-labelledby="v-pills-sessions-tab">
                 <h3 id="header_right">Sessions</h3>  
                  <div class="sessions">
                      <div class="search_sessions">
                          <input class="form-control" type="text" placeholder="Search Sessions" aria-label="Search Posts">
                        </div><br>
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
            </div>     
           </div>
          </div>
         </div>
        </div>   
       </div>  
      </div>
     </div>
    </div>
    <!-- content     -->
    <div class="main">
        
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
