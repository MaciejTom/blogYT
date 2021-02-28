@if (is_front_page())

    <header class="banner">
@endif
<div class="banner_menu">
    <div class="container">

        <a class="brand" href="{{ home_url('/') }}"><img class="banner_img"
                src="http://blogyt.maciejtom.unixstorm.eu/app/uploads/2021/02/cropped-dawidSamoKoleczko.png"></a>

        <nav class="nav-primary">

            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif

        </nav>

    </div>
</div>
@if (is_front_page())
    <div class="banner_content">
        <div class="container">
            <h1 class="banner_title">Między Sportem a Sztuką</h1>
            <div class="banner_arrowDiv">
               
            </div>

        </div>

    </div>
    </header>
@endif



{{-- <div class="banner_menu">
    <div class="container">

        <a class="brand" href="{{ home_url('/') }}"><img class="banner_img"
                src="http://blogyt.maciejtom.unixstorm.eu/app/uploads/2021/02/cropped-dawidSamoKoleczko.png"></a>

        <nav class="nav-primary">

            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif

        </nav>

    </div>
</div>
<header class="banner">
<div class="banner_content">
        <div class="container">
            <h1 class="banner_title">Między Sportem a Sztuką</h1>
            <div class="banner_arrowDiv">
                <img class="banner_arrow"
                    src="http://blogyt.maciejtom.unixstorm.eu/app/uploads/2021/02/pngfind.com-arrow-png-transparent-161912.png">
            </div>

        </div>

    </div>

</header> --}}