<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <link href="{{asset('css/libs.css')}}" rel="stylesheet">
<style>
.home{
    background-image: url('images/home.png');
    background-repeat: no-repeat;
    background-position: relative;
    background-size: cover;
    width: 100%;
    height: 100%;
}
</style>

</head>
<body>
    <div class="container-fluid">

       <div class="row">

         {{--  <div class="col-lg-12">  --}}

            <div class="home position-fixed">

                <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" >
                        <div class="container-fluid">

                          <!-- Brand -->

                          <!-- Collapse -->
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <!-- Links -->
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <!-- Left -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right -->
                            <ul class="navbar-nav nav-flex-icons">
                                  <li class="nav-item">
                                          <a class="nav-link waves-effect" href="#" target="_blank"><i class="fa fa-user fa-fw"></i></a>
                                  </li>
                            </ul>

                          </div>

                        </div>
                      </nav>
                      <!-- Navbar -->
                    </div>
         </div>

       {{--  </div>  --}}


    </div>

    <script src="{{asset('js/libs.js')}}"></script>
</body>
</html>
