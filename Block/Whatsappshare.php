<?php 
/*
 * @Author      Hemant Singh
 * @Developer   Hemant Singh
 * @Module      Wishusucess_Whatsappshare
 * @copyright   Copyright (c) Wishusucess (http://www.wishusucess.com/)
 */
namespace Wishusucess\Whatsappshare\Block;
 
use Magento\Framework\Registry;
use \Wishusucess\Whatsappshare\Helper\Data;

class Whatsappshare extends \Magento\Framework\View\Element\Template
{
    public $assetRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Magento\Framework\View\Asset\Repository $assetRepository,
        Data $helperData
    )
    {
        // Get the asset repository to get URL of our assets
        $this->assetRepository = $assetRepository;
        $this->_helperData = $helperData;
        return parent::__construct($context, $data);
    }
    public function helperInit() {
        return $this->_helperData;
    }
}