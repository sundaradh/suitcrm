<?php
$account=BeanFactory::getBean('Accounts' );
$account->retrieve_by_string_fields(array('name'=>'sundar'));
$data =array();
foreach(array_keys($account->field_defs) as $key){
    $data[$key]=$account->{$key};
}
echo json_encode($data);