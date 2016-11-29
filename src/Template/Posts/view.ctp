<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $post->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuarios') ?></th>
            <td><?= h($post->Usuarios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($post->Nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ApellidoP') ?></th>
            <td><?= h($post->ApellidoP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ApellidoM') ?></th>
            <td><?= h($post->ApellidoM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($post->ID) ?></td>
        </tr>
    </table>
</div>
