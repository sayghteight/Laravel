@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Add New account</h1>
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
    
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
        
            <div class="row text-light">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
      
                  <div class="col-4">
                    <label for="address" class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="23" required>
                    <div class="invalid-feedback">
                      Please enter your age address.
                    </div>
                  </div>

                  <div class="col-4">
                    <label for="address" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phoneIG" id="phone" placeholder="Your phone" required>
                    <div class="invalid-feedback">
                      Please enter your phone number.
                    </div>
                  </div>

                  <div class="col-4">
                    <label for="address" class="form-label">Employment</label>
                    <input type="text" class="form-control" name="faction" id="employment" placeholder="Employment" required>
                    <div class="invalid-feedback">
                      Please enter your Employment.
                    </div>
                  </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4 text-left">
                        <button type="submit" class="btn btn-primary">Create account</button>
                </div>
            </div>
        
        </form>
    </div>
@endsection