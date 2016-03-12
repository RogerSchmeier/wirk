<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Galerias Img'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Galerias'), ['controller' => 'Galerias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeria'), ['controller' => 'Galerias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galeriasImgs index large-9 medium-8 columns content">
    <h3><?= __('Galerias Imgs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('galeria_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galeriasImgs as $galeriasImg): ?>
            <tr>
                <td><?= $this->Number->format($galeriasImg->id) ?></td>
                <td><?= h($galeriasImg->foto) ?></td>
                <td><?= $galeriasImg->has('galeria') ? $this->Html->link($galeriasImg->galeria->id, ['controller' => 'Galerias', 'action' => 'view', $galeriasImg->galeria->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $galeriasImg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $galeriasImg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $galeriasImg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeriasImg->id)]) ?>
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
