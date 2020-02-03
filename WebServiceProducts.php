<?php

namespace Acme\Bundles\WebServiceProducts;

use Acme\Bundles\WebServiceProducts\DependencyInjection\CompilerPass\ComponentProcessorPass;
use Acme\Bundles\WebServiceProducts\DependencyInjection\WebServiceExtension;
use Oro\Bundle\ProductBundle\Entity\Brand;
use Oro\Bundle\ProductBundle\Entity\Product;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class WebServiceProducts extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        if (!$this->extension) {
            $this->extension = new WebServiceExtension();
        }

        return $this->extension;
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container
            ->addCompilerPass(new ComponentProcessorPass());
    }
}
