<!-- _partials/menu.blade.php -->
<nav id="menu">
  <div class="inner">
    <h2>{{$menu}}</h2>
    <ul class="links">
      <li><a href="/index.html">{{$main}}</a></li>
      <li><a href="/about.html">{{$about}}</a></li>
      <li><a href="/products.html">{{$products}}</a></li>
      <li><a href="/index.html#projects">{{$projects}}</a></li>
      <li><a href="/index.html#contact">{{$contact}}</a></li>
    </ul>
    <a href="#" class="close">{{$close}}</a>
  </div>
</nav>
