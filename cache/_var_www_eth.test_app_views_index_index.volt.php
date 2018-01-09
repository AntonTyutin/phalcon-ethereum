<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Phalcon PHP Framework</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
    <?php $v37051108462770192611iterated = false; ?><?php $v37051108462770192611iterator = $accounts; $v37051108462770192611incr = 0; $v37051108462770192611loop = new stdClass(); $v37051108462770192611loop->self = &$v37051108462770192611loop; $v37051108462770192611loop->length = count($v37051108462770192611iterator); $v37051108462770192611loop->index = 1; $v37051108462770192611loop->index0 = 1; $v37051108462770192611loop->revindex = $v37051108462770192611loop->length; $v37051108462770192611loop->revindex0 = $v37051108462770192611loop->length - 1; ?><?php foreach ($v37051108462770192611iterator as $account) { ?><?php $v37051108462770192611loop->first = ($v37051108462770192611incr == 0); $v37051108462770192611loop->index = $v37051108462770192611incr + 1; $v37051108462770192611loop->index0 = $v37051108462770192611incr; $v37051108462770192611loop->revindex = $v37051108462770192611loop->length - $v37051108462770192611incr; $v37051108462770192611loop->revindex0 = $v37051108462770192611loop->length - ($v37051108462770192611incr + 1); $v37051108462770192611loop->last = ($v37051108462770192611incr == ($v37051108462770192611loop->length - 1)); ?><?php $v37051108462770192611iterated = true; ?>
        <div>Аккаунт № <?= $v37051108462770192611loop->index ?>: <?= $account ?></div>
    <?php $v37051108462770192611incr++; } if (!$v37051108462770192611iterated) { ?>
        <div>Аккаунтов не найдено.</div>
    <?php } ?>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
