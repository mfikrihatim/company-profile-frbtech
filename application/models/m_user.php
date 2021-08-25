<?php

    class M_user extends CI_Model {
        public function show_data() {
            return $this->db->get('user'); 
        }

        public function input_data($data, $table) {
            $this->db->insert($table, $data);
        }
    }

?>