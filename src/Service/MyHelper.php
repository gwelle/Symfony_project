<?php

namespace App\Service;

use DateTime;

class MyHelper
{
    /**
     * @return string
     * @throws \Exception
     */
    public function getTheDate()
    {
        return 'Nous sommes le'.Date('/d/m/Y');
    }
}
