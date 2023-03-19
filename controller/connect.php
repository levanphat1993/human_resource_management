<?php
	
	class database
	{
		
		function connection()
		{
			return mysqli_connect('mysql','root','root','hrm_db');
		}
	}

?>