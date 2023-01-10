<?php
function formValue(string $name): string {
    return htmlspecialchars($GLOBALS[$name] ?? '');
}
function isValid(string $name): bool {
    if (empty($_POST)) {
        return false;
    }
    return !empty($GLOBALS[$name] ?? '');
}
function isValidClass(string $name): string {
    if (empty($_POST)) {
        return '';
    }
    return isValid($name) ? ' is-valid' : ' is-invalid';
}
$GLOBALS['validationServer01'] = $_POST['validationServer01'] ?? 'Mark';
$GLOBALS['validationServer02'] = $_POST['validationServer02'] ?? 'Otto';
$GLOBALS['validationServerUsername'] = $_POST['validationServerUsername'] ?? 'motto';
$GLOBALS['validationServer03'] = $_POST['validationServer03'] ?? '';
$GLOBALS['validationServer04'] = $_POST['validationServer04'] ?? 'Metropolis';
$GLOBALS['invalidCheck'] = $_POST['invalidCheck'] ?? '';
?>
<form class="row g-3" action="/t3see-2022-01/topwire/demo/frames.php#contact-form" method="post">
    <div class="col-md-4">
        <label for="validationServer01" class="form-label">First name</label>
        <input type="text" class="form-control<?= isValidClass('validationServer01') ?>" id="validationServer01" name="validationServer01" value="<?= formValue('validationServer01') ?>" required="">
        <?php if (isValid('validationServer01')): ?>
            <div class="valid-feedback">
                Looks good!
            </div>
        <?php else: ?>
            <div class="invalid-feedback">
                Please enter your First name.
            </div>
        <?php endif ?>
    </div>
    <div class="col-md-4">
        <label for="validationServer02" class="form-label">Last name</label>
        <input type="text" class="form-control<?= isValidClass('validationServer02') ?>" id="validationServer02" name="validationServer02" value="<?= formValue('validationServer02') ?>" required="">
        <?php if (isValid('validationServer02')): ?>
            <div class="valid-feedback">
                Looks good!
            </div>
        <?php else: ?>
            <div class="invalid-feedback">
                Please enter your Last name.
            </div>
        <?php endif ?>
    </div>
    <div class="col-md-4">
        <label for="validationServerUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input type="text" class="form-control<?= isValidClass('validationServerUsername') ?>" value="<?= formValue('validationServerUsername') ?>" name="validationServerUsername" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="">
            <?php if (isValid('validationServerUsername')): ?>
                <div class="valid-feedback">
                    Looks good!
                </div>
            <?php else: ?>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationServer03" class="form-label">Zip</label>
        <input type="text" class="form-control<?= isValidClass('validationServer03') ?>" id="validationServer03" name="validationServer03" value="<?= formValue('validationServer03') ?>">
        <?php if (isValid('validationServer03')): ?>
            <div class="valid-feedback">
                Looks good!
            </div>
        <?php else: ?>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        <?php endif ?>
    </div>
    <div class="col-md-8">
        <label for="validationServer04" class="form-label">City</label>
        <input type="text" class="form-control<?= isValidClass('validationServer04') ?>" name="validationServer04" id="validationServer04" value="<?= formValue('validationServer04') ?>" required="">
        <?php if (isValid('validationServer03')): ?>
            <div class="valid-feedback">
                Looks good!
            </div>
        <?php else: ?>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        <?php endif ?>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input<?= isValidClass('invalidCheck') ?>" type="checkbox" value="checked" name="invalidCheck" id="invalidCheck" <?php echo (formValue('invalidCheck') ? 'checked' : '') ?> >
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <?php if (!isValid('invalidCheck')): ?>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
