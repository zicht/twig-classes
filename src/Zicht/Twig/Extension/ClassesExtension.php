<?php
/**
 * @copyright Zicht Online
 */
namespace Zicht\Twig\Extension;

use Twig_Extension;

/**
 * Twig extension for the classes helper function.
 */
class ClassesExtension extends Twig_Extension
{
    /**
     * @{inheritDoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('classes', ['\Zicht\HtmlClassHelper', 'getClasses'])
        ];
    }

    /**
     * @{inheritdoc}
     */
    public function getName()
    {
        return 'classes';
    }
}
