<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RegisterModel extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  function register($nama, $nip, $id_jabatan, $password)
  {
    $data_user = array(
      'nama_pegawai' => $nama,
      'nip' => $nip,
      'id_jabatan' => $id_jabatan,
      'password' => password_hash($password, PASSWORD_DEFAULT)

    );
    $this->db->insert('pegawai', $data_user);
  }

  public function get_category()
  {
    $query = $this->db->get('jabatan')->result_array();
    return $query;
  }
}
