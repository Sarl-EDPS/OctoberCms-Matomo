<?php
  return [
    'plugin' => [
      'name'          => 'Matomo',
      'description'   => 'Vous permet d\'analyser le trafic sur votre site Web, en toute confidentiallité',
    ],
    'components' => [
      'matomo'        => [
        'name'          => 'Matomo',
        'description'   => 'Analyseur de trafic Web',
        'keyId'       => [
          'value'       => [
            'title'       => 'Key Id',
            'description' => 'Key Id Matomo',
            'validation'  => 'La propriété Key Id ne peut contenir que des symboles numériques',
          ],
        ],
        'matomoUrl'   => [
          'value'       => [
            'title'       => 'URL Matomo',
            'description' => 'URL de votre server Matomo',
          ],
        ],
        'trackingImg'   => [
          'value'         => [
            'title'       => 'Suivi par imge',
            'description' => 'Suivi par image quand un visiteur désactive JavaScript',
          ],
        ],
      ],
    ],
  ];
?>
