@extends('layouts.bakendapp')


@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card my-5">
                <div class="card-header">
                    <h3>All Permission <a href="{{ route('permission.create') }}" class="float-right btn btn-success">Add New Permission</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($permission as $key=> $data)
                            
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                <a href="{{ route('permission.edit',$data->id) }}" class="btn  btn-sm btn-primary">edit</a>
                                
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