<?php 
#Modelo   relacionado  a   los  clientes 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class Allboletos_model  extends CI_Model{
	function  __construct(){
parent::__construct();
$this->load->database();
$var="0";

	}
	 public function  get(){ #  funccion  para Obtener   todos  los  clintes 
 //$this->db->join('imagenes','articulo.IDAR=imagenes.IDAR');
  //$this->db->where("(categori = 'inmuebles' and  estatusarticulo = 'Activo')");
$query= $this->db->get('Rutas');//Consulta 
if ($query->num_rows()>0) return $query;
else 
	return false;
	 }
	  public function consultar(){
$id=$this->input->post('IdR');
         $this->db->where('IDV',$id);
         $query=$this->db->get('rutas');
         if ($query->num_rows()>0){
         	$this->var="1";
         	return $query;
} else {
	$this->var="0";
	return false;}
	 	//$this->input->post('nombre')
	 }

	 public function insert($data){// creacion  de  rutas
	 	
	$this->db->insert('rutas',array('N_plaza'=>$data['Nplaza'],
	 		'Destino'=>$data['Destino'],'Origen'=>$data['Origen'],
	 		'precio'=>$data['Precio'],'Total_B'=>$data['Boletos'],'Total_V'=>'0')
	 	);
}

	 

	 public function update($data){
	 	$id=$this->input->post('id');

	 	$this->db->where('IDV',$id);

	 	$query=$this->db->update('rutas',array('N_plaza'=>$data['Nplaza'],
	 		'Destino'=>$data['Destino'],'Origen'=>$data['Origen'],
	 		'precio'=>$data['Precio'],'Total_B'=>$data['Boletos'],'Total_V'=>'0')
	 	);
	 	
	 }
	 public   function delete(){
      $id=$this->input->post('Idr');
      $this->db->where('IDV',$id);
      $query=$this->db->delete('Rutas');



	 }




}
