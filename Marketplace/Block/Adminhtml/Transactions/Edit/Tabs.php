<?php
namespace Magentomaster\Marketplace\Block\Adminhtml\Transactions\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('transactions_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Transactions Information'));
    }
}