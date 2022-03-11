<form method="POST">
    ID
    <input name="id">
    ROLE
    <input name="role">
    <button type="submit" name="btnU">Ok</button>
</form>


<?php
$url = base_url('/api/users/1');
$json = file_get_contents($url);
$j = json_decode($json,true);
var_dump($j);
echo '<br><hr>';
echo $j['id'];
?>

<?php
if(isset($_POST['btnU'])){
$p=$_POST['role'];
$id=$_POST['id'];
$curl = curl_init();

curl_setopt_array($curl, array( 
CURLOPT_URL => base_url().'/api/users/'.$id,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'PUT',
CURLOPT_POSTFIELDS => 'role='.$p.'&login=isTrue',
CURLOPT_HTTPHEADER => array(
'Content-Type: application/x-www-form-urlencoded'
),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}