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
	public function index()
	{
		$this->load->view('index');
	}
	public function dash()
	{
		$this->load->view('dashboard');
	}
	//registeration page loading
public function register()
{
$this->load->view('reg');
}

//login page
public function login()
{
$this->load->view('login');
}

//adminhome page
public function adminhome()
{
$this->load->view('adminhome');
}
//staffhome page
public function staffhome()
{
$this->load->view('reg');
}




//email validation ajax
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
     
//Registration Action or data insertion
public function regi()
{


$this->load->library("form_validation");
$this->form_validation->set_rules("name","name",'required');
$this->form_validation->set_rules("email","email",'required');
$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
{
$this->load->model('Mainmodel');
$pass=$this->input->post("password");
$encpass=$this->Mainmodel->encpswd($pass);
$a=array("name"=>$this->input->post("name"),
"email"=>$this->input->post("email"),
"password"=>$encpass,'utype'=>'0');
$this->Mainmodel->regi($a);
redirect(base_url().'Main/login');
}
}


//login checking
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
redirect(base_url().'Main/dashboard');
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
public function admin()
{
	if($_SESSION['logged_in']==true && $_SESSION['utype']=='1')
        {

			$this->load->view('admin');
		}
        else
        {
             redirect(base_url().'main/index');
        }
		
}

/*DDU*/
public function dashboard_ddu()
{
	if($_SESSION['logged_in']==true && $_SESSION['utype']=='1')
        {

			$this->load->view('dashboard_ddu');
		}
        else
        {
             redirect(base_url().'main/index');
        }
}
public function dashboard()
{
$this->load->view('dashboard');
}

public function register1_ddu()
{
$this->load->model('Mainmodel');
$data['user_data']=$this->Mainmodel->viewbatch();
$data['user_dat']=$this->Mainmodel->viewcourse();
$data['user_da']=$this->Mainmodel->viewdistrict();
$this->load->view('register1_ddu',$data);
}
public function studentsadd()
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
echo "hello";
if($this->form_validation->run())
{
	echo "hello";
$this->load->model('Mainmodel');
$a=array("name"=>$this->input->post("name"),
		"district"=>$this->input->post("district"),
		"gender"=>$this->input->post("gender"),
		"kudumbasree"=>$this->input->post("kudumbasree"),
		"aplbpl"=>$this->input->post("aplbpl"),
		"religion"=>$this->input->post("religion"),
		"caste"=>$this->input->post("caste"),
		"category"=>$this->input->post("category"),
		"mgnreg"=>$this->input->post("mgnreg"),
		"cid"=>$this->input->post("panchayth"),
		"did"=>$this->input->post("panchayth"),
		"pid"=>$this->input->post("panchayth"),
		"disid"=>$this->input->post("panchayth"));
$this->Mainmodel->studentsadd($a);
redirect(base_url().'Main/register1_ddu');
}
}
public function sdashboard_ddu()
{


$this->load->view('sdashboard_ddu');
}



	}

