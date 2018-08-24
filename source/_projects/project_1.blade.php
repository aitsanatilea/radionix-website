@extends('_layouts.master_product_description')

@section('title')
<header>
  <div class="inner">
    <h2>РСП-10 МР</h2>
    <p>Программа повышения эффективности радиолокационной системы посадки самолета</p>
  </div>
</header>
@endsection

@section('content')
<div class="wrapper">
  <div class="inner">
    <h3 class="major">Описание</h3>
    <p>В состав радиолокационной системы посадки самолета РСП-10МР входят:</p>
    <ul>
        <li>посадочный радиолокатор (ПРЛ-10МР);</li>
        <li>диспетчерский радиолокатор (ДРЛ-10МР);</li>
        <li>автоматический радиопеленгатор МВ диапазона.</li>
    </ul>
    <h3 class="major"></h3>
    <p>При проведении работ по модернизации радиолокационной системы посадки самолета
      РСП-10МР достигаются следующие результаты:</p>
    <ul>
        <li>обеспечение беспровального сопровождения самолетов в простых и сложных
          метеоусловиях в дневное и ночное время. При этом наиболее актуальным является
          замена приемопередающих устройств новыми, собранными с применением
          твердотельных радиоэлементов;</li>
        <li>снижение ошибок измерения координат сопровождаемых самолетов при выводе их
          в район аэродрома и управления их снижением за счет применения ультрасовременных
          программных методов обработки радиолокационной информации на основе
          специализированных ЭВМ промышленного назначения;</li>
        <li>обеспечение последовательного вывода самолетов по курсу посадки и глиссаде
          планирования и обеспечение их посадки на взлетно-посадочную полосу (ВПП) аэродрома
          в простых и сложных метеоусловиях;</li>
        <li>автоматизация процесса обнаружения и сопровождения самолетов. Для этого
          в состав РСП-10МР необходимо ввести автоматизированные рабочие места операторов
          на базе специализированных ЭВМ. Основными задачами специализированных ЭВМ
          и будет автоматическое обнаружение и сопровождение самолетов;</li>
        <li>автоматизация процесса обработки и передачи данных, а также их документирование.
          Применение в специализированной ЭВМ функции документирования и трансляции
          позволит обеспечить полное документирование радиолокационной информации,
          а также каналов проводной и радиосвязи;</li>
        <li>уменьшение габаритов и массы аппаратуры;</li>
        <li>увеличение ресурсного потенциала и повышение надежности;</li>
        <li>улучшение эргономичности.</li>
    </ul>
    <h3 class="major"></h3>
    <p>При модернизации посадочного радиолокатора ПРЛ-10МР будет выполнена установка
      специализированной ЭВМ (СЭВМ), которая состоит  из специальных цифровых
      вычислителей (СЦВ) и соответствующих программируемых адаптеров:</p>
    <ul>
        <li>СЦВ-1 - адаптер обработки и синхронизации (осуществляет синхронизацию блока
          приемо-передатчика и первичную обработку эхо-сигналов);</li>
        <li>СЦВ-2 - адаптер контроля блока приемо-передатчика (осуществляет оцифровку
          контрольных сигналов блока приёмопередатчика);</li>
        <li>адаптер положения антенн (осуществляет преобразование последовательного порта
          цифровых датчиков положения антенн «RS-485» в стандарт COM-порта);</li>
        <li>адаптер управления антеннами (осуществляет аппаратное управление блоками
          частотных преобразователей электроприводов антенн).</li>
    </ul>
    <h3 class="major"></h3>
    <p>Программный комплекс СЭВМ ПРЛ-10МР осуществляет следующие функции:</p>
    <ul>
        <li>окончательную обработку эхо-сигналов, включая очистку от помех,
          селекцию движущихся целей и выделение трека летательных аппаратов;</li>
        <li>графическое отображение индикаторов курса и глиссады и совмещение их
          с соответствующими эхо-сигналами;</li>
        <li>построение интерактивного интерфейса управления и контроля системами радиолокатора;</li>
        <li>поддержку локальной сети с функцией документирования информации;</li>
        <li>сопряжение с выносными рабочими местами.</li>
    </ul>


    <h3 class="major">Внешний вид специализированной ЭВМ</h3>
    <p class="image center40">
        <img src="../assets/images/project_1/mvk.png" alt="">
    </p>

    <h3 class="major"></h3>
    <p>Модернизация радиопередающего устройства (РПУ) предусматривает замену
      радиоэлектронных устройств на вакуумных радиоэлементах новыми, на твердотельных
      радиоэлементах в герметичном исполнении. Выходной каскад усилителя мощности
      твердотельный усилитель на транзисторах.</p>
    <p>В состав РПУ входят:</p>
    <ul>
      <li>транзисторные усилители мощности 800 Вт (5 шт.);</li>
      <li>устройство связи и контроля;</li>
      <li>сумматор;</li>
      <li>источник питания.</li>
    </ul>

    <h3 class="major">Внешний вид и функциональная схема блока РПУ
      на твердотельном транзисторном усилителе</h3>
    <p class="image center70">
        <img src="../assets/images/project_1/schema.png" alt="">
    </p>
    <p/>

    <p>Модернизация радиоприемного устройства.</p>
    <p>Приемник твердотельный посадочного радиолокатора (PАR) выполнен в трехканальном
      исполнении и обеспечивает работу в диапазоне частот 9120…9400 мГц.</p>
    <p>Каждый приемный модуль содержит:</p>
    <ul>
      <li>молошумящий усилитель (МШУ);</li>
      <li>смесители (СМ);</li>
      <li>усилитель промежуточной частоты (УПЧ);</li>
      <li>предварительный усилитель промежуточной частоты.</li>
    </ul>


    <h3 class="major">Технические характеристики посадочного радиолокатора (ПРЛ-10МР)</h3>
    <ol>
      <li>Диапазон рабочих частот: X-диапазон</li>
      <li>Выходная мощность, КВт: 3</li>
      <li>Длительность зондирующего импульса, мкс: 0.1…32</li>
      <li>Зона обзора:
        <ul>
          <li>по азимуту, град.: -15<sup>o</sup>…+15<sup>o</sup></li>
          <li>по дальности, не менее, км: 25</li>
          <li>по углу места, град.: –1<sup>o</sup>…+8<sup>o</sup></li>
        </ul>
      </li>
      <li>Среднеквадратическая ошибка измерения координат:
        <ul>
          <li>дальности, м, не более: 5</li>
          <li>азимута, град., не более: 0.03</li>
        </ul>
      </li>
      <li>Разрешающая способность по дальности, м, не более: 40</li>
      <li>Чувствительность РПрУ:
        <ul>
          <li>при импульсе 0,2 мкс – не хуже, дБ/Вт: 128</li>
          <li>при импульсе 0,5 мкс – не хуже, дБ/Вт: 132</li>
        </ul>
      </li>
      <li>Динамический диапазон приемника, дБ: 87</li>
      <li>Коэффициент шума - не хуже, дБ: 3.5</li>
      <li>Полоса захвата АПЧ, МГц: 6 ± 1</li>
      <li>Промежуточная частота, МГц: 60</li>
    </ol>

    <h3 class="major">Установка автоматизированного рабочего места оператора</h3>

    <p>Радиолокационная информация отображается на TFT мониторах АРМ в раздельных
      окнах индикаторов канала курса и глиссады с нелинейной логарифмической развёрткой.
      В окнах индикаторов курса и глиссады отображаются:</p>
    <ul>
      <li>метки дальности;</li>
      <li>азимутальные метки;</li>
      <li>заданные линии посадки курса и глиссады;</li>
      <li>линии боковых/горизонтальных уклонений;</li>
      <li>линии равной высоты;</li>
      <li>положения антенны глиссады (в окне курса);</li>
      <li>положение антенны курса (в окне глиссады);</li>
      <li>эхо-сигналы;</li>
      <li>трек и формуляр летательного аппарата с указанием уклонений от линий курса/глиссады в мерах (опция).</li>
    </ul>

    <p>Диагностическая информация отображается в отдельном окне диагностики и содержит:</p>
    <ul>
      <li>контроль готовности передатчика к включению излучения;</li>
      <li>контроль СВЧ излучения в каналах курса и глиссады;</li>
      <li>пороговый индикатор температуры передатчика;</li>
      <li>пороговый индикатор снижения импульсной мощности передатчика.</li>
    </ul>
    <p class="image center40">
        <img src="../assets/images/project_1/machine.png" alt="">
    </p>
    <p/>

    <p>
      <a href="/index.html" class="special">На главную</a>
    </p>
  </div>
</div>
@endsection
