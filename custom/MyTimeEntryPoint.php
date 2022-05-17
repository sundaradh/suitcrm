<?php
$account=BeanFactory::getBean('Accounts' );
$account->retrieve_by_string_fields(array('name'=>null));
echo $account->d;
$data =array();
foreach(array_keys($account->field_defs) as $key){
    $data[$key]=$account->{$key};
}
echo "<pre>";
print_r($data);
echo "</pre>";