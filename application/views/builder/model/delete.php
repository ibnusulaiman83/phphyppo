	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @return none
	 */
	public function remove(${tablename}_id)
	{
		// remove only specific {controller}
		$this->db->where('{primary}', ${tablename}_id);
		
		// from table {tablename}
		return $this->db->delete('{tablename}');
	}

