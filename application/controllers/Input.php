<?php
/**
 *
 */
class Input extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('m_input');
    $this->load->library('form_validation');
  }

  //diload pertama saat masuk kedalam controller input
  public function index(){


  }

  //menampilkan data ke view finmasuk
  public function finmasuk1(){
    $this->load->view("input/finmasuk.php", array());
  }

  //datatable menampilkan data ke finmasuk
  public function finmasuk_page()
           {

                // Datatables Variables
                $draw = intval($this->input->get("draw"));
                $start = intval($this->input->get("start"));
                $length = intval($this->input->get("length"));


                $books = $this->m_input->finmasuk();
                $data = array();

                foreach($books->result() as $r) {

                     $data[] = array(
                          $r->id,
                          $r->tanggal_input,
                          $r->jenis_pemasukan,
                          $r->nominal,
                          $r->keterangan,
                          '<button type="button" name="update" id="'.$r->id.'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Update</button>
                          <button type="button" name="delete" id="'.$r->id.'" class="btn btn-danger btn-xs"><i class="fa fa-home"></i>&nbsp;Delete</button>'
                          );
                }

                $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $books->num_rows(),
                        "recordsFiltered" => $books->num_rows(),
                        "data" => $data
                  );
                echo json_encode($output);
                exit();
           }

     public function test(){
       print_r($this->finpinjam_tabel());
     }


     //menyimpan data inmasuk
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

              $this->m_input->form_insert($data);
              redirect('home');
            }

      //menyimpan data inpinjam
      public function inpinjam(){
          $data = array(
            'nomor' => $this->input->post('nomor'),
            'tgl_pinjam' => $this->input->post('tgl-pinjam'),
            'tgl_kembali' => $this->input->post('tgl-kembali'),
            'nama_barang'  => $this->input->post('nama-barang'),
            'jumlah' => $this->input->post('jumlah'),
            'alamat' => $this->input->post('alamat-pinjam'),
            'nama_peminjam' => $this->input->post('nama-peminjam'),
            'keterangan' => $this->input->post('keterangan')
            );

            $this->m_input->form_insert1($data);
            $data['message'] = 'Data Inserted Successfully';
            $this->load->view('input/inpinjam', $data);
          }


  }
