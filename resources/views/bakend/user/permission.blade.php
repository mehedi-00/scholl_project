@extends('layouts.bakendapp')

@section('content')



<div class="container">
    <div class="row justfi-content-center">
        <div class="col-10">
            <div class="card my-5">
                <div class="card-header">User Name</div>
                <div class="card-body">
                    <form action="{{ route('user.permission.updaste',$user->id) }}" method="POST">
                        @csrf 
                        @method('put')
                       <select name="name[]" id="permission" class="form-control" multiple="multiple">
                           @foreach ($permission as $data)
                           <option value="{{ $data->id }}"
                            @foreach ($user->permissions as $permissionData)
                                {{ $data->name == $permissionData->name ? 'selected' : '' }}
                            @endforeach
                            >{{ $data->name }}</option>
                           @endforeach
                           
                       </select>
                        <button type="submit" class=" btn btn-primary mt-3"> Assign Permission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#permission').select2();
        });
    </script>
@endsection