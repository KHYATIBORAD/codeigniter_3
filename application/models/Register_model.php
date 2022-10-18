<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	// USER REGISTER INSERT DATA
	public function insert($data) {
		if (empty($data['r_id'])) {
			return $this->db->insert('register',$data);
		}
		if(!empty($data['r_id'])) {
			$id = $data['r_id'];
			$where = ['r_id'=>$id];
			return $this->db->update('register', $data,$where);
		}
		return $this->db->insert('register',$data);
	}

	// IF USER LOGIN DATA MATCH
	public function login($email,$password) {
		$qry =$this->db->select('*')
			->from('register')
			->where(['email'=>$email,'password'=>$password])
			->get();
			return $qry->row_array();	
	}

	// USER GIVE FEEDBACK INSERT & UPDATE
	public function feedback($data) {
		if (empty($data['f_id'])) {
			return $this->db->insert('user_feedback',$data);
		}
		if(!empty($data['f_id'])) {
			$id = $data['f_id'];
			$where = ['f_id'=>$id];
			return $this->db->update('user_feedback', $data,$where);
		}
	}	

	// USER REGISTER DATA SHOW
	public function viewuser() {
		$qry =$this->db->select('*')
			->from('register')
			->get();
			return $qry->result();
	}

	// USER FEEDBACK DATA SHOW
	public function viewfeedback() {
		$qry =$this->db->select('*')
			->from('user_feedback')
			->get();
			return $qry->result();
	}

	// USER REGISTER DATA FATCH REGISTER FORM
	public function get_register_data($id) {
		$qry =$this->db->select('*')
			->from('register')
			->where(['r_id'=>$id])
			->get();
			return $qry->row_array();	
	}

	// USER FEEDBACK DATA FATCH FEEDBACK FORM
	public function get_feedback_data($id) {
		$qry =$this->db->select('*')
			->from('user_feedback')
			->where(['f_id'=>$id])
			->get();
			return $qry->row_array();	
	}

	// USER REGISTER DATA DELETE
	public function register_delete($id) {
		$where = ['r_id'=>$id];
		return $this->db->delete('register',$where);
	}

	// USER FEEDBACK DATA DELETE
	public function feedback_delete($id) {
		$where = ['f_id'=>$id];
		return $this->db->delete('user_feedback',$where);
	}

}
