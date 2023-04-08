@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $students->name }}</h5>
		<h5 class="card-title">Department : {{ $students->dept }}</h5>
		<p class="card-text">E-Mail : {{ $students->email }}</p>
        <p class="card-text">Mobile : {{ $students->phone }}</p>
  </div>
      
    </hr>
  
  </div>
</div>