<?php include __DIR__ . '/_controller/todo.php' ?>
<?php include __DIR__ . '/_partials/_header.html.php' ?>

<div class="container">
    <h1>Create new todo</h1>
    <turbo-frame id="new-todo">
        <?= renderPartial('todo/item-form') ?>
    </turbo-frame>
</div>

<?php include __DIR__ . '/_partials/_footer.html.php' ?>
