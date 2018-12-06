<?php
class WorkersModel extends CI_Model{
    
    public function get_workers(){

        if(!empty($this->input->get("search"))){

          $this->db->like('name', $this->input->get("search"));

          $this->db->or_like('password', $this->input->get("search"));

          $this->db->like1('email', $this->input->get("search")); 

        }

        $query = $this->db->get("workers");

        return $query->result();

    }

    public function insert_worker()

    {    

        $data=array(

            'name' => $this->input->post('name'),

            'password' => md5 ($this->input->post('password')),

            'email' => $this->input->post('email')

        );

        return $this->db->insert('workers', $data);

    }

    public function update_worker($id) 

    {

        $data=array(

            'name' => $this->input->post('name'),

            'password' => $this->input->post('password'),

            'email' => $this->input->post('email')

        );

        if($id==0){

            return $this->db->insert('workers',$data);

        }else{

            $this->db->where('id',$id);

            return $this->db->update('workers',$data);
        }        
    }
}
?>