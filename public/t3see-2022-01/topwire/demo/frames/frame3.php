<?php include __DIR__ . '/../_partials/_header.html.php' ?>

<div class="container">
    <h1>Frames</h1>
    <turbo-frame id="frame3">
        <p class="lead">
            This is a <mark>third</mark> frame
        </p>
        <p>
            Eleifend nascetur libero tortor iaculis magnis mattis
        </p>
        <p>
            This will lead to the <a href="/t3see-2022-01/topwire/demo/frames.php">Overview</a>,
            This will lead to the <a href="/t3see-2022-01/topwire/demo/frames/frame2.php" data-turbo-frame="frame2">second frame</a>.
            Go <a href="/t3see-2022-01/topwire/demo/">Home</a>.
        </p>
    </turbo-frame>
    <p>
        <a href="/t3see-2022-01/topwire/demo/frames.php#frame3" class="btn btn-primary">Back</a>
    </p>
</div>


<?php include __DIR__ . '/../_partials/_footer.html.php' ?>
