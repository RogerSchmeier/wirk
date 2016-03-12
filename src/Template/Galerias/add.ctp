<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galerias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galerias Img'), ['controller' => 'GaleriasImg', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galerias Img'), ['controller' => 'GaleriasImg', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galerias form large-9 medium-8 columns content">
    <?= $this->Form->create($galeria) ?>
    <fieldset>
        <legend><?= __('Add Galeria') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
