<?php

require_once('user.php');

$user = new User();

$command = $_GET['command'];
$post = trim(file_get_contents('php://input'));
if($post)
{
	$post = json_decode($post);
}

if($command == 'getCredentialArgs')
{
	print(json_encode($user->getWebAuthnCreateArgs()));
}
else if($command == 'registerDevice')
{
	$clientDataJson = base64_decode($post->clientDataJson);
	$attestationObject = base64_decode($post->attestationObject);

	$result = $user->registerWebAuthnDevice($clientDataJson, $attestationObject);

	$return = new stdClass();
	$return->success = $result;
	print(json_encode($return));
}
else if($command == 'checkAuth')
{
	$clientDataJson = base64_decode($post->clientDataJson);
    $authenticatorData = base64_decode($post->authenticatorData);
    $signature = base64_decode($post->signature);
    $id = base64_decode($post->id);

    $result = $user->twofaLogin($clientDataJson, $authenticatorData, $signature, $id);

	$return = new stdClass();
	$return->success = $result;
	print(json_encode($return));
}