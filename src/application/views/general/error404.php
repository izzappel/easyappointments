<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#35A768">
    <title><?= lang('page_not_found') . ' - ' . $company_name ?></title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset_url('assets/img/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset_url('assets/img/favicon-16x16.png') ?>">

    <script>
        var EALang = <?= json_encode($this->lang->language) ?>;
    </script>

    <script src="<?= asset_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/datejs/date.js') ?>"></script>
    <script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>

    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: table-cell;
            vertical-align: middle;
            background-color: #CAEDF3;
        }

        #message-frame {
            width: 630px;
            margin: auto;
            background: #FFF;
            border: 1px solid #DDDADA;
            padding: 70px;
        }

        .btn {
            margin-right: 10px;
        }

        @media(max-width: 640px) {
            body {
                display: block;
            }

            #message-frame {
                width: 100%;
                height: 100%;
                padding: 20px;
            }

            .btn {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div id="message-frame" class="frame-container">
        <h3><?= lang('page_not_found')
                . ' - ' . lang('error') . ' 404' ?></h3>
        <p>
            <?= lang('page_not_found_message') ?>
        </p>

        <br>

        <a href="<?= site_url() ?>" class="btn btn-primary btn-large">
            <span class="glyphicon glyphicon-calendar"></span>
            <?= lang('book_appointment_title') ?>
        </a>

        <a href="<?= site_url('backend') ?>" class="btn btn-default btn-large">
            <span class="glyphicon glyphicon-wrench"></span>
            <?= lang('backend_section') ?>
        </a>
    </div>

    <?php google_analytics_script() ?>
</body>
</html>
