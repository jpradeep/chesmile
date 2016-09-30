<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profile index large-9 medium-8 columns content">
    <h3><?= __('Profile') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('City') ?></th>
                <th scope="col"><?= $this->Paginator->sort('State') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Zipcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profile as $profile): ?>
            <tr>
                <td><?= $this->Number->format($profile->ID) ?></td>
                <td><?= $profile->has('user') ? $this->Html->link($profile->user->id, ['controller' => 'Users', 'action' => 'view', $profile->user->id]) : '' ?></td>
                <td><?= h($profile->Mobile) ?></td>
                <td><?= h($profile->Address_1) ?></td>
                <td><?= h($profile->Address_2) ?></td>
                <td><?= h($profile->City) ?></td>
                <td><?= h($profile->State) ?></td>
                <td><?= h($profile->Country) ?></td>
                <td><?= $this->Number->format($profile->Zipcode) ?></td>
                <td><?= h($profile->Photo) ?></td>
                <td><?= h($profile->Created) ?></td>
                <td><?= h($profile->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profile->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
