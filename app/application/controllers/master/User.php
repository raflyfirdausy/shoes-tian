<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends RFL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "User_model"     => "user"
        ]);

        $this->module           = "Data Pengguna";
        $this->model            = $this->user;
        $this->modelView        = $this->user;
        $this->fieldForm        = $this->_getFieldForm();
        $this->kondisiGetData   = ["role" => USER];
    }

    private function _getFieldForm()
    {
        $field =  [
            [
                "col"               => 6,
                "type"              => "email",
                "name"              => "email",
                "label"             => "Email",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "password",
                "name"              => "password",
                "label"             => "Password",
                "numberOnly"        => true,
                "required"          => false,
                "hideFromTable"     => true,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
                "note_edit"         => "Silahkan kosongi jika tidak ingin mengubah password"
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "nama",
                "label"             => "Nama",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "nohp",
                "label"             => "No HP",
                "numberOnly"        => true,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "select",
                "name"              => "jenis_kelamin",
                "name_alias"        => "jenis_kelamin",
                "label"             => "Jenis Kelamin",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
                "options"       => [
                    "chain"         => FALSE,               //! Set true if chaining
                    "to"            => NULL,                //! Set name of target chaining
                    "serverSide"    => FALSE,                //! Set true if server side
                    "data"          => [
                        [
                            "value" => "LAKI-LAKI",
                            "label" => "LAKI-LAKI"
                        ],
                        [
                            "value" => "PEREMPUAN",
                            "label" => "PEREMPUAN"
                        ],
                    ]
                ]
            ],
        ];
        return $field;
    }

    public function index()
    {
        $data = [
            "FIELD_FORM"            => $this->_getFieldForm(),
            "title"                 => $this->module,
            "ENABLE_ADD_BUTTON"     => TRUE
        ];
        $this->loadRFLView("master/user/index", $data);
    }

    public function create($id = NULL)
    {
        foreach ($this->fieldForm as $form) {
            $ishideFromCreate   = isset($form["hideFromCreate"])    ? $form["hideFromCreate"]   : FALSE;
            if ($form["type"] != "file" && !$ishideFromCreate) {
                $data[$form["name"]] = $this->input->post($form["name"]);
            }
        }

        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nohp',
                'label' => 'No Handphone',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[shoes.user.email]',
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[8]',
            ],
        ];

        $load   = $this->form_validation->set_rules($config);
        $run    = $this->form_validation->run();
        if (!$run) {
            $error  = $this->form_validation->error_array();
            $this->session->set_flashdata("gagal", validationError($error));
            echo json_encode([
                "code"      => 503,
                "message"   => "Terjadi kesalahan saat menambahkan data $this->module. Keterangan : " . validationError($error)
            ]);
            die;
        }

        $data["role"]       = USER;
        $data["password"]   = md5($data["password"]);
        $insert         = $this->model->insert($data);
        if (!$insert) {
            echo json_encode([
                "code"      => 503,
                "message"   => "Terjadi kesalahan saat menambahkan data $this->module"
            ]);
            die;
        }

        echo json_encode([
            "code"      => 200,
            "message"   => "Berhasil menambahkan data " . ucwords($this->module)
        ]);
    }

    public function update()
    {
        $id_data    = $this->input->post("id_data");

        $dataUpdate = [];
        foreach ($this->fieldForm as $form) {
            $isHideFromUpdate   = isset($form["hideFromEdit"])    ? $form["hideFromEdit"]   : FALSE;
            if ($form["type"] != "file" && !$isHideFromUpdate) {
                $dataUpdate[$form["name"]] = $this->input->post($form["name"]);
            }
        }

        $cekData    = $this->model->where(["id" => $id_data])->get();
        if (!$cekData) {
            echo json_encode([
                "code"      => 404,
                "message"   => "Data $this->module tidak ditemukan"
            ]);
            die;
        }

        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nohp',
                'label' => 'No Handphone',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required',
            ],
        ];

        $email = $this->input->post("email");
        if ($email != $cekData["email"]) {
            $cekEmail = $this->model->where(["email" => $email])->get();
            if ($cekEmail) {
                echo json_encode([
                    "code"      => 503,
                    "message"   => "Terjadi kesalahan saat menambahkan data $this->module. Keterangan : Email sudah digunain. silahkan gunakan email yang lain"
                ]);
                die;
            }
        }

        if (!empty($dataUpdate["password"])) {
            array_push($config, [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[8]',
            ]);
        }

        $load   = $this->form_validation->set_rules($config);
        $run    = $this->form_validation->run();
        if (!$run) {
            $error  = $this->form_validation->error_array();
            $this->session->set_flashdata("gagal", validationError($error));
            echo json_encode([
                "code"      => 503,
                "message"   => "Terjadi kesalahan saat menambahkan data $this->module. Keterangan : " . validationError($error)
            ]);
            die;
        }



        if (!empty($dataUpdate["password"])) {
            $dataUpdate["password"]   = md5($dataUpdate["password"]);
        } else {
            unset($dataUpdate["password"]);
        }

        $update = $this->model->where(["id" => $cekData["id"]])->update($dataUpdate);
        if (!$update) {
            echo json_encode([
                "code"      => 503,
                "message"   => "Terjadi kesalahan saat mengedit " . ucwords($this->module)
            ]);
            die;
        }

        echo json_encode([
            "code"      => 200,
            "message"   =>  ucwords($this->module) . " berhasil di ubah !"
        ]);
    }
}
