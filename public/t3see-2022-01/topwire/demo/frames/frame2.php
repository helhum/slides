<?php include __DIR__ . '/../_partials/_header.html.php' ?>

<div class="container">
    <h1>Frames</h1>
    <turbo-frame id="frame2">
        <p class="lead">
            This is the <mark>second</mark> frame
        </p>
        <p>
            Massa euismod natoque ultricies dictumst nam volutpat
        </p>
        <p>
            This will lead to the <a href="/t3see-2022-01/topwire/demo/frames.php">Overview</a>,
            This will lead to the <a href="/t3see-2022-01/topwire/demo/frames/frame1.php" data-turbo-frame="frame1">first frame</a>.
            Go <a href="/t3see-2022-01/topwire/demo/">Home</a>.
        </p>
    </turbo-frame>
    <p>
        <a href="/t3see-2022-01/topwire/demo/frames.php#frame2" class="btn btn-primary">Back</a>
    </p>
</div>


<?php include __DIR__ . '/../_partials/_footer.html.php' ?>
