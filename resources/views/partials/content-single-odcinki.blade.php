<article @php post_class() @endphp>
    @include('partials.header')
    @include('partials.sidebarFixed')
    <section class="singlePageHeader">

        <h2 class="SinglePageHeader_title"><span class="SinglePageHeader_titleText">{!! $odcinki->name !!}</span></h2>
        <div class="SinglePageHeader_hero" style="background-image: url({{ $odcinki->photo['sizes']['myfullsize'] }})";>
        <div class="SinglePageHeader_decoTop"></div>
        <div class="SinglePageHeader_deco"></div>
        </div>

    </section>
    <div class="container">
        <div class="SinglePageContent">
            <div class="SinglePageContent_description">
                {{ $odcinki->desc }}
            </div>
            <div class="SinglePageContent_links">
                <div class="SinglePageContent_yt embed-container">{!! $odcinki->yt !!}</div>

                <div class="SinglePageContent_spotify embed-container">{!! $odcinki->spotify !!}</div>
                <a href="{{ $odcinki->apple }}"> <img class="SinglePageContent_apple embed-container"
                        src="@asset('images/apple-podcasts.png')"> </a>
            </div>

        </div>




        {{-- <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp --}}
</article>
