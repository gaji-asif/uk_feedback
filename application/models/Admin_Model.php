<?php
class Admin_Model extends CI_Model
{

    /* Check Login Credential */
    public function adminLogin($email, $password)
    {

        $this->db->select('*');
        $this->db->where('email_id', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {

            return $query->row();
        } else {

            return false;
        }
    }

    /* User Forget Password */
    public function userForgetPassword($email)
    {
        $this->db->select('*');
        $this->db->where('email_id', $email);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            $id = $query->row('id');
            $id = base64_encode($id);
            $token = openssl_random_pseudo_bytes(16);   //Generate a random string.
            $token = bin2hex($token);
            $this->db->set('token_id', $token);
            $this->db->where('email_id', $email);
            $query = $this->db->update('admin');
            return array($token, $id);
        } else {

            return false;
        }
    }

    /* User Token Check Code */
    public function checkToken($token, $id)
    {
        $this->db->select('*');
        $this->db->where('token_id', $token);
        $this->db->where('id', $id);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /* User Reset Password */
    public function userResetPassword($token, $newPassword)
    {
        $this->db->set('password', md5($newPassword));
        $this->db->where('token_id', $token);
        $query = $this->db->update('admin');
        return true;
    }

    public function insert($data = array())
    {
        $insert = $this->db->insert_batch('client_logo', $data);
        return $insert ? true : false;
    }

    public function insertForm($table, $data)
    {
        $insert = $this->db->insert($table, $data);
        return $insert ? true : false;
    }

    public function insert_web($data = array())
    {
        $insert = $this->db->insert_batch('website_gallery', $data);
        return $insert ? true : false;
    }

    public function insert_app($data = array())
    {
        $insert = $this->db->insert_batch('application_gallery', $data);
        return $insert ? true : false;
    }

    public function insert_graphics($data = array())
    {
        $insert = $this->db->insert_batch('graphic_gallery', $data);
        return $insert ? true : false;
    }

    public function getRecordById($table, $field_name, $var)
    {
        $this->db->select('*');
        $this->db->where($field_name, $var);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function getAllRecords($table, $order)
    {
        $this->db->select('*');
        $this->db->order_by('id', $order);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getAllRecordsByWhere($table, $order, $where, $orderby)
    {
        $this->db->select('*');
        $this->db->where($where);
        $this->db->order_by($orderby, $order);
        $query = $this->db->get($table);
        return $query->result();
    }
    public function getAllRecordsByWherearray($table, $order, $array)
    {

        $this->db->order_by('id', $order);
        $query = $this->db->get_where($table, $array);
        return $query->result();
    }

    public function getAllRecordsByWhereLimit($table, $limit, $order, $where)
    {
        $this->db->select('*');
        $this->db->where($where);
        $this->db->order_by('id', $order);
        $this->db->limit($limit);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function deleteById($table, $image, $id)
    {
        unlink("uploads/client-logo/" . $image);
        $this->db->where('id', $id);
        $this->db->delete($table);
        return true;
    }

    public function deleteByImageId($table, $folder, $image, $id)
    {
        if ($image != 0) {
            unlink("uploads/" . $folder . "/" . $image);
        }
        $this->db->where('id', $id);
        $this->db->delete($table);
        return true;
    }

    public function deleteByNoImageId($table, $id)
    {

        $this->db->where('id', $id);
        $this->db->delete($table);
        return true;
    }

    public function get_count($table)
    {
        return $this->db->count_all($table);
    }

    public function get_gallary($table, $limit, $start, $order)
    {

        $this->db->limit($limit, $start);
        $this->db->order_by('id', $order);
        $query = $this->db->get($table);

        return $query->result();
    }

    public function insertCommon($table, $data)
    {

        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function updateRecordByWhere($table, $data, $where)
    {

        $this->db->set($data);
        $this->db->where($where);
        $this->db->update($table);
        return true;
    }

    function career_data_csv()
    {
        $this->db->select("name,email,mobile,age,skill,type,message,created_date");
        $this->db->from('career_enquiry');
        return $this->db->get();
    }

    function contact_data_csv()
    {
        $this->db->select("title,first_name,last_name,email,mobile,company,country,service,organization,description,created_date");
        $this->db->from('contact_enquiry');
        return $this->db->get();
    }

    function product_data_csv()
    {
        $this->db->select("link,title,description,price,rating,type,created_date");
        $this->db->from('affiliate');
        return $this->db->get();
    }

    function package_data_csv()
    {
        $this->db->select("name,email,mobile,type,feature,created_date");
        $this->db->from('package_enquiry');
        return $this->db->get();
    }

    /* */
    public function getpackage()
    {

        $this->db->select("package_enquiry.*,Countries.CountryName");
        $this->db->join("Countries", "package_enquiry.country=Countries.id", "left");
        $this->db->order_by('package_enquiry.id', 'desc');
        //$this->db->limit(6);
        $this->db->from('package_enquiry');
        $query = $this->db->get();
        return $result = $query->result_array();
    }

    public function getpackages($id)
    {

        $this->db->select("package_enquiry.*,Countries.CountryName");
        $this->db->join("Countries", "package_enquiry.country=Countries.id", "left");
        //$this->db->order_by('package_enquiry.id','desc');
        $this->db->where('package_enquiry.id', $id);
        $this->db->from('package_enquiry');
        $query = $this->db->get();
        return $result = $query->result();
    }
    /* */

    /* */
    public function getconactId($id)
    {

        $this->db->select("contact_enquiry.*,Countries.CountryName");
        $this->db->join("Countries", "contact_enquiry.country=Countries.id", "left");
        //$this->db->order_by('contact_enquiry.id','desc');
        $this->db->where('contact_enquiry.id', $id);
        $this->db->from('contact_enquiry');
        $query = $this->db->get();
        return $result = $query->result();
    }
    function fetch_categoryname_by_id($id)
    {
        $array = array('cat_id' => $id);
        $row_details = $this->db->get_where('categories', $array)->row();
        return $row_details->cat_name;
    }

    /* */
}
