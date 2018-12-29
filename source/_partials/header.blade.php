<!-- _partials/header.blade.php -->
<header id="header" class="{{$class}}">
  <h1>
    <a href="/{{$lang}}/index.html">
      <div id="logo-img" alt="{{$page->company_name}}"></div>
    </a>
  </h1>
  <nav>
    @include("_partials.lang_selector_$lang")
    <a href="#menu">{{$menu}}</a>
  </nav>
</header>
