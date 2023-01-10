<?php

function renderPartial(string $name, array $vars = []): string {
    ob_start();
    foreach ($vars as $varName => $value) {
        $$varName = $value;
    }
    include __DIR__ . '/../_partials/_' . $name . '.html.php';
    return ob_get_clean();
}
