<?php
session_start();
require_once "model/CoreModel.php";
$profile = CoreModel::getDjProfileById($_GET['id'])->fetchAll();
$profile = $profile[0];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/metro-bootstrap.css">
    <link rel="stylesheet" href="../css/iconFont.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/metro.min.js"></script>
    <title>911Shooter.Com</title>
</head>
<style>
    .shadow {
        -moz-box-shadow:    inset 0 0 10px #ffffff;
        -webkit-box-shadow: inset 0 0 10px #ffffff;
        box-shadow:         inset 0 0 10px #ffffff;
    }
</style>
<body class="metro" style="background: url(../images/binding_dark.png) top left repeat;">
<?php
include "header.php";
?>
<div>
    <div style="color: #f5f5f5;">
        <div class="container" style="padding-top: 36px;">
            <div style="width: 960px;padding-top: 40px;">
                <div style="width: 240px;height:300px;display: inline-block;"><img src="../pictures/korn.jpg" style="width: 240px;height:300px;border-radius: 6px;" class="shadow"/> </div>
                <div style="display: inline-block;width: 700px;vertical-align: top;padding-left: 20px; ">
                    <div style="border-bottom: solid 1px; #ff0000;padding-bottom: 8px;margin-bottom: 10px;" ><span style="text-shadow: 4px 4px 2px rgba(150, 150, 150, 1);font-size: 26px;"><?php echo $profile['display_name']; ?></span> <a title="facebook" href="<?php echo $profile['fb']; ?>" target="_blank" style="padding-left: 15px;line-height: 15px;color: inherit;font-family: 'Segoe UI Light_', 'Open Sans Light', Verdana, Arial, Helvetica, sans-serif;font-size: 26px;"><span class="icon-facebook"></span></a> <a title="instagram" href="<?php echo $profile['ig']; ?>" target="_blank" style="padding-left: 15px;line-height: 15px;color: inherit;font-family: 'Segoe UI Light_', 'Open Sans Light', Verdana, Arial, Helvetica, sans-serif;font-size: 26px;"><span class="icon-instagram"></span></a> <a title="twitter" href="<?php echo $profile['tw']; ?>" target="_blank" style="padding-left: 20px;line-height: 15px;color: inherit;font-family: 'Segoe UI Light_', 'Open Sans Light', Verdana, Arial, Helvetica, sans-serif;font-size: 26px;"><span class="icon-twitter"></span></a></div>
                    <div><?php echo htmlspecialchars($profile['profile']); ?></div>
                </div>
            </div>
        </div>
    </div>

<div class="container" style="padding: 10px 0;">
    <div style="padding-top: 10px;">
        <h2><span class=" icon-github-4"></span> Contact</h2>
        <hr/>
    </div>
    <div class="grid no-margin">
        <div class="row no-margin">
            <div class="span3 padding10">
                <img src="http://placehold.it/500x300" alt="" class="logo">
            </div>
            <div class="span6 padding10">
                <h3 class="fg-white">911Shooter Contact</h3>
                <p class="fg-white">bla bla bla</p>
            </div>
            <div class="span3 padding10">
                <a class="button danger " style="width: 100%; margin-bottom: 5px" href="#">test@911shooter.com</a>
                <a class="button success " style="width: 100%; margin-bottom: 5px" href="#">Tel : 0101001101</a>
                <a class="button info " style="width: 100%; margin-bottom: 5px" href="#">Facebook</a>
                <a class="button warning " style="width: 100%; margin-bottom: 5px;" href="#">bla bla bla</a>
            </div>
        </div>
    </div>
</div>
<div class="container tertiary-text bg-dark fg-white" style="padding: 10px">
    2012-2013, Copyright 911Shooter.com
</div>
</div>


</body>
</html>