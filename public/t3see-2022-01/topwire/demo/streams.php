<?php include __DIR__ . '/_controller/todo.php' ?>
<?php include __DIR__ . '/_partials/_header.html.php' ?>
<div class="container">
    <h1>Turbo Streams</h1>
    <p class="lead">
        The inevitable todo list example
    </p>
    <?= renderPartial('todo/list') ?>
    <turbo-frame id="new-todo">
        <?= renderPartial('todo/action-form') ?>
    </turbo-frame>
</div>

<?php include __DIR__ . '/_partials/_footer.html.php' ?>
