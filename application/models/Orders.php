<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use Lazer\Classes\Database as Lazer;
class Orders extends CI_Model 
 {
	
    function CreateTable($table,$coloumn)
    {
        Lazer::create($table, $coloumn);
    }
    
    function InsertRecords($table,$data)
    {
        $records = Lazer::table($table);
        foreach($data as $key=>$val)
        {
            $records->$key=$val;
        }
        $records->save();
    }
    function GetRecords($table)
    {
        $result = Lazer::table($table)->orderBy('id')->findAll();
         return $result;
    }
    
    
        
         
}