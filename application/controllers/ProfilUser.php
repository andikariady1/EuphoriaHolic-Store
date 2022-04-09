<?php

class ProfilUser extends CI_Controller
{

    public function myProfil()
    {
        // $data['judul'] = 'Profil Saya';
        $user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

        foreach ($user as $a) {
            $data = [
                'judul' => "Profil Saya",
                'image' => $user['image'],
                'user' => $user['nama'],
                'username' => $user['username'],
                'alamat' => $user['alamat'],
                'tanggal_input' => $user['tanggal_input'],
            ];
        }

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('templates_user/footer', $data);
    }

    public function ubahProfil()
    {
        //$data['judul'] = 'Profil Saya';
        $user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

        foreach ($user as $a) {
            $data = [
                'judul' => "Profil Saya",
                'image' => $user['image'],
                'user' => $user['nama'],
                'username' => $user['username'],
                'alamat' => $user['alamat'],
                'tanggal_input' => $user['tanggal_input'],
            ];
        }

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|trim', [
            'required' => 'Alamat tidak boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_user/header', $data);
            $this->load->view('templates_user/sidebar');
            $this->load->view('user/ubah_profil', $data);
            $this->load->view('templates_user/footer', $data);
        } else {
            $nama = $this->input->post('nama', true);
            $username = $this->input->post('username', true);
            $alamat = $this->input->post('alamat', true);

            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '30000';
                $config['max_width'] = '10240';
                $config['max_height'] = '10000';
                $config['file_name'] = 'pro' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['user']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('username', $username);
            $this->db->set('alamat', $alamat);
            $this->db->update('user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('profiluser/myprofil');
        }
    }
}
