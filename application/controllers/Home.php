<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index(){

    //call page lib
    $this->load->library('page');

    #================ core css ======================#
    $this->page->css(array( 'bower_components/bootstrap/dist/css/bootstrap.min.css',
                            'bower_components/font-awesome/css/font-awesome.min.css',
                            'bower_components/Ionicons/css/ionicons.min.css',
                            'dist/css/skins/_all-skins.min.css'
                            ), PAGE_HEAD);

    #================ core js ======================#
    $this->page->js(array('bower_components/jquery/dist/jquery.min.js',
                          'bower_components/bootstrap/dist/js/bootstrap.min.js',
                          'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
                          'bower_components/fastclick/lib/fastclick.js',
                          'dist/js/adminlte.min.js',
                          'dist/js/demo.js'
                          ), PAGE_BODY);

    #================ add css ======================#
    $this->page->css(array( 'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
                            'plugins/iCheck/all.css',
                            'dist/css/AdminLTE.min.css'
                            ), PAGE_HEAD);

    #================ add js ======================#
    $this->page->js(array('plugins/input-mask/jquery.inputmask.js',
                          'plugins/input-mask/jquery.inputmask.date.extensions.js',
                          'plugins/input-mask/jquery.inputmask.extensions.js',
                          'bower_components/select2/dist/js/select2.full.min.js',
                          'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
                          'plugins/iCheck/icheck.min.js',
                          'js/handmade.js',
                          'js/handmade1.js'
                        ), PAGE_BODY);

    #================ core page ==================#
    $this->page->view('templates/navigation');
    $this->page->view('input/inmasuk');

    #========== letakan paling bawah ============#
    $this->page->generate('Input Pemasukan');

  }


  public function inmasuk(){

    //call page lib
    $this->load->library('page');

    #================ core css ======================#
    $this->page->css(array( 'bower_components/bootstrap/dist/css/bootstrap.min.css',
                            'bower_components/font-awesome/css/font-awesome.min.css',
                            'bower_components/Ionicons/css/ionicons.min.css',
                            'dist/css/skins/_all-skins.min.css'
                            ), PAGE_HEAD);

    #================ core js ======================#
    $this->page->js(array('bower_components/jquery/dist/jquery.min.js',
                          'bower_components/bootstrap/dist/js/bootstrap.min.js',
                          'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
                          'bower_components/fastclick/lib/fastclick.js',
                          'dist/js/adminlte.min.js',
                          'dist/js/demo.js'
                          ), PAGE_BODY);

    #================ add css ======================#
    $this->page->css(array( 'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
                            'plugins/iCheck/all.css',
                            'dist/css/AdminLTE.min.css'
                            ), PAGE_HEAD);

    #================ add js ======================#
    $this->page->js(array('plugins/input-mask/jquery.inputmask.js',
                          'plugins/input-mask/jquery.inputmask.date.extensions.js',
                          'plugins/input-mask/jquery.inputmask.extensions.js',
                          'bower_components/select2/dist/js/select2.full.min.js',
                          'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
                          'plugins/iCheck/icheck.min.js',
                          'js/handmade.js',
                          'js/handmade1.js'
                        ), PAGE_BODY);

    #================ core page ==================#
    $this->page->view('templates/navigation');
    $this->page->view('input/inmasuk');

    #========== letakan paling bawah ============#
    $this->page->generate('Input Pemasukan');

  }


  public function finmasuk(){

    //call page lib
    $this->load->library('page');

    #================ core css ======================#
    $this->page->css(array( 'bower_components/bootstrap/dist/css/bootstrap.min.css',
                            'bower_components/font-awesome/css/font-awesome.min.css',
                            'bower_components/Ionicons/css/ionicons.min.css',
                            'dist/css/skins/_all-skins.min.css'
                            ), PAGE_HEAD);

    #================ core js ======================#
    $this->page->js(array('bower_components/jquery/dist/jquery.min.js',
                          'bower_components/bootstrap/dist/js/bootstrap.min.js',
                          'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
                          'bower_components/fastclick/lib/fastclick.js',
                          'dist/js/adminlte.min.js',
                          'dist/js/demo.js'
                          ), PAGE_BODY);

    #================ add css ======================#
    $this->page->css(array( 'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
                            'plugins/iCheck/all.css',
                            'dist/css/AdminLTE.min.css'
                            ), PAGE_HEAD);

    #================ add js ======================#
    $this->page->js(array('plugins/input-mask/jquery.inputmask.js',
                          'plugins/input-mask/jquery.inputmask.date.extensions.js',
                          'plugins/input-mask/jquery.inputmask.extensions.js',
                          'bower_components/select2/dist/js/select2.full.min.js',
                          'bower_components/datatables.net/js/jquery.dataTables.min.js',
                          'bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
                          'plugins/iCheck/icheck.min.js',
                          'js/handmade.js',
                          'js/handmade1.js'
                        ), PAGE_BODY);

    $this->page->js(array('js/table-handler.js'), PAGE_HEAD);

    #================ core page ==================#
    $this->page->view('templates/navigation');
    $this->page->view('input/finmasuk');

    #========== letakan paling bawah ============#
    $this->page->generate('Tabel Daftar Pemasukan');

  }


  public function finpinjam(){

    //call page lib
    $this->load->library('page');

    #================ core css ======================#
    $this->page->css(array( 'bower_components/bootstrap/dist/css/bootstrap.min.css',
                            'bower_components/font-awesome/css/font-awesome.min.css',
                            'bower_components/Ionicons/css/ionicons.min.css',
                            'dist/css/skins/_all-skins.min.css'
                            ), PAGE_HEAD);

    #================ core js ======================#
    $this->page->js(array('bower_components/jquery/dist/jquery.min.js',
                          'bower_components/bootstrap/dist/js/bootstrap.min.js',
                          'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
                          'bower_components/fastclick/lib/fastclick.js',
                          'dist/js/adminlte.min.js',
                          'dist/js/demo.js'
                          ), PAGE_BODY);

    #================ add css ======================#
    $this->page->css(array( 'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
                            'plugins/iCheck/all.css',
                            'dist/css/AdminLTE.min.css'
                            ), PAGE_HEAD);

    #================ add js ======================#
    $this->page->js(array('plugins/input-mask/jquery.inputmask.js',
                          'plugins/input-mask/jquery.inputmask.date.extensions.js',
                          'plugins/input-mask/jquery.inputmask.extensions.js',
                          'bower_components/select2/dist/js/select2.full.min.js',
                          'bower_components/datatables.net/js/jquery.dataTables.min.js',
                          'bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
                          'plugins/iCheck/icheck.min.js',
                          'js/handmade.js',
                          'js/handmade1.js',
                          'js/table-handler.js'
                        ), PAGE_BODY);

    $this->page->js(array('js/table-handler.js'), PAGE_HEAD);

    #================ core page ==================#
    $this->page->view('templates/navigation');
    $this->page->view('input/finpinjam');

    #========== letakan paling bawah ============#
    $this->page->generate('Tabel Daftar Peminjaman');

  }




  }
