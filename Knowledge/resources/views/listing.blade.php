@extends('layout')

@section('content')

<h1><?php echo $heading ?></h1>



@php
@endphp
@if (count($listing)==0)
    <p>No Listing Found</p>
@endif

@foreach($listing as $listingg )
    <h2>
       {{$listingg ['title']}}
    </h2>
    <p> 
        {{$listingg ['description']}}
    </p>

   @endforeach

   @endsection