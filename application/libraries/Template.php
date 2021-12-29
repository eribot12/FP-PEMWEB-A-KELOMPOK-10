<?php 

class Template {

    //variable untuk menampung instance object dr CI
    protected $_ci;

    function __construct() {
        //memanggil instance object CI
        $this->_ci = &get_instance();
    }

    function render($template=NULL, $data = NULL) {
        // echo json_encode("TEST");
        
      $this->_ci->load->view('template/header', $data);
    $this->_ci->load->view($template, $data);
     $this->_ci->load->view('template/footer', $data);
    }
}





?>