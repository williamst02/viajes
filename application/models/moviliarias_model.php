
<?php 
#Modelo   relacionado  a  los inmubles
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class Moviliarias_model  extends CI_Model{
	function  __construct(){
parent::__construct();
$this->load->database();

	}
	 public function  obtenerhome(){
	 	#conulta  de todos  los inmuebles
//$this->db->where('categori','inmuebles','and','estatusarticulo','Activo');
	 	//$this->db->join(‘comments’, ‘comments.id = blogs.id’);
	 	

 $this->db->join('imagenes','articulo.IDAR=imagenes.IDAR');
  $this->db->where("(categori = 'inmuebles' and  estatusarticulo = 'Activo')");
 
$query= $this->db->get('articulo');//Consulta de modulo inmuebles/casas/
if ($query->num_rows()>0) return $query;
else 
	return false;
	 }




}



