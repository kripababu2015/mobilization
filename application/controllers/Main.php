<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


/**
 * Super Class
 *
 * @package	Mobilization
 * @subpackage	Subpackage
 * @category	Category
 * @author	team 4
 * @link	http://localhost/mobilization/
 */

/*******************
*@function name:index
*@function:viewing index page
*@Author:Kripa Babu
*@date:04/03/2021
*******************/

	public function index()
	{
		$this->load->view('index');
	}


/*******************
*@function name:register
*@function:viewing registeration page
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function register()
	{
		$this->load->view('reg');
	}	
/*******************
*@function name:login
*@function:viewing login page
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function loginform()
	{
		$this->load->view('loginform');
	}

/*******************
*@function name:admin
*@function:viewing admin page
*@Author:nikhila
*@date:04/03/2021
*******************/
	public function admin()
	{
		$this->load->view('admin');
	}
/*******************
*@function name:staff
*@function:viewing staff page
*@Author:nikhila
*@date:04/03/2021
*******************/
	public function staff()
	{
		$this->load->view('staff');
	}
/*******************
*@function name:staff_dashboard_ddu
*@function:viewing staff_dashboard_ddu page
*@Author:nikhila
*@date:04/03/2021
*******************/
	public function staff_dashboard_ddu()
	{
		$this->load->view('staff_dashboard_ddu');
	}


/*******************
*@function name:dashboard_ddu
*@function:viewing dashboard_ddu page
*@Author:nikhila
*@date:04/03/2021
*******************/
	/*DDU*/
	public function dashboard_ddu()
	{
		$this->load->view('dashboard_ddu');
	}

	/*******************
*@function name:email_availability
*@function:validating email
*@Author:keerthi
*@date:04/03/2021
*******************/
	
	public function email_availibility()  
      {  
      	 if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  

           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           }  
           else  
           {  
                $this->load->model("Mainmodel");  
                if($this->Mainmodel->is_email_available($_POST["email"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> </label>';  
                }  
           }  
     
      }
      
/*******************
*@function name:regi
*@function:registration insertion
*@Author:keerthi
*@date:04/03/2021
*******************/
// public function regi()
// 	{
		
		
// 		$this->load->library("form_validation");
// 		$this->form_validation->set_rules("name","name",'required');
// 		$this->form_validation->set_rules("email","email",'required');
// 		$this->form_validation->set_rules("password","password",'required');
// 		if($this->form_validation->run())
// 		{
// 		$this->load->model('Mainmodel');	
// 		$pass=$this->input->post("password");
// 		$encpass=$this->Mainmodel->encpswd($pass);
// 		$a=array("name"=>$this->input->post("name"),
// 				"email"=>$this->input->post("email"),
// 				"password"=>$encpass,'utype'=>'0');
// 		$this->Mainmodel->regi($a);
// 		redirect(base_url().'Main/login');
// 		}
// 	}
	
/*******************
*@function name:logincheck
*@function:login action
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function logincheck()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
		
			$this->load->model('Mainmodel');	
			$name=$this->input->post("name");
			$password=$this->input->post("password");
			$a=$this->Mainmodel->logi($name,$password);
			if($a)
			{
			$id=$this->Mainmodel->getuserid($name);
			$user=$this->Mainmodel->getuser($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,
				'utype'=>$user->utype,'logged_in'=>(bool)true));
			if( $_SESSION['utype']=='0' && $_SESSION['logged_in']==true)
			{
				redirect(base_url().'Main/staffhome');
			}
			elseif( $_SESSION['utype']=='1' && $_SESSION['logged_in']==true)
			{
				redirect(base_url().'Main/admin');
			}
			else
			{
				echo "waiting for approval";

			}
		}
		else
		{
			echo "invalid user";
		}
	}
	else
	{
		redirect(base_url().'Main/login');
	}
}

/*******************
*@function name:districttarget
*@function:viewing districttarget page
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function districttarget()
	{
		$this->load->view('districttarget');
	}


/*******************
*@function name:courseview
*@function:viewing course details
*@Author:keerthi
*@date:04/03/2021
*******************/

	public function courseview()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->viewt();
		$this->load->view('courseview',$data);
	}

/*******************
*@function name:delete
*@function:delete course
*@Author:keerthi
*@date:04/03/2021
*******************/

	public function delete()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->delete($id);
		redirect('Main/courseview','refresh');	
	}

/*******************
*@function name:studentview
*@function:viewing student details 
*@Author:keerthi
*@date:04/03/2021
*******************/

		
	public function studentview()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->views();
		$this->load->view('studentview',$data);
	}

/*******************
*@function name:deletes
*@function:delete students 
*@Author:keerthi
*@date:04/03/2021
*******************/

	public function deletes()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->deletes($id);
		redirect('Main/studentview','refresh');	
	}


/**************************add project target**********************************/
/*******************
*@function name:addproject_target
*@function: view page of add project target
*@Author:Kavya B
*@date:04/03/2021
*******************/


