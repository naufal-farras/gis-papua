<?php

/**
 * 
 */
class Client_model extends CI_Model
{
    public function cek_login($username, $hash)
    {
        $result = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$hash' AND status='aktif' LIMIT 1");
        return $result;
    }
}
