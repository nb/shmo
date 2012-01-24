<?php
    require dirname( __FILE__ ) . '/shmo.php';
    $shmo = new SHMO;
    $meaning = $shmo->generate('shuffle');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>SHMO generator</title>
    <style type="text/css" media="screen">
        * {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            text-shadow: 1px 1px #ccc;
        }
        body {
            text-align: center;
            padding: 50px;
        }
        h1 {
            margin: 50px;
            color: #00C993;
        }
        h2 {
            font-size: 45px;
        }
        h3 {
            margin: 50px;
        }
        acronym {
            cursor:help;
            border-bottom: 1px dotted;
        }
        input {
            width: 300px;
        }
        a {
            color: #00B27A;
        }
        h3 a {
            color: #00B27A;
        }
        p, p a {
            font-size: 0.9em;
            text-shadow: 0px 0px #ccc;
            font-weight: normal;
        }
        p {
            color: #555;
        }
    </style>
</head>
<body id="shmo">
    <h1><acronym title="SHMO Happiness Massive Obliterator">SHMO</acronym></h1>
    <h2><?php echo $meaning; ?></h2>
    <h3><a href="javascript:window.location.reload();">Get a fresh one</a></h3>
    <p>2012 &bull; Nikolay Bachiyski &bull; <a href="http://github.com/nb/shmo/">github</a></p>
</body>
</html>