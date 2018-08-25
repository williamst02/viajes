<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sellsboletos extends CI_Controller {
//public $mensaje="";
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
		$this->load->model('allboletos_model');
		$this->load->model('alluser_model');


	}
	public function index()

	{
		
			
	}
	public function createboleto(){ //llamado  a la  vista  de  venta
	 $data['obtener'] = $this->allboletos_model->get();	
    $this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('boletos/cliente');
    $this->load->view('boletos/create',$data);
    $this->load->view('telotengo');

	}
	public function getclientes(){
		$data['obtener']=$this->allboletos_model->get();
		$dato['obtener']= $this->alluser_model->consultar();
		$cedula=$this->input->post('Cedula');

		$this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('boletos/cliente');
    $this->load->view('boletos/resultadocliente',$dato);
    $this->load->view('boletos/create',$data,$cedula);
    $this->load->view('telotengo');

		//$date['traer']=$this->allboletos_model->clientes
	}

	public function insertar(){ // insertar Rutas
		$data=array('Nplaza'=>$this->input->post('Nplaza'),
			'Destino'=>$this->input->post('Destino'),
			'Origen'=>$this->input->post('Origen'),
			'Precio'=>$this->input->post('Precio'),
			'Boletos'=>$this->input->post('Boletos'));
		 $this->allrutas_model->insert($data);// llamado de modelo  insert
		 $this->createrutas();//llamado  de  vista Principal
	}

	public function consulta(){
		$this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('Rutas/consulrutas');
    $this->load->view('telotengo');
	}

	public function traerdatos(){//  traer   datos a modificar   con la  vista 
		
		 $data['obtener']= $this->allrutas_model->consultar();//llamado  del   modelo consultar
		 $this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('Rutas/consulrutas');
     $this->load->view('Rutas/Resultadoupdate',$data);
    $this->load->view('telotengo');
	}

	public  function updaterutas(){/// Actulizar la  Ruta  y llamado  de  vista 
$data=array('Nplaza'=>$this->input->post('Nplaza'),
			'Destino'=>$this->input->post('Destino'),
			'Origen'=>$this->input->post('Origen'),
			'Precio'=>$this->input->post('Precio'),
			'Boletos'=>$this->input->post('Boletos')); //obtener   datos  de  la  vista 
		 $this->allrutas_model->update($data);// llamado  del   modelo  update
		 $this->consulta();// Retorna  la vista   principal 
	}
	public function Deleterutas(){ //llamado   de  vista  para  eliminar Rutas 
		$this->load->view('parts/header');
    $this->load->view('parts/div');
    $this->load->view('Rutas/deleterutas');
    $this->load->view('telotengo');
	}
	public function showdelete(){//Mostrar Vista  con  Rusultado  de infromacion  a  eliminar
		 $data['obtener']= $this->allrutas_model->consultar();
		 $this->load->view('parts/header');
    $this->load->view('parts/div');
     $this->load->view('Rutas/deleterutas');
     $this->load->view('Rutas/Resultadodelete',$data);
    $this->load->view('telotengo');
}
public  function procedelete (){// Procesar a Eliminar  Ruta
	$this->Deleterutas();
$this->allrutas_model->delete();
echo "<script>alert('Proceso Efectuado');</script>";

}

	

}
