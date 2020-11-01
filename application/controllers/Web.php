<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['l'] = $this->db->query("SELECT * FROM lokasi where status='terima' GROUP BY nama ASC LIMIT 4 ");
        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        $data['key'] = $this->db->query("SELECT * from setting where id='1' ");

        $this->template->load('front-end/_template', 'front-end/_home', $data);
    }


    public function profil()
    {
        $data['l'] = $this->db->query("SELECT * FROM lokasi GROUP BY nama DESC LIMIT 3");

        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        $data['p'] = $this->db->get_where("profil", array("id_profil" => 1))->row_array();
        $this->template->load('front-end/_template', 'front-end/_profil', $data);
    }

    public function lokasi()
    {
        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        $data['la'] = $this->db->query("SELECT * FROM lokasi where status='terima'");

        // $data['la'] = $this->db->get("lokasi");
        $this->template->load('front-end/_template', 'front-end/_lokasi', $data);
    }

    // $query = $this->db->get_where('lokasi', array('id' => $id));
    // if ($query->num_rows() > 0) {
    //     $row = $query->row_array();
    //     $id_galeri = $row['id_galeri'];
    // }


    // <?php
    public function lokasi_one($id)
    {

        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        // $data['gg'] = $this->db->query("SELECT * FROM galeri where $id");
        $data['gx'] = $this->db->query("SELECT * FROM galeri WHERE id='$id'");

        $data['lo'] = $this->db->get_where('lokasi', array('id' => $id))->row_array();
        $data['g'] = $this->db->get_where('galeri ', array('id' => $id))->row_array();
        $data['id_lokasi'] = $id;
        $data['key'] = $this->db->query("SELECT * from setting where id='1' ");


        $this->template->load('front-end/_template3', 'front-end/_lokasi_one', $data);
    }
    public function detail_lokasi($id)
    {

        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        // $data['gg'] = $this->db->query("SELECT * FROM galeri where $id");
        $data['gx'] = $this->db->query("SELECT * FROM galeri WHERE id='$id'");
        $data['key'] = $this->db->query("SELECT * from setting where id='1' ");

        $data['lo'] = $this->db->get_where('lokasi', array('id' => $id))->row_array();
        $data['g'] = $this->db->get_where('galeri ', array('id' => $id))->row_array();
        $data['id_lokasi'] = $id;


        $this->template->load('front-end/_template3', 'front-end/_detail_lokasi', $data);
    }




    public function berita()
    {
        if ($this->uri->segment('3') == '' or $this->uri->segment('3') == '/') {
            redirect(base_url('web/berita/1'));
        }
        // else {
        $this->load->library('lib_pagination');                         //Load the "lib_pagination" library
        $pg_config['sql']      = "SELECT * from berita ORDER BY id_berita DESC";              //your SQL, don't add ";" in your SQL query
        $pg_config['per_page'] = 4;                                     //Display items per page
        $data = $this->lib_pagination->create_pagination($pg_config);   //Load function in "lib_pagination" libraryfor create pagination. 
        $data['title']         = "Rumah Belajar Papua";


        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        // $data['ab'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 4");
        $this->template->load('front-end/_template2', 'front-end/_berita', $data);
        // }
    }
    public function beritadetail($id)
    {
        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        $b = $this->db->get_where("berita", array("id_berita" => $id))->row_array();
        $dibaca = $b['dibaca'];
        $this->db->update('berita', array('dibaca' => $dibaca + 1), array("id_berita" => $id));
        $data['bo'] = $this->db->get_where("berita", array("id_berita" => $id))->row_array();
        $this->template->load('front-end/_template', 'front-end/_berita_detail', $data);
    }

    public function tempatdetail($id)
    {
        $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
        $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
        $b = $this->db->get_where("berita", array("id_berita" => $id))->row_array();
        $dibaca = $b['dibaca'];
        $this->db->update('berita', array('dibaca' => $dibaca + 1), array("id_berita" => $id));
        $data['bo'] = $this->db->get_where("berita", array("id_berita" => $id))->row_array();
        $this->template->load('front-end/_template', 'front-end/_berita_detail', $data);
    }



    public function komentar()
    {
        $data['l'] = $this->db->query("SELECT * FROM lokasi GROUP BY nama DESC LIMIT 5");

        if (isset($_POST['kirim'])) {
            $data = array(
                'nama'         => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                // 'website'     => $this->input->post('website'),
                'komentar'     => $this->input->post('komentar'),
            );
            $this->db->insert('komentar', $data);
            redirect('web/komentar');
        } else {
            $data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 4");
            $data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 4");
            $data['k'] = $this->db->query("SELECT * FROM komentar GROUP BY id_komentar DESC LIMIT 5");
            $this->template->load('front-end/_template', 'front-end/_komentar', $data);
        }
    }
}
