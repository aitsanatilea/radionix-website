@extends('_layouts.master')

@section('banner')
<section id="banner" data-video="../assets/images/logo_radionix_full_hd">
</section>
@endsection


@section('one')
<section id="one" class="wrapper spotlight style1">
  <div class="inner">
    <a href="#" class="image"><img src="../assets/images/pic01.jpg" alt=""></a>
    <div class="content">
      <h2 class="major">О компании</h2>
      <p>ООО «Радионикс» является одной из наиболее динамично развивающихся компаний Украины
        на рынке разработки, модернизации и производства радиолокационных, навигационных и радиосвязных систем.
        Предприятие ориентировано на разработку новейших радиолокационных систем управления воздушным движением и посадки,
        метеонавигационных РЛС с использованием современной микроэлементной базы и высоких технологий
        на всех этапах проектирования и серийного изготовления наукоемкой продукции.</p>
      <a href="about.html" class="special">Далее</a>
    </div>
  </div>
</section>
@endsection

@section('two')
<!-- Two -->
<section id="two" class="wrapper alt spotlight style2">
  <div class="inner">
    <a href="#" class="image"><img src="../assets/images/pic02.jpg" alt="" /></a>
    <div class="content">
      <h2 class="major">Продукция</h2>
      <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non,
        sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus.
        Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
      <a href="products.html" class="special">Далее</a>
    </div>
  </div>
</section>
@endsection


@section('projects')
<!-- Projects -->
  <section id="projects" class="wrapper style4">
    <div class="inner">
      <h2 class="major">Проекты</h2>
      <!-- <p>ОПИСАНИЕ ЗАМЕНИТЬ!!!!!</br>Высокий научно-технический потенциал, наличие материально-технической
      и испытательной базы и технологические возможности позволяют предприятию осуществлять
      полный цикл разработки, испытаний и постановки на серийное производство
      наиболее сложных изделий современной радиоэлектронной техники.</p> -->
      <section class="features">
        <article>
          <a href="/projects/project_1.html" class="image"><img src="../assets/images/pic03.jpg" alt="" /></a>
          <h3 class="major">РСП-10МР</h3>
          <p>Программа повышения эффективности радиолокационной системы посадки самолета</p>
          <a href="/projects/project_1.html" class="special">Далее</a>
        </article>
        <article>
          <a href="#projects" class="image"><img src="../assets/images/pic04.jpg" alt="" /></a>
          <h3 class="major">Nisl placerat</h3>
          <p>Радилокационная станция синтезирования аппертуры Х-диапазона для БПЛА</p>
          <a href="#projects" class="special">Далее</a>
        </article>
        <!-- <article>
          <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
          <h3 class="major">Ante fermentum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
          <a href="projects.html" class="special">Learn more</a>
        </article>
        <article>
          <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
          <h3 class="major">Fusce consequat</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
          <a href="projects.html" class="special">Learn more</a>
        </article> -->
      </section>
      <!-- <ul class="actions">
        <li><a href="projects.html" class="button">Перейти к описанию проектов</a></li>
      </ul> -->
    </div>
  </section>
@endsection

@section('pre-footer')
<!-- <section id="pre-footer" class="wrapper spotlight style5">
</section> -->
@endsection
