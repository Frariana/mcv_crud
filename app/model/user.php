<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Db;
        }

        public function getUserId($id){
            $this->db->query('SELECT * FROM users WHERE id_user = :id');
            $this->db->bind(':id', $id);
            $res = $this->db->row();
            return $res;
        }

        public function getUsers(){
            $this->db->query('SELECT * FROM users');
            $res = $this->db->rows();
            return $res;
        }

        public function insertUSer($data){
            $this->db->query('INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)');

            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);

            if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function updateUser($data){
            $this->db->query('UPDATE users SET name = :name, email = :email, phone = :phone WHERE id_user = :id_user');

            $this->db->bind(':id_user', $data['id_user']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);

            if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteUser($data){
            $this->db->query('DELETE FROM users WHERE id_user = :id_user');

            $this->db->bind(':id_user', $data['id_user']);

            if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }