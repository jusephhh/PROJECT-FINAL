<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Registration</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
  <link rel="stylesheet" href="registration.css">


  <!-- logo in title -->
  <link rel="icon" href="create.png" type="image/x-icon" />
  <link rel="shortcut icon" href="create.png" type="image/x-icon" />
  <!-- logo in title -->

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
<!-- REGISTRATION FORM -->
    <div class="wrapper">
     <div class="page-header clear-filter">
      <h1 id="registration">Registration</h1>
        
      <div class="container">
        <div class="content-center brand">
         <h2 id="title">SIGN UP</h2>
         <img class="n-logo" src="create.png" alt="">
         <div class="row">
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row register-form">
                                <div class="col-md-6 first_part">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">Gender:
                                         <input id="maxl1" type="radio" name="gender" value="male" checked>Male
                                         <input id="maxl1" type="radio" name="gender" value="female">Female
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 second_part">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                            <option>What is your Birthdate?</option>
                                            <option>What is your old Phone Number</option>
                                            <option>What is your Pet Name?</option>
                                            <option>What is your Nickname?</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Register"/>
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
    
<!-- REGISTRATION FORM -->






<!-- Footer -->

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

<!-- Footer     -->
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
