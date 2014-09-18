<? 
$name=$_POST['txt_name'];
$email=$_POST['txt_email'];
$company=$_POST['txt_company'];
$telephone=$_POST['txt_telephone'];
$mobile=$_POST['txt_mobile'];
$how_find=$_POST['txt_find'];
$Details_reqirements=$_POST['txt_details'];
$mail_to="sales@vemtechnologies.com";
	$mail_sub="Contact Details From VEM Technologies";
	$mail_from=$name."<".$email.">";
	$mail_body="<font face=verdana><br><br> Name :". $name."<br>" ;
	$mail_body.=" Email :". $email."<br>" ;
	$mail_body.=" Company :". $company."<br>";
	$mail_body.=" Telephone :". $telephone."<br>" ;
	$mail_body.=" Mobile:". $mobile."<br>" ;
	$mail_body.=" How did you find this site :". $how_find."<br>" ;
	$mail_body.=" Details/Reqirements :". $Details_reqirements."<br><br><br><br></font>" ;
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers.="From:$name";
		mail($mail_to,$mail_sub,$mail_body,$headers);
	header ("Location: thank_you.html");
?>
