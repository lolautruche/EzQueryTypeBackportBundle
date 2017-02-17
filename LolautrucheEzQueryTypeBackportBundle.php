<?php

namespace Lolautruche\EzQueryTypeBackportBundle;

use Lolautruche\EzQueryTypeBackportBundle\DependencyInjection\Compiler\QueryTypePass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LolautrucheEzQueryTypeBackportBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new QueryTypePass());
    }
}
