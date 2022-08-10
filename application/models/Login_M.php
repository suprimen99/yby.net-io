<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_M extends CI_Model
{
    public function setInsert($data)
    {
        $this->db->insert('tb_user', $data);
    }
}
