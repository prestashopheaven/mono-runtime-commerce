<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @author    prestahaven.com
 * @copyright Since 2026 George van Engers
 * @license   https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace PrestaShopHeaven\MonoCommerce\Fixture\Module\Helper;

use PrestaShopHeaven\MonoCommerce\Fixture\Install\ModuleDefinition;
use PrestaShopHeaven\Runtime\Kit\Definition\ModuleDefinitionInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Connects the main class to its definition.
 */
trait Definition
{
    /**
     * Returns the definition of the fixture.
     */
    public function getModuleDefinition(): ModuleDefinitionInterface
    {
        return new ModuleDefinition();
    }
}
