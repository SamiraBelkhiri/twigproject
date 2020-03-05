<?php

namespace App\Entity;




class Spacedash implements Transform
{
    public function transform(string $input): string
    {
        $str = strtolower($input);
        return str_replace(' ','-', $str);

    }

}
