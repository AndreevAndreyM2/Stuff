<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Created By : Rohan Hapani
 */
namespace Rlab\Grid\Model\ResourceModel\Grid;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Rlab\Grid\Model\Grid as GridModel;
use Rlab\Grid\Model\ResourceModel\Grid as GridResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(GridModel::class, GridResourceModel::class);
    }
}
