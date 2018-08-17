<?php
  class M_Input extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    //get post dari table pemasukan/inmasuk
    public function finmasuk(){
    return $this->db->get('pemasukan');
    }

    public function finpinjam(){
      $query = $this->db->get('peminjaman');
      $data = $query->result_array();
      return $data;
    }

    //model input data pemasukan
    function form_insert($data){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('pemasukan', $data);
    }

    function form_insert1($data){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('peminjaman', $data);
    }


    public function inmasuk(){
      $data = array(
        'nomor' => $this->input->post('nomor'),
        'jenis_pemasukan' => $this->input->post('radiobtn'),
        'nama_penyumbang'  => $this->input->post('nama-penyumbang'),
        'nama_lembaga' => $this->input->post('nama-lembaga'),
        'alamat_lembaga' => $this->input->post('alamat-lembaga'),
        'nominal' => $this->input->post('nominal'),
        'keterangan' => $this->input->post('keterangan')
     );

     return $this->db->insert('pemasukan', $data);
    }



 }
