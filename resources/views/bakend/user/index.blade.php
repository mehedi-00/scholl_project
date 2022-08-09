@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>All Employ <a href="{{ route('employ.index') }}" class="float-right btn btn-success">Add
                                Employ</a></h3>
                    </div>
                    <div class="card-body">
                        <table class="table tabl-responsive">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Permission</th>
                                <th>Teacher</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($user as $user)
                                <tr class="{{ $user->roles->first()->name == 'principle' ? 'd-none' : '' }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        {{                                         $user->roles->first()->name }}

                                    </td>
                                    <td>
                                        <span>hhh</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">teacher</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Assign
                                            Role</a>
                                        <a href="{{ route('user.permission',$user->id) }}" class="btn btn-primary">Assign
                                            Permission</a>

                                        <a href="{{ route('user.ban', $user->id) }}"
                                            class="btn btn-sm btn-success">{{ $user->status == 0 ? 'Un Ban' : 'ban' }}</a>
                                        <a href="" class="btn btn-sm btn-success">Add teacher</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>

            </div>
            @if (count($trash))
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-header">Trashed user</div>
                        <div class="card-body">
                            <table class="table responsive-table">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    
                                    <th>Action</th>
                                </tr>
                                @foreach ($trash as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{                                         $data->roles->first()->name }}</td>
                                        <td>
                                            <a href="{{ route('user.restore', $data->id) }}"
                                                class="btn btn-sm btn-primary ">restore</a>

                                            <form action="{{ route('user.permanentdestroy', $data->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> Permanent Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

