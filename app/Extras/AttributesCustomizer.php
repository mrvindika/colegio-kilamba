<?php

namespace App\Extras;


class AttributesCustomizer
{

 static $attributes= [
  // User
  'name'=> 'Nome',
  'email'=> 'Email',
  'password'=> 'Senha',
  'role'=> 'Nivel', 
  'current_password'=> 'Senha actual',
  'new_password'=> 'Senha nova',
];


  /**
  * Returns customized attribute label
  * @param string $attribute
  * @return string
  */
  public static function customizeAttribute($attribute){
    $result=null;
    $labels= self::$attributes;
    foreach($labels as $label=>$value)
        if($label == $attribute){
          $result= $value;
          break;
        }
    return $result;

  }

  /**
  * Returns  array of customized attributes
  * @return array
  */
  public static function getCustomizeAttributes(){

    return self::$attributes;
  }

  /**
  * Returns  array of customized attributes
  * @return array
  */
  public static function alphabet(){

    return [
      'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K','L', 'M',
      'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];
  }









}
