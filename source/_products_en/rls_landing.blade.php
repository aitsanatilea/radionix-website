@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
      <h2>Receiving module for weather radar</h2>
      <!-- <p></p> -->
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>The receiving-mastering module is a multifunctional device intended for use
      in advanced airborne radars. The product provides the formation of a grid of
      operating frequencies in a wide microwave band, a highly stable tunable oscillator,
      a reference frequency for a synchronous detector with Doppler correction,
      reference clock frequencies for pulsed radar devices, and a number of service signals
      with the required characteristics in accordance with incoming information,
      and for receiving signals from antenna radar in three channels.</p>

    <h3 class="major">Specifications</h3>
    <p>
      <span class="image right">
        <img src="../../assets/images/products_pages/rls_landing_1.png" alt="">
        <img src="../../assets/images/products_pages/rls_landing_2.png" alt="">
      </span>
      </p>
      <div class="table-wrapper">
          <table>
              <tbody>
                <tr>
                  <td>CZM operating frequency range</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>duration of the microwave pulse, μs</td>
                  <td>0.5…32</td>
                </tr>
                <tr>
                  <td>output power level of the transmitter, Watt not less</td>
                  <td>20</td>
                </tr>
                <tr>
                  <td>relative level of spurious spectral components in the spectrum of the output signal
                    in the band f=200 MHz, dB, no more than</td>
                  <td>-60</td>
                </tr>
                <tr>
                  <td>bandwidth of the receiving channel, MHz</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>selectivity through mirror reception channels, dB, not less</td>
                  <td>60</td>
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
