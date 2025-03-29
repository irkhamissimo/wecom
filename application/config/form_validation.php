<?php
$config = [
	'error_prefix' => '<div class="text-small text-danger">',
	'error_suffix' => '</div>',
	'register' => [
		[
			'field' => 'nama_depan',        
			'label' => 'Nama Depan',
			'rules' => 'required|trim',
			'errors' => [
				'required' => 'Nama Depan harus diisi',
			],
		],
		[
			'field' => 'nama_belakang',
			'label' => 'Nama Belakang',
			'rules' => 'required|trim',
			'errors' => [
				'required' => 'Nama Belakang harus diisi',
			],
		],
		[
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim|valid_email|is_unique[users.email]',
			'errors' => [
				'required' => 'Email harus diisi',
				'valid_email' => 'Email tidak valid',
				'is_unique' => 'Email sudah terdaftar',
			],
		],
        [
            'field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required|trim|valid_date',
            'errors' => [
                'required' => 'Tanggal Lahir harus diisi',
                'valid_date' => 'Tanggal Lahir tidak valid',
            ],
        ],
        [
            'field' => 'alamat',    
            'label' => 'Alamat',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ],
        ],
        [
            'field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'required|trim|numeric',
            'errors' => [
                'required' => 'Telepon harus diisi',
                'numeric' => 'Telepon harus berupa angka',
            ],
        ],
        [
            'field' => 'hp',
            'label' => 'Nomor Handphone',
            'rules' => 'required|trim|numeric',
            'errors' => [
                'required' => 'Nomor Handphone harus diisi',
                'numeric' => 'Nomor Handphone harus berupa angka',
            ],
        ],
        [
            'field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'Jenis Kelamin harus diisi',
            ],
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[6]',
            'errors' => [
                'required' => 'Password harus diisi',
                'min_length' => 'Password harus memiliki minimal 6 karakter',
            ],
        ],
        [
            'field' => 'konfirmasi_password',
            'label' => 'Konfirmasi Password',
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'Konfirmasi Password harus diisi',
                'matches' => 'Konfirmasi Password tidak sama dengan Password',
            ],
        ],
	],
];

return $config;