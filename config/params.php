<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'judul_app' => 'Keuangan SMP NU',
    'version_app' => '1.0',
    'created_year' => '2019',
    'tipe_diskon' => [
        0 => 'Tidak Ada',
        1 => 'Diskon Reguler',
        2 => 'Diskon Khusus',
        3 => 'Diskon Reguler & Khusus Khusus'
    ],
    'jenis_tagihan' => [
        1 => 'Sekali',
        2 => 'Tiap Bulan',
        3 => 'Tiap Tahun',
        4 => 'Tiap Semester',
    ],
    'tidak_ada' => [
        0 => 'Tidak Ada',
        1 => 'Ada'
    ],
    'debit_kredit' =>[
        'd' => 'Debit',
        'k' => 'Kredit',
    ],
    'active_status' =>[
        1 => 'Active',
        0 => 'Non Aktive',
    ],
    'status_siswa' =>[
        0 => Yii::t('app','Non Aktive'),
        1 => Yii::t('app','Active'),
        2 => Yii::t('app','Lulus'),
    ],
    'gender' =>[
        'L' => 'Laki-Laki',
        'P' => 'Perempuan',
    ],

];
