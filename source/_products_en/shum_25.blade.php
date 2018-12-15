@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
      <h2>Solid state broadband power amplifier</h2>
      <p>SHUM-2.5 AAED.434815.002</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>Designed for use as a pre and end power amplifier in ultra-wideband communication systems and radar.</p>
    <p>SHUM-2.5 includes:</p>
    <ul>
      <li>built-in secondary power supply (possibility to supply low-power external devices);</li>
      <li>thermocompensated envelope detector (for AGC system) at the output of the SHUM;</li>
      <li>digital attenuator (6-bit) at the input of the device with a range of adjustment more than 30 dB;</li>
      <li>the possibility of locking the device input at least by 60 dB for a time not exceeding 100 ns;</li>
      <li>встроенную защиту от перегрева с блокировкой подачи питания и гистерезисом 2<sup>o</sup>С;</li>
      <li>generalized control of readiness with the issuance of an "accident" signal.</li>
    </ul>
    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/shum_25.png" alt="">
      </span>
      </p>
      <div class="table-wrapper">
          <table>
              <tbody>
                <tr>
                  <td>frequency range</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>output power level at P-1, not less than, dBm (W)</td>
                  <td>34 (2.5)</td>
                </tr>
                <tr>
                  <td>gain factor, not less than, dB</td>
                  <td>40</td>
                </tr>
                <tr>
                  <td>VSWR I/O, no more than</td>
                  <td>2.0</td>
                </tr>
                <tr>
                  <td>supply voltage, V ± 10%</td>
                  <td>27</td>
                </tr>
                <tr>
                  <td>current consumption, A, not more</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>operating temperature range, <sup>o</sup>C</td>
                  <td>-60…+80</td>
                </tr>
                <tr>
                  <td>overall dimensions (without radiator), no more than, mm</td>
                  <td>180х140х25</td>
                <tr>
                  <td>mass (without radiator), not more than, kg</td>
                  <td>0.5</td>
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
