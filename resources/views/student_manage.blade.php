@extends('layout.app')

@section('main')
@if($students->count() === 0)
<p>No entries found.</p>
@else
<table>
  <thead>
    <th>ID</th>
    <th>Fullname</th>
    <th>Birthday</th>
    <th>Address</th>
    <th>Action</th>
  </thead>

  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{ $student->id }}</td>
      <td>{{ $student->fullname }}</td>
      <td>{{ $student->birthday }}</td>
      <td>{{ $student->address }}</td>
      <td>
        <a href="{{ route('student.update', $student) }}">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection
