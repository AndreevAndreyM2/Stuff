<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Created By : Rohan Hapani
 */
namespace Rlab\Grid\Controller\Adminhtml\Index;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
class Delete extends Action
{
    /**
     * @var \Rlab\Grid\Model\Grid
     */
    protected $modelGrid;
    /**
     * @param Context                  $context
     * @param \Rlab\Grid\Model\Grid $modelGrid
     */
    public function __construct(
        Context $context,
        \Rlab\Grid\Model\Grid $modelGrid
    ) {
        parent::__construct($context);
        $this->modelGrid = $modelGrid;
    }
    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Rlab_Grid::index_delete');
    }
    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->modelGrid;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Record deleted successfully.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Record does not exist.'));
        return $resultRedirect->setPath('*/*/');
    }
}
