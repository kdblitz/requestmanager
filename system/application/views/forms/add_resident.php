<?php
  $this->load->helper('form');
  $this->load->library('formdate');
  
  $attributes = array('id' => "addresident_form");
  
  echo form_open('manager/register_resident',$attributes);
  
  $first_name = array (
    'name' => 'first_name',
    'id' => 'first_name',
    'maxlength' => '80',
    'size' => '50',
    'desc' => 'First name'
  );
  $last_name = array (
    'name' => 'last_name',
    'id' => 'last_name',
    'maxlength' => '20',
    'size' => '50',
    'desc' => 'Last name'
  );
  $address = array (
    'name' => 'address',
    'id' => 'address',
    'maxlength' => '255',
    'rows' => '3',
    'cols' => '100',
    'desc' => 'Address'
  );
  $sex_m = array (
    'name' => 'sex',
    'id' => 'male',
    'value' => 'm',
    'desc' => array_get('SEX','m'),
  );
  $sex_f = array (
    'name' => 'sex',
    'id' => 'female',
    'value' => 'f',
    'desc' => array_get('SEX','f'),
  );
  $status_s = array (
    'name' => 'status',
    'id' => 's',
    'value' => 's',
    'desc' => array_get('CIVIL','s'),
  );
  $status_m = array (
    'name' => 'status',
    'id' => 'm',
    'value' => 'm',
	'desc' => array_get('CIVIL','m'),
  );
  $status_w = array (
    'name' => 'status',
    'id' => 'w',
    'value' => 'w',
	'desc' => array_get('CIVIL','w'),
  );
  $status_l = array (
    'name' => 'status',
    'id' => 'l',
    'value' => 'l',
	'desc' => array_get('CIVIL','l'),
  );
  $precinct = array (
    'name' => 'precinct',
    'id' => 'precinct',
    'maxlength' => '10',
    'size' => '10',
    'desc' => 'Precinct'
  );
  $barangay = array (
    'name' => 'barangay',
    'id' => 'barangay',
    'maxlength' => '100',
    'size' => '100',
    'desc' => 'Barangay'
  );
  $type_1 = array (
    'name' => 'type',
    'id' => 'type1',
    'desc' => array_get('CATEGORY',1),
    'value' => '1'
  );
  $type_2 = array (
    'name' => 'type',
    'id' => 'type2',
    'desc' => array_get('CATEGORY',2),
    'value' => '2'
  );
  $type_3 = array (
    'name' => 'type',
    'id' => 'type3',
    'desc' => array_get('CATEGORY',3),
    'value' => '3'
  );
  $type_4 = array (
    'name' => 'type',
    'id' => 'type4',
    'desc' => array_get('CATEGORY',4),
    'value' => '4'
  );
  $remarks = array (
    'name' => 'remarks',
    'id' => 'remarks',
    'maxlength' => '255',
    'rows' => '3',
    'cols' => '100',
    'desc' => 'Remarks'
  );
  
  $formdate = new FormDate();
  $formdate->year['start'] = 1950;
  $formdate->year['end'] = 2010; //TODO: auto increment based on system time
  //$formdate->month['values'] = 'numbers';
  
  $form_element = array (
    form_label($first_name['desc'],$first_name['id']).form_input($first_name),
    form_label($last_name['desc'],$last_name['id']).form_input($last_name),
    form_label($address['desc'],$address['id']).form_textarea($address),
    form_fieldset('Sex').form_radio($sex_m).form_label($sex_m['desc'],$sex_m['id']).
      form_radio($sex_f).form_label($sex_f['desc'],$sex_f['id']).form_fieldset_close(),
    form_fieldset('Civil status').form_radio($status_s).form_label($status_s['desc'],$status_s['id']).
      form_radio($status_m).form_label($status_m['desc'],$status_m['id']).
      form_radio($status_l).form_label($status_l['desc'],$status_l['id']).
      form_radio($status_w).form_label($status_w['desc'],$status_w['id']).form_fieldset_close(),
    form_label($precinct['desc'],$precinct['id']).form_input($precinct),
    form_label($barangay['desc'],$barangay['id']).form_input($barangay),
    '<label>Birthday</label>'.$formdate->selectMonth().$formdate->selectDay().$formdate->selectYear(),
    form_fieldset('Category').form_radio($type_1).form_label($type_1['desc'],$type_1['id']).
      form_radio($type_2).form_label($type_2['desc'],$type_2['id']).
      form_radio($type_3).form_label($type_3['desc'],$type_3['id']).
      form_radio($type_4).form_label($type_4['desc'],$type_4['id']).form_fieldset_close(),
    form_label($remarks['desc'],$remarks['id']).form_textarea($remarks),
  );?>
  
<?php foreach($form_element as $item): ?>
    <li><?=$item?></li>
<?php endforeach; ?>
    
<?=form_reset('reset','Reset');?>
<?=form_submit('login','Register');?>
<?=form_close();?>