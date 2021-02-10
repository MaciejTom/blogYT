@extends("layouts.app")

@section("content")

   <h2>{{the_title()}} </h2> 
   
  <div class="flex">

    @foreach( $odcinki as $odcinek)

    <a href="{{$odcinek->permalink}}">
    <div>
    
        <img class="images" src="{{ $odcinek->picture }}" alt="{{$odcinek->alt}}" title="{{$odcinek->title}}">
        <h3>{{$odcinek->episode}}</h3>
    </div>
    </a>
    @if ($loop->iteration % 3 === 0)
    </div>
    <div class="flex">
    @endif
    @endforeach
</div>
    
    
    </div>
  


    

@stop