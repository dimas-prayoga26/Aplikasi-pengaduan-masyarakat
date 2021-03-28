<?php

// $accessMenu[$role]['dashboard']['ability']['create']
$accessMenu = [
  ROLE_USER => [
    'dashboard' => [
      'allowMenu' => ['index'],
      'ability' => []
    ],
    'masyarakat' => [
      'allowMenu' => [],
      'ability' => []
    ],
    'pengaduan' => [
      'allowMenu' => ['pengaduan_index','pengaduan_create','pengaduan_update' ,'pengaduan_delete'],
      'ability' => [
        'create' => true,
        'update' => true,
        'delete' => true,
      ]
    ],
    'petugas' => [
      'allowMenu' => [],
      'ability' => []
    ],
  ],
  ROLE_ADMIN => [
    'dashboard' => [
      'allowMenu' => ['index'],
      'ability' => []
    ],
    'masyarakat' => [
      'allowMenu' => ['masyarakat_index','masyarakat_create','masyarakat_update' ,'masyarakat_delete'],
      'ability' => [
        'create' => true,
        'update' => true,
        'delete' => true,
      ]
    ],
    'pengaduan' => [
      'allowMenu' => ['pengaduan_index','pengaduan_create','pengaduan_update' ,'pengaduan_delete'],
      'ability' => [
        'create' => true,
        'update' => true,
        'delete' => true,
      ]
    ],
    'petugas' => [
      'allowMenu' => ['petugas_index','petugas_create','petugas_update' ,'petugas_delete'],
      'ability' => [
        'create' => true,
        'update' => true,
        'delete' => true,
      ]
    ],
  ],
  ROLE_PETUGAS => [
    'dashboard' => [
      'allowMenu' => ['index'],
      'ability' => []
    ],
    'masyarakat' => [
      'allowMenu' => ['masyarakat_index','masyarakat_create','masyarakat_update' ,'masyarakat_delete'],
      'ability' => [
        'create' => true,
        'update' => true,
        'delete' => true,
      ]
    ],
    'pengaduan' => [
      'allowMenu' => ['pengaduan_index','pengaduan_create','pengaduan_update' ,'pengaduan_delete'],
      'ability' => [
        'create' => true,
        'update' => true,
        'delete' => true,
      ]
    ],
    'petugas' => [
      'allowMenu' => [],
      'ability' => []
    ],
  ]
];
