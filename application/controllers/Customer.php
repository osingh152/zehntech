<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            $this->load->model('orders');
	     
        }
        public function index()
	{
            $data['title']='Install Application';
            $data['_view']='install';
            $this->load->view('layout/main',$data);
	}
        public function Start()
	{
            $data['ColdDrinkType']=$this->orders->GetRecords('ColdDrinkType');
            $data['FoodType']=$this->orders->GetRecords('FoodType');
            $data['Tables']=$this->orders->GetRecords('Tables');
            
            if($this->input->post())
            {
                $order=array(
                'tablenumber'=>(int)$this->input->post('TableNumber'),
                'colddrinktype'=>$this->input->post('ColdDrinkType'),
                'foodtype'=>$this->input->post('FoodType'), 
                'quantity'=>(int)$this->input->post('Quantity'),
                'order'=>$this->input->post('FoodType'),
                'status'=>'Open'   
                    
                
            );
            $this->orders->InsertRecords('orders',$order);     
            }
            $data['title']='Take order';
            $data['orders']=$this->orders->GetOpenOrderRecords('orders');
            $data['_view']='TakeOrders';
            $this->load->view('layout/main',$data);
	}
}
