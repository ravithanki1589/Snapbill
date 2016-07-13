<?php
include "http.php";
$data1['username'] = 'username';
$data1['password'] = 'password';

$obj = new Http($data1);

/* for create client */
$data['firstname'] = 'Test';
$data['surname'] = 'Test';
$data['company'] = 'Test';
$data['email'] = 'Test';

$res = $obj->post('client/add',$data);
//$res = $obj->post('client/list',$data);
//$res = $obj->post('client/367650/get');
print_r($res);
exit;

?>