@extends('auth.layouts')

@section('content')
<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<form action="{{ route('store') }}" method="POST">

    @csrf
    <label>Nama Lengkap</Label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>

    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

    <br>
    <label>Email Addres</Label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>

    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif

    <br>
    <label>Password</Label><br>
    <input type="passworsd" id="password" name="password" value="{{ old('password') }}"><br>

    @if ($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif

    <br>
    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
    <div class="col-md-6">
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
    <input type="submit" value="Register">
</form>
@endsection