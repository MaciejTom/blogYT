<article @php post_class() @endphp>
 @include('partials.header')
  <header class="singlePageHeader">

    <h1 class="SinglePageHeader_title">{!! $odcinki->name !!}</h1>
  <div class="SinglePageHeader_hero" style="background-image: url({{$odcinki->photo['sizes']['myfullsize']}})"; >
   @php var_dump($odcinki->photo['sizes']['myfullsize']) @endphp
    </div>

    </header>
  <div class="SinglePageContent">
    <div class="SinglePageContent_decription">
      {{$odcinki->desc}}
    </div>
    <div class="SinglePageContent_links">
    {!!$odcinki->yt!!}
    {!!$odcinki->spotify!!}
    <a href="{{$odcinki->apple}}"><img src="@asset('images/apple.png')"> </a>
    </div>

  </div>




  {{-- <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp --}}
</article>
