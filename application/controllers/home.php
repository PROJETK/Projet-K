<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


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


    public function ajouterObjet()
    {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'nom de l\'objet', 'required|max_lenght[100]'); // 100? 50 ?
		$this->form_validation->set_rules('user', 'utilisateur', 'required|max_lenght[50]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
			$this->load->view('adObject');
		}else{
			$user = $this->input->post('user', true);
			$name = $this->input->post('name',true);
			$this->load->model('objectmodel');
			$this->objectmodel->addUserObject($user,$name);
			$this->load->view('successAddObject');
		}
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */