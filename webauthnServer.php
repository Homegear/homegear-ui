<?php
/* Copyright 2013-2019 Homegear GmbH
 *
 * Smart Home Interface (Shif, homegear-ui) is free software: you can
 * redistribute it and/or modify it under the terms of the GNU Lesser
 * General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 * 
 * Shif is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.

 * You should have received a copy of the GNU Lesser General Public
 * License along with Shif.  If not, see
 * <http://www.gnu.org/licenses/>.
*/

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