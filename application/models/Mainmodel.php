<?php
class mainmodel extends CI_model
{
	public function regi($a)
{

$this->db->insert("login",$a);

}

//password encryption
public function encpswd($pass)
{
return password_hash($pass, PASSWORD_BCRYPT);
}


function is_email_available($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get("login");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }  
      //login

public function logi($name,$password)
{
$this->db->select('password');
$this->db->where("name=","$name");
$this->db->from('login');
$qry=$this->db->get()->row("password");
return $this->verifypas($password,$qry);
}
public function verifypas($password,$qry)
{
return password_verify($password,$qry);
}
public function getuserid($name)
{
$this->db->select('id');
$this->db->from("login");
$this->db->where("name=","$name");
return $this->db->get()->row('id');
}
public function getuser($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
return $this->db->get()->row();
}
public function viewbatch()
{
		$this->db->select('*');

		$qry=$this->db->get("project_tbl");
        return $qry;
}

public function viewcourse()
{
		$this->db->select('*');

		$qry=$this->db->get("course_tbl");
        return $qry;
}
public function viewdistrict()
{
		$this->db->select('*');

		$qry=$this->db->get("districtname_tbl");
        return $qry;
}
public function studentsadd($a)
{
	$this->db->insert("studdetails_tbl",$a);
}

}
?>