@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Add Role <a href="{{ route('role.index') }}" class="float-right btn btn-success">All Role</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($roles as $key=> $role)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a href="{{ route('role.edit',$role->id) }}" class="btn  btn-sm btn-primary">edit</a>
                                    
                                    <a href="" class="btn  btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                           
                        </table>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
