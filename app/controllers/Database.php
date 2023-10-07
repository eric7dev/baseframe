<?php

# DATABASE CONTROLLER

class Database {
  # Properties
  public $dbname = 'dbname';
  public $user = 'dbuser';
  public $pass = 'dbpass';
  public $searchQuery = '';

  # methods
  function __construct() { }
  function __destruct() { }
  
  # database basic methods
  function connectDatabase() {}
  function disconnectDatabase() {}
  function searchKeyword($arg) {
    # search for $arg references in a keyword/tag array
  }
  # users methods
  function createUser($arg1,$arg2,$arg3) {
    echo $1."-".$2."-".$3;
  }
  function deleteUser($arg1,$arg2,$arg3) {
    echo $1."-".$2."-".$3;
  }
  function getUsers(){
			 $conn = new mysqli(localhost,DBUSER,DBPASS,DBNAME);
			 if ($conn->connect_error) {
   	  die("Connection failed: " . $conn->connect_error);
			 }
			 $sql = "SELECT * FROM users";
			 $res = $conn->query($sql);
			 while($row = $res->fetch_assoc()) {
				  echo "Id: ".$row["id"]." - Name: ".$row["name"]." - Pass: ".$row["pass"]."<br>";
    }
    $conn->close();
		}

  # debugging methods
  function testfunction($var1) {
    echo "test complete. arg: ".$var1;
  }
}

?>
