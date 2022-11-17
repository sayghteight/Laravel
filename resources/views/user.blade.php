@extends('layouts.app')
 
@section('content')
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
        <h1 class="display-5 fw-bold text-white">CRUD EXAMPLE</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">In this example you will be able to create/read/update/delete accounts.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ route('users.create') }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Create new account</a>
            </div>
        </div>
        </div>
    </div>

    <div class="b-example-divider mb-0"></div>
    
    <div class="container text-light">
        <div class="table-responsive-sm ">
            <table class="table table-default text-light" id="table-users">
                <thead>
                    <tr>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">PhoneIG</th>
                        <th scope="col">Age</th>
                        <th scope="col">Faction</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="">
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phoneIG }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->faction }}</td>
                        <td>                
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection