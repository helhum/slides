<turbo-stream action="append" target="todo-list">
    <template>
        <?= renderPartial('todo/item', ['item' => $item]) ?>
    </template>
</turbo-stream>
<turbo-stream action="replace" target="new-todo">
    <template>
        <turbo-frame id="new-todo">
            <?= renderPartial('todo/action-form') ?>
        </turbo-frame>
    </template>
</turbo-stream>
