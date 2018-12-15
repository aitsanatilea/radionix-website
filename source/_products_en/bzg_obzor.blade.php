@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>Low-noise frequency synthesizer "Overview"</h2>
    <p>UM511011</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>A multifunctional frequency synthesizer with a low level of frequency
      and amplitude fluctuations designed for operation in airborne radar stations
      to form a frequency grid of output signals in the 3-cm band and a grid of
      heterodyne frequencies corresponding to each frequency of the output signal,
      as well as the frequency of the second local oscillator and reference frequencies
      (synchronization frequencies).</p>

    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/bzg_obzor.png" alt="">
      </span>
    </p>
    <div class="table-wrapper">
      <table>
          <tbody>
            <tr>
              <td>number of operating frequencies</td>
              <td>45</td>
            </tr>
            <tr>
              <td>output power, mW</td>
              <td>400-720</td>
            </tr>
            <tr>
              <td>time of switching operating frequencies, microseconds, no more</td>
              <td>10</td>
            </tr>
            <tr>
              <td>spectral power density of the phase noise when detached from the carrier by:</td>
            </tr>

            <tr>
              <td>2 kHz, dB/Hz</td>
              <td>-104</td>
            </tr>
            <tr>
              <td>10 kHz, dB/Hz</td>
              <td>-115</td>
            </tr>
            <tr>
              <td>50 kHz, dB/Hz</td>
              <td>-130</td>
            </tr>
            <tr>
              <td>170 kHz, dB/Hz</td>
              <td>-130</td>
            </tr>
            <tr>
              <td>relative level of parasitic components at detuning from the carrier by ±500 MHz, dB, no more</td>
              <td>-80</td>
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
