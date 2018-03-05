<span class="notification">
<?php if ($this->user->hasNotifications()): ?>
    <?= $this->modal->medium('bell web-notification-icon', '<i class="badge js-modal-medium">'.$this->user->countNotifications().'</i>', 'WebNotificationController', 'show', array('user_id' => $this->user->getId()), t('Unread notifications')) ?>
<?php else: ?>
    <?= $this->modal->mediumIcon('bell', t('My notifications'), 'WebNotificationController', 'show', array('user_id' => $this->user->getId())) ?>
<?php endif ?>
</span>
