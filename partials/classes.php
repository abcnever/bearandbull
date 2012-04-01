<?php 

class mysqlConnection 
{
	protected $connection = NULL;
	
	public function __construct($db_serverName,$db_userName,$db_password,$db_databaseName) 
	{
		$connection = mysql_connect($db_serverName,$db_userName,$db_password) or die(mysql_error());
		mysql_select_db($db_databaseName, $connection);
	}
	
	public function __destruct() 
	{
	}
	
	public function getConnection() 
	{
		return $this->connection;
	}
	
	public function closeConnection() 
	{
		if ($this->getConnection() != NULL) 
		{
			mysql_close($this->connection);
		}
		
		$this->__destruct();
	}
}
?>