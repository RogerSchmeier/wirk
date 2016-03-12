<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galeria'), ['action' => 'edit', $galeria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galeria'), ['action' => 'delete', $galeria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galerias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galeria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galerias Img'), ['controller' => 'GaleriasImg', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galerias Img'), ['controller' => 'GaleriasImg', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galerias view large-9 medium-8 columns content">
    <h3><?= h($galeria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($galeria->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($galeria->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Galerias Img') ?></h4>
        <?php if (!empty($galeria->galerias_img)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Foto') ?></th>
                <th><?= __('Galeria Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($galeria->galerias_img as $galeriasImg): ?>
            <tr>
                <td><?= h($galeriasImg->id) ?></td>
                <td><?= h($galeriasImg->foto) ?></td>
                <td><?= h($galeriasImg->galeria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GaleriasImg', 'action' => 'view', $galeriasImg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GaleriasImg', 'action' => 'edit', $galeriasImg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GaleriasImg', 'action' => 'delete', $galeriasImg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeriasImg->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Noticias') ?></h4>
        <?php if (!empty($galeria->noticias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Subtitulo') ?></th>
                <th><?= __('Texto') ?></th>
                <th><?= __('Galeria Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($galeria->noticias as $noticias): ?>
            <tr>
                <td><?= h($noticias->id) ?></td>
                <td><?= h($noticias->titulo) ?></td>
                <td><?= h($noticias->subtitulo) ?></td>
                <td><?= h($noticias->texto) ?></td>
                <td><?= h($noticias->galeria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Noticias', 'action' => 'view', $noticias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Noticias', 'action' => 'edit', $noticias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Noticias', 'action' => 'delete', $noticias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Produtos') ?></h4>
        <?php if (!empty($galeria->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Categoria') ?></th>
                <th><?= __('Referencia') ?></th>
                <th><?= __('Galeria Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($galeria->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->nome) ?></td>
                <td><?= h($produtos->categoria) ?></td>
                <td><?= h($produtos->referencia) ?></td>
                <td><?= h($produtos->galeria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
