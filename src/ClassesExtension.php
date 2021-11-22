<?php
/**
 * @copyright Zicht Online
 */
namespace Zicht\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig_Extension;

/**
 * Twig extension for the classes helper function.
 */
class ClassesExtension extends AbstractExtension
{
    /**
     * {@inheritDoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('classes', ['\Zicht\HtmlClassHelper', 'getClasses'])
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'classes';
    }
}
