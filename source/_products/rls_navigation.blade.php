@extends('_layouts.master_product_description')

@section('title')
<header>
  <div class="inner">
      <h2>Приёмо-передающий модуль метео-навигационной РЛС</h2>
      <!-- <p></p> -->
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Описание</h3>
    <p>Приемо-передающий модуль (ППМ) гибридно-интегрального исполнения на
      современной элементной базе с твердотельным усилителем мощности передатчика,
      предназначенный для работы в составе бортовой метеорологической РЛС.</p>
    <p>ППМ обеспечивает:</p>
    <ul>
      <li>приём отражённого сигнала, его усиление, преобразование в промежуточную частоту и регулировку амплитуды выходного сигнала;</li>
      <li>формирование когерентных радиоимпульсов с амплитудной, фазовой модуляцией и преобразование их на рабочую частоту;</li>
      <li>выдачу сформированного сигнала на контрольный выход либо на оконечный усилитель мощности;</li>
      <li>формирование опорной частоты для внешнего блока управления и обработки.</li>
    </ul>

    <h3 class="major">Технические характеристики</h3>
    <p>
      <span class="image right">
        <img src="../assets/images/products/rls_navigation.png" alt="">
      </span>
      </p>
      <div class="table-wrapper">
          <table>
              <tbody>
                <tr>
                  <td>диапазон рабочих частот</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>шаг переключения выходных рабочих частот, МГц</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>котносительная нестабильность за время эксплуатации</td>
                  <td>±1x10<sup>-7</sup></td>
                </tr>
                <tr>
                  <td>время переключения выходных рабочих частот, мкс</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>относительная спектральная плотность мощности фазовых флуктуаций относительно несущей на отстройке 1.0 кГц, дБ/Гц</td>
                  <td>-100</td>
                </tr>
                <tr>
                  <td>относительный уровень дискретных спектральных составляющих в спектре сигнала, дБ</td>
                  <td>-80</td>
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