<?php

/**
 * 
 */
class Client_model extends CI_Model
{
    public function cek_login($username, $hash)
    {
        $user = str_replace("'", "", htmlspecialchars($username, ENT_QUOTES));
        // $user = $this->db->escape($username);
        $result = $this->db->query("SELECT * FROM admin WHERE username='$user' AND password='$hash' AND status='aktif' LIMIT 1");
        return $result;
    }
}
