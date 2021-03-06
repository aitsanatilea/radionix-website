@extends('_layouts.master_en_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>RSP-10 MR</h2>
    <p>Program to improve the effectiveness of the radar landing system</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Description</h3>
    <p>The radar landing system of the RSP-10MR aircraft includes:</p>
    <ul>
        <li>landing radar (PRL-10MR);</li>
        <li>dispatching radar (DRL-10MR);</li>
        <li>automatic direction finder MV range.</li>
    </ul>
    <h3 class="major"></h3>
    <p>During the work on the modernization of the radar landing system of the RSP-10MR aircraft, the following results are achieved:</p>
    <ul>
        <li>providing unprotected support of aircraft in simple and difficult weather conditions during day and night. At the same time, the most actual is the replacement of transceiver devices with new ones assembled using solid-state radio elements;</li>
        <li>reduction of errors in measuring the coordinates of escorted aircraft when they are brought to the aerodrome area and controlling their decrease due to the use of cutting-edge software methods for processing radar information on the basis of specialized computers for industrial use;</li>
        <li>ensuring the consistent withdrawal of aircraft at the rate of landing and glide path planning and ensuring their landing on the runway (runway) of the aerodrome in simple and difficult weather conditions;</li>
        <li>automation of the detection and tracking of aircraft. For this purpose, it is necessary to introduce automated workstations of operators on the basis of specialized computers into RSP-10MR. The main tasks of specialized computers will be automatic detection and tracking of aircraft;</li>
        <li>automation of the processing and transmission of data, as well as their documentation. The use of documenting and broadcasting functions in a specialized computer will allow to provide complete documentation of radar information, as well as of wire and radio communication channels;</li>
        <li>reduction of overall dimensions and weight of equipment;</li>
        <li>increase in resource potential and increase of reliability;</li>
        <li>improvement of ergonomics.</li>
    </ul>
    <h3 class="major"></h3>
    <p>When upgrading the landing radar PRL-10MR will be performed the following works:
installation of a specialized computer (COMP), which consists of special digital computers (PCV) and the corresponding programmable adapters:</p>
    <ul>
        <li>SCW-1 - processing and synchronization adapter (synchronizes the transmitter-receiver unit and primary echo processing);</li>
        <li>SCW-2 - the adapter of the control of the block of the transceiver (carries out digitization of control signals of the transceiver unit);</li>
        <li>antenna position adapter (converts serial port of digital position sensors of RS-485 antennas to COM port standard);</li>
        <li>antenna control adapter (carries out hardware control of frequency converter blocks of electric drives of antennas).</li>
    </ul>
    <h3 class="major"></h3>
    <p>The software complex SEVM PRL-10MM performs the following functions:</p>
    <ul>
        <li>final processing of echoes, including clearing of interference, selection of moving targets and allocation of a track of aircraft;</li>
        <li>graphical display of course and glide path indicators and their combination with corresponding echo signals;</li>
        <li>building an interactive interface for control and monitoring of radar systems;</li>
        <li>support of a local network with the function of documenting information;</li>
        <li>interface with remote workstations.</li>
    </ul>


    <h3 class="major">Appearance of a specialized computer</h3>
    <p class="image center40">
        <img src="../../assets/images/project_1/mvk.png" alt="">
    </p>

    <h3 class="major"></h3>
    <p>Modernization of the radio transmitting device (RPU) provides for the replacement of radio electronic devices on vacuum radio cells with new ones, on solid-state radioelements in hermetic execution. The output stage of the power amplifier is a solid state transistor amplifier.</p>
    <p>The RPU includes:</p>
    <ul>
      <li>transistor power amplifiers 800 W (5 pcs.);</li>
      <li>communication and control device;</li>
      <li>adder;</li>
      <li>source of power.</li>
    </ul>

    <h3 class="major">Appearance and functional diagram of the RPU unit on a solid-state transistor amplifier</h3>
    <p class="image center70">
        <img src="../../assets/images/project_1/schema.png" alt="">
    </p>
    <p/>

    <p>Modernization of the radio receiving device.</p>
    <p>Receiver solid-state landing radar (PАR) is made in three-channel design and provides operation in the frequency range of 9120 ... 9400 MHz.</p>
    <p>Each receiving module contains:</p>
    <ul>
      <li>a luminous amplifier (LNA);</li>
      <li>mixers (SM);</li>
      <li>intermediate frequency amplifier (IF amplifier);</li>
      <li>intermediate frequency preamplifier.</li>
    </ul>


    <h3 class="major">Technical characteristics of the landing radar (PRL-10MR)</h3>
    <ol>
      <li>Operating frequency range: X-band</li>
      <li>Output power, kW: 3</li>
      <li>Duration of the probe pulse, μs: 0.1…32</li>
      <li>Field of view:
        <ul>
          <li>in azimuth, degrees.: -15<sup>o</sup>…+15<sup>o</sup></li>
          <li>in range, not less than, km: 25</li>
          <li>by the angle of the place, degrees: –1<sup>o</sup>…+8<sup>o</sup></li>
        </ul>
      </li>
      <li>Mean square error of the coordinate measurement:
        <ul>
          <li>range, m, no more than: 5</li>
          <li>azimuth, degrees, no more than: 0.03</li>
        </ul>
      </li>
      <li>Resolution in range, m, no more than: 40</li>
      <li>Sensitivity:
        <ul>
          <li>with a pulse of 0.2 μs - not worse, dB/W: 128</li>
          <li>at a pulse of 0.5 μs - not worse, dB/W: 132</li>
        </ul>
      </li>
      <li>Dynamic range of the receiver, dB: 87</li>
      <li>Noise factor - not worse, dB: 3.5</li>
      <li>Bandwidth of AFC, MHz: 6 ± 1</li>
      <li>Intermediate frequency, MHz: 60</li>
    </ol>

    <h3 class="major">Installation of the operator's automated workplace</h3>

    <p>Radar information is displayed on TFT monitors AWP in separate windows of the course channel indicators and glide path with nonlinear logarithmic scanning. In the course and glide path indicators windows:</p>
    <ul>
      <li>range marks;</li>
      <li>azimuth labels;</li>
      <li>preset course and glide path lines;</li>
      <li>lines of lateral/horizontal deviations;</li>
      <li>lines of equal height;</li>
      <li>position of the glide path antenna (in the course window);</li>
      <li>position of the course antenna (in the glide path window);</li>
      <li>echo signals;</li>
      <li>track and airplane form with indication of deviations from course lines / glide path in measures (option).</li>
    </ul>

    <p>Diagnostic information is displayed in a separate diagnostic window and contains:</p>
    <ul>
      <li>control of the readiness of the transmitter to switch on the radiation;</li>
      <li>control of microwave radiation in the course channels and glide path;</li>
      <li>threshold temperature indicator of the transmitter;</li>
      <li>threshold indicator for reducing the pulsed power of the transmitter.</li>
    </ul>
    <p class="image center40">
        <img src="../../assets/images/project_1/machine.png" alt="">
    </p>
    <p/>

    <p>
      <a href="/en/index.html" class="special">Back to Main</a>
    </p>
  </div>
</div>
@endsection
