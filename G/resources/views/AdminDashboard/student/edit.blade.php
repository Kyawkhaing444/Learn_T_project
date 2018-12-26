@extends('layouts.admin.student')

@section('content')

<div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span style="font-weight: bolder;">Edit Student Info</span>
        </h4>

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

            <div class="col-lg-12" style="margin: 16px 8px 16px 4px">
            @foreach ($student as $s)


                {!! Form::model($s,['method'=>'POST','action'=>['StudentController@update',$s->id],'files'=>true]) !!}

                {!! Form::hidden('_method', 'PATCH') !!}

                <div class="input-group mb-3" style="margin-top: 32px;">

                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon9"><i class="fas fa-user"></i></span>
                                </div>

                               {!! Form::text('student_no',$s->student_no,['class'=>'form-control']) !!}

                              </div>

                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
                        </div>
                        {!! Form::text('name',$s->name,['class'=>'form-control']) !!}
                      </div>

                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon2"><i class="fas fa-at"></i></span>
                            </div>
                            {!! Form::text('email',$s->email,['class'=>'form-control']) !!}
                          </div>

                          <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3"><i class="fas fa-phone"></i></span>
                                </div>
                                {!! Form::text('phone_number',$s->phone_number,['class'=>'form-control']) !!}
                              </div>

                              <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon5"><i class="fas fa-book"></i></span>
                                    </div>
                        {!! Form::text('specification',$s->specification,['class'=>'form-control']) !!}
                                  </div>

                                  <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon6"><i class="fas fa-address-book"></i></span>
                                        </div>
                                        {!! Form::text('address',$s->address,['class'=>'form-control']) !!}
                                      </div>

                                      <div class="input-default-wrapper mt-3">
                                        <span class="input-group-text mb-3" id="input1"><i class="fas fa-images"></i></span>

                                        <input type="file" id="photoURL" class="input-default-js" name="photoURL">
                                        <label class="label-for-default-js rounded-right mb-3" for="photoURL"><span class="span-choose-file">Choose
                                            file</span>

                                          <div class="float-right span-browse">Browse</div>

                                        </label>

                                      </div>

                                              <div class="justify-content-center ">
                                                    <button type="submit" class="btn btn-success waves-effect btn-md" style="size: 50px;padding-right: 300px ; padding-left:300px;

                                                    margin-top: 32px;
                                                    margin-left: 100px;
                                                    margin-right: 64px;

                                                    "  >Upadte Student</button>
                                                  </div>



            {!! Form::close() !!}

            @endforeach

            </div>

            <canvas id="myChart"></canvas>

          </div>

        </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->
    </div>
  </div>
        <!--/.Card-->
  </div>
</div>



@endsection
