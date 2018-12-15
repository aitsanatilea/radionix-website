<?php

return [
    'baseUrl' => '',
    'production' => false,
    'company_name' => 'Radionix',
    'contact_phone' => '+38 (044) 495-52-09',
    
    'contact_post_ru' => '04128, г.Киев, а/я 93',
    'contact_address_1_ru' => 'ООО «Радионикс»',
    'contact_address_2_ru' => 'ул. Гарматная, 2',
    'contact_address_3_ru' => 'г.Киев, Украина',

    'contact_post_en' => '04128, Kiev, post box 93',
    'contact_address_1_en' => 'Radionix LLC',
    'contact_address_2_en' => 'Ukraine Kiev',
    'contact_address_3_en' => 'Garmatnaya str., 2',

    'collections' => [
      'products' => [
          'path' => '{collection}/{filename}',
      ],
      'projects' => [
          'path' => '{collection}/{filename}',
      ],
      'en' => [
          'path' => '{collection}/{filename}',
      ],
      'products_en' =>[
          'path' => 'en/products/{filename}',
      ],
      'projects_en' =>[
          'path' => 'en/projects/{filename}',
      ],
    ],
];
