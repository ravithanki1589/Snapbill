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


/* for add client */
$res = $obj->post('client/add',$data);

/* for list of all client */
$data['email'] = 'Test';
$res = $obj->post('client/list',$data);

/* for get details of client by id */
$res = $obj->post('client/367650/get');

/* for generate invoice */

$invoice['description'] = array('Test Description');
$invoice['unit_cost'] = array(10);
$invoice['quantity'] = array(1);
$res = $obj->post('client/367650/add_invoice');


/* for cancel invoice */
$res = $obj->post('invoice/invoice_id/cancel');

invoice_id : when you create invoice snapbill send invoice id in response on your set callback url

print_r($res);
exit;

?>
