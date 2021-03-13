<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_model extends CI_Model {

	
//insert data
    function insert_detail($data,$table)
    {
        $insert=$this->db->insert($table,$data);
        if($insert){
        return $this->db->insert_id();
;
        
        }else{
        return false;
        }
    }
        
        //update data
    function update_detail($table,$data,$where)
    {
        $update=$this->db->update($table,$data,$where);
        if($update){
        return true;
        
        }else{
        return false;
        }
    }
    //delete row
     function delete_detail($table,$value,$key)
     {
        $this->db->where($key,$value);
        $this->db->delete($table); 
          return true;
     }

    

    //single row
    
function fetch_single_row($array,$table)
    {
        $row_details = $this->db->get_where($table, $array)->row();
        return $row_details;
    } 
        
//multiple row
function fetch_multiple_row($table,$order,$sort)
    {
    $this->db->order_by($order, $sort);
       $row_details = $this->db->get($table);
       return $row_details;
    }


function fetch_multiple_row_by_where($array,$table,$order,$sort)
    {
         $this->db->order_by($order, $sort);
       $row_details = $this->db->get_where($table, $array);
       return $row_details;
    }


function fetch_multiple_row_with_groupby_asec($array,$table,$order,$groupby,$limit="")
    {
        $this->db->group_by($groupby);
         $this->db->order_by($order, 'ASC');
         if($limit==""){
       $row_details = $this->db->get_where($table, $array);
         }else{
        $row_details = $this->db->get_where($table, $array,$limit);
    
         }
       return $row_details;
    }
   
 function fetch_multiple_row_by_limit($array,$table,$limit,$order)
        {
           $this->db->order_by($order, 'DESC');
        $row_details = $this->db->get_where($table,$array,$limit);
        return $row_details;
        }


     //get single value by column name
        
 function get_value_by_key($field,$table,$where)
        {
        
        $this->db->select($field);
        $this->db->where($where);
        $query = $this->db->get($table);
        $s = $query->row();
        return $s;
        }   



//convert date format

public function convert_date($format,$originalDate)
      {
       return $newDate = date($format, strtotime($originalDate));
      }



//count number of rows
function count_rows($array,$table)
        {
        $query = $this->db->get_where($table, $array);
        $rowcount = $query->num_rows();
        return $rowcount;;
        }
        
   
        
        
function fetch_slider($key)
        {
        $this->db->where('slider_name', $key);
	    $this->db->where('status' , 1);
		$this->db->order_by('display_order', 'ASC');
		$query 		=	 $this->db->get('sliders');
        return $query->result_array();
       
        
        
        }
  //product unit      
  function fetch_unit_by_id($id)
    {
        $array=array('unit_id'=>$id);
        $row_details = $this->db->get_where('unit', $array)->row();
        return $row_details->unit;
    }      
    
     function fetch_city_by_id($id)
    {
        $array=array('city_id'=>$id);
        $row_details = $this->db->get_where('city', $array)->row();
        return $row_details->city_name;
    }  
 //wallet
 function fetch_wallet_by_id($id)
    {

        $array=array('user_id'=>$id);
        $row_details = $this->db->get_where('users', $array)->row();
        return $row_details->wallet;

    }
    
    
    
    
   //prouct stock status
   function fetch_stock_status($status)
    {
        if($status==1){
            $statuss="In stock";
        }else{
             $statuss="Out of stock";
        }
        return $statuss;
    }  
    
 function fetch_order_status($status)
    {
        if($status==1){
            $statuss="Placed";
        }else if($status==2){
            $statuss="confirmed";
        }else if($status==3){
            $statuss="Shipped";
        }else{
             $statuss="Delivered";
        }
        return $statuss;
    }     
//fetch data with like

function fetch_multiple_row_with_like_groupby_asec($array,$table,$order,$groupby,$like,$limit="")
    {
        $this->db->group_by($groupby);
         $this->db->order_by($order, 'ASC');
         if($limit==""){
       $this->db->like('p_name', $like, 'both');
       $this->db->or_like('p_nickname', $like, 'both');
       $row_details = $this->db->get_where($table, $array);
         }else{
        $this->db->like('p_name', $like, 'both');
       $this->db->or_like('p_nickname', $like, 'both');
        $row_details = $this->db->get_where($table, $array,$limit);
    
         }
       return $row_details;
    }
    function fetch_categoryname_by_id($id)
    {
        $array=array('cat_id'=>$id);
        $row_details = $this->db->get_where('categories', $array)->row();
        return $row_details->cat_name;
    }
    
    		/* Check Login Credential */
	public function adminLogin($email,$password){
		$this->db->select('*');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query=$this->db->get('admin');
		if($query->num_rows()>0)
		{
			 return $query->row();
		}else{
			
			return false;
		}
	}
}