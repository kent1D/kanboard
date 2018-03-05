<?php

namespace Kanboard\Pagination;

use Kanboard\Core\Base;
use Kanboard\Core\Paginator;
use Kanboard\Model\UserUnreadNotificationModel;

/**
 * Class WebNotificationPagination
 *
 * @package Kanboard\Pagination
 * @author  Frederic Guillot
 */
class WebNotificationPagination extends Base
{
    /**
     * Get user listing pagination
     *
     * @access public
     * @return Paginator
     */
    public function getListingPaginator($user)
    {
        return $this->paginator
            ->setUrl('WebNotificationController', 'show')
            ->setMax(30)
            ->setOrder(UserUnreadNotificationModel::TABLE.'.date_creation')
            ->setDirection('DESC')
            ->setQuery($this->userUnreadNotificationModel->getQuery($user))
            ->setFormatter($this->userUnreadNotificationFormatter)
            ->calculate();
    }
}
