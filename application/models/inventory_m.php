<?php
	
class Inventory_m extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	} //Ends Construct Function
	
	public function create_item($item_name, $item_year_release = 1990, $item_price = 0.00, $item_sale_price = 0.00, $item_rating = 0, $item_stock = 0){
		//Validation
		if(!is_string($item_name))
			return false;
		
		if(!is_int($tiem_year_release) || !is_int($item_rating) ||!is_int($item_stock))
			return false;
		
		if(!is_float($item_price) || !is_float($item_sale_price))
			return false;
		
		if($item_rating > 99)
			return false;
		
		if($item_stock > 9999999999)
			return false;
		
		//all should ok by this point, lets insert
		$this->db->insert("inventory", array(
			"item_name" => $item_name,
			"item_price" => number_format($item_sale_price, 2),
			"item_rating" => $item_rating,
			"item_stock" => $item_stock
		));
		return true;
		
	} //Ends create_item function
	
	public function get_all(){
		
	} //Ends get_all function
	
	public function get_item($item_id){
		
	} //Ends get_item function
	
	public function update_item($item_id){
		
	} //Ends update_item function
	
	public function delete_item($item_id){
		
	} //Ends delete_item
	
} //Ends Inventory Class
?>