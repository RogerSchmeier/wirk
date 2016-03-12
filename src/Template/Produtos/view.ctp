<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galerias'), ['controller' => 'Galerias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galeria'), ['controller' => 'Galerias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= h($produto->categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Referencia') ?></th>
            <td><?= h($produto->referencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Galeria') ?></th>
            <td><?= $produto->has('galeria') ? $this->Html->link($produto->galeria->id, ['controller' => 'Galerias', 'action' => 'view', $produto->galeria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
    </table>
</div>
