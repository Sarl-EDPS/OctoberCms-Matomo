<?php
  return [
    'plugin'      => [
      'name'        => 'Matomo',
      'description' => 'Matomo is an open analytics platform'
    ],
    'components'  => [
      'matomo'       => [
        'name'        => 'Matomo',
        'description' => 'Matomo is an open analytics platform',
        'keyId'       => [
          'value'         => [
            'title'       => 'Key Id',
            'description' => 'Key Id Matomo',
            'validation'  => 'The Key Id property can contain only numeric symbols',
          ],
        ],
        'matomoUrl'   => [
          'value'         => [
            'title'       => 'Matomo URL',
            'description' => 'URL of your Matomo Server',
          ],
        ],
        'trackingImg'   => [
          'value'         => [
            'title'       => 'Image tracking',
            'description' => 'Image tracking when a visitor disables JavaScript',
          ],
        ],
      ],
    ],
  ];
?>
