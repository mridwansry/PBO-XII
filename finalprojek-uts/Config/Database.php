<?php

// Class database (koneksi database)
class Database
{

	// Property
	var $host = "sql6.freesqldatabase.com";
	var $uname = "sql6441906";
	var $pass = "ryXlQmuBq7";
	var $db = "sql6441906";
	var $connection;

	// Method koneksi kedalam database
	function Connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}
