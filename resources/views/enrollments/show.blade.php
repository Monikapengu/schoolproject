@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollment Application</div>
  <div class="card-body">
   
 
  <div class="card-body">
        <h5 class="card-title">Enroll no : {{ $batches->enroll_no }}</h5>
        <p class="card-text">Batch : {{ $batches->batch_id }}</p>
        <p class="card-text">Student: {{ $batches->student_id }}</p>
        <p class="card-text">Join Date: {{ $batches->join_date }}</p>
        <p class="card-text">Fee: {{ $batches->fee }}</p>
       
  </div>
  </div>
</div>

@endsection