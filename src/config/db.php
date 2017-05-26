<?php
class db{
	/*
		Config
	*/
	private $dbhost = '127.0.0.1';
	private $dbuser = 'root';
	private $dbpass = '';
	private $dbname = 'bitx';
	/*
		Connection
	*/
	public function connect(){
		$dbh = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbh;
	}
	/*public function createAdmin($binds){
		$stmt = $dbh->prepare("INSERT INTO admin (username,email,fullname, password,phone,publicKey,imageDir) VALUES (?,?,?,?,?,?,?)");
		$stmt->bindParam(1, $binds=>$username);
		$stmt->bindParam(2, $email);
		$stmt->bindParam(3, $fullname);
		$stmt->bindParam(4, $password);
		$stmt->bindParam(5, $phone);
		$stmt->bindParam(6, $public);
		$stmt->bindParam(7, $imageDir);
		return $stmt;
	}*/
}
?>