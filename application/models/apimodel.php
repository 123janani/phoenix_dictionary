<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class apimodel extends CI_Model
{
	function getEnToSingSudgenst($q)
	{
		$this->db->select('word_id,word');
		$this->db->from('en_si_tbl');
		$this->db->like('word', $q,'after');
		$this->db->limit(10);
		$query 	= $this->db->get();  //5 select  from en_sin_tbl like $q%
		return $query->result_array();
	    
	}
	function getEnToSingWordDefinintion($word_id)
	{
		$this->db->select('*');
		$this->db->from('en_si_tbl');
		$this->db->where('word_id', $word_id);
		$query 	= $this->db->get();

		return $query->result_array()[0];
	    
	}
///////////////////////////////////////////////////

function extention_getWord_es($q)
	{
		$this->db->select('meaning');
		$this->db->from('en_si_tbl');
		$this->db->where('word', $q);
		$this->db->limit(1);
		$query 	= $this->db->get();

		return $query->result_array()[0];
	    
	}
	//////////////////////////////////////////////////

	function getSingToEnSudgenst($q)
	{
		$this->db->select('word_id,word');
		$this->db->from('si_en_tbl');
		$this->db->like('word', $q,'after');
		$this->db->limit(10);
		$query 	= $this->db->get();  //5 select  from en_sin_tbl like $q%
		return $query->result_array();
	   
	}

	function getSingToEnWordDefinintion($word_id)
	{
		$this->db->select('meaning');
		$this->db->from('si_en_tbl');
		$this->db->where('word_id', $word_id);
		$query 	= $this->db->get();
		return $query->result_array()[0];

	   
	}

	function addwords(){

			$word 				= $_POST['word'];
			$meaning 			= $_POST['meaning'];
			$type 				= $_POST['type'];
			

				$data    = array(
				'word' 				=> $word,
				'meaning' 			=> $meaning,
				'type' 				=> $type

        		
							 );

			$this->db->insert('temp_new_word', $data);

	}
}