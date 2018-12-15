@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>Multifunctional frequency synthesizer "Ozone"</h2>
    <p>UM511010</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>A multifunctional frequency synthesizer with a low level of frequency and
      amplitude fluctuations intended for operation in airborne radar stations
      for forming a frequency grid of output signals in the centimeter range and
      a grid of heterodyne frequencies corresponding to each frequency of the output signal,
      as well as the frequency of the second local oscillator and reference frequencies.</p>

    <p>The synthesizer works in the following modes:</p>
    <ul>
      <li>"O" without modulation for output working frequencies;</li>
      <li>"P" without modulation for output working frequencies;</li>
      <li>amplitude-pulse modulation for output working frequencies;</li>
      <li>phase modulation for output working frequencies;</li>
      <li>frequency modulation for output operating frequencies.</li>
    </ul>
    <p>The synthesizer is made on a modern element base in a hybrid-integrated version,
      equipped with an integrated monitoring system with the issuance of fault signals in TTL levels.</p>
    <p>The module has high stability and reliability over a wide range of temperatures,
      is resistant to a wide range of mechanical and climatic factors.</p>

    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/bzg_ozon.png" alt="">
      </span>
    </p>
    <div class="table-wrapper">
      <table>
          <tbody>
            <tr>
              <td>number of operating frequencies</td>
              <td>18</td>
            </tr>
            <tr>
              <td>output power per output, mW</td>
              <td>400-700</td>
            </tr>
            <tr>
              <td>spectral power density of the amplitude noise of the output signal, dB/Hz</td>
              <td>-125</td>
            </tr>
            <tr>
              <td>power spectral density of the phase noise of the output signal when detached from the carrier by:</td>
            </tr>

            <tr>
              <td>2 kHz, dB/Hz</td>
              <td>-104</td>
            </tr>
            <tr>
              <td>10 kHz, dB/Hz</td>
              <td>-120</td>
            </tr>
            <tr>
              <td>25 kHz, dB/Hz</td>
              <td>-130</td>
            </tr>
            <tr>
              <td>170 kHz, dB/Hz</td>
              <td>-135</td>
            </tr>
            <tr>
              <td>switching time of output operating frequencies, μs</td>
              <td>40</td>
            </tr>
            <tr>
              <td>the relative level of the parasitic components when detached from the carrier by:</td>
            </tr>
            <tr>
              <td>±(0,2-10,0) MHz</td>
              <td>-90</td>
            </tr>
            <tr>
              <td>±(10-100) MHz</td>
              <td>-85</td>
            </tr>
            <tr>
              <td>±(100-600) MHz</td>
              <td>-80</td>
            </tr>
            <tr>
              <td>±(600-1350) MHz</td>
              <td>-60</td>
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