public function addproject_target()
{
$this->load->view('addproject_target');
}
/*******************
*@function name:insertproject_target
*@function: inserting project target
*@Author:Kavya B
*@date:04/03/2021
*******************/
		public function insertproject_target()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("pname","projectname",'required');
		$this->form_validation->set_rules("s_date","startdate",'required');
		$this->form_validation->set_rules("e_date","enddate",'required');
		$this->form_validation->set_rules("year","year",'required');
		$this->form_validation->set_rules("totalseat","totalseat",'required');


		if($this->form_validation->run())
		{
		$this->load->model('Mainmodel');

		$a=array("pname"=>$this->input->post("pname"),
		"s_date"=>$this->input->post("s_date"),
		"e_date"=>$this->input->post("e_date"),
		"year"=>$this->input->post("year"),
		"totalseat"=>$this->input->post("totalseat"));
		$this->Mainmodel->insertproject_target($a);
		redirect(base_url().'Main/addproject_target');

		   }
		}
/*******************
*@function name:projectview
*@function:viewing project details
*@Author:keerthi
*@date:04/03/2021
*******************/
	public function projectview()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->viewp();
		$this->load->view('projectview',$data);
	}

/*******************
*@function name:deletep
*@function:delete project
*@Author:keerthi
*@date:04/03/2021
*******************/

	public function deletep()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->delete($id);
		redirect('Main/projectview','refresh');	
	}
/*******************
*@function name:updateproject_target
*@function:update project details
*@Author:keerthi
*@date:05/03/2021
*******************/
						public function updateproject_target()
					{


					$a=array("pname"=>$this->input->post("pname"),
						"s_date"=>$this->input->post("s_date"),
						"e_date"=>$this->input->post("e_date"),
						"year"=>$this->input->post("year"),
						"totalseat"=>$this->input->post("totalseat"));
					$this->load->model('Mainmodel');
					$id=$this->uri->segment(3);
					$data['user_data']=$this->Mainmodel->singledata($id);
					$this->Mainmodel->singleselect();
					$this->load->view('updateproject_target',$data);
					if($this->input->post("update"))
					{
					$this->Mainmodel->updateproject_target($a,$this->input->post("id"));
					redirect('Main/projectview','refresh');
					}
					}



/*****************************project target ends********************/
/*******************
*@function name:notification_add
*@function:adding notification
*@Author:keerthi
*@date:05/03/2021
*******************/
	public function notification()
	{
		$this->load->view('addnotification');
	}
	public function notifcation_add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("message","message",'required');
		if($this->form_validation->run())
			{

				$this->load->model('Mainmodel');
				$n=array("message"=>$this->input->post("message"),"currentdate"=>date('y-m-d'));
				$this->Mainmodel->notify_action($n);
				redirect('Main/notification','refresh');
			}
	}
/*******************
*@function name:notifiview
*@function:viewing notification
*@Author:keerthi
*@date:05/03/2021
*******************/
				public function notifview()
			{ 
			  $this->load->model('Mainmodel');
			  $data['n']=$this->Mainmodel->notify();
			  $this->load->view('viewnotification',$data);
			}


/*******************
*@function name:addcourse_target
*@function:adding course target
*@Author:kavya B
*@date:05/03/2021
*******************/

			public function addcourse_target()
  {

  		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->get_project();
		$this->load->view('addcourse_target',$data); 
  	
  }
  /*******************
*@function name:insertcourse_target
*@function:inserting course_target
*@Author:kavya B
*@date:05/03/2021
*******************/

  public function insertcourse_target()
  {
  	$this->load->library('form_validation');
		$this->form_validation->set_rules("cname","coursename",'required');
		$this->form_validation->set_rules("ctarget","coursetarget",'required');
		if($this->form_validation->run())
		{			
			$this->load->model('Mainmodel');

			$n=array("cname"=>$this->input->post("cname"),"totalseat"=>$this->input->post("ctarget"),"pid"=>$this->input->post("project"));

			$this->Mainmodel->insertcourse_target($n);
			redirect('Main/addcourse_target','refresh');
		}	
}

  /* ************insertion of course target ends here*********/
/*******************
*@function name:adddistrict_target
*@function: view page for district_target
*@Author:Kavya B
*@date:05/03/2021
*******************/
  public function adddistrict_target()
  {
  		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->fetch_course();
		$data['n1']=$this->Mainmodel->fetch_project();
		$this->load->view('adddistrict_target',$data);
  /*******************
*@function name:insertdistrict_target
*@function: inserting district_target
*@Author:Kavya B
*@date:05/03/2021
*******************/	
  }
  public function insertdistrict_target()
  {
  	$this->load->library('form_validation');
		$this->form_validation->set_rules("tvm","tvm",'required');
		$this->form_validation->set_rules("klm","klm",'required');
		$this->form_validation->set_rules("alp","alp",'required');
		$this->form_validation->set_rules("ktm","ktm",'required');
		$this->form_validation->set_rules("idk","idk",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');

			$n=array("tvm"=>$this->input->post("tvm"),"tvmrem"=>$this->input->post("tvm"),"kollam"=>$this->input->post("klm"),"kollam_rem"=>$this->input->post("klm"),"pta"=>$this->input->post("pta"));

			$this->Mainmodel->insertcourse_target($n);
			redirect('Main/addcourse_target','refresh');
		}
		

	}

	/*******************
*@function name:register1_ddu
*@function:view students details adding page
*@Author:Kripa Babu
*@date:04/03/2021
*******************/


