<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Galeria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Galerias Img'), ['controller' => 'GaleriasImg', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galerias Img'), ['controller' => 'GaleriasImg', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galerias index large-9 medium-8 columns content">
    <h3><?= __('Galerias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galerias as $galeria): ?>
            <tr>
                <td><?= $this->Number->format($galeria->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $galeria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $galeria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $galeria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeria->id)]) ?>
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
