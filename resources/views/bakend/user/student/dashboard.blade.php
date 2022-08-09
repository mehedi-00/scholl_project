@extends('layouts.bakendapp')

@section('content')
     <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        @role('principle')
                        <h3>Principle Dashboard</h3>
                        @endrole
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>{{ Auth::user()->roles->first()->name }}</li>
                        </ul>
                    </div>
     <!-- Breadcubs Area End Here --> 
@endsection