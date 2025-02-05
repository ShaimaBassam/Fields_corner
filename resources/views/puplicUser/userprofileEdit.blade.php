@extends('puplicUser.layout.master')
@section('title')
User Profile
@endsection
@section('css')
{{-- <link rel="stylesheet" href="userSide/css/style.css"> --}}
<link rel="stylesheet" href="userSide/css/editUserprofile.css">

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<div class="container profile lb">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> 
                            <div class="mt-3">
                                <h4>{{$Users->name}}</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('profileUpdate',Auth::user()->id)}}" method="post" class="probootstrap-form">
                @method('GET')
                @csrf
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="name" value="{{$Users->name}}">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="fname" name="user_id" value="{{Auth::user()->id}}">
                        <br>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="john@example.com">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit">Submit</button>
                    </form>





  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-6">
          <h2 class="mt0">Reservation Edit</h2>
          <form action="{{route('ReservstionUpdate',$Users->Reservations->id)}}" method="post" class="probootstrap-form">
            @method('GET')
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="first_name" value="{{$Users->Reservations->first_name}}" class="@error('first_name') is-invalid @enderror"
                  >
                  <input type="hidden" class="form-control" id="fname" name="user_id" value="{{Auth::user()->id}}">
                  
                  @error('first_name')
                     <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="last_name" value="{{$Users->Reservations->last_name}}" class="@error('last_name') is-invalid @enderror">
                  @error('last_name')
                  <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="email">Phone</label>
                <div class="form-field">
                  <input type="text" class="form-control" id="email" name="phone_number" value="{{$Users->Reservations->phone_number}}" class="@error('phone_number') is-invalid @enderror">
                  @error('phone_number')
                  <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                </div>
              </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-arrival">Start Date</label>
                  <div class="form-field">
                    {{-- <i class="icon icon-calendar2"></i> --}}
                    {{-- <input type="date" class="form-control" id="date-arrival" name="date-arrival"> --}}
                   <input type="dateTime-local" class="form-control" id="date_arr" name="Start_date" value="{{$Users->Reservations->Start_date}}" class="@error('Start_date') is-invalid @enderror">
                   @error('Start_date')
                   <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-departure">End Date</label>
                  <div class="form-field">
                    {{-- <i class="icon icon-calendar2"></i> --}}
                    {{-- <input type="date" class="form-control" id="date-departure" name="date-departure"> --}}
                    <input type="datetime-local" class="form-control" id="date_end" name="End_date" value="{{$Users->Reservations->End_date}}" class="@error('End_date') is-invalid @enderror"> 
                    @error('End_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror

                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit">Submit</button>
            </div>
          </form>
        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</section>


@endsection

