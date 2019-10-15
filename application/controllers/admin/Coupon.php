<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends SU_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->selected_parent_tab = 'coupon';
		
	}

	public function index()
	{
		$this->selected_tab = 'view_coupon';
		$order_by = "cat_id";
		

		$data['coupon'] = $this->crud_model->get_data("*","coupon");
		$this->load->view('admin/coupon/index',$data);
	}

	public function manage_view($id="")
	{
		if(!empty($id))
		{
			$where['id'] = $id;
			$data['coupon'] = $this->crud_model->get_data("*","coupon",$where,true);
		}else{
			$data = "";
		}
		$this->selected_tab = 'add_coupon';
		
		$this->load->view('admin/coupon/manage',$data);
	}

	public function manage()
	{
		
		$data = $this->input->post();

		if(!empty($data['cop_id']))
		{	
			$where['id'] = $data['cop_id'];
			unset($data['cop_id']);
			$update = $this->crud_model->update_data($where,$data,"coupon");
			if($update)
			{
				$status = "success";
				$msg = "Record Updated";
			}
			else
			{
				$status = "error";
				$msg = "Error Occur";
			}

		}
		else
		{
			unset($data['cop_id']);
			$insert = $this->crud_model->add_data($data,"coupon");
			if($insert)
			{
				$status = "success";
				$msg = "Record Save";
					
			}
			else
			{
				$status = "error";
				$msg = "Error Occur";
			}
		}
		
		$this->session->set_flashdata($status,$msg);
		redirect('admin/coupon/');	
	}


	public function delete()
	{	
		$id = $_POST['id'];
		$where['id'] = $id;
		$this->db->where($where);
		$res =$this->db->delete("coupon");

		$response['status'] = true;
		$response['msg'] = "Coupon deleted";		
		echo json_encode($response);
		exit();
		
	}

	

}
