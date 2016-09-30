<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profile->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profile->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profile form large-9 medium-8 columns content">
    <?= $this->Form->create($profile) ?>
    <fieldset>
        <legend><?= __('Edit Profile') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('Mobile');
            echo $this->Form->input('Address_1');
            echo $this->Form->input('Address_2');
            echo $this->Form->input('City');
            echo $this->Form->input('State');
            echo $this->Form->input('Country');
            echo $this->Form->input('Zipcode');
            echo $this->Form->input('Photo');
            echo $this->Form->input('Created', ['empty' => true]);
            echo $this->Form->input('Modified', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
