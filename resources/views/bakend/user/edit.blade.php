@extends('layouts.bakendapp')

@section('content')

<div class="container">
    <div class="row justfi-content-center">
        <div class="col-10">
            <div class="card my-5">
                <div class="card-header">User Name</div>
                <div class="card-body">
                    <form action="{{ route('user.update',$users->id) }}" method="POST">
                        @csrf 
                        @method('put')
                        <select name="role" class="form-control">
                            @foreach ($roles as $role)
                            <option value="{{ $role->id  }}" {{ $role->id == $users->roles->first()->id ? 'selected' : ' ' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class=" btn btn-primary mt-3"> Assign Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection