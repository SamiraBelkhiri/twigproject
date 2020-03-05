<?php

namespace App\Entity;


class Captilaze implements Transform
{
   public function transform(string $input): string
   {
       $newStr ='';
       foreach (str_split($input)as $index => $char){
           $newStr .=($index % 2) ? strtolower($char) : strtoupper($char);
       }
       return $newStr;

   }
}
