@extends('layouts.bakendapp')


@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card my-5">
                <div class="card-header">
                    <h3>All Class <a href="{{ route('subject.create') }}" class="float-right btn btn-success">Add New Subject</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Subject Name</th>
                            <th>Class</th>
                        </tr>
                        @foreach ($subjects as $key=> $subject)
                            
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$subject->subject_name }}</td>
                            <td>@foreach ($subject->Sclass as $class )
                                <span>{{ $class->class_name }}</span>
                            @endforeach</td>
                        </tr>
                        @endforeach
                       
                    </table>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection