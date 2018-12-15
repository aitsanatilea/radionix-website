@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
      <h2>Receiver-transmitting module of weather-navigation radar</h2>
      <!-- <p></p> -->
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>Transceiver module (MRP) of hybrid-integral version on a modern element base
      with solid-state power amplifier of the transmitter, intended for operation
      as part of an onboard meteorological radar.</p>
    <p>The MRP provides:</p>
    <ul>
      <li>receiving a reflected signal, amplifying it, converting it to an intermediate frequency, and adjusting the amplitude of the output signal;</li>
      <li>formation of coherent radio pulses with amplitude, phase modulation and their conversion to the operating frequency;</li>
      <li>the output of the generated signal to the control output or to the final power amplifier;</li>
      <li>the formation of a reference frequency for an external control and processing unit.</li>
    </ul>

    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products/rls_navigation.png" alt="">
      </span>
      </p>
      <div class="table-wrapper">
          <table>
              <tbody>
                <tr>
                  <td>range of operating frequencies</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>step of switching output working, MHz</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>relative instability during operation time</td>
                  <td>±1x10<sup>-7</sup></td>
                </tr>
                <tr>
                  <td>switching time of output operating frequencies, μs</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>relative power spectral density of phase fluctuations relative to carrier
                    at detuning 1.0 kHz, dB/Hz</td>
                  <td>-100</td>
                </tr>
                <tr>
                  <td>relative level of discrete spectral components in the signal spectrum, dB</td>
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
