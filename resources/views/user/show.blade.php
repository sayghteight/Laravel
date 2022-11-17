@extends('layouts.app')
  
@section('content')
    <div class="container">
        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Show profile</h1>
                <div class="col-lg-6 mx-auto">
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="{{ route('users.index') }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 h-100 bg-dark">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                        <h5 class="text-secondary">{{ $user->firstname }} {{ $user->lastname }}</h5>
                        <p class="text-secondary">{{ $user->faction }}</p>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-12 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted">{{ $user->email }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Phone</h6>
                                    <p class="text-muted">{{ $user->phoneIG }}</p>
                                </div>

                                <div class="col-6 mb-3">
                                    <h6>Age</h6>
                                    <p class="text-muted">{{ $user->age }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection