<?php

class M_data extends CI_Model
{
    function data($number, $offset)
    {
        return $query = $this->db->get('berita', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('berita')->num_rows();
    }
}
