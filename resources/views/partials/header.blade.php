{{-- @if (is_front_page()) {


} --}}

<header class="banner">
  <div class="container">
    <div class="banner_menu">

    <a class="brand" href="{{ home_url('/') }}"><img src="wp_get_attachment_image(72)"></a>

    <nav class="nav-primary">

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif

    </nav>
    </div>
  </div>
</header>
