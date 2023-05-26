<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekening extends RFL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "Bank_model"     => "bank"
        ]);

        $this->module           = "Data Rekening";
        $this->model            = $this->bank;
        $this->modelView        = $this->bank;
        $this->fieldForm        = $this->_getFieldForm();
    }

    private function _getFieldForm()
    {
        $field =  [
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "bank",
                "label"             => "Nama Bank",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "norek",
                "label"             => "Nomor Rekening",
                "numberOnly"        => true,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "atas_nama",
                "label"             => "Atas Nama",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "select",
                "name"              => "is_aktif",
                "name_alias"        => "is_aktif",
                "label"             => "Aktif ?",
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
                            "value" => "YA",
                            "label" => "YA"
                        ],
                        [
                            "value" => "TIDAK",
                            "label" => "TIDAK"
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
        $this->loadRFLView("master/rekening/index", $data);
    }
    
}
