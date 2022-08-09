@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Add permission   <a href="#" class="float-right btn btn-success">All Role</a></h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('permission.update',$permission->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="text" name="name" id="" class="form-control" value="{{ $permission->name }}">
                            @error('name')
                            <span class="text-danger d-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <button type="submit" class="btn btn-sm btn-primary mt-5">Update Permission Name</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
