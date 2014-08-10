<?php

namespace tsCMS\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class tsCMSUserBundle extends Bundle
{
    public function getParent() {
        return "FOSUserBundle";
    }
}
