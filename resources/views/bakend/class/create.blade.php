@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Class</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('class.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3 row">
                                <label for="class" class="col-4 ">Class Name</label>
                                <div class="col-6 offset-2">
                                    <input type="text" id="class" class="form-control " name="class_name">
                                    <span class="text-danger">@error('class_name')
                                       {{ $message }} 
                                    @enderror</span>
                                </div>
                            </div>
                           
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary form-control">Add CLASS</button>
                            </div>
                            
                           
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
