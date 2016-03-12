<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galerias Img'), ['action' => 'edit', $galeriasImg->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galerias Img'), ['action' => 'delete', $galeriasImg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeriasImg->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galerias Imgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galerias Img'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galerias'), ['controller' => 'Galerias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galeria'), ['controller' => 'Galerias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galeriasImgs view large-9 medium-8 columns content">
    <h3><?= h($galeriasImg->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Foto') ?></th>
            <td><?= h($galeriasImg->foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Galeria') ?></th>
            <td><?= $galeriasImg->has('galeria') ? $this->Html->link($galeriasImg->galeria->id, ['controller' => 'Galerias', 'action' => 'view', $galeriasImg->galeria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($galeriasImg->id) ?></td>
        </tr>
    </table>
</div>
