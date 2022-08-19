@extends('layouts.bakendapp')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>All Class <a href="{{ route('subject.create') }}" class="float-right btn btn-success">Add New
                                Subject</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach ($class as $key => $data)
                                    <button class="nav-link  px-5 {{ $key == 0 ? ' active' : '' }}" id="nav-home-tab"
                                        data-bs-toggle="tab" data-bs-target="#class{{ $data->id }}" type="button"
                                        role="tab" aria-controls="nav-home"
                                        aria-selected="true">{{ $data->class_name }}</button>
                                @endforeach


                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach ($class as $key => $data)
                                <div class="tab-pane fade {{ $key == 0 ? ' show active' : '' }}"
                                    id="class{{ $data->id }}" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <table class="table mt-3">
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th>Teacher Name</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($data->subject as $key => $subject)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $subject->subject_name }}</td>
                                                <td>
                                                    @forelse ($subject->teacher as $teacher)
                                                        {{ $teacher->name }}
                                                    @empty
                                                        <span>please add teacher</span>
                                                    @endforelse
                                                </td>
                                                <td>

                                                    <a href="{{ route('teacher.create', [$data->id, $subject->id]) }}"
                                                        class="btn btn-sm btn-success">Add Teacher</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            @endforeach

                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
