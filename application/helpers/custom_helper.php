<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('cek_sesi')) {
	function cek_sesi() {
		$CI =& get_instance();
		$sesi = $CI->session->userdata('logged');
		if ($sesi != 'true') {
			redirect('auth');
		}
	}
}

if (!function_exists('cek_sesi_login')) {
	function cek_sesi_login() {
		$CI =& get_instance();
		$sesi = $CI->session->userdata('logged');
		if ($sesi == 'true') {
			redirect('panel');
		}
	}
}

if (!function_exists('notif')) {
	function notif() {
		$CI =& get_instance();
		return $CI->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><h4>Akses Ditolak</h4><p>Anda Tidak Memiliki Akses Ke Halaman Ini.</p></div>');
	}
}

if (!function_exists('hasPermission')) {
	function hasPermission($arr) {
		$CI =& get_instance();
		$current = $CI->session->userdata('user_level');
		if (in_array($current, $arr)) {
			return true;
		} else {
			notif('error','Anda tidak memiliki akses ke halaman ini !!');
			redirect('panel');
		}
	}
}

if (!function_exists('hasPrompt')) {
	function hasPrompt($arr)
	{
		$CI =& get_instance();
		$current = $CI->session->userdata('Prompt');
		if (in_array($current, $arr)) {
			return true;
		}else{
			notif('error','Anda Belum Melakukan Set PIN !!');
			redirect('logout');
		}
	}
}

if (!function_exists('get_nama')) {
	function get_nama($where,$id,$table,$result) {
		$CI =& get_instance();
		$row = $CI->db->get_where($table, array($where=>$id))->row_array();
		return $row[$result];
	}
}

function icon() {
	$icon = array("phone-box");
	return $icon;
}
