@extends('_layouts.master_ru_product_description')

@section('title')
<header>
  <div class="inner">
      <h2>Твердотельный широкополосный усилитель мощности</h2>
      <p>ШУМ-2.5 ААЭД.434815.002</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Описание</h3>
    <p>Предназначен для использования в качестве предварительного и оконечного
    усилителя мощности в сверхширокополосных системах связи и радиолокации.</p>
    <p>ШУМ-2.5 включает:</p>
    <ul>
      <li>встроенный вторичный источник питания (возможность питания маломощных внешних устройств);</li>
      <li>термокомпенсированный детектор огибающей (для системы АРУ) на выходе ШУМ;</li>
      <li>цифровой аттенюатор (6-бит) на входе ШУМ с диапазоном регулировки более 30дБ;</li>
      <li>возможность запирания входа ШУМ не менее чем на 60дБ за время не более 100нс;</li>
      <li>встроенную защиту от перегрева с блокировкой подачи питания и гистерезисом 2<sup>o</sup>С;</li>
      <li>обобщенный контроль готовности с выдачей сигнала "авария".</li>
    </ul>
    <h3 class="major">Технические характеристики</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/shum_25.png" alt="">
      </span>
      </p>
      <div class="table-wrapper">
          <table>
              <tbody>
                <tr>
                  <td>частотный диапазон</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>уровень выходной мощности при Р-1, дБм(Вт), не менее</td>
                  <td>34 (2.5)</td>
                </tr>
                <tr>
                  <td>коэффициент усиления, не менее, дБ</td>
                  <td>40</td>
                </tr>
                <tr>
                  <td>КСВН вх/вых, не более</td>
                  <td>2.0</td>
                </tr>
                <tr>
                  <td>напряжение питания, В ±10%</td>
                  <td>27</td>
                </tr>
                <tr>
                  <td>ток потребления, А, не более</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>диапазон рабочих температур, <sup>o</sup>С</td>
                  <td>-60…+80</td>
                </tr>
                <tr>
                  <td>габаритные размеры (без радиатора), не более, мм</td>
                  <td>180х140х25</td>
                <tr>
                  <td>масса (без радиатора), не более, кг</td>
                  <td>0.5</td>
                </tr>
              </tbody>
          </table>
      </div>
      <p/>
      <p>
        <a href="/ru/products.html" class="special">Вернуться к списку продукции</a>
      </p>
  </div>
</div>
@endsection
