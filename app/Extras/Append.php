<?php

namespace App\Extras;

use App\Models\Document;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd; 
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use setasign\Fpdi\Fpdi;
use Milon\Barcode\Facades\DNS1DFacade;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
/**
 * Class Store
 *
 * This class let you store any file temporarily.
 */
class  Append
{
 
    /**
     * Return translated day of the week.
     * @param int $days
     * @return string
     */
    public static  function dic(int $days)
    {
        $date= Carbon::today()->subDays($days)->format('D');
        $result= null;

        switch($date)
        {
            case 'Sun': $result= 'Domingo'; break;
            case 'Mon': $result= 'Segunda'; break;
            case 'Tue': $result= 'Terça'; break;
            case 'Wed': $result= 'Quarta'; break;
            case 'Thu': $result= 'Quinta'; break;
            case 'Fri': $result= 'Sexta'; break;
            case 'Sat': $result= 'Sábado'; break;
        }
        return $result;
    }


    /**
     * Returns the stored file
     * 
     * @param string $file
    */
    public static  function file(string $file)
    {
        $_file = tmpfile();
        fwrite($_file, $file);
        $metaData = stream_get_meta_data($_file);
        return $metaData['uri']; 
    }

        
    /**
     * Returns the stored file
     * 
     * @param mixed $value
     * @param array $array
     * @return  array
    */
    public static  function moveToTop(mixed $value, array $array)
    {
        $position = array_search($value, $array);
        unset($array[$position]);
        array_unshift($array, $value);

        return $array;
    }

    /**
    * Delete any file from specific filePath
    * @param string $filePath
    * @return  void
    */
    public static function delete(string $filePath)
    {
        if(preg_match('/Windows/', php_uname())) 
            $filePath= preg_replace("/\//", "\\", $filePath); 
        if(is_file($filePath)) 
            unlink($filePath);
    }

    /**
    * Determine if the role is invalid or not
    * @param string $role
    * @return  bool
    */
    public static function invalidRole(string $role)
    {
        return !collect(['Operador', 'Administrador'])->contains($role);
    }

    /**
    * Determine if the type is invalid or not
    * @param string $role
    * @return  bool
    */
    public static function invalidType(string $type)
    {
        return !self::types()->contains($type);
    }

    /**
    * Determine if the type is invalid or not
    * @return  Collection
    */
    public static function types()
    {
        return collect(['Declaração', 'Histórico Académico', 'Certificado', 'Diploma', 'Outro']);
    }

    
    /**
    * Determine the correct gender according given type
    * @param  string $type
    * @return  bool
    */
    public static function male(string $type)
    {
        switch($type)
        {
            case 'Declaração': 
                return false; 
            default:
                return true;
        }
    }

        /**
    * Define max size for array of documents on Upload
    * @param  string $type
    * @return  int
    */
    public static function maxSizeDoc()
    {
        return 15;
    }

    /**
    * Returns the Valid path according the OS platform
    * @param string $filePath
    */
    public static function validPath(mixed $filePath)
    {
        if(preg_match('/Windows/', php_uname())) 
            $filePath= preg_replace("/\//", "\\", $filePath);
        return $filePath;
    }

    /**
    * Generate string with 13 digits with block of serial (ex.: 000000000011)
    * @param int $id
    * @return string;
    */
    public static function genSerial(int $id) 
    {
       $size= count(str_split($id));
       $resize= ($size>12)? $size++: 12;
       $block= round($size/2);

       return $block.str_pad($id, $resize, '0', STR_PAD_LEFT);
    }

    /**
    * Get 'Fullname' value sliced from 'pessoa' Attribute
    * @return string
    */
    public static function fullName($name){
        $name= strtolower($name);
        $name= ucwords($name);
        $arrayName= explode(' ', $name);
        $size= count($arrayName);
        $firstName= $arrayName[0];
        $middleNames= '';
        $lastName= '';
        if($size>1) $lastName= ' '.$arrayName[$size-1];
        if($size>2)
            for($i=1; $i<($size -1); $i++){ 
                $middleNames.= ' '.$arrayName[$i][0].'.';
            }
        return $firstName.$middleNames.$lastName;
    }

    /**
    * Get 'Fullname' value sliced from 'pessoa' Attribute
    * @return string
    */
    public static function firstName($name){
        $arrayName= explode(' ', self::fullName($name));
        
        return $arrayName[0];
    }

    /**
    * Get 'Fullname' value sliced from 'pessoa' Attribute
    * @return string
    */
    public static function lastName($name){
        $arrayName= explode(' ', self::fullName($name));

        return $arrayName[count($arrayName)-1];
    }













}
