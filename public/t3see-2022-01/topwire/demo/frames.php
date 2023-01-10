<?php
if (!empty($_POST) && empty($_POST['invalidCheck'])) {
    header("HTTP/1.1 422 Unprocessable Entity");
}
if (!empty($_POST['invalidCheck'])) {
    header('Location: /t3see-2022-01/topwire/demo/form_thanks.php');
    exit;
}
?>


<?php include __DIR__ . '/_partials/_header.html.php' ?>

<div class="container">
    <h1>Turbo Frames</h1>
    <p class="lead">
        Example how frames work
    </p>
    <p>
        Id nullam senectus parturient sit nisl malesuada, egestas inceptos odio consectetur natoque tempus, laoreet
        tempor curae ultrices a. Nullam magnis lorem nisl faucibus sagittis scelerisque consequat feugiat a libero,
        curae pretium in adipiscing amet elementum egestas mollis. Mi facilisi torquent condimentum sollicitudin aliquet
        iaculis ultrices dictum ullamcorper, nunc viverra consectetur faucibus at nam justo habitant.
    </p>
    <p>
        Eleifend ornare facilisis mus ipsum pulvinar ante natoque lacinia senectus, vehicula fusce elit laoreet erat
        etiam euismod consectetur, vestibulum sociosqu ridiculus luctus aptent montes id cras. Neque placerat ante
        egestas malesuada viverra parturient nam, tempus duis tellus elementum mauris lorem cursus, ornare convallis
        risus erat leo magna. Ac nam semper eget rutrum parturient mauris dictum purus suspendisse sollicitudin aliquet
        ullamcorper, morbi suscipit a per in cursus elementum turpis netus iaculis penatibus, himenaeos risus sociosqu
        conubia aptent adipiscing convallis fames imperdiet nec ad.
    </p>
    <div class="card mb-4">
        <div class="card-body">
            <h2>Frame 1</h2>
            <turbo-frame id="frame1">
                <p class="lead">
                    Introduction to frames
                </p>
                <p>
                    Senectus laoreet cursus fermentum conubia adipiscing lobortis
                </p>
                <p>
                    This will lead to the <a href="/t3see-2022-01/topwire/demo/frames/frame1.php">first frame</a>.
                </p>
            </turbo-frame>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <h2>Frame 2</h2>
            <turbo-frame id="frame2">
                <p class="lead">
                    Introduction to frames
                </p>
                <p>
                    Viverra adipiscing habitant sem dictum facilisis praesent
                </p>
                <p>
                    This will lead to the <a href="/t3see-2022-01/topwire/demo/frames/frame2.php">second frame</a>.
                </p>
            </turbo-frame>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <h2>And yet another one</h2>
            <turbo-frame id="frame3">
                <p class="lead">
                    Introduction to frames
                </p>
                <p>
                    Mauris ultricies scelerisque vel nisi dictumst dis
                </p>
                <p>
                    This will lead to a <a href="/t3see-2022-01/topwire/demo/frames/frame3.php">third frame</a>.
                </p>
            </turbo-frame>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <turbo-frame id="contact-form">
                <h5>Contact form</h5>
                <?= renderPartial('form') ?>
            </turbo-frame>
        </div>
    </div>
    <h3>Some sub-section</h3>
    <p>
        Taciti condimentum sociosqu est fringilla nulla magna massa imperdiet hac viverra ornare, gravida auctor
        parturient dictum molestie cursus quam lobortis rhoncus arcu, mus etiam felis ullamcorper eu cum inceptos lectus
        sagittis nascetur. Aenean sapien condimentum purus dictum sit torquent dis rutrum ridiculus netus, dictumst
        bibendum dui hac cras eget vel et ligula tristique malesuada, justo imperdiet eu donec vivamus elementum turpis
        in posuere. Primis magna cubilia vehicula eros curae ridiculus adipiscing, consectetur litora aptent vel egestas
        venenatis euismod quisque, nam praesent a urna porttitor dapibus.
    </p>
</div>


<?php include __DIR__ . '/_partials/_footer.html.php' ?>
