@extends('layouts.app')
  
@section('content')
    <div class="container">
        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Edit account</h1>
            <div class="col-lg-6 mx-auto">
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{ route('users.index') }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Back</a>
                </div>
            </div>
            </div>
        </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row text-light">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" id="firstName" placeholder="" value="{{ $user->firstname }}" required>
              </div>
  
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" id="lastName" placeholder="" value="{{ $user->lastname }}" required>
              </div>
  
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="you@example.com">
              </div>
  
              <div class="col-4">
                <label for="address" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age" value="{{ $user->age }}" placeholder="23" required>
              </div>

              <div class="col-4">
                <label for="address" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phoneIG" id="phone" value="{{ $user->phoneIG }}" placeholder="Your phone" required>
              </div>

              <div class="col-4">
                <label for="address" class="form-label">Employment</label>
                <input type="text" class="form-control" name="faction" id="employment" value="{{ $user->faction }}" placeholder="Employment" required>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12 pt-4 text-left">
                    <button type="submit" class="btn btn-primary">Edit account</button>
            </div>
        </div>
   
    </form>
@endsection