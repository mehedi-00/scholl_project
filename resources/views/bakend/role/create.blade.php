@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Add Role   <a href="{{ route('role.index') }}" class="float-right btn btn-success">All Role</a></h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('role.store') }}" method="POST">
                            @csrf

                            <input type="text" name="name" id="" class="form-control" placeholder="Role Name">
                            @error('name')
                            <span class="text-danger d-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <button type="submit" class="btn btn-sm btn-primary mt-5">Add Role</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
