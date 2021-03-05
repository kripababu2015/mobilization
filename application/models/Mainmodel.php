<?php
class Mainmodel extends CI_model
{
	/*******************
*@function name:regi
*@function:insertion into table login 
*@Author:keerthi
*@date:04/03/2021
*******************/ 
		public function regi($a)
		{

		$this->db->insert("login",$a);

		}

	/*******************
*@function name:encpswd
*@function:encrypting password
*@Author:keerthi
*@date:04/03/2021
*******************/
		public function encpswd($pass)
			{
				return password_hash($pass, PASSWORD_BCRYPT);
			}

	/*******************
*@function name:is_email_available
*@function:check email validation 
*@Author:keerthi
*@date:04/03/2021
*******************/

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
	/*******************
*@function name:logi
*@function:insertion into table login 
*@Author:keerthi
*@date:04/03/2021
*******************/

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
	/*******************
*@function name:viewt
*@function:fetching course details values from cousre_tbl
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function viewt()
			{
				$this->db->select('*');
				$qry=$this->db->get("course_tbl");
				return $qry;

			}
	/*******************
*@function name:delete
*@function:delete course details value from course_tbl
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function delete($id)
	{
		$this->db->where('cid',$id);
		$this->db->delete("course_tbl");
	}
	/*******************
*@function name:viewp
*@function:fetching project details from project_tbl 
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function viewp()
			{
				$this->db->select('*');
				$qry=$this->db->get("project_tbl");
				return $qry;

			}
	/*******************
*@function name:deletep
*@function:delete the values from project_tbl 
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function deletep($id)
	{
		$this->db->where('pid',$id);
		$this->db->delete("project_tbl");
	}
	/*******************
*@function name:updateproject
*@function:update the values from project_tbl 
*@Author:keerthi
*@date:04/03/2021
*******************/
				/*upon of project*/

					public function singledata($id)
					{
						$this->db->select('*');
						$this->db->where('pid',$id);
						$qry=$this->db->get('project_tbl');

					return $qry;

					}
					public function singleselect()

					{
					$qry=$this->db->get('project_tbl');
					return $qry;
					}
					public function projectdata()
					{
					$qry=$this->db->get("project_tbl");
					return $qry;
					}

					public function updateproject_target($a,$id)
					{
					$this->db->select('*');
					$qry=$this->db->where("pid",$id);
					$qry=$this->db->update("project_tbl",$a);
					return $qry;
					}
	/*******************
*@function name:views
*@function:fetching details from studdetails_tbl
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function views()
			{
				$this->db->select('*');
				$qry=$this->db->get("studdetails_tbl");
				return $qry;

			}
	/*******************
*@function name:deletes
*@function:delete student details from studdetails_tbl  
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function deletes($id)
	{
		$this->db->where('sid',$id);
		$this->db->delete("studdetails_tbl");
	}

	/*******************
*@function name:insertproject_target
*@function: insert project target
*@Author:Kavya B
*@date:04/03/2021
*******************/

		public function insertproject_target($a)
		{
		$this->db->insert("project_tbl",$a);
		}
/*******************
*@function name:notify_action
*@function:adding notification to notification_tbl
*@Author:keerthi
*@date:05/03/2021
*******************/

			public function notify_action($n)
			{
			  $this->db->insert("notification_tbl",$n);
			}
/*******************
*@function name:notify
*@function:viewing notification
*@Author:keerthi
*@date:05/03/2021
*******************/

public function notify()
{
  $this->db->select('*');
  $qry=$this->db->get("notification_tbl");
  return $qry;
}
/*******************
*@function name:insertcourse_target
*@function: inserting course target into course_tbl
*@Author:Kavya B
*@date:05/03/2021
*******************/
/*insert course target*/
	public function insertcourse_target($n)
	{
		$this->db->insert("course_tbl",$n);
	}
/*******************
*@function name:fetch_course
*@function:fetching course details from course_tbl
*@Author:Kavya B
*@date:05/03/2021
*******************/
	public function fetch_course()
	{
		$this->db->select('*');
		$qry=$this->db->get("course_tbl");
		return $qry;
	}
/*******************
*@function name:fetch_project
*@function:fetching project details from project_tbl
*@Author:Kavya B
*@date:05/03/2021
*******************/
	public function fetch_project()
	{
		$this->db->select('*');
		$qry=$this->db->get("project_tbl");
		return $qry;

	}



	/*******************
*@function name:viewbatch
*@function:view project details project table
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function viewbatch()
{
		$this->db->select('*');

		$qry=$this->db->get("project_tbl");
        return $qry;
}



	/*******************
*@function name:viewcourse
*@function:view course details course table
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function viewcourse()
{
		$this->db->select('*');

		$qry=$this->db->get("course_tbl");
        return $qry;
}

/*******************
*@function name:viewdistrict
*@function:view district details districtname_tbl table
*@Author:Kripa Babu
*@date:05/03/2021
*******************/

public function viewdistrict()
{
		$this->db->select('*');

		$qry=$this->db->get("districtname_tbl");
        return $qry;
}

/*******************
*@function name:studentsadd
*@function:add /insert students details
*@Author:Kripa Babu
*@date:05/03/2021
*******************/

public function studentsadd($a)
{
	$this->db->insert("studdetails_tbl",$a);
}

/*******************
*@function name:distargetrem
*@function:update district targent remining
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function distargetrem($cid,$pid,$disid)
{
  $this->db->set('distargetrem','distargetrem-1',FALSE);
  $this->db->where('cid',$cid);
   $this->db->where('pid',$pid);
    $this->db->where('disid',$disid);
  $this->db->update('distarget');
}

/*******************
*@function name:coursetarget
*@function:update course targent remining
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function coursetarget($cid)
{
  $this->db->set('totalseatrem','totalseatrem-1',FALSE);
  $this->db->where('cid',$cid);
  $this->db->update('course_tbl');
}

/*******************
*@function name:projecttarget
*@function:update project targent remining
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function projecttarget($pid)
{
  $this->db->set('totalrem','totalrem-1',FALSE);
  $this->db->where('pid',$pid);
  $this->db->update('project_tbl');
}

/*******************
*@function name:viewdistarget
*@function:view district targent remining
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function viewdistarget()
{
  $this->db->select('*');
     $this->db->join('project_tbl','project_tbl.pid=distarget.pid','inner');
     $this->db->join('course_tbl','course_tbl.cid=distarget.cid','inner');
     $this->db->join('districtname_tbl','districtname_tbl.disid=distarget.disid','inner');
    $qry=$this->db->get("distarget");
    return $qry;
}
/*******************
*@function name:project_tbl
*@function:view project targent remining
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function viewprotarget()
{
  $this->db->select('*');
   $qry=$this->db->get("project_tbl");
    return $qry;

}

/*******************
*@function name:viewcoursetarget
*@function:view course targent remining
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function viewcoursetarget()
{
  $this->db->select('*');
   $qry=$this->db->get("course_tbl");
    return $qry;

}




     }