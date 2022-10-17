@extends('layout.app')

@section('main')
<form action="{{ route('student.update', $student) }}" method="POST">
  @method('PUT')
  @csrf

  <input type="text" name="fullname" required autofocus placeholder="Fullname" value="{{ $student->fullname }}">
  <input type="text" name="birthday" required placeholder="Birthday" value="{{ $student->birthday }}">
  <input type="text" name="address" required placeholder="Address" value="{{ $student->address }}">

  <button type="submit">Save</button>
</form>
@endsection
