<?php
$titulo = 'Contatos';

$conteudo = '
    <div class="container" ng-app="mainApp" ng-controller="mainCtrl">
        ' .file_get_contents(__DIR__ . "/lista.php"). '
        ' .file_get_contents(__DIR__ . "/form.php"). '
        ' .file_get_contents(__DIR__ . "/modal.php"). '
    </div>
';

$js_especifico = '
    <script src="/js/contatos.js" type="text/javascript"></script>
';
require(__DIR__ . '/../layouts/main.php');