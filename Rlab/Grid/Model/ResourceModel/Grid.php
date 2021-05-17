<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Created By : Rohan Hapani
 */
namespace Rlab\Grid\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Grid extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('grid_event', 'id');
    }
}
