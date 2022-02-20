<?php

/*
 * (c) Omar Villafuerte <ovillafuerte.94@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */


namespace IngeniusHq\HelloLaravel;

class Hello
{
    public function say($toSay = "Nothing given")
    {
        return $toSay;
    }
}
