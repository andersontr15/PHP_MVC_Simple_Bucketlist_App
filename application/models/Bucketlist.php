<?php

class Bucketlist extends CI_Model {

	public function add($post)
	{
		$query = "INSERT INTO wishes(author, wish, created_at,updated_at)
        VALUES (?, ?, NOW(), NOW())";
    	$values = array($post['author'], $post['wish']);
    	return $this->db->query($query, $values);
	}

	public function delete($id)
	{
		return $this->db->query("DELETE FROM wishes where wishes.id = ?", $id);
	}

	public function get_all()
	{
		 $query = "SELECT wishes.id, wish, author, created_at, updated_at  
         FROM wishes ORDER BY created_at desc";
		return $this->db->query($query)->result_array();
	}

}
