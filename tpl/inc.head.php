  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <?php foreach($config->metadata as $meta_key => $meta_value): ?>
    <?php if(isset($meta_value) && !empty($meta_value)): ?>
    <meta name="<?php echo $meta_key; ?>" content="<?php echo $meta_value; ?>">
    <?php endif; ?>
    <?php endforeach; ?>    
    
    <?php include('tpl/inc.head.favicon.php'); ?>
    
    <title><?php echo $config->title; ?></title>

    <!-- Core CSS -->
    <link href="style.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    