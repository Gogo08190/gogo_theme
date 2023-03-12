<!doctype html>
<html {!! get_language_attributes() !!}>

<head>
    <meta charset="{{ get_bloginfo('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('styles')

    @head
    <script src="//instant.page/5.1.0" type="module" integrity="sha384-by67kQnR+pyfy8yWP4kPO12fHKRLHZPfEsiSXR8u2IKcTdxD805MGUXBzVPnkLHw"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ get_template_directory_uri() }}/dist/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ get_template_directory_uri() }}/dist/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ get_template_directory_uri() }}/dist/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ get_template_directory_uri() }}/dist/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ get_template_directory_uri() }}/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#fbba00">
    <meta name="theme-color" content="#ffffff">

    @yield('javascriptheader')
</head>

<body @php(body_class())>
    @include('layouts.header')
      @if( is_front_page() )
      <div id="wrapper" class="home">
      @else
      <div id="wrapper" class="page <?php if(!empty(get_post_meta(Loop::id(), '_wp_page_template', true))) { echo get_post_meta(Loop::id(), '_wp_page_template', true);} else { echo "base"; } ?> {{ get_post_type(Loop::id()) }} @if(is_tax()) taxonomy @endif">
      @endif
      <main>
        @yield('content')
      </main>
      @include('layouts.footer')
  </div>

    @footer
    @yield('javascript')
    <script src="https://unpkg.com/mailgo@0.12.2/dist/mailgo.min.js"></script>

</body>

</html>
