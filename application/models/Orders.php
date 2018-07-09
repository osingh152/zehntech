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
    function GetOpenOrderRecords($table)
    {
       $result = Lazer::table($table)->where('status', '=', 'Open')->findAll();
        return $result;
    }
    function TableWiseOrder($table,$tableNumber)
    {
       $result = Lazer::table($table)->where('tablenumber', '=', $tableNumber)->findAll();
        return $result;
    }
    
    function updateOrder($table,$tableNumber)
    {
        $row = Lazer::table($table)->where('tablenumber', '=', $tableNumber)->find(1); //Edit row with ID 1
        $row->nickname = 'edited_user';
        $row->save();
    }
    
        
         
}