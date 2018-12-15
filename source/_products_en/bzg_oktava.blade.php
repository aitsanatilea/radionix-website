@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>Low-noise frequency synthesizer "Octave"</h2>
    <p>UU52155A(B,G), UU52172A(B), UU52158</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>The frequency synthesizer provides the formation of an equidistant frequency grid
      in steps of 3.5 MHz at three outputs in accordance with the information
      coming into it from the computer.</p>

    <p>The synthesizer is made on a modern element base in a hybrid-integrated version,
      equipped with an integrated monitoring system with a fault signal in TTL levels.</p>

    <p>The module has high stability and reliability over a wide range of temperatures,
      is resistant to a wide range of mechanical and climatic factors.</p>

    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/bzg_oktava.png" alt="">
      </span>
    </p>
    <div class="table-wrapper">
      <table>
          <tbody>
            <tr>
              <td>number of operating frequencies</td>
              <td>52</td>
            </tr>
            <tr>
              <td>output power, mW</td>
              <td>3-20</td>
            </tr>
            <tr>
              <td>spectral density of power of amplitude noise, dB/Hz</td>
              <td>120</td>
            </tr>
            <tr>
              <td>spectral power density of phase noise when detached from the carrier by:</td>
            </tr>

            <tr>
              <td>2 kHz, dB/Hz</td>
              <td>-112</td>
            </tr>
            <tr>
              <td>10 kHz, dB/Hz</td>
              <td>-117</td>
            </tr>
            <tr>
              <td>50 kHz, dB/Hz</td>
              <td>-122</td>
            </tr>
            <tr>
              <td>170 kHz, dB/Hz</td>
              <td>-128</td>
            </tr>
            <tr>
              <td>switching time of operating frequencies, microseconds, no more than</td>
              <td>300</td>
            </tr>
            <tr>
              <td>isolation between any two outputs, dB, not less</td>
              <td>15</td>
            </tr>
            <tr>
              <td>relative level of parasitic components when detached from the carrier by ±(0.17-3.5) MHz, dB, not more than</td>
              <td>-90</td>
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
