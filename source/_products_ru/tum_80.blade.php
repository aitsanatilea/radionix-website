@extends('_layouts.master_ru_product_description')

@section('title')
<header>
  <div class="inner">
      <h2>Твердотельный усилитель мощности</h2>
      <p>ТУМ-80</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Описание</h3>
    <p>Предназначен для работы в составе бортовой конерентной метеорологической РЛС.</p>

    <h3 class="major">Технические характеристики</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/tum_80.png" alt="">
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
                  <td>уровень выходной импульсной мощности, не менее, Вт</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>длительности импульсов, мкс</td>
                  <td>0.1…32</td>
                </tr>
                <tr>
                  <td>коэффициент усиления, не менее, дБ</td>
                  <td>40</td>
                </tr>
                <tr>
                  <td>коэффициент стоячей волны по входу</td>
                  <td>1.5</td>
                </tr>
                <tr>
                  <td>напряжение питания, В ±10%</td>
                  <td>27</td>
                </tr>
                <tr>
                  <td>ток потребления, не более, А</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>диапазон рабочих температур, <sup>o</sup>C</td>
                  <td>-55…+80</td>
                </tr>
                <tr>
                  <td>скважность, не менее</td>
                  <td>30</td>
                </tr>
                <tr>
                  <td>габаритные размеры, мм</td>
                  <td>304х216х25</td>
                </tr>
                <tr>
                  <td>масса, не болем, кг</td>
                  <td>3</td>
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
