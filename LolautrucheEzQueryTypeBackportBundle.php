<?php

/*
 * This file is part of the EzQueryTypeBackportBundle package.
 *
 * (c) Jérôme Vieilledent <jerome@vieilledent.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
