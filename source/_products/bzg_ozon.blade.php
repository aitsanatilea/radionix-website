@extends('_layouts.master_ru_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>Малошумящий синтезатор частот "Озон"</h2>
    <p>UM511010</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Описание</h3>
    <p>Многофункциональный синтезатор частот с малым уровнем частотных и амплитудных флуктуаций,
    предназначенный для работы в бортовых радиолокационных станциях, для формирования
    сетки частот выходных сигналов в сантиметровом диапазоне и сетки гетеродинных частот,
    соответствующих каждой частоте выходного сигнала, а также частоты второго гетеродина
    и опорных частот (частот синхронизации).</p>

    <p>Синтезатор обеспечивает работу в следующих режимах:</p>
    <ul>
      <li>"О" без модуляции для выходных рабочих частот;</li>
      <li>"П" без модуляции для выходных рабочих частот;</li>
      <li>амплитудно-импульсной модуляции для выходных рабочих частот;</li>
      <li>фазокодовой модуляции для выходных рабочих частот;</li>
      <li>частотной модуляции для выходных рабочих частот.</li>
    </ul>
    <p>Синтезатор выполнен на современной элементной базе в гибридно-интегральном исполнении,
    оснащен встроенной системой контроля с выдачей сигналов неисправности в уровнях ТТЛ.</p>
    <p>Модуль имеет высокую стабильность и надежность в широком интервале температур,
    устойчив к воздействию широкого спектра механических и климатических факторов.</p>

    <h3 class="major">Технические характеристики</h3>
    <p>
      <span class="image right">
        <img src="../assets/images/products/bzg_ozon.png" alt="">
      </span>
    </p>
    <div class="table-wrapper">
      <table>
          <tbody>
            <tr>
              <td>число рабочих частот</td>
              <td>18</td>
            </tr>
            <tr>
              <td>выходная мощность по выходу, мВт</td>
              <td>400-700</td>
            </tr>
            <tr>
              <td>спектральная плотность мощности амплитудного шума выходного сигнала, дБ/Гц</td>
              <td>-125</td>
            </tr>
            <tr>
              <td>спектральная плотность мощности фазового шума выходного сигнала при отстройке от несущей на:</td>
            </tr>

            <tr>
              <td>2 кГц, дБ/Гц</td>
              <td>-104</td>
            </tr>
            <tr>
              <td>10 кГц, дБ/Гц</td>
              <td>-120</td>
            </tr>
            <tr>
              <td>25 кГц, дБ/Гц</td>
              <td>-130</td>
            </tr>
            <tr>
              <td>170 кГц, дБ/Гц</td>
              <td>-135</td>
            </tr>
            <tr>
              <td>время переключения выходных рабочих частот, мкс</td>
              <td>40</td>
            </tr>
            <tr>
              <td>относительный уровень паразитных составляющих при отстройке от несущей на:</td>
            </tr>
            <tr>
              <td>±(0,2-10,0) МГц</td>
              <td>-90</td>
            </tr>
            <tr>
              <td>±(10-100) МГц</td>
              <td>-85</td>
            </tr>
            <tr>
              <td>±(100-600) МГц</td>
              <td>-80</td>
            </tr>
            <tr>
              <td>±(600-1350) МГц</td>
              <td>-60</td>
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
