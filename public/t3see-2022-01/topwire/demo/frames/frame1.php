<?php include __DIR__ . '/../_partials/_header.html.php' ?>

<div class="container">
    <h1>Frames</h1>
    <turbo-frame id="frame1">
        <p class="lead">
            This is the <mark>first</mark> frame
        </p>
        <p>
            Sit viverra primis imperdiet orci habitasse sed
        </p>
        <p>
            This will lead to the <a href="/t3see-2022-01/topwire/demo/frames.php">Overview</a>,
            This will lead to the <a href="/t3see-2022-01/topwire/demo/frames/frame3.php" data-turbo-frame="frame3">third frame</a>.
            Go <a href="/t3see-2022-01/topwire/demo/">Home</a>.
        </p>
        </p>
    </turbo-frame>
    <p>
        <a href="/t3see-2022-01/topwire/demo/frames.php#frame1" class="btn btn-primary">Back</a>
    </p>
</div>


<?php include __DIR__ . '/../_partials/_footer.html.php' ?>
