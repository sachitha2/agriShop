<?php

class DB{
	
	
	
	public $conn;
    function dataConn($x){
	  $this->conn = $x;
	  
	  
   }
	
	function select($table,$logic,$cols = " * "){
		 $sql = "SELECT $cols FROM {$table} {$logic}"; 
		 $result = $this->conn->query($sql);
		 
		 $ar = array();
		 $x = 0;
	  	 while($row = mysqli_fetch_assoc($result)){
		  	 $ar[$x] = $row;
			 $x++;
	  	 }
		return($ar);
    }

    function nRow($table,$logic,$col = "*"){
		$sql = "SELECT $col FROM {$table} {$logic}"; 
		$result = $this->conn->query($sql);
		return(mysqli_num_rows($result));
	}	

    function isAvailable($table,$logic){
		$rows = $this->nRow($table,$logic);
		if($rows == 1){
			return(true);
		}
		else{
			return(false);
		}
		
	}

}
    
?>
