<?php


class Crud_model extends CI_Model{

	protected $table = "";
	public function __construct() {
		parent::__construct();
		
	}


public function get_data($select = "",$table="",$where = array(),$single_row = false,$join = array(), $like = array(),$or_where = "",$where_in = "", $order_by = "" ,$odr_method=""){

		
		$this->db->select($select);
		if(!empty($table))
		{
			$this->db->from($table);
		}
		else
		{
			$this->db->from($this->table);
		}
		

		if (!empty($join)) {
			foreach ($join as $key => $value) {
				$this->db->join($key,$value);
			}
		}

		if (!empty($where)) {
			$this->db->where($where);
		}


		if (!empty($or_where)) {
			$this->db->or_where($or_where);
		}		
		
		if (!empty($where_in)) {
			
			foreach ($where_in as $key => $value) {
				$this->db->where_in($key, $value);
			}
			
		}

		if (!empty($like)) {
			$this->db->like($like);
		}

		if ($single_row) {
			
			if (!empty($order_by)) {
				$this->db->order_by($order_by,$odr_method);
			}

			$res = $this->db->get()->row();

		}else{

			if (!empty($order_by)) {
				$this->db->order_by($order_by,$odr_method);
			}

			

			

			$res = $this->db->get()->result();

		}

		return $res;

	}


	public function delete_data($where,$bulk = false, $data = array()){

		if ($bulk) {
			$this->db->where_in($where, $data);
		}else{
			$this->db->where($where);
		}
		
		$res = $this->db->delete($this->table);

		return $res;
	}


	public function add_data($data,$table = ""){

		if(!empty($table))
		{
			$res = $this->db->insert($table, $data);
		}else{
			$res = $this->db->insert($this->table, $data);
		}
		

		return $this->db->insert_id();

	}

	public function insert_batch($data){

		$res = $this->db->insert_batch($this->table, $data);

		return $res;

	}


	public function update_data($where,$data,$table = ""){

		$this->db->where($where);
		if(!empty($table))
		{
			$res = $this->db->update($table, $data);
		}else
		{
			$res = $this->db->update($this->table, $data);
		}
		

		return $res;
	}



	public function upload_file($file,$input_name,$path,$resize = ""){

		$file['name'] = str_replace(" ", "", $file['name']);
		if ($file['error'] != 4 ) {
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$file_name = rand().$file['name'];
		$config['file_name'] = $file_name;
		}

		if($resize == 'product'){
			$config['image_library'] = 'gd2';
			$config['quality'] = '100%';
			$config['source_image'] = $path.$file_name;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 300;
			$config['height'] = 300;
		}
		if($resize == 'category'){
			$config['image_library'] = 'gd2';
			$config['quality'] = '100%';
			$config['source_image'] = $path.$file_name;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 100;
			$config['height'] = 100;
		} 

		$this->load->library('upload', $config);

		if ( $this->upload->do_upload($input_name))
		{
		     $this->load->library('image_lib', $config);
		     if (!$this->image_lib->resize()) {
		            echo $this->image_lib->display_errors();
		     }
		     $this->image_lib->clear();

			return $file_name;
		}else{

			$error = array('error' => $this->upload->display_errors());

		    print_r($error);	
		}

		
		return false;
	}

	public function check_slug_categories($string)
    {
        $this->db->select();
        $this->db->from('categories');
        $this->db->like('categories_slug',$string,'after',false);
        $query = $this->db->get();
        return $query->result_array();
    }
}


?>