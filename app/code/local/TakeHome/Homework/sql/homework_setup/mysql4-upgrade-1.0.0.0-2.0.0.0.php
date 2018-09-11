<?php 
$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
// #1 The module should add a new product attribute called "Half-life (seconds)"
// of type integer to all products
$setup->addAttribute('catalog_product','half_life_seconds',array(
    'type'              => 'int',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Half life (seconds)',
    'group'                => 'General',
    'input'             => 'text',
    'class'             => '',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => false,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => true,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'             => array('simple', 'configurable', 'virtual', 'downloadable'),
    'is_configurable'   => false,
    'is_used_for_promo_rules' => true,
));
#2. The module should add a new column "contains_radioactive_item" to the sales order
$installer->getConnection()->addColumn($installer->getTable('sales/order'), 'contains_radioactive_item',"TINYINT(1) UNSIGNED NOT NULL DEFAULT '0'");
$installer->getConnection()->addColumn($installer->getTable('sales/order_grid'), 'contains_radioactive_item',"TINYINT(1) UNSIGNED NOT NULL DEFAULT '0'");
$installer->endSetup();
?>