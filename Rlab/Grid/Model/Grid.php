<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Created By : Rohan Hapani
 */
namespace Rlab\Grid\Model;
use Magento\Framework\Model\AbstractModel;
use Rlab\Grid\Model\ResourceModel\Grid as GridResourceModel;
class Grid extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(GridResourceModel::class);
    }
}
