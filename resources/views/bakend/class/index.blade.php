@extends('layouts.bakendapp')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>All Class <a href="{{ route('class.create') }}" class="float-right btn btn-success">Add New
                                Class</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Class Name</th>
                                <th>Subject</th>
                            </tr>
                            @foreach ($classes as $key => $class)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $class->class_name }}</td>
                                    <td>
                                        @foreach ($class->Subject as $subject)
                                            <span class="badge bg-primary">{{ $subject->subject_name }}</span>
                                        @endforeach
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
