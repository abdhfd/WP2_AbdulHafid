<?php
class dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-dlemas');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]');
        $this->form_validation->set_rules('nis', 'NIS', 'numeric');
        $this->form_validation->set_rules('kls', 'Kelas', 'required|min_length[1]');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|min_length[3]');
        $this->form_validation->set_rules('tmp', 'Tempat Lahir', 'required|min_length[3]');
        $this->form_validation->set_rules('alm', 'Alamat', 'required|min_length[3]');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agm', 'Agama', 'required');

        if ($this->form_validation->run() == FALSE) {
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
