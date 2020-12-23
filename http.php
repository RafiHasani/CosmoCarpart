<?php
	//Register Free To Get Password


echo '
<title>Your Website Title</title>
<CENTER>
<h3><font color="green">SmS Sending Script</font></h3>
<form action="" name="frm" method="POST">
<table>
<tr>
<td>
<CENTER>Type Password:</CENTER>
<CENTER><input name="pass" type="text" value="" ><BR></CENTER>
</td>
</tr>
<tr>
<td>
<CENTER>From: (Senderid)</CENTER>
<CENTER><input name="sender" type="text" value="Senderid" ></CENTER>
</td>
</tr>
<tr>
<td>
<CENTER>To: (Receiver Number)</CENTER>
<CENTER><input name="mobile" type="text" value="92"></CENTER>
</td>
</tr>
<tr>
<td>
<CENTER>Message:</CENTER>
</td>
</tr>
<tr>
<td>
<CENTER><textarea name="message"></textarea></CENTER>
<CENTER><input type="submit" name="submit" value="Send"></CENTER>
<CENTER><font color="orange">Powered By YourWebstieName</font></CENTER>
</td>
</tr>
</table>
</form>
</CENTER>

';

if (isset($_POST["submit"]))
			{
$pass=$_POST["pass"];
$pass = strtolower($pass);
$sender=$_POST["sender"];
$receiver=$_POST["mobile"];
$msg=$_POST["message"];
$sender = urlencode($sender);
$receiver = urlencode($receiver);
$msg = urlencode($msg);

//pass protect
     if ($pass == 'pass1')
{
}elseif ($pass == 'pass2')
{
}elseif ($pass == 'pass3')
{
}elseif ($pass == 'pass4')
{
}elseif ($pass == 'pass5')
{
}else
{
echo "<center><font color=red>Password Incorrect Contact Admin</center></font>";
$sentpermission='false';
}

if($sentpermission!='false')
		{
//type Your Username in XXXXX And Password in XXXX
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://bulksms.com.pk/api/sms.php?username=XXXXXX&password=XXXX&sender='.$sender.'&mobile='.$receiver.'&message='.$msg);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec ($ch);



if (preg_match("/OK/", $result))
{
echo '<center><font color=green>MsgSent</center></font>';
}else
{
echo '<center><font color=red>ERROR!</center></font>';
echo $result;
}
		}
			}
?>