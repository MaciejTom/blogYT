@extends("layouts.app")

@section('content')
    @include('partials.header')
    <div class="container">
        <h2>{{ the_title() }} </h2>





        <div class="episodes flex">

            {{-- <form action="@php home_url('/odcinki') @endphp">

            <input type="text name=" keyword" value="@php isset($_GET['keyword']) ? $_GET['keyword'] : '' @endphp">

            <button action="submit">Szukaj</button>
        </form> --}}



            @foreach ($odcinki as $odcinek)


                <a href="{{ $odcinek->permalink }}">
                    <div class="episodes_card">

                        <img class="episodes_image" src="{{ $odcinek->picture }}" alt="{{ $odcinek->alt }}">
                        <div class="episodes_infoCard" title="{{ $odcinek->title }}">
                            <h3 class="episodes_title">{{ $odcinek->episode }}</h3>
                            <img class="episodes_divider" src="@asset('images/divider.png')" alt="divider">
                            <span class="episodes_date">{{ get_the_date() }}</span>
                        </div>

                    </div>
                </a>

            @endforeach
        </div>


    </div>


    {{-- @php
    $arguments = [
        'post_type' => 'odcinki',
        'post_per_page' => 1,
        'tax_query' => [],
        'meta_query'=> [
            'relation' => 'AND',
        ],
    ];


    if (isset($_GET['keyword']))
    {
        if(!empty($_GET['keyword']))
        {
        $arguments['s'] = $_GET['keyword'];
        }
    }

$query = new WP_Query($arguments); --}}


    {{-- @endphp

@if ($query->have_posts()) : ?>
    @while ($query->have_posts()) : $query->the_post();
    result
    @endwhile

    @endif --}}


@stop
