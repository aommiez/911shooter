<?php
session_start();
require_once "model/CoreModel.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/metro-bootstrap.css">
    <link rel="stylesheet" href="css/iconFont.min.css">
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metro.min.js"></script>
    <title>911Shooter.Com</title>
</head>
<body class="metro" style="background: url(images/binding_dark.png) top left repeat;">
<?php
include "header.php";
?>
<div>
    <div style="background: url(http://metroui.org.ua/images/b1.jpg) top left no-repeat; background-size: cover; height: 300px;">
        <div class="container" style="padding: 50px 20px">
            <h1 class="fg-white">911Shooter.Com</h1>
            <h2 class="fg-white">
                bla bla bla<br> bla bla bla
            </h2>

            <a href="http://cdn.th.garenanow.com/talktalk/installer/TalkTalk_FullInstall_th.exe" class="place-left button bg-darkBlue bg-hover-lightBlue fg-white fg-hover-white bd-lightBlue" style="margin-top: 10px">
                <h3 style="margin: 10px 40px">Download TalkTalk<span class="icon-download-2 on-right"></span></h3>
            </a>
        </div>
    </div>


    <div class="container" style="padding-top: 10px;">
        <div style="padding-top: 10px;">
            <h2><span class="icon-comments"></span> News</h2>
            <hr/>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="http://placehold.it/500x300" class="img-responsive" />

                    </div>
                    <div class="content">
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div style="float: right;">
                            <a href="#" class="btn ">Read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="http://placehold.it/500x300" class="img-responsive" />

                    </div>
                    <div class="content">
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div style="float: right;">
                            <a href="#" class="btn ">Read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="http://placehold.it/500x300" class="img-responsive" />

                    </div>
                    <div class="content">
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div style="float: right;">
                            <a href="#" class="btn ">Read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .post
        {
            background-color: #FFF;
            overflow: hidden;
            box-shadow: 0 0 1px #CCC;
        }

        .post .content
        {
            padding: 15px;
        }
        .post .author
        {
            font-size: 11px;
            color: #737373;
            padding: 25px 30px 20px;
        }
        .post .post-img-content
        {
            height: 196px;
            position: relative;
        }
        .post .post-img-content img
        {
            position: absolute;
        }
        .post .post-title
        {
            display: table-cell;
            vertical-align: bottom;
            z-index: 2;
            position: relative;
        }
        .post .post-title b
        {
            background-color: rgba(51, 51, 51, 0.58);
            display: inline-block;
            margin-bottom: 5px;
            color: #FFF;
            padding: 10px 15px;
            margin-top: 5px;
        }
        .carousel-control.left,.carousel-control.right  {background:none;width:25px;}
        .carousel-control.left {left:-25px;top: 50%;}
        .carousel-control.right {right:-25px;top: 50%}
        .broun-block {
            padding-bottom: 34px;
        }
        .block-text {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 3px 0 #2c2222;
            color: #626262;
            font-size: 14px;
            margin-top: 27px;
            padding: 15px 18px;
        }
        .block-text a {
            color: #7d4702;
            font-size: 25px;
            font-weight: bold;
            line-height: 21px;
            text-decoration: none;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }
        .mark {
            padding: 12px 0;background:none;
        }
        .block-text p {
            color: #585858;
            font-family: Georgia;
            font-style: italic;
            line-height: 20px;
        }
        .sprite {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAeUCAYAAAAU3UTMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY1MzJERUNDRjBEMTExRTM4N0ZFOUUyNENEOTZCNjVCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY1MzJERUNERjBEMTExRTM4N0ZFOUUyNENEOTZCNjVCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjUzMkRFQ0FGMEQxMTFFMzg3RkU5RTI0Q0Q5NkI2NUIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjUzMkRFQ0JGMEQxMTFFMzg3RkU5RTI0Q0Q5NkI2NUIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4/ZdnrAAAydElEQVR42uydCbgUxbn3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');
        }
        .sprite-i-triangle {
            background-position: 0 -1298px;
            height: 44px;
            width: 50px;
        }
        .block-text ins {
            bottom: -44px;
            left: 50%;
            margin-left: -60px;
        }


        .block {
            display: block;
        }
        .zmin {
            z-index: 1;
        }
        .ab {
            position: absolute;
        }

        .person-text {
            padding: 10px 0 0;
            text-align: center;
            z-index: 2;
        }
        .person-text a {
            color: #ffcc00;
            display: block;
            font-size: 14px;
            margin-top: 3px;
            text-decoration: underline;
        }
        .person-text i {
            color: #fff;
            font-family: Georgia;
            font-size: 13px;
        }
        .rel {
            position: relative;
        }


        .mt40 { margin-top: 40px; }

        .panel { position: relative; overflow: hidden; display: block; border-radius: 0 !important;  }
        .panel-default { border-color: #ebedef !important; }
        .panel .panel-body { position: relative; padding: 0 !important; overflow: hidden; height: auto; }
        .panel .panel-body a { overflow: hidden; }
        .panel .panel-body a img { display: block; margin: 0; width: 100%; height: auto;
            transition: all 0.5s;
            -moz-transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
        }
        .panel .panel-body a.zoom:hover img { transform: scale(1.3); -ms-transform: scale(1.3); -webkit-transform: scale(1.3); -o-transform: scale(1.3); -moz-transform: scale(1.3); }
        .panel .panel-body a.zoom span.overlay { position: absolute; top: 0; left: 0; visibility: hidden; height: 100%; width: 100%; background-color: #000; opacity: 0;
            transition: opacity .25s ease-out;
            -moz-transition: opacity .25s ease-out;
            -webkit-transition: opacity .25s ease-out;
            -o-transition: opacity .25s ease-out;
        }
        .panel .panel-body a.zoom:hover span.overlay { display: block; visibility: visible; opacity: 0.55; -moz-opacity: 0.55; -webkit-opacity: 0.55; filter: alpha(opacity=65); -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=65)"; }
        .panel .panel-body a.zoom:hover span.overlay i { position: absolute; top: 45%; left: 0%; width: 100%; font-size: 2.25em; color: #fff !important; text-align: center;
            opacity: 1;
            -moz-opacity: 1;
            -webkit-opacity: 1;
            filter: alpha(opacity=1);
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
        }
        .panel .panel-footer { padding: 8px !important; background-color: #f9f9f9 !important; border-bottom-right-radius: 0 !important; border-bottom-left-radius: 0 !important; }
        .panel .panel-footer h4 { display: inline; font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #34495e margin: 0 !important; padding: 0 !important; }
        .panel .panel-footer i.glyphicon { display: inline; font-size: 1.125em; cursor: pointer; }
        .panel .panel-footer i.glyphicon-thumbs-up { color: #1abc9c; }
        .panel .panel-footer i.glyphicon-thumbs-down { color: #e74c3c; padding-left: 5px; }
        .panel .panel-footer div { width: 15px; display: inline; font: 300 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #34495e; text-align: center; background-color: transparent !important; border: none !important; }

    </style>
    <div class=" container">
        <div style="padding-top: 10px;">
        <h2><span class="icon-comments"></span> DJ Talk</h2>
            <hr/>
        </div>
        <div class="carousel-reviews broun-block">
            <div class="container" style="margin-top: -10px;">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ Korn</a>

                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img src="data:image/png;base64,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"/>
                                        <a title="" href="dj/1">DJ Korn</a>
                                        <i>from bla bla bla, BKK</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ Nat</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img src="data:image/png;base64,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"/>
                                        <a title="" href="#">DJ Nat</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ ING</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img src="data:image/png;base64,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"/>
                                        <a title="" href="#">DJ ING</a>
                                        <i>Indonesia</i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ bla bla bla</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="http://myinstantcms.ru/images/img13.png">
                                        <a title="" href="#">Anna</a>
                                        <i>from Glasgow, Scotland</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ bla bla bla</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="http://myinstantcms.ru/images/img14.png">
                                        <a title="" href="#">Ella Mentree</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ bla bla bla</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="http://myinstantcms.ru/images/img15.png">
                                        <a title="" href="#">Rannynm</a>
                                        <i>Indonesia</i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">DJ bla bla bla</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="http://myinstantcms.ru/images/img13.png">
                                        <a title="" href="#">Anna</a>
                                        <i>from Glasgow, Scotland</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">The Purge: Anarchy</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="http://myinstantcms.ru/images/img14.png">
                                        <a title="" href="#">Ella Mentree</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Planes: Fire & Rescue</a>
                                        <div style="padding-top: 14px;"><p>bla bla bla bla bla bla bla bla bla</p></div>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="http://myinstantcms.ru/images/img15.png">
                                        <a title="" href="#">Rannynm</a>
                                        <i>Indonesia</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class=" icon-arrow-left-2"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="icon-arrow-right-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="float: right;">
            <button class="small primary">ดูทั้งหมด</button>
        </div>
    </div>
    <div class=" container "  id="tourpackages-carousel">
        <div style="padding-top: 10px;">
            <h2><span class=" icon-film"></span> Clip</h2>
            <hr/>
        </div>
        <div class="row">

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>ย้อนหลังวันที่ bla bla bla</p>
                        <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>ย้อนหลังวันที่ bla bla bla</p>
                        <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>ย้อนหลังวันที่ bla bla bla</p>
                        <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>ย้อนหลังวันที่ bla bla bla</p>
                        <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
                    </div>
                </div>
            </div>

        </div>
        <div style="float: right;">
            <button class="small primary">ดูทั้งหมด</button>
        </div>
    </div>

    <div class="container mt40">
        <div style="padding-top: 10px;">
            <h2><span class="icon-pictures"></span> Gallery</h2>
            <hr/>
        </div>
        <section class="row">
            <article class="col-xs-12 col-sm-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                            <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                            <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                        </a>
                    </div>
                    <div class="panel-footer">
                        <h4><a href="#" title="Nature Portfolio">bla bla bla 1</a></h4>
                    <span class="pull-right">
                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                    </span>
                    </div>
                </div>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                            <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                            <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                        </a>
                    </div>
                    <div class="panel-footer">
                        <h4><a href="#" title="Food Portfolio">bbb222</a></h4>
                    <span class="pull-right">
                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                    </span>
                    </div>
                </div>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                            <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                            <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                        </a>
                    </div>
                    <div class="panel-footer">
                        <h4><a href="#" title="Sports Portfolio" title="Sports">bbb33</a></h4>
                    <span class="pull-right">
                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                    </span>
                    </div>
                </div>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                            <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                            <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                        </a>
                    </div>
                    <div class="panel-footer">
                        <h4><a href="#" title="People Portfolio">bbb444</a></h4>
                    <span class="pull-right">
                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                    </span>
                    </div>
                </div>
            </article>

        </section>
        <div style="float: right;">
            <button class="small primary">ดูทั้งหมด</button>
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
        2012-2013, copyright 911Shooter.com
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/metro.min.js"></script>

</body>
</html>