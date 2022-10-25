@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Contact Page</div>
  <div class="card-body">


        <div class="card-body">
        <p class="card-title">Name : {{ $contacts->name }}</p>
        <p class="card-title">Email : {{ $contacts->email }}</p>

        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
        <p class="card-text">Date : {{ $contacts->date }}</p>

       <p> <iframe src="assets'{{ $contacts->document }}"></iframe>></p>
  </div>



  </div>
</div>
