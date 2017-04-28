<?php
$titulo = 'Contatos';

$conteudo = '
    <div class="container">
        ' .file_get_contents(__DIR__ . "/lista.php"). '
        ' .file_get_contents(__DIR__ . "/form.php"). '
    </div>
';

$js_especifico = '
    <script></script>
';
require(__DIR__ . '/../layouts/main.php');