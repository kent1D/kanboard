<?php

namespace Kanboard\Filter;

use Kanboard\Core\Filter\FilterInterface;
use Kanboard\Model\UserUnreadNotificationModel;

/**
 * Filter tasks by project ids
 *
 * @package filter
 * @author  Frederic Guillot
 */
class UserUnreadNotificationFilter extends BaseFilter implements FilterInterface
{
    /**
     * Get search attribute
     *
     * @access public
     * @return string[]
     */
    public function getAttributes()
    {
        return array('user_id');
    }

    /**
     * Apply filter
     *
     * @access public
     * @return FilterInterface
     */
    public function apply()
    {
        if (empty($this->value)) {
            $this->query->eq(UserUnreadNotificationModel::TABLE.'.user_id', 0);
        } else {
            $this->query->in(UserUnreadNotificationModel::TABLE.'.user_id', $this->value);
        }

        return $this;
    }
}
