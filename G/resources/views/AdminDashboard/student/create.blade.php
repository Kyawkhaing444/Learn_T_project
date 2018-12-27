@extends('layouts.admin.student')

@section('content')

<div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span style="font-weight: bolder;">Student</span>
        </h4>

        <form class="d-flex justify-content-center">
          <!-- Default input -->
          <input type="search" placeholder="Search" aria-label="Search" class="form-control">
          <button class="btn btn-primary btn-sm my-0 p" type="submit">
            <i class="fas fa-search"></i>
          </button>

        </form>

      </div>

    </div>
    <!-- Heading -->
    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card content-->
          <div class="card-body">

            <ul class="nav md-pills nav-justified">
            <li class="nav-item">
            <a class="nav-link active btn-primary" href="create">Add Student</a>
            </li>
            </ul>
            <div class="col-lg-12" style="margin: 16px 8px 16px 4px">
                        {!! Form::open(['method'=>'POST','action'=>'StudentController@store','files'=>true]) !!}
                        <div class="input-group mb-3" style="margin-top: 32px;">

                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon9"><i class="fas fa-user"></i></span>
                                        </div>

                                       {!! Form::text('student_no',null,['class'=>'form-control','placeholder' => 'Student ID']) !!}

                                      </div>

                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
                                </div>
                                {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Username']) !!}
                              </div>

                              <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-at"></i></span>
                                    </div>
                                    {!! Form::text('email',null,['class'=>'form-control','placeholder' => 'Email Address']) !!}
                                  </div>

                                  <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon3"><i class="fas fa-phone"></i></span>
                                        </div>
                                        {!! Form::text('phone_number',null,['class'=>'form-control','placeholder' => 'Phone Number']) !!}
                                      </div>

                                      <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon5"><i class="fas fa-book"></i></span>
                                            </div>
                                            {!! Form::text('specification',null,['class'=>'form-control','placeholder' => 'Specification']) !!}
                                          </div>

                                          <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon6"><i class="fas fa-address-book"></i></span>
                                                </div>
                                                {!! Form::text('address',null,['class'=>'form-control','placeholder' => 'Address']) !!}
                                              </div>

                                              <div class="input-default-wrapper mt-3">
                                                <span class="input-group-text mb-3" id="input1"><i class="fas fa-images"></i></span>

                                                <input type="file" id="photoURL" class="input-default-js" name="photoURL">
                                                <label class="label-for-default-js rounded-right mb-3" for="photoURL"><span class="span-choose-file">Choose
                                                    file</span>

                                                  <div class="float-right span-browse">Browse</div>

                                                </label>

                                              </div>

                                              <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon7"><i class="fas fa-lock"></i></span>
                                                    </div>

                                                   {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Password']) !!}

                                                  </div>

                                                  <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon8"><i class="fas fa-lock"></i></span>
                                                        </div>

                                                        {!! Form::password('retypepassword', ['class'=>'form-control','placeholder'=>'Retype Password']) !!}

                                                      </div>

                                                      <div class="justify-content-center ">
                                                            <button type="submit" class="btn btn-success waves-effect btn-md" style="size: 50px;padding-right: 300px ; padding-left:300px;

                                                            margin-top: 32px;
                                                            margin-left: 100px;
                                                            margin-right: 64px;

                                                            "  >Add Student</button>
                                                          </div>



                    {!! Form::close() !!}
 </div>
                    </div>




            <canvas id="myChart"></canvas>

          </div>

        </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->
    </div>
  </div>



@endsection
