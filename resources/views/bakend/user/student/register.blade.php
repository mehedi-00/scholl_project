@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.create') }}"  enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"  name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-end">Birth Date</label>

                            <div class="col-md-6">
                                <input id="birth_date" type='date' class="form-control " name="birth_date" value="{{ old('birth_date') }}"  autocomplete="birth_date" autofocus>
                                <span class="text-danger">
                                    @error('birth_date')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birth_registration_number" class="col-md-4 col-form-label text-md-end">Birth Date Registrtation Number</label>

                            <div class="col-md-6">
                                <input id="birth_registration_number" type='number' class="form-control"  name="birth_registration_number" value="{{ old('birth_registration_number') }}"  autocomplete="birth_registration_number">
                                <span class="text-danger">
                                    @error('birth_registration_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

                            <div class="col-md-6">
                                <input id="address" type='address' class="form-control"  name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>
                                <span class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label  class="col-md-4  text-md-end">Gender</label>

                            <div class="col-md-6">
                                <input type="radio"  name="gender" value="male" > Male
                                <input type="radio"  name="gender" value="female" > Female <br><br>
                                <span class="text-danger">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="class" class="col-md-4 col-form-label text-md-end">Class</label>

                            <div class="col-md-6">
                                <select name="class" id="class" class="form-control">
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                    @endforeach
                                    
                                </select>
                                <span class="text-danger">
                                    @error('class')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Photo</label>

                            <div class="col-md-6">
                                <input  type='file' class="form-control"  name="photo">
                                <span class="text-danger">
                                    @error('photo')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>
                        
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                            <div class="col-md-6">
                                <input id="password" type='password' class="form-control"  name="password" >
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cpassword" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="cpassword" type='password' class="form-control"  name="cpassword" >
                                <span class="text-danger">
                                    @error('cpassword')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>


                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Student Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
