<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            $this->load->model('orders');
	     
        }
        
        public function index()
	{
            
            $data['title']='Take order';
            $data['Tables']=$this->orders->GetRecords('Tables');
            $data['orders']=$this->orders->GetRecords('orders');
            $data['_view']='Orders';
            $this->load->view('layout/main',$data);
	}
        
        
        public function getOrders($tableNumber)
        {
           $data['orders']=$this->orders->TableWiseOrder('orders',$tableNumber); 
           $this->load->view('orderAjx',$data);
        }
        public function UpdateOrders($tableNumber)
        {
            
        }
        
}
