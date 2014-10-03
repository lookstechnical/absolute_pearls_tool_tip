<?php
/**
 * Green Acorn Product AttributeDesc
 * This package designed for Magento COMMUNITY edition
 * ===================================================
 *
 * @category   Greenacorn
 * @package    Greenacorn_AttributeDesc
 * @author     Green Acorn
 * @copyright  Copyright (c) 2013 Green Acorn.
 *
 * 
 * Add to app/local.xml under global node to disable admin cache (if needed):
 * <cache><backend>Zend_Cache_Backend_BlackHole</backend></cache>
 * 
 * Run following SQL to add EAV property
 * ALTER TABLE `catalog_eav_attribute` ADD `attr_desc` LONGTEXT  NULL  AFTER `is_used_for_promo_rules`;
 */

$installer = $this;
$installer->startSetup();
$installer->run("
    ALTER TABLE `catalog_eav_attribute` ADD `attr_desc` LONGTEXT  NULL  AFTER `is_used_for_promo_rules`;
");
$installer->endSetup();