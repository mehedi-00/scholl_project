@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Subject</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('subject.store') }}" method="POST">
                            @csrf

                            <div class="mb-3 row">
                                <label for="subject" class="col-4 ">Subject Name</label>
                                <div class="col-8">
                                    <input type="text" id="subject" class="form-control " name="subject_name">
                                    <span class="text-danger">
                                        @error('subject_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="class" class="col-4 "> Class</label>
                                <div class="col-8">
                                    <select name="class[]" id="class" class="form-control" multiple="multiple">
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}"
                                                {{ $class->id == 1? 'selected': '' }}
                                                 >{{ $class->class_name }}</option>
                                        @endforeach

                                    </select>
                                    <span class="text-danger">
                                        @error('class_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary form-control">Add Subject</button>
                            </div>


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
            $('#class').select2();
        });
    </script>
@endsection