<?php

namespace GrowupFrontendBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GrowupFrontendBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
