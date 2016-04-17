<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	public function click()
    {
        $action = $this->input->post('sign up'); // $_POST['start']; also works. 
        if($action == 'sign up')
        {
            $this->load->view('login');
        }
    }
}
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
public function index()
{
$this->load->view('welcome_message');
}
public function register()
{
$this->load->view('welcome_message');//loads the register_view.php file in views folder
}
public function do_register()
{
if($this->input->post('register'))//$_POST["register"];
{
$this->load->model('user_model');//loads the user_model.php file in models folder
if($this->user_model->add_user())
{
echo "hi ".$this->input->post('username')." Registred successfully" ;
}
else
{
echo "Registration failed";
}
}
}
 
}