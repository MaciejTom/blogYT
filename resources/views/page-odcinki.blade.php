@extends("layouts.app")

@section("content")

   <h2>{{the_title()}} </h2>

    @php
        $args = [

        'post_type' => 'odcinki'
        
        ];
            $the_query = new WP_Query($args);

            
           

    @endphp

    @while($the_query->have_posts()) @php $the_query->the_post() @endphp
    @php
        
       
        $image = get_field('miniatura_odcinka');

        $picture = $image['sizes']['myCustomSize'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];
      
    @endphp
    

        <img class="images" src="{{ $picture }}" alt="{{$alt}}" title="{{$title}}">

       
    @endwhile
@stop