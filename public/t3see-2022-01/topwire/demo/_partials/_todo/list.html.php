<ul id="todo-list">
    <?php foreach ($GLOBALS['todos'] as $item): ?>
        <?= renderPartial('todo/item', ['item' => $item]) ?>
    <?php endforeach; ?>
</ul>
