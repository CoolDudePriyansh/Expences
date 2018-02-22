<?php
class Database
{
	//private static $host='rutvi.db.9462939.hostedresource.com';
	//private static $uname='rutvi';
	//private static $pwd='Demo9@1212';
	//private static $con=NULL;
	
	private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
	private static $con=NULL;
	
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('expences',self::$con);
		return self::$con;
	}
	
	public function getUserByEmail($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
	public function getAllCat()
	{		$con=database::connect();
			$res=mysql_query("select * from cat_tbl ",$con);
			return $res;
			database::disconnect();
	}
	

	public function getTodayExpences($user_id,$day)
	{		$con=database::connect();
			$res=mysql_query("select * from expences_tbl where fk_user_id='$user_id' and day='$day'",$con);
			return $res;
			database::disconnect();
	}
	public function getTotalExpences($user_id)
	{		$con=database::connect();
			$res=mysql_query("select * from expences_tbl where fk_user_id='$user_id'",$con);
			return $res;
			database::disconnect();
	}
	public function getCategoryByExpence($user_id)
	{		$con=database::connect();
			$res=mysql_query("select e.*,c.* from expences_tbl as e,cat_tbl as c where e.fk_user_id='$user_id' and c.cat_id=e.fk_cat_id",$con);
			return $res;
			database::disconnect();
	}
	public function getThisMonthExpences($user_id,$month)
	{		$con=database::connect();
			$res=mysql_query("select * from expences_tbl where fk_user_id='$user_id' and month='$month'",$con);
			return $res;
			database::disconnect();
	}
	public function getExpenceByMonth($user_id)
	{		$con=database::connect();
			$res=mysql_query("select * from expences_tbl where fk_user_id='$user_id' ",$con);
			return $res;
			database::disconnect();
	}
	public function changepassword($email,$newpass)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set user_password='$newpass' where user_email='$email' ",$con);
			return $res;
			database::disconnect();
	}

	public function getid($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email'",$con);
			return $res;
			database::disconnect();
	}

	
	public function checkpassword($email,$password)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email' and user_password='$password'",$con);
			return $res;
			database::disconnect();
	}

	
	public function addExpences($name,$cat,$email,$amount,$day,$month)
	{	
			$con=database::connect();
			$res=mysql_query("insert into expences_tbl values (NULL,'$name','$cat','$email','$amount','$day','$month')",$con);
			return $res;
			database::disconnect();
	}
	public function addCat($name)
	{	
			$con=database::connect();
			$res=mysql_query("insert into cat_tbl values (NULL,'$name')",$con);
			return $res;
			database::disconnect();
	}
	public function catDel($cat_id)
	{	
			$con=database::connect();
			$res=mysql_query("delete from cat_tbl where cat_id='$cat_id'",$con);
			return $res;
			database::disconnect();
	}
	public function expDel($exp_id)
	{
		$con=database::connect();
			$res=mysql_query("delete from expences_tbl where expences_id='$exp_id'",$con);
			return $res;
			database::disconnect();
		
	}
	

	public function listAllByDay($email,$day)
	{		$con=database::connect();
			$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences_tbl as e,cat_tbl as c where c.cat_id=e.fk_cat_id and u.user_id=e.fk_user_id and user_email='$email' and e.day='$day'",$con);
			return $res;
			database::disconnect();
	}
	public function listAllByMonth($email,$month)
	{		$con=database::connect();
			$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences_tbl as e,cat_tbl as c where c.cat_id=e.fk_cat_id and u.user_id=e.fk_user_id and user_email='$email' and e.month='$month'",$con);
			return $res;
			database::disconnect();
	}
	public function listAll($email)
	{
		$con=database::connect();
		$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences_tbl as e,cat_tbl as c where c.cat_id=e.fk_cat_id and u.user_id=e.fk_user_id and user_email='$email'",$con);
		return $res;
	database::disconnect();
	}
	public function checkpwd($email_id,$pass)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where pk_email_id='$email_id' and user_password='$pass'",$con);
		return $res;
	database::disconnect();
	}
	public function changepwd($email_id,$pass)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set user_password='$pass' where pk_email_id='$email_id'",$con);
		return $res;
	database::disconnect();
	}
	
	public function signup($name,$email,$pwd,$photo,$gender)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values(NULL,'$name','$email','$pwd','$photo','$gender')",$con);
		return $res;
	database::disconnect();
	}
	public function login($email,$password)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email='$email' and user_password='$password'",$con);
		return $res;
	database::disconnect();
	}
	
	public static function disconnect()
	{
		mysql_close(self::$con);
		self::$con=NULL;
	}
}
?>