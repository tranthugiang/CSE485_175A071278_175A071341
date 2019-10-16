<?php  
	include("connection.php");
	function save($table,$dataPost,$id=0){
		global $conn;
		if($id){
			//update
			$fileld = "";
			$i=0;
			foreach ($dataPost as $key => $value) {
				if($key !="addNew"){
					$i++;
					if($i==1){
						if($key == 'name' || $key=='status' || $key =='password'){
							$fileld .="`".$key."`='".$value."'";
						}else{
							$fileld .="".$key."='".$value."'";
						}
					}else{
						if($key == 'name' || $key=='status' || $key =='password'){
							$fileld .=",`".$key."`='".$value."'";
						}else{
							$fileld .=",".$key."='".$value."'";
						}
					}
				}
			}
			$sqlQuery="UPDATE ".$table." SET ".$fileld." WHERE id='$id '";
		}else{
			$fileld = "";
			$val ="";
			$i=0;
			foreach ($dataPost as $key => $value) {
				if($key !="addNew"){
					$i++;
					if($i==1){
						if($key == 'name' || $key=='status' || $key =='password'){
							$key = "`".$key."`";
						}
						$fileld .= $key;
						$val .= "'".$value."'";
					}else{
						if($key == 'name' || $key=='status' || $key =='password'){
							$key = "`".$key."`";
						}
						$fileld .= ",".$key;
						$val .= ",'".$value."'";
					}
				}
			}
			$sqlQuery = "INSERT INTO ".$table."($fileld)";
	      	$sqlQuery .= " VALUES($val)";			
		}
		mysqli_query($conn,$sqlQuery) or die("Loi Truy van" .$sqlQuery );
		header("location:index.php");
	}
?>