<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

interface transform{

    public function transform(string $transform): string ;

}