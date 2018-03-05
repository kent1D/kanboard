<?php

namespace Kanboard\Formatter;

use Kanboard\Core\Filter\FormatterInterface;

/**
 * Class TaskListFormatter
 *
 * @package Kanboard\Formatter
 * @author  Frederic Guillot
 */
class UserUnreadNotificationFormatter extends BaseFormatter implements FormatterInterface
{
    /**
     * Apply formatter
     *
     * @access public
     * @return array
     */
    public function format()
    {
        $events = $this->query->findAll();
        foreach ($events as &$event) {
            $this->unserialize($event);
        }
        return $events;
    }
    
    private function unserialize(&$event)
    {
        $event['event_data'] = json_decode($event['event_data'], true);
        $event['title'] = $this->notificationModel->getTitleWithoutAuthor($event['event_name'], $event['event_data']);
    }
}
