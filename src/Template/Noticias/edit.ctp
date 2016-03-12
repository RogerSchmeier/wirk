<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $noticia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galerias'), ['controller' => 'Galerias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeria'), ['controller' => 'Galerias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="noticias form large-9 medium-8 columns content">
    <?= $this->Form->create($noticia) ?>
    <fieldset>
        <legend><?= __('Edit Noticia') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('subtitulo');
            echo $this->Form->input('texto');
            echo $this->Form->input('galeria_id', ['options' => $galerias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
