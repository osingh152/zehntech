<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            $this->load->model('orders');
	     
        }
        function createDatabase()
        {
            $type=array(
               'FoodType'=>'string' 
            );
            $this->orders->CreateTable('FoodType',$type);
            
            $drink=array(
                'ColdDrinkType'=>'string' 
            );
            $this->orders->CreateTable('ColdDrinkType',$drink);
            
            $table=array(
                'TableNumber'=>'integer'
               );
            $this->orders->CreateTable('Tables',$table);
            
            $orders=array(
                'TableNumber'=>'integer',
                'ColdDrinkType'=>'string',
                'FoodType'=>'string', 
                'Quantity'=>'integer',
                'Order'=>'string',
                'status'=>'string'
                
            );
            $this->orders->CreateTable('orders',$orders);
            
            $this->InsertRecords();
            
        }
        public function InsertRecords()
        {
            $FoodTypeSmall=array(
                'foodtype'=>'France Fries Small',
                
            );
            $FoodTypeMedium=array(
                'foodtype'=>'France Ffries Medium',
                
            );
            $FoodTypeLarge=array(
                'foodtype'=>'France Fries Large',
                
            );
            $this->orders->InsertRecords('FoodType',$FoodTypeSmall); 
            $this->orders->InsertRecords('FoodType',$FoodTypeMedium); 
            $this->orders->InsertRecords('FoodType',$FoodTypeLarge); 
            
            $coldDrinkTypeBottle=array(
                'colddrinktype'=>'Bottle'
            );
            $coldDrinkTypeCanned=array(
                'colddrinktype'=>'Canned'
            );
            
             $this->orders->InsertRecords('ColdDrinkType',$coldDrinkTypeBottle);
             $this->orders->InsertRecords('ColdDrinkType',$coldDrinkTypeCanned);
             
             $table1= array(
                 'tablenumber'=>1
             );
              $table2= array(
                 'tablenumber'=>2
             );
              $table3= array(
                 'tablenumber'=>3
             ); 
              $table4= array(
                 'tablenumber'=>4
             );
              $table5= array(
                 'tablenumber'=>5
             );
             $this->orders->InsertRecords('Tables',$table1);
             $this->orders->InsertRecords('Tables',$table2);
             $this->orders->InsertRecords('Tables',$table3);
             $this->orders->InsertRecords('Tables',$table4);
             $this->orders->InsertRecords('Tables',$table5);
             
        }
        public function index()
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
//                echo'<pre />';
//                var_dump($order);
                //die;
            $this->orders->InsertRecords('orders',$order);     
            }
            $data['orders']=$this->orders->GetRecords('orders');
            $this->load->view('TakeOrders',$data);
	}
}
