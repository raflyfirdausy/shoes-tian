<?php

class Transaksi_model extends Custom_model
{
    public $table                   = 'transaksi';
    public $primary_key             = 'id';
    public $soft_deletes            = TRUE;
    public $timestamps              = TRUE;
    public $return_as               = "array";

    public function __construct()
    {
        parent::__construct();

        $this->has_one['detail'] = array(
            'foreign_model'     => 'TransaksiDetail_model',
            'foreign_table'     => 'transaksi_detail',
            'foreign_key'       => 'id_transaksi',         
            'local_key'         => 'id'          
        );
    }
}
