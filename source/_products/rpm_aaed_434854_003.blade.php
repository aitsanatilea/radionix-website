@extends('_layouts.master_ru_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>Радиолокационный приёмный модуль</h2>
    <p>ААЭД.434854.003</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <!-- <h3 class="major">Радиолокационный приёмный модуль ААЭД.434854.003</h3> -->
    <h3 class="major">Описание</h3>
    <p>Предназначен для применения в приемных блоках современных метео-навигационных радиолокаторов и обеспечивает:</p>
    <ul>
      <li>прием, усиление и двойное преобразование входного сигнала;</li>
      <li>дискретную регулировку коэффициента передачи по внешним управляющим сигналам в широкополосном режиме;</li>
      <li>уменьшение чувствительности приемного модуля на время тактов АРУШ;</li>
      <li>запирание приемного тракта на время работы передатчика;</li>
      <li>защиту от просачивающейся на вход модуля импульсной мощности;</li>
      <li>высокую радиогерметичность приёмника за счет экранирования всех высокочастотных модулей.</li>
    </ul>
    <!-- <h3 class="major"></h3> -->
    <p>Радиолокационный приёмный модуль имеет входной аттенюатор для регулировки уровня
    входного сигнала и защиты малошумящего усилителя на время зондирующего импульса,
    с малым временем восстановления.</p>

    <h3 class="major">Технические характеристики</h3>
    <p>
      <span class="image right">
        <img src="../assets/images/products_pages/rpm_aaed_434854_003_side1.png" alt="">
        <img src="../assets/images/products_pages/rpm_aaed_434854_003_side2.png" alt="">
      </span>
    </p>
    <div class="table-wrapper">
        <table>
            <tbody>
              <tr>
                <td>рабочий диапазон частот</td>
                <td>X</td>
              </tr>
              <tr>
                <td>коэффициент усиления (регулируемый), дБ</td>
                <td>46</td>
              </tr>
              <tr>
                <td>коэффициент шума, дБ</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td>верхняя граница линейности амплитудной характеристики, дБм</td>
                <td>-35</td>
              </tr>
              <tr>
                <td>коэффициент стоячей волны по входу</td>
                <td>1.6</td>
              </tr>
              <tr>
                <td>избирательность по зеркальным каналам приема, дБ</td>
                <td>40</td>
              </tr>
              <tr>
                <td>полоса пропускания по fпч2=28 МГц по уровню -3 дБ, МГц</td>
                <td>5</td>
              </tr>
              <tr>
                <td>глубина ручной регулировки коэффициента передачи, дБ</td>
                <td>25</td>
              </tr>
            </tbody>
        </table>
    </div>
    <p/>
    <p>
      <a href="/products.html" class="special">Вернуться к списку продукции</a>
    </p>
  </div>
</div>
@endsection
