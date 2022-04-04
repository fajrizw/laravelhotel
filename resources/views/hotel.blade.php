@extends('layouts/main')
@section('container')
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/hotel.css') }}">


    @if (session('errors'))
    <p class="text-primary">{{session('errors')}}</p>
    @endif

    </div><br>
    </div>

    @foreach ($hotels as $hotel)



    <div class="responsive">
        <div class="gallery">
            <img src="{{ asset('/image/'.$hotel->image) }}" alt="Cinque Terre" width="600" height="400">

        </div>
        <div class="desc">
            <h4 class="title"><i class="fa-solid fa-hotel"></i> {{ $hotel->name }}</h4>
            <h5 class="text"><i class="fa-solid fa-location-dot"></i> {{ $hotel->location }}</h2>
                <h4 class="text">IDR {{ $hotel->price }}</h3>
                    <a href="hotel/{{ $hotel->id }}" class="button"><i class="fa-solid fa-circle-info"></i></button></a>

        </div>


        <div class="clearfix"></div>
    </div>
    </div>

    </div>
    </div>
    </div>

    </div>
    @endforeach
    </div>
    </div>
    </div>
    </div>

    </body>

</html>

@endsection
