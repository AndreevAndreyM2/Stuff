<?php
namespace Rlab\Donation\Block;

class Donation extends \Magento\Framework\View\Element\Template
{
    protected $_productCollectionFactory;

//    protected $categoryFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
//        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
//        $this->categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
//        $categoryId = '7';
//        $category = $this->categoryFactory->create()->load($categoryId);

        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
//        var_dump($collection->addCategoryFilter($category));exit;

        return $collection;
    }
}
