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
    <a class="nav-link active btn-primary" href="student/create">Add Student</a>
  </li>
</ul>

<div class="table-responsive text-nowrap">
                    <table class="table table-striped">

                      <!--Table head-->
                      <thead>
                        <tr>
                          <th>Student ID</th>
                          <th>Profile</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Address</th>
                          <th>specification</th>
                          <th>coin</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <!--Table head-->
                @foreach ($student as $s)
                      <!--Table body-->
                      <tbody>
                        <tr>
                          <th scope="row">{{ $s->student_no }}</th>
                          <td><img src="images/{{ $s->photoURL }}" class="rounded-circle z-depth-1" style="width: 50px; height: 45px; margin-top: -10px;"></td>
                          <td>{{ $s->name }}</td>
                          <td>{{ $s->phone_number }}</td>
                          <td>{{ $s->address }}</td>
                          <td>{{ $s->specification }}</td>
                          <td>{{ $s->coin }}</td>
                          <td><a class="btn btn-warning waves-effect btn-small" href="student/{{ $s->id }}/edit" style="padding: 8px 12px 8px 12px;margin-top: -10px">Edit</a></td>
                          <td><a class="btn btn-danger waves-effect btn-small" href="student/{{ $s->id }}/delete" style="padding: 8px 12px 8px 12px;margin-top: -10px"><i class="fas fa-trash"></i></a></td>
                        </tr>
                      </tbody>
                @endforeach
                      <!--Table body-->


                    </table>
                    <!--Table-->
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
