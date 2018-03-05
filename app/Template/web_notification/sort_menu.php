<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><strong><?= t('Sort') ?> <i class="fa fa-caret-down"></i></strong></a>
    <ul>
        <li>
            <?= $paginator->order(t('Date'), \Kanboard\Model\UserUnreadNotificationModel::TABLE.'.date_creation') ?>
        </li>
        <li>
            <?= $paginator->order(t('Event name'), \Kanboard\Model\UserUnreadNotificationModel::TABLE.'.event_name') ?>
        </li>
    </ul>
</div>