<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User {
	
	private $id;
	private $userName;
	private $email;
	private $firstName;
	private $lastName;

	public function __construct()
	{
        //Constructeur...
	}

    public function isConnect()
    {
        $CI =& get_instance();
        if($CI->session->userdata('logged')==true){return true;}else{return false;} // condition ternaire :)
    }

    public function connect($login, $password)
    {
        $CI =& get_instance();
        $password = $this->encrypt->encode($password, CREEPER);
        $CI->load->model('usermodel');
        if($CI->usermodel->userConnect($login,$password)){
            $CI->session->set_userdata('logged', true);
            return true;
        }else{
            $CI->session->set_userdata('logged', false);
            return false;
        }
    }

    public function subscribe($login, $password, $email)
    {
        $CI =& get_instance();
        $password = $this->encrypt->encode($password, CREEPER);
        $CI->load->model('usermodel');
        $CI->usermodel->userSubscribe($login,$password,$email);
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */