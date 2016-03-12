<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galerias Imgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galerias'), ['controller' => 'Galerias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeria'), ['controller' => 'Galerias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galeriasImgs form large-9 medium-8 columns content">
    <?= $this->Form->create($galeriasImg) ?>
    <fieldset>
        <legend><?= __('Add Galerias Img') ?></legend>
        <?php
            echo $this->Form->input('foto');
            echo $this->Form->input('galeria_id', ['options' => $galerias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
