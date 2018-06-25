
<?php
	/* modificar los datos posta y dejar solo campo de email */
	$host="localhost";
	$username="root";
	$password="";
	$databasename="sample";

	$connect=mysql_connect($host,$username,$password);
	$db=mysql_select_db($databasename);

	if(isset($_POST['submit_form'])) {
		$name=$_POST["user_name"];
		$email=$_POST["email"];

		mysql_query("insert into short_urls values('','$name','$email')");
		echo "Thank You For Joining Our Newsletter";
	}
?>