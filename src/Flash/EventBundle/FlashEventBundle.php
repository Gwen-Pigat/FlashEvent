<?php

namespace Flash\EventBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FlashEventBundle extends Bundle
{
    public function getParent(){
        return "FOSUserBundle";
    }
}
