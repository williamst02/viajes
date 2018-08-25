<?php 
#Modelo   relacionado  a   los  clientes 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class Alluser_model  extends CI_Model{
	function  __construct(){
parent::__construct();
$this->load->database();
$var="0";

	}
	 public function  get(){ #  funccion  para Obtener   todos  los  clintes 
 //$this->db->join('imagenes','articulo.IDAR=imagenes.IDAR');
  //$this->db->where("(categori = 'inmuebles' and  estatusarticulo = 'Activo')");
$query= $this->db->get('clientes01');//Consulta 
if ($query->num_rows()>0) return $query;
else 
	return false;
	 }
	  public function consultar(){
$id=$this->input->post('Cedula');
         $this->db->where('Cedula',$id);
         $query=$this->db->get('clientes01');
         if ($query->num_rows()>0){
         	$this->var="1";
         	return $query;
} else {
	$this->var="0";
	return false;}
	 	//$this->input->post('nombre')
	 }

	 public function insert($data){
	 	$this->consultar();

 if ($this->var=="1") {
         echo "<script>alert('El id Suministrado Posee un Registro');</script>";
}else {
	
	$this->db->insert('clientes01',array('Cedula'=>$data['cedula'],
	 		'Nombre'=>$data['Nombre'],'Telefono'=>$data['Telefono'],
	 		'Direcion'=>$data['Direccion'])
	 	);
echo "<script>alert('Registro Efectuado');</script>";

}

	 }

	 public function update($data){
	 	$id=$this->input->post('Cedula');

	 	$this->db->where('Cedula',$id);
	 	$query=$this->db->update('clientes01',array('Cedula'=>$data['cedula'],
	 		'Nombre'=>$data['Nombre'],'Telefono'=>$data['Telefono'],
	 		'Direcion'=>$data['Direccion'])
	 	);


	 }
	 public   function delete(){
      $id=$this->input->post('Cedula');
      $this->db->where('Cedula',$id);
      $query=$this->db->delete('clientes01');



	 }




}



