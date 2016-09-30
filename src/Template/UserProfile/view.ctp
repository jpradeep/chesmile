<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Profile'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userProfile view large-9 medium-8 columns content">
    <h3><?= h($userProfile->fullname) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userProfile->has('user') ? $this->Html->link($userProfile->user->id, ['controller' => 'Users', 'action' => 'view', $userProfile->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($userProfile->Mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 1') ?></th>
            <td><?= h($userProfile->Address_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 2') ?></th>
            <td><?= h($userProfile->Address_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($userProfile->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($userProfile->State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($userProfile->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($userProfile->Photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userProfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($userProfile->Zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userProfile->Created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userProfile->Modified) ?></td>
        </tr>
    </table>
</div>
