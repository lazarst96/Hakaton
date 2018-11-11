<?php 

$config = array(
	'login'=>array(
		array(
            'field' => 'email',
            'label' => 'E-mail',
			'rules' => 'trim|required|valid_email',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        ),
        array(
            'field' => 'password',
            'label' => 'Lozinka',
			'rules' => 'trim|required|callback_log_user',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        )
	),
	'add_report'=>array(
		array(
            'field' => 'desc',
            'label' => 'Opis',
			'rules' => 'trim',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        )
	),
	'add_therapy'=>array(
        array(
            'field' => 'diag',
            'label' => 'Dijagnoza',
			'rules' => 'trim|required',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        ),
        array(
            'field' => 'detaljno',
            'label' => 'Detaljan opis',
			'rules' => 'trim|required',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        ),
        array(
            'field' => 'perioda',
            'label' => 'Perioda',
			'rules' => 'trim|required',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        ),
	),
	'add_patient'=>array(
        array(
            'field' => 'email',
            'label' => 'Email',
			'rules' => 'trim|required|valid_email',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        )
	),
	'change_patient'=>array(
        array(
            'field' => 'perioda',
            'label' => 'Perioda',
			'rules' => 'trim|required',
			'errors' => array(
				'required' => "Ovo polje je obavezno."
			)

        )
	)
);