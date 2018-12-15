@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>Radar receiving module</h2>
    <p>434854.002</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>Designed for use in receiving blocks of modern weather-navigation radars and provides:</p>
    <ul>
      <li>reception in a wide frequency range and conversion of radar signals in modes with a narrow and wide band of IF output signals;</li>
      <li>discrete adjustment of the transmission factor for external control signals in broadband mode;</li>
      <li>high radio-tightness of the receiver due to screening of all high-frequency modules.</li>
    </ul>
    <!-- <h3 class="major"></h3> -->
    <p>The radar receiving module has an input attenuator for adjusting the level of the input signal and protecting the low-noise amplifier for the time of the probe pulse, with a short recovery time.</p>

    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products_pages/rpm_aaed_434854_002_side1.png" alt="">
        <img src="../../assets/images/products_pages/rpm_aaed_434854_002_side2.png" alt="">
      </span>
    </p>
    <div class="table-wrapper">
        <table>
            <tbody>
              <tr>
                <td>operating frequency range</td>
                <td>X</td>
              </tr>
              <tr>
                <td>noise figure, dB</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td>the upper limit of the linearity of the amplitude characteristic, dBm</td>
                <td>-35</td>
              </tr>
              <tr>
                <td>coefficient of standing wave on the input, dB</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>selectivity through the mirror reception channels, dB</td>
                <td>40</td>
              </tr>
              <tr>
                <td>bandwidth for fpt2 = 28 MHz is -3 dB, MHz</td>
                <td>5</td>
              </tr>
              <tr>
                <td>bandwidth fpt2 = 84 MHz at -3 dB, MHz</td>
                <td>30</td>
              </tr>
              <tr>
                <td>depth of discrete adjustment of the transmission factor - in broadband mode, dB</td>
                <td>15</td>
              </tr>
              <tr>
                <td>non-identity of the phase-frequency characteristics between outputs of quadrature channels (broadband mode)</td>
                <td>(90±5)<sup>o</sup></td>
              </tr>
              <tr>
                <td>maximum output voltage at the outputs fpt2 = 84 MHz, V</td>
                <td>±1</td>
              </tr>
            </tbody>
        </table>
    </div>
    <p/>
    <p>
      <a href="/en/products.html" class="special">Back to the products list</a>
    </p>
  </div>
</div>
@endsection
