<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>CRUD de Contatos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            padding-top: 70px;
        }
        .clicavel {
            cursor: pointer;
        }
        .panel-heading span {
            margin-top: -1em;
            font-size: 15px;
        }
    </style>

    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
    <?php require(__DIR__ . '/header.php') ?>
    <?php echo $conteudo; ?>
    <?php require(__DIR__ . '/footer.php') ?>
    <script src="/js/all.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dados_body, #dados_footer').slideUp();
        });
        $(document).on('click', '.panel-heading span.clicavel', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body, .panel-footer').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            } else {
                $this.parents('.panel').find('.panel-body, .panel-footer').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
        })
    </script>
    <?php echo $js_especifico; ?>
</body>
</html>