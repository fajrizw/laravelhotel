@extends('layouts/main')
@section('container')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

<div class="container">

<img src="{{ asset('/image/'.$hotel->image) }}" >
</div>
</div>
      
<div class="desc">
   
            <h3 class="title" ><i class="fa-solid fa-hotel"></i> {{ $hotel->name }}</h4>
            <h5 class="text" ><i class="fa-solid fa-location-dot"></i> {{ $hotel->location }}</h2>
            <h5 class="text" >IDR {{ $hotel->price }}</h5><br>
            <h5 class="text" ><i class="fa-solid fa-check-to-slot"></i> {{ $hotel->fasilitate }}</h4><br>
            <h5 class="text" >Description : <br>{{ $hotel->desc }}</h2>
            
</div>
<div class="row">
                <a href="{{ $hotel->id }}/edit" class="button"><i class="fa-solid fa-pen-to-square"></i></button></a>   
            <form method="POST" action="{{ url('hotel', $hotel->id ) }}">
                @csrf
                @method('DELETE') 
                <button class="button1" ><i class="fa-solid fa-trash-can"></i></button>
</div>
</div>
</body>
</html>

             @endsection