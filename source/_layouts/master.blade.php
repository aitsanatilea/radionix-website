<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $page->company_name }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
          <div id="page-wrapper">
              @include('_partials.header', ['menu' => 'Меню', 'class' =>'alt'])
              @include('_partials.menu', ['menu' => 'Меню', 'main' =>'Главная', 'about' => 'О компании',
                  'products' => 'Продукция', 'projects' => 'Проекты', 'contact'=>'Контакты', 'close' => 'Закрыть'])
              @yield('banner')
              <section id="wrapper">
                  @yield('one')
                  @yield('two')
                  <!-- @yield('three') -->
                  @yield('projects')
                  @yield('pre-footer')
              </section>
              <section id="footer" class="left">
                  @include('_partials.contacts_ru', ['form_name'=>'contact_form_main'])
              </section>
        </div>


        <!-- <script src="{{ mix('js/main.js', 'assets/build') }}"></script> -->
        <!-- <script src="../../assets/build/js/skel.min.js"></script>
  			<script src="../../assets/build/js/jquery.min.js"></script>
  			<script src="../../assets/build/js/jquery.scrollex.min.js"></script>
  			<script src="../../assets/build/js/util.js"></script>-->
  			<script src="../../assets/build/js/main.js"></script>
    </body>
</html>
