<?php

$email = $_POST["inputEmail"];

//var_dump($_POST); 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LcJsbYUAAAAANgVZtXvSOkxpg9P-Tu_sGbXzOkq",
    "response"=>$_POST["g-recaptcha-respons"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_set($ch, CURLOPT_RETURNTRANSFER, true);

$recapcha = json_decode(curl_exec($ch), true);

curl_close($ch);

if ($recapcha["success"] === true)
{
    echo "OK: " . $_POST["inputEmail"];
} else {
    header("Location: exemplo-04.php");
}
?>