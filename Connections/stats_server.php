<?php

require_once("php.mysql.class.php");
date_default_timezone_set('Europe/London');

class picoStats {
	var $hostname="localhost";	// MySQL Hostname
	var $username="bug01_gino";	// MySQL Username
	var $password="k0st0golov";	// MySQL Password
	var $database="bug01_portfolio";	// MySQL Database
	var $currentID="";

	function __construct($account,$page,$extraParams="") {
		if(!isset($_COOKIE['picoID'])) {
			$this->currentID=uniqid("pico");
			setcookie("picoID",$this->currentID,time()+60*60*24*365);
		} else {
			$this->currentID=$_COOKIE['picoID'];
		}
	}
	
	function trackPage($account,$page,$extraParams="") {
		$db=new MySQL($this->database,$this->username,$this->password);
		//$values=[];
		$values['uuid']=$this->currentID;
		$values['remote_addr']=$_SERVER['REMOTE_ADDR'];
		$values['uri']=$page;
		$values['referrer']=$_SERVER['HTTP_REFERER'];
		$values['user_agent']=$_SERVER['HTTP_USER_AGENT'];
		$values['account']=$account;
		$values['extra_params']=$extraParams;
		$values['timestamp']=date('Y-m-d H:i:s',time());
		$query=$db->Insert($values,"analytics");
		
		if(!$query) {
			trigger_error("Db error in Pico stats:".$db->lastError." query:".$db->lastQuery,E_USER_ERROR);
		}
		$db->CloseConnection();
	}
	
	function excludeIP($ipaddress) {
		$db=new MySQL($this->database,$this->username,$this->password);
		$result=$db->Insert(array("ipaddress"=>$_SERVER['REMOTE_ADDR']),"iptable");
		if(!$result) {
			trigger_error("Db error in Pico stats:".$db->lastError." query:".$db->lastQuery,E_USER_ERROR);
		}
		$db->CloseConnection();
	}
	
	function includeIP($ipaddress) {
		$db=new MySQL($this->database,$this->username,$this->password);
		$result=$db->Delete("iptable",array("ipaddress"=>$_SERVER['REMOTE_ADDR']));
		if(!$result) {
			trigger_error("Db error in Pico stats:".$db->lastError." query:".$db->lastQuery,E_USER_ERROR);
		}
		$db->CloseConnection();
	}
}

?>