public function register1_ddu()
{
	if($_SESSION['logged_in']==true && $_SESSION['utype']=='0')
    {
$this->load->model('Mainmodel');
$data['user_data']=$this->Mainmodel->viewbatch();
$data['user_dat']=$this->Mainmodel->viewcourse();
$data['user_da']=$this->Mainmodel->viewdistrict();
$this->load->view('register1_ddu',$data);

}
else
        {
             redirect(base_url().'main/index');
        }
}
/*******************
*@function name:studentsadd
*@function:students details insert action
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function studentsadd()
{
	if($_SESSION['logged_in']==true && $_SESSION['utype']=='0')
    {
$this->load->library("form_validation");
$this->form_validation->set_rules("name","name",'required');
$this->form_validation->set_rules("district","district",'required');
$this->form_validation->set_rules("batch","batch",'required');
$this->form_validation->set_rules("course","course",'required');
$this->form_validation->set_rules("gender","gender",'required');
$this->form_validation->set_rules("kudumbasree","kudumbasree",'required');
$this->form_validation->set_rules("aplbpl","aplbpl",'required');
$this->form_validation->set_rules("religion","religion",'required');
$this->form_validation->set_rules("category","category",'required');
$this->form_validation->set_rules("caste","caste",'required');
$this->form_validation->set_rules("mgnreg","mgnreg",'required');
$this->form_validation->set_rules("panchayth","panchayth",'required');

if($this->form_validation->run())
{
	
	$cid=$this->input->post("course");
	$pid=$this->input->post("batch");
	$disid=$this->input->post("district");
	$dist=$this->input->post("dist");
	$coursename=$this->input->post("coursename");

$this->load->model('Mainmodel');
$a=array("name"=>$this->input->post("name"),
		"gender"=>$this->input->post("gender"),
		"kudumbasree"=>$this->input->post("kudumbasree"),
		"aplbpl"=>$this->input->post("aplbpl"),
		"religion"=>$this->input->post("religion"),
		"caste"=>$this->input->post("caste"),
		"category"=>$this->input->post("category"),
		"mgnreg"=>$this->input->post("mgnreg"),
		"panchayath"=>$this->input->post("panchayth"),
		"cid"=>$cid,
		"pid"=>$pid,
		"disid"=>$disid);
$this->Mainmodel->studentsadd($a);
$this->Mainmodel->distargetrem($cid,$pid,$disid);
$this->Mainmodel->coursetarget($cid);
$this->Mainmodel->projecttarget($pid);
// $cname=$this->Mainmodel->cnamefetch($cid);
// $distname=$this->Mainmodel->distnamefetch($disid);
// if($coursename==$cname && $dist==$distname)
// {
// 	$this->Mainmodel->updatetarget();

// }
redirect(base_url().'Main/register1_ddu');

}
} 
else
        {
             redirect(base_url().'main/index');
        }
}
/*******************
*@function name:viewtarget
*@function:view remaining targets
*@Author:Kripa Babu
*@date:05/03/2021
*******************/
public function viewtarget()
{
	 $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->viewdistarget();
        $data['n1']=$this->Mainmodel->viewprotarget();
        $data['n2']=$this->Mainmodel->viewcoursetarget();
        $this->load->view('viewtarget',$data);
}


/*******************
*@function name:studentsadd
*@function:add district target
*@Author:Kripa Babu
*@date:05/03/2021
*******************/



  public function adddistrict_target()
  {
  $this->load->model('Mainmodel');
$data['n']=$this->Mainmodel->fetch_course();
$data['n1']=$this->Mainmodel->fetch_project();
$data['n2']=$this->Mainmodel->fetch_district();
$this->load->view('adddistrict_target',$data);
 
  }
 
  public function insertdistrict_target()
  {
  $this->load->library('form_validation');
$this->form_validation->set_rules("distarget","distarget",'required');

$this->form_validation->set_rules("district","district",'required');

$this->form_validation->set_rules("course","course",'required');

$this->form_validation->set_rules("pname","pname",'required');
echo "hello";
if($this->form_validation->run())
{

echo "hello";
$this->load->model('Mainmodel');

$n=array("distarget"=>$this->input->post("distarget"),
		 "distargetrem"=>$this->input->post("distarget"),
		 "disid"=>$this->input->post("district"),
		 "cid"=>$this->input->post("course"),
		 "pid"=>$this->input->post("pname"));

$this->Mainmodel->insertdistrict_target($n);
redirect('Main/adddistrict_target','refresh');
}
 }
 
}