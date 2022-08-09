@extends('layouts.bakendapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Add Teacher  </h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('teacher.add',[$classId,$subjectId]) }}" method="POST">
                            @csrf

                           
                            <div class="mb-3 row">
                                <label for="class" class="col-4 "> Teacher</label>
                                <div class="col-8">
                                   <select name="teacher" id="" class="form-control">
                                    @foreach ($teacher as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                </select>
                                    @endforeach
                                    
                                    <span class="text-danger">
                                        @error('class_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary form-control">Add Teacher</button>
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