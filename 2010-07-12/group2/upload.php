<?
include "dbconfig.php";
 
$dbconn = mysql_connect($dbhost, $dbusr, $dbpass) or die("Error Occurred-".mysql_error());
mysql_select_db($dbname, $dbconn) or die("Unable to select database");
 
if(isset($_REQUEST[submit]) && $_FILES[imgfile][size] > 0)
{
          $fileName       = $_FILES[imgfile][name]; // image file name
          $tmpName     = $_FILES[imgfile][tmp_name]; // name of the temporary stored file name
          $fileSize           = $_FILES[imgfile][size]; // size of the uploaded file
          $fileType         = $_FILES[imgfile][type]; // file type

          $fp                    = fopen($tmpName, 'r'); // open a file handle of the temporary file
          $imgContent  = fread($fp, filesize($tmpName)); // read the temp file
          fclose($fp); // close the file handle

          $query = "INSERT INTO images (image_name, image_type, image_size, image_data ) VALUES ('$fileName', '$fileType', '$fileSize', '" . base64_encode($imgContent) . "')";

          mysql_query($query) || print mysql_error($dbconn);
          $imgid = mysql_insert_id(); // autoincrement id of the uploaded entry
          mysql_close($dbconn);
 
          echo "<br>Image successfully uploaded to database<br>";
          echo "<a href=\"viewimage.php?id=$imgid\">View Image</a>";
 
}else die("You have not selected any image");
?>
