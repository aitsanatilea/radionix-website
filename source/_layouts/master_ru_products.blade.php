<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $page->company_name }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body id="products">
        <div id="page-wrapper">
            @include('_partials.header', ['menu' => 'Меню', 'class'=>'', 'lang' =>'ru'])
            @include('_partials.menu_ru')
            <section id="wrapper" class="products">
                  @yield('title')
                  @yield('group_one')
                  @yield('group_two')
                  @yield('group_three')
                  @yield('group_four')
              </section>
              @include('_partials.footer_ru', ['side'=>'right'])
          </div>

          <!-- <script src="{{ mix('js/main.js', 'assets/build') }}"></script> -->
          <!-- <script src="../../assets/build/js/skel.min.js"></script>
    			<script src="../../assets/build/js/jquery.min.js"></script>
    			<script src="../../assets/build/js/jquery.scrollex.min.js"></script>
    			<script src="../../assets/build/js/util.js"></script>-->
    			<script src="../../assets/build/js/main.js"></script>
    </body>
</html>
