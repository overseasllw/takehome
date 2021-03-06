<?php 
/*  
    <This homework is developed based on magento 1.8>
    6. Ayes/nocolumnshouldbeaddedtothesalesordergridintheadminforContainsRadioactiveItem.
    7. The column should be filterable and sortables
*/
class TakeHome_Homework_Block_Adminhtml_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    protected function _prepareColumns()
    {
        $options = array(
                1   => Mage::helper('homework')->__('Yes'),
                0    => Mage::helper('homework')->__('No'),                
        ); 
                        
        $this->addColumn('contains_radioactive_item', array(
                'header'    =>  Mage::helper('homework')->__('Radioactive'),
                'width'     =>  '50px',
                'index'     =>  'contains_radioactive_item',
                'type'      =>  'options',
                'options'   =>  $options,
                'sortable'  =>  true,
             )
        );
        $this->addColumnsOrder('contains_radioactive_item','grand_total'); 
        return parent::_prepareColumns();
    }
}
?>