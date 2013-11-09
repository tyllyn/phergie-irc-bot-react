<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-irc-bot-react for the canonical source repository
 * @copyright Copyright (c) 2008-2013 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Irc\Bot\React\Plugin
 */

namespace Phergie\Irc\Bot\React\Plugin;

/**
 * Trait for injecting configuration into plugins using the constructor.
 *
 * @category Phergie
 * @package Phergie\Irc\Bot\React
 */
trait ConstructorConfigurableTrait
{
    use ConfigurableTrait;

    /**
     * Sets the configuration for the plugin to use.
     *
     * @param array $config
     */
    public function __construct(array $config = array())
    {
        $this->config = $config;
    }
}
