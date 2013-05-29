<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Server Status &middot; <?=$getStuff['hostname']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="js/jquery.keymapper.js"></script>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Server Status for <?=$getStuff['hostname']?></h3>
      </div>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>It's <?=ucwords($statusMessage)?></h1>

        <?php if ($statusMessage == "online") { ?>
        <p class="lead"><?=$onlineMessage?></p>
        <a class="btn btn-large btn-success" href="#" onClick="window.location.reload()"><?=$onlineReload?></a><br /><br />
        <iframe src="http://ghbtns.com/github-btn.html?user=tlongren&repo=vps-status&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe> <iframe src="http://ghbtns.com/github-btn.html?user=tlongren&repo=vps-status&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe><br /><br />
        <a href="http://twitter.com/home?status=Currently reading: <?=$theShortURL?>" class="button twitter">Share on <span class="icon-twitter"></span></a>
        <a href="https://plus.google.com/share?url=<?=$theShortURL?>" class="button google-plus">Share on <span class="icon-google-plus"></span></a>
        <?php } else { ?>
        <p class="lead"><?=$offlineMessage?></p>
        <a class="btn btn-large btn-warning" href="#" onClick="window.location.reload()"><?=$offlineReload?></a>
        <?php } ?>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Disk (<?=$diskPercent?>%)</h2>
          <div class="progress progress-striped">
            <div class="bar" style="width: <?=$diskPercent?>%;"></div>
          </div>
          <p><span class="label label-inverse">Disk Total: <?=$totalDisk?></span></p>
          <p><span class="label label-inverse">Disk Used: <?=$usedDisk?></span></p>
          <p><span class="label label-inverse">Disk Available: <?=$availDisk?></span></p>
        </div>
        <div class="span4">
          <h2>RAM (<?=$memPercent?>%)</h2>
          <div class="progress progress-info progress-striped">
            <div class="bar" style="width: <?=$memPercent?>%;"></div>
          </div>
          <p><span class="label label-info">RAM Total: <?=$totalMem?></span></p>
          <p><span class="label label-info">RAM Used: <?=$usedMem?></span></p>
          <p><span class="label label-info">RAM Available: <?=$availMem?></span></p>
       </div>
        <div class="span4">
          <h2>Bandwidth (<?=$bwPercent?>%)</h2>
          <div class="progress progress-danger progress-striped">
            <div class="bar" style="width: <?=$bwPercent?>%;"></div>
          </div>
          <p><span class="label label-important">Bandwidth Total: <?=$totalBW?></span></p>
          <p><span class="label label-important">Bandwidth Used: <?=$usedBW?></span></p>
          <p><span class="label label-important">Bandwidth Available: <?=$availBW?></span></p>
        </div>
      </div>
      <hr>
      <div class="footer">
        <p>Made by <a href="http://www.longren.org/" target="_blank">Tyler Longren</a> with <a href="http://twitter.github.io/bootstrap/" target="_blank">Twitter Bootstrap</a> and <a href="http://news.bootswatch.com/post/50569764478/flatly-a-flat-theme-by-jenil-gogari" target="_blank">Flatly Bootswatch</a>.</p>
      </div>

    </div> <!-- /container -->
    <script type="text/javascript">
    var _gauges = _gauges || [];
    (function() {
      var t   = document.createElement('script');
      t.type  = 'text/javascript';
      t.async = true;
      t.id    = 'gauges-tracker';
      t.setAttribute('data-site-id', '51a50f86613f5d5819000047');
      t.src = '//secure.gaug.es/track.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(t, s);
    })();
    </script>
    <script type="text/javascript">
    $('body').keymapper({
      keys: 'r',
      callback: function() { window.location.reload(); }
    });
    </script>
  </body>
</html>
