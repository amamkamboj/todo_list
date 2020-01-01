<?php
    class Todos extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {

            $data['todos'] = $this->todo_model->get_tasks();
            $this->load->view('templates/header');
            $this->load->view('todos/index.php');
            $this->load->view('templates/footer');
        }

        
       
    }