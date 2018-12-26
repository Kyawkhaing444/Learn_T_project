<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preload" href="#pl" as="document">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <link href="{{asset('css/libs.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
				<link type="text/css" href="css/style.css" rel='stylesheet'>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				<link rel="stylesheet" href="css/libs.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
        .nav-color{
background-color: rgba(0, 0, 0, 0);
border-color: rgba(0, 0, 0, 0);

        }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar nav-color z-depth-0" >
    <div class="container">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <img
            style="background-color: #b388ff;"
            data-toggle="modal"
            data-target="#sideModal" src="images/menu.png" class="rounded-circle user_img waves-effect nav-link z-depth-3">
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <nav class="navbar fixed-bottom navbar-expand-lg nav-color z-depth-0" id='myDIV' onscroll="myFunction()" >
        <div class="container">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <img
                  style="background-color: #b388ff;"
                  data-toggle="modal"
                  data-target="#app" src="images/man.png" class="rounded-circle user_img waves-effect nav-link z-depth-3">
              </li>

            </ul>

        </div>
      </nav>

  <!-- Full Page Intro -->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">
  <div class="view" style="background-image: url('images/sample.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          <strong></strong>
        </h1>

        <p>
          <strong></strong>
        </p>

        <p class="mb-4 d-none d-md-block">
          <strong></strong>
        </p>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->
  </div>
          </div>

  <div class="carousel-item">
        <div class="view" style="background-image: url('images/sample.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong></strong>
              </h1>

              <p>
                <strong></strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong></strong>
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>

      <div class="carousel-item">
            <div class="view" style="background-image: url('images/sample.jpg'); background-repeat: no-repeat; background-size: cover;">

              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong></strong>
                  </h1>

                  <p>
                    <strong></strong>
                  </p>

                  <p class="mb-4 d-none d-md-block">
                    <strong></strong>
                  </p>
                </div>
                <!-- Content -->

              </div>
              <!-- Mask & flexbox options-->

            </div>
          </div>

          </div>
        </div>
  </div>
  <!-- Full Page Intro -->

  {{--  setting model  --}}

  <!-- Central Modal Medium Success -->
<div class="modal fade" id="sideModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-side modal-top-right position-fixed" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Menu</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
            ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
            ab officiis totam.</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-success">Get it now <i class="far fa-gem ml-1 text-white"></i></a>
        <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->


{{-- Chat Modal --}}

<div  class="modal fade" id="app" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
					<div class="modal-dialog modal-notify modal-success modal-side modal-bottom-right position-fixed " role="document" >
					 <div class="modal-content">
						<div class="modal-header msg_head z-depth-3">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="images/man.png" class="rounded-circle user_img z-depth-2">
								</div>
								<div class="user_info">
									<span>Contact Us</span>
								</div>
							</div>

						</div>
						<div class="modal-body msg_card_body" style="height : 300px ;">
							<!-- <div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="images/man.png" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
                                    Hello
									<span class="msg_time"></span>
								</div>
                            </div> -->
                            <!-- <div class="d-flex justify-content-end mb-4" id="app">
								<div class="msg_cotainer_send">
                                       Hello
									<span class="msg_time_send"></span>
								</div>
								<div class="img_cont_msg">
							<img src="images/boy.png" class="rounded-circle user_img_msg">
								</div>
							</div> -->
              <ul class="list-group" v-chat-scroll>
				  <message v-for="value in chat.message">
				  	@{{ value }}
          </message>
				</ul>
						</div>
						<div class="model-footer">
							<div class="input-group" style="margin-top: -30px;">


                            {{--  {!! Form::open(['method'=>'POST','action'=>'MessageController@store','files'=>true]) !!}  --}}


                                <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' @keyup.enter='send'>

                                <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                                    </div>

                            {{--  {!! Form::close() !!}  --}}

							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
        </div>
              <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/libs.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
