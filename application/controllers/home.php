<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public $user;
	public $data;

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code

		$this->load->library("User");

		// Chargement d'un utilisateur fake...
		$this->user = new User();
		$this->user->setUserName("administrator");
		$this->user->setFirstName("Toto");
		$this->user->setFirstName("Loco");

		// initialisation des données transmises à la vue
		$this->data = array();
	}

	public function index()
	{

		$this->load->model("objectmodel", "objects");


		$data["user"] = $this->user;
		$data["objects"] = $this->objects->getUserObject($this->user->getUserName());

		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

    public function preter()
    {
        $this->load->view('header');
        $this->load->view('addObject', $data);
        $this->load->view('footer');
    }
    
    public function doPreter()
    {
	    $this->load->model("transfertmodel", "transfert");
	    
	    $objetId = $this->input->post("objet_id");
	    $userNameCible = $this->input->post("user_cible_username");
	    
	    if ($objetId && $userNameCible) {
	    	 $this->transfert->addEmprunt($this->user->getUserName(), $userNameCible, $objetId);
	    }
	    
	    // Une fois le traitement effectué, on retourne sur la page d'accueil
	    redirect(base_url());
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */