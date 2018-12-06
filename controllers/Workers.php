<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workers extends CI_Controller {

    //Get All Data from this method.

   public function __construct() {

    //Load database in autoload library
      parent::__construct(); 

      $this->load->model('WorkersModel');  

   }

   public function index(){

       $workers = new WorkersModel;

       $data['data']=$workers->get_workers();

       $this->load->view('includes/header');  

       $this->load->view('workers/list',$data);

       $this->load->view('includes/footer');

   }

   public function create(){

      $this->load->view('includes/header');

      $this->load->view('workers/create');

      $this->load->view('includes/footer'); 

   }
    //Store Data from this method.

   public function store(){

       $workers = new WorkersModel;

       $workers->insert_worker();

       redirect(base_url('workers'));

    }

    //Edit Data from this method.

   public function edit($id){

       $workers = $this->db->get_where('workers', array('id' => $id))->row();

       $this->load->view('includes/header');

       $this->load->view('workers/edit',array('workers'=>$workers));

       $this->load->view('includes/footer');  

   }
  // Update Data from this method.

   public function update($id){

       $workers=new WorkersModel;

       $workers->update_worker($id);

       redirect(base_url('workers'));

   }
   
  //Delete Data from this method.

   
   public function delete($id){

       $this->db->where('id', $id);

       $this->db->delete('workers');

       redirect(base_url('workers'));
   }
}