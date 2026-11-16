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

use PrestaShopHeaven\MonoCommerce\Fixture\Module\Helper\Definition;
use PrestaShopHeaven\Runtime\Kit\ModuleBase;

if (!defined('_PS_VERSION_')) {
    exit;
}

if (is_file(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class Heavenmonocommerce extends Module
{
    use ModuleBase;
    use Definition;

    /**
     * Sets the identity of the fixture module.
     */
    public function __construct()
    {
        $this->name = 'heavenmonocommerce';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'prestahaven.com';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = ['min' => '8.1.0', 'max' => '9.99.99'];
        $this->bootstrap = true;
        $this->multistoreCompatibility = self::MULTISTORE_COMPATIBILITY_YES;

        parent::__construct();

        $this->displayName = $this->trans('Commerce packages fixture', [], 'Modules.Heavenmonocommerce.Admin');
        $this->description = $this->trans('Test module of the PrestaHaven commerce packages.', [], 'Modules.Heavenmonocommerce.Admin');
    }
}
