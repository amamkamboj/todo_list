<?php
    class Todo_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function get_tasks() {
            $query = $this->db->order_by('id', 'DESC')->get('todos');
            return $query->result();
        }
        //Add New Task
        public function create_task($data) {
            if($this->db->insert('todos', $data)){
                return true;
            } else {
                return false;
            }
        }
        //Delete Task
        public function delete_task($id, $table){
            $this->db->where('id',$id);
            if($this->db->delete($table)){
                return true;
            } else {
                return false;
            }           
        }
    }
