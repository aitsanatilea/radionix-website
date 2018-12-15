@extends('_layouts.master_ru')

@section('banner')
<section id="banner" data-video="../assets/images/logo_radionix_full_hd">
</section>
@endsection


@section('one')
<section id="one" class="wrapper spotlight style1">
  <div class="inner">
    <a href="/about.html" class="image"><img src="../assets/images/pic01.jpg" alt=""></a>
    <div class="content">
      <h2 class="major">О компании</h2>
      <p>ООО «Радионикс» является одной из наиболее динамично развивающихся компаний Украины
        на рынке разработки, модернизации и производства радиолокационных, навигационных и радиосвязных систем.
        Предприятие ориентировано на разработку новейших радиолокационных систем управления воздушным движением и посадки,
        метеонавигационных РЛС с использованием современной микроэлементной базы и высоких технологий
        на всех этапах проектирования и серийного изготовления наукоемкой продукции.</p>
      <a href="/about.html" class="special">Далее</a>
    </div>
  </div>
</section>
@endsection

@section('two')
<!-- Two -->
<section id="two" class="wrapper alt spotlight style2">
  <div class="inner">
    <a href="/products.html" class="image"><img src="../assets/images/pic02.jpg" alt="" /></a>
    <div class="content">
      <h2 class="major">Продукция</h2>
      <p>ОПИСАНИЕ ЗАМЕНИТЬ!!!!!</br>Высокий научно-технический потенциал, наличие материально-технической
      и испытательной базы и технологические возможности позволяют предприятию осуществлять
      полный цикл разработки, испытаний и постановки на серийное производство
      наиболее сложных изделий современной радиоэлектронной техники.</p>
      <a href="/products.html" class="special">Далее</a>
    </div>
  </div>
</section>
@endsection


@section('projects')
<!-- Projects -->
  <section id="projects" class="wrapper style4">
    <div class="inner">
      <h2 class="major">Проекты</h2>
      <section class="features">
        <article>
          <a href="/projects/project_1.html" class="image"><img src="../assets/images/pic03.jpg" alt="" /></a>
          <h3 class="major">РСП-10МР</h3>
          <p>Программа повышения эффективности радиолокационной системы посадки самолета</p>
          <a href="/projects/project_1.html" class="special">Далее</a>
        </article>
        <article>
          <a href="/projects/project_2.html" class="image"><img src="../assets/images/pic04.jpg" alt="" /></a>
          <h3 class="major">Nisl placerat</h3>
          <p>Радилокационная станция синтезирования аппертуры Х-диапазона для БПЛА</p>
          <a href="/projects/project_2.html" class="special">Далее</a>
        </article>

      </section>
    </div>
  </section>
@endsection
