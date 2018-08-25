<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public $mensaje="";
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
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('alluser_model');
		$this->load->model('allrutas_model');
		$this->load->model('allboletos_model');




	}
	public function index()

	{
		 $data['obtener'] = $this->alluser_model->get();
		$this->load->view('parts/header');
		$this->load->view('parts/div');
		$this->load->view('parts/option',$data);
		$this->load->view('telotengo');
			
	}
	public function createuser(){
		
    $this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/create');
    $this->load->view('telotengo');

	}

	public function insertar(){ // crear Usuario
		$data=array('cedula'=>$this->input->post('Cedula'),
			'Nombre'=>$this->input->post('nombre'),
			'Telefono'=>$this->input->post('telefono'),
			'Direccion'=>$this->input->post('direccion'));
		 $this->alluser_model->insert($data);
		 $this->createuser();	
	}

	public function consulta(){
		$this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/consul');
    $this->load->view('telotengo');
	}

	public function traerdatos(){
		
		 $data['obtener']= $this->alluser_model->consultar();
		 $this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/consul');
     $this->load->view('User/Resultadoupdate',$data);
    $this->load->view('telotengo');
	}
	public  function updatecliente(){
$data=array('cedula'=>$this->input->post('Cedula'),
			'Nombre'=>$this->input->post('nombre'),
			'Telefono'=>$this->input->post('telefono'),
			'Direccion'=>$this->input->post('direccion'));
		 $this->alluser_model->update($data);
		 $this->consulta();
	}
	public function Deleteuser(){
		$this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/deleteuser');
    $this->load->view('telotengo');
	}
	public function showdelete(){
		 $data['obtener']= $this->alluser_model->consultar();
		 $this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/deleteuser');
     $this->load->view('User/Resultadodelete',$data);
    $this->load->view('telotengo');
}
public  function procedelete (){
	$this->Deleteuser();
$this->alluser_model->delete();
echo "<script>alert('Proceso Efectuado');</script>";

}
public function Historial(){
	$this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/histori');
    $this->load->view('telotengo');

}
public function traerhistorial(){
	//$data['obtener']=$this->allboletos_model->get();historiboletos
   $dato['obtener']= $this->alluser_model->consultar();
   //$date['obtener']= $this->alluser_model->historiboletos();
   $this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('User/histori');
     $this->load->view('boletos/resultadocliente',$dato);
      // $this->load->view('User/showhistori',$date);
    $this->load->view('telotengo');

}

		

	

}
