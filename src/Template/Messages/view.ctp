<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Message $message
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->User1]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->User1], ['confirm' => __('Are you sure you want to delete # {0}?', $message->User1)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="messages view large-9 medium-8 columns content">
    <h3><?= h($message->User1) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($message->Message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User1') ?></th>
            <td><?= $this->Number->format($message->User1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User2') ?></th>
            <td><?= $this->Number->format($message->User2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($message->Date) ?></td>
        </tr>
    </table>
</div>
