<?php

require './conexion_face/fb_init.php';
$helper = $fb->getRedirectLoginHelper();

try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
if (isset($accessToken)) {
// Logged in
    $_SESSION['datos_face'] = (String) $accessToken;
    $fb->SetDefaultAccessToken($_SESSION['datos_face']);
    $response = $fb->get('/me?fields=id,name,last_name,gender,email,first_name,birthday');
    $user = $response->getGraphUser();
    $datos = Array(
        "id" => $user->getId(),
        "nombre" => $user->getFirstName(),
        "apellido" => $user->getLastName(),
        "sexo" => $user->getGender(),
        "cumpleaños" => $user->getBirthday(),
        "email" => $user->getEmail(),
    );
    if($user->getGender()=="male"){
        $datos["sexo"]="Masculino";
    }else{
        $datos["sexo"]="Femenino";
    }
    $_SESSION['usuario'] = $datos;
    header('Location: completarRegistro.php ');
}