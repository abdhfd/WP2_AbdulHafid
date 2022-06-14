<?php
class dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-dlemas');
        $this->load->library('form_validation');
    }
    public function cetak()
    {

        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[5]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
            'required' => 'NIS Harus diisi',
            'min_length' => 'NIS terlalu pendek'
        ]);
        $this->form_validation->set_rules('kls', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas Harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|min_length[3]', [
            'required' => 'Tanggal Lahir Harus diisi',
            'min_length' => 'Tanggal Lahir terlalu pendek'
        ]);
        $this->form_validation->set_rules('tmp', 'Tempat Lahir', 'required|min_length[3]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_length' => 'Tempat Lahir terlalu pendek'
        ]);
        $this->form_validation->set_rules('alm', 'Alamat', 'required|min_length[5]', [
            'required' => 'Alamat Harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-dlemas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kls' => $this->input->post('kls'),
                'tgl' => $this->input->post('tgl'),
                'tmp' => $this->input->post('tmp'),
                'alm' => $this->input->post('alm'),
                'jk' => $this->input->post('jk'),
                'agm' => $this->input->post('agm')
            ];
            $this->load->view('view-data-dlemas', $data);
        }
    }
}
