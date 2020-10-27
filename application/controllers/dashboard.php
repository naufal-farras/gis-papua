<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */


    public function __Construct()
    {

        parent::__Construct();
        $this->load->helper('custom');
        cek_sesi();
    }
    public function index()
    {
        $data['key'] = $this->db->query("SELECT * from setting where id='1' ");

        $this->template->load('back-end/_template', 'back-end/_dashboard', $data);
    }

    public function profil()
    {
        if (isset($_POST['update'])) {
            $data = array(
                'judul'         => $this->input->post('judul'),
                'isi_profil'    => $this->input->post('isi'),
            );
            $this->db->where('id_profil', $this->input->post('id'));
            $this->db->update('profil', $data);
            redirect('dashboard/profil');
        } else {
            $data['p'] = $this->db->get_where('profil', array('id_profil' => 1))->row_array();
            $this->template->load('back-end/_template', 'back-end/_profil', $data);
        }
    }

    public function lokasi_tambah()
    {
        $data['k'] = $this->db->get('kategori');
        $data['l'] = $this->db->get('lokasi');
        $data['key'] = $this->db->query("SELECT * from setting where id='1' ");


        $this->template->load('back-end/_template', 'back-end/_lokasi_tambah', $data);
    }
    public function lokasi_baru()
    {
        $data['l'] = $this->db->query("SELECT * from lokasi where status='' or status='tolak' ");
        $this->template->load('back-end/_template', 'back-end/_lokasi_baru', $data);
    }
    public function Lokasi()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'nama'        => $this->input->post('nama'),
                'kategori'    => $this->input->post('kategori'),
                'alamat'    => $this->input->post('alamat'),
                'telp'        => $this->input->post('telp'),
                'latittude'    => $this->input->post('lat'),
                'longitude'    => $this->input->post('long'),
                'keterangan'    => $this->input->post('keterangan'),
                'id_admin'    => $this->input->post('id_admin'),


            );
            $this->db->insert('lokasi', $data);
            redirect('dashboard/lokasi');
        } elseif (isset($_POST['update'])) {
            $data = array(
                'nama'        => $this->input->post('nama'),
                'kategori'    => $this->input->post('kategori'),
                'alamat'    => $this->input->post('alamat'),
                'telp'        => $this->input->post('telp'),
                'latittude'    => $this->input->post('lat'),
                'longitude'    => $this->input->post('long'),
                'keterangan'    => $this->input->post('keterangan'),
                'id_admin'    => $this->input->post('id_admin'),


            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('lokasi', $data);
            redirect('dashboard/lokasi');
        } else {
            $data['l'] = $this->db->get('lokasi');
            $data['ll'] = $this->db->query("SELECT * from lokasi where status='terima' ");


            $this->template->load('back-end/_template', 'back-end/_lokasi', $data);
        }
    }


    public function Lokasi_edit($id)
    {
        if ($this->session->level != '0') {
            $query = $this->db->get_where('lokasi', array('id' => $id));
            if ($query->num_rows() > 0) {
                $row = $query->row_array();
                $id_admin = $row['id_admin'];
            }

            if ($this->session->id != $id_admin) {
                redirect('dashboard/lokasi');
            } else {
                $data['k'] = $this->db->get('kategori');
                $data['lokasi'] = $this->db->get('lokasi')->result();

                $data['l'] = $this->db->get_where('lokasi', array('id' => $id))->row_array();
                $this->template->load('back-end/_template', 'back-end/_lokasi_edit', $data);
            }
        } else {
            $data['k'] = $this->db->get('kategori');
            $data['lokasi'] = $this->db->get('lokasi')->result();

            $data['l'] = $this->db->get_where('lokasi', array('id' => $id))->row_array();
            $this->template->load('back-end/_template', 'back-end/_lokasi_edit', $data);
        }
    }

    public function Lokasi_detail($id)
    {
        if (isset($_POST['update'])) {
            $status = "terima";
            $data = array(
                'nama'        => $this->input->post('nama'),
                'kategori'    => $this->input->post('kategori'),
                'alamat'    => $this->input->post('alamat'),
                'telp'        => $this->input->post('telp'),
                'latittude'    => $this->input->post('lat'),
                'longitude'    => $this->input->post('long'),
                'keterangan'    => $this->input->post('keterangan'),
                // 'id_admin'    => $this->input->post('id_admin'),
                'status'         => $status,


            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('lokasi', $data);
            redirect('dashboard/lokasi_baru');
        }


        $data['k'] = $this->db->get('kategori');
        $data['lokasi'] = $this->db->get('lokasi')->result();
        $data['key'] = $this->db->query("SELECT * from setting where id='1' ");

        $data['l'] = $this->db->get_where('lokasi', array('id' => $id))->row_array();
        $this->template->load('back-end/_template', 'back-end/_lokasi_detail', $data);
    }

    public function Lokasi_tolak($id)
    {
        $status = "tolak";
        $data = array(

            'status'         => $status,
        );
        $this->db->where('id', $id);
        $this->db->update('lokasi', $data);
        redirect('dashboard/lokasi_baru');
    }

    public function Lokasi_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
        redirect('dashboard/lokasi');
    }

    public function lokasi_kategori_edit($id)
    {

        $data['k'] = $this->db->get_where('kategori', array('id' => $id))->row_array();
        $this->template->load('back-end/_template', 'back-end/_lokasi_kategori_edit', $data);
    }
    public function Lokasi_kategori()
    {
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/icon';
                $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
                $this->load->library('upload', $config);
                $config['max_size']             = 1024; // 1MB
                $config['max_width']            = 320;
                $config['max_height']           = 370;
                $this->upload->initialize($config);



                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    // $this->index($error);
                    echo "Upload Gagal";
                } else {
                    $hasil     = $this->upload->data();
                    $data = array(
                        'nama_kategori'    => $this->input->post('nama'),
                        'keterangan'    => $this->input->post('keterangan'),
                        'ikon'            => $hasil['file_name'],
                    );
                    $this->db->insert('kategori', $data);
                    redirect('dashboard/lokasi_kategori');
                }
            } else {
                $data = array(
                    'nama_kategori'    => $this->input->post('nama'),
                    'keterangan'    => $this->input->post('keterangan'),
                );
                $this->db->insert('kategori', $data);
                redirect('dashboard/lokasi_kategori');
            }
        } elseif (isset($_POST['update'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/icon';
                $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
                // $this->load->library('upload', $config);
                $this->upload->initialize($config);


                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil     = $this->upload->data();
                    $data = array(
                        'nama_kategori'    => $this->input->post('nama'),
                        'keterangan'    => $this->input->post('keterangan'),
                        'ikon'            => $hasil['file_name'],
                    );

                    $id     = $this->input->post('id');
                    $query     = $this->db->get_where('kategori', array('id' => $id))->row_array();
                    unlink("./uploads/icon/" . $query['ikon']);

                    $this->db->where('id', $id);
                    $this->db->update('kategori', $data);
                    redirect('dashboard/lokasi_kategori');
                }
            } else {
                $data = array(
                    'nama_kategori'    => $this->input->post('nama'),
                    'keterangan'    => $this->input->post('keterangan'),
                );
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('kategori', $data);
                redirect('dashboard/lokasi_kategori');
            }
        } else {
            $data['k'] = $this->db->get('kategori');
            $this->template->load('back-end/_template', 'back-end/_lokasi_kategori', $data);
        }
    }

    public function lokasi_kategori_delete($id)
    {
        $query = $this->db->get_where('kategori', array('id' => $id))->row_array();

        unlink("./uploads/icon/" . $query['ikon']);

        $this->db->delete('kategori', array('id' => $id));
        redirect('dashboard/lokasi_kategori');
    }

    public function berita()
    {
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/berita';
                $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
                // $config['file_name']            = $this->id_berita;
                $config['overwrite']            = true;
                // $config['max_size']             = 1024; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());

                    // print_r($this->upload->display_errors());
                    echo "Upload Gagal";
                } else {
                    $hasil = $this->upload->data();
                    $data = array(
                        'judul'               => $this->input->post('judul'),
                        'isi_berita'         => $this->input->post('isi'),
                        'gambar'             => $hasil['file_name'],
                        'tanggal'           => date('Y-m-d'),
                        'penulis'            => $this->input->post('name_admin'),
                        'id_admin'    => $this->input->post('id_admin'),
                        'dibaca'            => '0',
                    );
                    $this->db->insert('berita', $data);
                    redirect('dashboard/berita');
                }
            } else {
                $data = array(
                    'judul'             => $this->input->post('judul'),
                    'isi_berita'        => $this->input->post('isi'),
                    'tanggal'           => date('Y-m-d'),
                    'penulis'            => $this->input->post('name_admin'),
                    'id_admin'    => $this->input->post('id_admin'),
                    'dibaca'            => '0',
                );
                $this->db->insert('berita', $data);
                redirect('dashboard/berita');
            }
        } elseif (isset($_POST['update'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/berita';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                // $this->load->library('upload', $config);
                $this->upload->initialize($config);


                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil = $this->upload->data();
                    $data = array(
                        'judul'         => $this->input->post('judul'),
                        'isi_berita'    => $this->input->post('isi'),
                        'gambar'        => $hasil['file_name'],
                        'penulis'            => $this->input->post('name_admin'),
                        'id_admin'    => $this->input->post('id_admin'),
                    );

                    $id        = $this->input->post('id');
                    $query     = $this->db->get_where('berita', array('id_berita' => $id))->row_array();
                    unlink("./uploads/berita/" . $query['gambar']);

                    $this->db->where('id_berita', $id);
                    $this->db->update('berita', $data);
                    redirect('dashboard/berita');
                }
            } else {
                $data = array(
                    'judul'            => $this->input->post('judul'),
                    'isi_berita'       => $this->input->post('isi'),
                    'penulis'            => $this->input->post('name_admin'),
                    'id_admin'    => $this->input->post('id_admin'),
                );
                $this->db->where('id_berita', $this->input->post('id'));
                $this->db->update('berita', $data);
                redirect('dashboard/berita');
            }
        } else {
            $data['b'] = $this->db->get('berita');
            $this->template->load('back-end/_template', 'back-end/_berita', $data);
        }
    }

    public function berita_edit($id)
    {
        if ($this->session->level != '0') {
            $query = $this->db->get_where('berita', array('id_berita' => $id));
            if ($query->num_rows() > 0) {
                $row = $query->row_array();
                $id_admin = $row['id_admin'];
            }

            if ($this->session->id != $id_admin) {
                redirect('dashboard/berita');
            } else {
                $data['b'] = $this->db->get_where('berita', array('id_berita' => $id))->row_array();
                $this->template->load('back-end/_template', 'back-end/_berita_edit', $data);
            }
        } else {
            $data['b'] = $this->db->get_where('berita', array('id_berita' => $id))->row_array();
            $this->template->load('back-end/_template', 'back-end/_berita_edit', $data);
        }
    }


    public function berita_tambah()
    {
        $data['b'] = $this->db->get('berita');



        $this->template->load('back-end/_template', 'back-end/_berita_tambah', $data);
    }

    public function berita_delete($id)
    {
        $r = $this->db->get_where('berita', array('id_berita' => $id))->row_array();

        unlink("./uploads/berita/" . $r['gambar']);

        $this->db->delete('berita', array('id_berita' => $id));
        redirect('dashboard/berita');
    }
    public function komentar()
    {
        $data['k'] = $this->db->get('komentar');
        $this->template->load('back-end/_template', 'back-end/_komentar', $data);
    }

    public function komentar_delete($id)
    {
        $this->db->where('id_komentar', $id);
        $this->db->delete('komentar');
        redirect('dashboard/komentar');
    }
    public function galeri_tambah()
    {

        $data['l'] = $this->db->get('lokasi');

        $this->template->load('back-end/_template', 'back-end/_galeri_tambah', $data);
    }
    public function galeri()
    {
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/galeri';
                $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
                // $config['file_name']            = $this->id_berita;
                $config['overwrite']            = true;
                // $config['max_size']             = 1024; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());

                    // print_r($this->upload->display_errors());
                    echo "Upload Gagal";
                } else {
                    $hasil = $this->upload->data();
                    $data = array(
                        'id'               => $this->input->post('id_sekolah'),
                        'nama_galeri'         => $this->input->post('nama_galeri'),
                        'ket_galeri'         => $this->input->post('isi'),
                        'gambar'             => $hasil['file_name'],
                        'id_admin'    => $this->input->post('id_admin'),


                        // 'tanggal'           => date('Y-m-d'),
                        // 'penulis'            => 'Admin',
                        // 'dibaca'            => '0',
                    );
                    $this->db->insert('galeri', $data);
                    redirect('dashboard/galeri');
                }
            } else {
                $data = array(
                    'id'               => $this->input->post('id_sekolah'),
                    'nama_galeri'         => $this->input->post('nama_galeri'),
                    'ket_galeri'         => $this->input->post('isi'),
                );
                $this->db->insert('galeri', $data);
                redirect('dashboard/galeri');
            }
        } elseif (isset($_POST['update'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/galeri';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                // $this->load->library('upload', $config);
                $this->upload->initialize($config);


                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil = $this->upload->data();
                    $data = array(
                        'id'               => $this->input->post('id_sekolah'),
                        'nama_galeri'         => $this->input->post('nama_galeri'),
                        'ket_galeri'         => $this->input->post('isi'),
                        'gambar'             => $hasil['file_name'],
                        'id_admin'    => $this->input->post('id_admin'),

                    );

                    $id        = $this->input->post('id');
                    $query     = $this->db->get_where('galeri', array('id_galeri' => $id))->row_array();
                    unlink("./uploads/galeri/" . $query['gambar']);

                    $this->db->where('id_galeri', $id);
                    $this->db->update('galeri', $data);
                    redirect('dashboard/galeri');
                }
            } else {
                $data = array(
                    'id'               => $this->input->post('id_sekolah'),
                    'nama_galeri'         => $this->input->post('nama_galeri'),
                    'ket_galeri'         => $this->input->post('isi'),
                    'id_admin'    => $this->input->post('id_admin'),

                );
                $this->db->where('id_galeri', $this->input->post('id'));
                $this->db->update('galeri', $data);
                redirect('dashboard/galeri');
            }
        } else {
            $data['g'] = $this->db->get('galeri');
            $data['lo'] = $this->db->get('lokasi');


            $data['gg'] = $this->db->query("SELECT * from lokasi INNER JOIN galeri ON lokasi.id = galeri.id");

            // $this->db->select('nama');
            // $this->db->from('lokasi');
            // $this->db->join('galeri', 'lokasi.id = galeri.id');
            // $query1 = $this->db->get();




            $this->template->load('back-end/_template', 'back-end/_galeri', $data);
        }
    }
    public function galeri_edit($id)
    {
        if ($this->session->level != '0') {
            $query = $this->db->get_where('galeri', array('id_galeri' => $id));
            if ($query->num_rows() > 0) {
                $row = $query->row_array();
                $id_admin = $row['id_admin'];
            }

            if ($this->session->id != $id_admin) {
                redirect('dashboard/galeri');
            } else {
                $data['l'] = $this->db->get('lokasi');
                $data['gg'] = $this->db->get('galeri');

                $data['g'] = $this->db->get_where('galeri', array('id_galeri' => $id))->row_array();

                $this->template->load('back-end/_template', 'back-end/_gambar_edit', $data);
            }
        } else {
            $data['l'] = $this->db->get('lokasi');
            $data['gg'] = $this->db->get('galeri');

            $data['g'] = $this->db->get_where('galeri', array('id_galeri' => $id))->row_array();

            $this->template->load('back-end/_template', 'back-end/_gambar_edit', $data);
        }
    }
    public function galeri_delete($id)
    {
        $r = $this->db->get_where('galeri', array('id_galeri' => $id))->row_array();

        unlink("./uploads/galeri/" . $r['gambar']);

        $this->db->delete('galeri', array('id_galeri' => $id));
        redirect('dashboard/galeri');
    }
    public function user_baru()
    {
        $data['adm'] = $this->db->query("SELECT * FROM admin where level='1' and status='' or status='tidak aktif' ");
        $this->template->load('back-end/_template', 'back-end/_user_baru', $data);
    }
    public function user_baru_update($id)
    {
        $status = "aktif"; {
            $data = array(
                'status'         => $status,
            );
            $this->db->where('id_admin', $id);
            $this->db->update('admin', $data);
            redirect('dashboard/user_baru');
        }
    }

    public function user_baru_tolak($id)
    {
        $status = "tidak aktif";

        $data = array(
            'status'         => $status,
        );
        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
        redirect('dashboard/user');
    }


    public function user()
    {

        $data['ad'] = $this->db->query("SELECT * FROM admin where status='aktif' ");

        $this->template->load('back-end/_template', 'back-end/_user', $data);
    }

    public function detail_user($id)
    {
        $data['ad'] = $this->db->get_where('admin', array('id_admin' => $id))->row_array();
        // $data['pass'] = md5(['password']);

        $this->template->load('back-end/_template', 'back-end/_detail_user', $data);


        if (isset($_POST['update'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/profil';
                $config['allowed_types'] = 'jpg|jpeg|png';
                // $this->load->library('upload', $config);
                $this->upload->initialize($config);


                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->detail_user($error);
                } else {
                    $hasil = $this->upload->data();
                    $data = array(
                        // 'judul'         => $this->input->post('judul'),
                        'nama'       => $this->input->post('name'),
                        'password'   => $this->input->post('password'),
                        'email'      => $this->input->post('email'),
                        'alamat'      => $this->input->post('alamat'),

                        'gambar'     => $hasil['file_name'],
                    );

                    $id        = $this->input->post('id');
                    $query     = $this->db->get_where('admin', array('id_admin' => $id))->row_array();
                    unlink("./uploads/profil/" . $query['gambar']);

                    $this->db->where('id_admin', $id);
                    $this->db->update('admin', $data);
                    redirect('dashboard/detail_user/' . $id);
                }
            } else {
                $data = array(
                    'nama'       => $this->input->post('name'),
                    'password'   => $this->input->post('password'),
                    'email'      => $this->input->post('email'),
                    'alamat'      => $this->input->post('alamat'),

                );
                $this->db->where('id_admin', $id);
                $this->db->update('admin', $data);
                redirect('dashboard/detail_user/' . $id);
            }
        }
    }
    public function setting_api()
    {

        if (isset($_POST['update'])) {
            $data = array(
                'api_key'         => $this->input->post('key'),
                // 'isi_profil'    => $this->input->post('isi'),
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('setting', $data);
            redirect('dashboard/setting_api');
        } else {
            $data['key'] = $this->db->query("SELECT * from setting where id='1' ");
            $this->template->load('back-end/_template', 'back-end/_setting_api', $data);
        }
    }
}
