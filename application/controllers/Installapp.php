<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Installapp extends CI_Controller {

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
                'status'=>'string',
                'Amount'=>'integer'
                
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
            $data['_view']='welcome';
            $this->load->view('layout/main',$data);
        }
        
}
