   <?php
$email = $_POST['name'];
$filename = "newsletter.txt";
$f_data= '
Email :  '.$email.'
';

echo 'The form data was saved to '.$filename.'  <br>
<a href="'.$filename.'">Click here to read </a> ';
$file = fopen($filename, "a");
fwrite($file,$f_data);
fclose($file);
?>