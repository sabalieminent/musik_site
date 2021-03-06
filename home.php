

<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Musik | Web Application</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<script src=”https://apis.google.com/js/platform.js" async defer></script>
<script>
var provider = new firebase.auth.GoogleAuthProvider();
provider.addScope(‘profile’);
provider.addScope(‘email’);
provider.addScope(‘https://www.googleapis.com/auth/plus.me');
firebase.auth().signInWithPopup(provider); // Opens a popup window and returns a promise to handle errors.
</script>


<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
// Initialize Firebase
var config = {
apiKey: "AIzaSyD1dO35J6u1CZWn4dTuo_Gu-NqhOpCNlf0",
authDomain: "musik-site.firebaseapp.com",
databaseURL: "https://musik-site.firebaseio.com",
projectId: "musik-site",
storageBucket: "musik-site.appspot.com",
messagingSenderId: "596601125206"
};
firebase.initializeApp(config);
</script>
</head>

<body class="">
<!-- SECTION -->
<section class="vbox">
<header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
<div class="navbar-header aside bg-info nav-xs">
<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
<i class="icon-list"></i> </a>
<a href="index.html" class="navbar-brand text-lt">
<i class="icon-earphones"></i> <img src="images/logo.png" alt="." class="hide">
<span class="hidden-nav-xs m-l-sm">Musik</span> </a>
<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
<i class="icon-settings"></i> </a>
</div>
<ul class="nav navbar-nav hidden-xs">
<li>
<a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
<i class="fa fa-indent text"></i> <i class="fa fa-dedent text-active"></i> </a>
</li>
</ul>
<form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
<div class="form-group">
<div class="input-group">
<span class="input-group-btn">
<button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
</span>
<input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums..."> </div>
</div>
</form>
<div style="padding-right: 23px;" class="navbar-right">
<h5 style="font-size: 24px; padding-top: 4px;" class="fa fa-upload"></h5>&nbsp;&nbsp;&nbsp;
<a href="#modal-form" class="btn btn-info btn-rounded btn-bg" data-toggle="modal">Log in</a>
</div>
</header>

    <section>
<section class="hbox stretch">
<!-- .aside -->
<aside class="bg-black dk nav-xs aside hidden-print" id="nav">
    <section class="vbox">
        <section class="w-f-md scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <ul class="nav bg clearfix">
                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Discover </li>
                        <li>
                            <a href="index.html"> <i class="icon-disc icon text-success"></i> <span class="font-bold">What's new</span> </a>
                        </li>
                        <li>
                            <a href="genres.html"> <i class="icon-music-tone-alt icon text-info"></i> <span class="font-bold">Genres</span> </a>
                        </li>
                        <li>
                            <a href="events.html"> <i class="icon-drawer icon text-primary-lter"></i> <b class="badge bg-primary pull-right">6</b> <span class="font-bold">Events</span> </a>
                        </li>
                        <li>
                            <a href="listen.html"> <i class="icon-list icon text-info-dker"></i> <span class="font-bold">Listen</span> </a>
                        </li>
                        <li>
                            <a href="video.html" data-target="#content" data-el="#bjax-el" data-replace="true"> <i class="icon-social-youtube icon text-primary"></i> <span class="font-bold">Video</span> </a>
                        </li>
                        <li class="m-b hidden-nav-xs"></li>
                    </ul>
                    <ul class="nav" data-ride="collapse">
                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Interface </li>
                        <li>
                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-screen-desktop icon"> </i> <span>Layouts</span> </a>
                            <ul class="nav dk text-sm">
                                <li>
                                    <a href="layout-color.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Color option</span> </a>
                                </li>
                                <li>
                                    <a href="layout-boxed.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Boxed layout</span> </a>
                                </li>
                                <li>
                                    <a href="layout-fluid.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Fluid layout</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-chemistry icon"> </i> <span>UI Kit</span> </a>
                            <ul class="nav dk text-sm">
                                <li>
                                    <a href="buttons.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Buttons</span> </a>
                                </li>
                                <li>
                                    <a href="icons.html" class="auto"> <b class="badge bg-info pull-right">369</b> <i class="fa fa-angle-right text-xs"></i> <span>Icons</span> </a>
                                </li>
                                <li>
                                    <a href="grid.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Grid</span> </a>
                                </li>
                                <li>
                                    <a href="widgets.html" class="auto"> <b class="badge bg-dark pull-right">8</b> <i class="fa fa-angle-right text-xs"></i> <span>Widgets</span> </a>
                                </li>
                                <li>
                                    <a href="components.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Components</span> </a>
                                </li>
                                <li>
                                    <a href="list.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>List group</span> </a>
                                </li>
                                <li>
                                    <a href="#table" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="fa fa-angle-right text-xs"></i> <span>Table</span> </a>
                                    <ul class="nav dker">
                                        <li>
                                            <a href="table-static.html"> <i class="fa fa-angle-right"></i> <span>Table static</span> </a>
                                        </li>
                                        <li>
                                            <a href="table-datatable.html"> <i class="fa fa-angle-right"></i> <span>Datatable</span> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>

                                    <a href="#form" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="fa fa-angle-right text-xs"></i> <span>Form</span> </a>
                                    <ul class="nav dker">
                                        <li>
                                            <a href="form-elements.html"> <i class="fa fa-angle-right"></i> <span>Form elements</span> </a>
                                        </li>
                                        <li>
                                            <a href="form-validation.html"> <i class="fa fa-angle-right"></i> <span>Form validation</span> </a>
                                        </li>
                                        <li>
                                            <a href="form-wizard.html"> <i class="fa fa-angle-right"></i> <span>Form wizard</span> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="chart.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Chart</span> </a>
                                </li>
                                <li>
                                    <a href="portlet.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Portlet</span> </a>
                                </li>
                                <li>
                                    <a href="timeline.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Timeline</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-grid icon"> </i> <span>Pages</span> </a>
                            <ul class="nav dk text-sm">
                                <li>
                                    <a href="profile.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Profile</span> </a>
                                </li>
                                <li>
                                    <a href="blog.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Blog</span> </a>
                                </li>
                                <li>
                                    <a href="invoice.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Invoice</span> </a>
                                </li>
                                <li>
                                    <a href="gmap.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Google Map</span> </a>
                                </li>
                                <li>
                                    <a href="jvectormap.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Vector Map</span> </a>
                                </li>
                                <li>
                                    <a href="signin.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Signin</span> </a>
                                </li>
                                <li>
                                    <a href="signup.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Signup</span> </a>
                                </li>
                                <li>
                                    <a href="404.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>404</span> </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav text-sm">
                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> <span class="pull-right"><a href="#"><i class="icon-plus i-lg"></i></a></span> Playlist </li>
                        <li>
                            <a href="#"> <i class="icon-music-tone icon"></i> <span>Hip-Pop</span> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="icon-playlist icon text-success-lter"></i> <b class="badge bg-success dker pull-right">9</b> <span>Jazz</span> </a>
                        </li>
                    </ul>
                </nav>
                <!-- / nav -->
            </div>
        </section>
        <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <div class="bg hidden-xs ">
                <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left m-l-xs"> <img src="images/a3.png" class="dker" alt="..."> <i class="on b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-l"> <strong class="font-bold text-lt">John.Smith</strong> <b class="caret"></b> </span> <span class="text-muted text-xs block m-l">Art Director</span> </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">
                        <li> <span class="arrow bottom hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li>
                            <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                        </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
</aside>
<!-- /.aside -->
<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target"> <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i class="icon-refresh i-lg inline" id="refresh"></i></a>
                    <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span>
                    </h2>
                    <div class="row row-sm">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="bottom"> <span class="badge bg-info m-l-sm m-b-sm">03:20</span></div>
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
<!--
                                        <div class="center text-center m-t-n">
                                        <a href="#" data-toggle="class"> <i class="icon-control-play i-2x text"></i> <i class="icon-control-pause i-2x text-active"></i> </a> </div>
-->
                                        <div class="center text-center m-t-n">
                                            <a href="#" data-toggle="class"> <i class="icon-control-play i-2x text"></i> <i class="icon-control-pause i-2x text-active"></i> </a>
                                        </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p1.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Tempered Song</a> <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a> </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black active">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n">
                                            <a href="#" data-toggle="class"> <i class="icon-control-play i-2x text"></i> <i class="icon-control-pause i-2x text-active"></i> </a>
                                        </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right active" data-toggle="class"> <i class="fa fa-heart-o text"></i> <i class="fa fa-heart text-active text-danger"></i> </a>
                                            <a href="#" data-toggle="class"> <i class="fa fa-plus-circle text"></i> <i class="fa fa-check-circle text-active text-info"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p2.jpg" alt="" class="r r-2x img-full"></a>
                                        <div class="bottom"> <span class="badge bg-info m-l-sm m-b-sm">03:20</span> </div>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a> <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a> </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p3.jpg" alt="" class="r r-2x img-full"></a>
<!--                                                     <div class="bottom"> <span class="badge bg-info m-l-sm m-b-sm">03:20</span> </div>-->
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a> <a href="#" class="text-ellipsis text-xs text-muted">Allen JH</a> </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <div class="top"> <span class="pull-right m-t-n-xs m-r-sm text-white"> <i class="fa fa-bookmark i-lg"></i> </span> </div>
                                    <a href="#"><img src="images/p4.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Tincidunt libero</a> <a href="#" class="text-ellipsis text-xs text-muted">Amanda Conlan</a> </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p5.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Fermentum diam</a> <a href="#" class="text-ellipsis text-xs text-muted">Nisa Colen</a> </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="top"> <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span> </div>
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p6.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Habitant</a> <a href="#" class="text-ellipsis text-xs text-muted">Dan Doorack</a> </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <div class="top"> <span class="pull-right m-t-sm m-r-sm badge bg-white">12</span> </div>
                                    <a href="#"><img src="images/p7.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a> <a href="#" class="text-ellipsis text-xs text-muted">Ligula H</a> </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p8.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Aliquam sollicitudin venenati</a> <a href="#" class="text-ellipsis text-xs text-muted">James East</a> </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p9.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Lementum ligula vitae</a> <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a> </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay r r-2x bg-light dker active">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n">
                                            <a href="#" data-toggle="class" class="active"> <i class="icon-control-play i-2x text"></i> <i class="icon-control-pause i-2x text-active"></i> </a>
                                        </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right" data-toggle="class"> <i class="fa fa-heart-o text"></i> <i class="fa fa-heart text-active text-danger"></i> </a>
                                            <a href="#" class="active" data-toggle="class"> <i class="fa fa-plus-circle text"></i> <i class="fa fa-check-circle text-active text-info"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p10.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Egestas dui nec fermentum </a> <a href="#" class="text-ellipsis text-xs text-muted">Chris Fox</a> </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p11.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a> <a href="#" class="text-ellipsis text-xs text-muted">Jack Jason</a> </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="text-info padder m-t-sm text-sm"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o text-muted"></i> </div>
                                        <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> </div>
                                        <div class="bottom padder m-b-sm">
                                            <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                            <a href="#"> <i class="fa fa-plus-circle"></i> </a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="images/p12.jpg" alt="" class="r r-2x img-full"></a>
                                </div>
                                <div class="padder-v"> <a href="#" class="text-ellipsis">Vestibulum ullamcorper</a> <a href="#" class="text-ellipsis text-xs text-muted">MM &amp; DD</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="font-thin">New Songs</h3>
                            <div class="row row-sm">
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a2.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Spring rain</a> <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a3.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Hope</a> <a href="#" class="text-ellipsis text-xs text-muted">Miya</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a8.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Listen wind</a> <a href="#" class="text-ellipsis text-xs text-muted">Soyia Jess</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a9.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Breaking me</a> <a href="#" class="text-ellipsis text-xs text-muted">Pett JA</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a1.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Nothing</a> <a href="#" class="text-ellipsis text-xs text-muted">Willion</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a6.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Panda Style</a> <a href="#" class="text-ellipsis text-xs text-muted">Lionie</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a7.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Hook Me</a> <a href="#" class="text-ellipsis text-xs text-muted">Gossi</a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="item">
                                        <div class="pos-rlt">
                                            <div class="item-overlay opacity r r-2x bg-black">
                                                <div class="center text-center m-t-n"> <a href="#"><i class="fa fa-play-circle i-2x"></i></a> </div>
                                            </div>
                                            <a href="#"><img src="images/a5.png" alt="" class="r r-2x img-full"></a>
                                        </div>
                                        <div class="padder-v"> <a href="#" class="text-ellipsis">Tempered Song</a> <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h3 class="font-thin">Top Songs</h3>
                            <div class="list-group bg-white list-group-lg no-bg auto">
                                <a href="#" class="list-group-item clearfix"> <span class="pull-right h2 text-muted m-l">1</span> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a4.png" alt="..."> </span> <span class="clear"> <span>Little Town</span> <small class="text-muted clear text-ellipsis">by Chris Fox</small> </span>
                                </a>
                                <a href="#" class="list-group-item clearfix"> <span class="pull-right h2 text-muted m-l">2</span> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a5.png" alt="..."> </span> <span class="clear"> <span>Lementum ligula vitae</span> <small class="text-muted clear text-ellipsis">by Amanda Conlan</small> </span>
                                </a>
                                <a href="#" class="list-group-item clearfix"> <span class="pull-right h2 text-muted m-l">3</span> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a6.png" alt="..."> </span> <span class="clear"> <span>Aliquam sollicitudin venenatis</span> <small class="text-muted clear text-ellipsis">by Dan Doorack</small> </span>
                                </a>
                                <a href="#" class="list-group-item clearfix"> <span class="pull-right h2 text-muted m-l">4</span> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a7.png" alt="..."> </span> <span class="clear"> <span>Aliquam sollicitudin venenatis ipsum</span> <small class="text-muted clear text-ellipsis">by Lauren Taylor</small> </span>
                                </a>
                                <a href="#" class="list-group-item clearfix"> <span class="pull-right h2 text-muted m-l">5</span> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a8.png" alt="..."> </span> <span class="clear"> <span>Vestibulum ullamcorper</span> <small class="text-muted clear text-ellipsis">by Dan Doorack</small> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-lg m-b-lg">
                        <div class="col-sm-6">
                            <div class="bg-primary wrapper-md r">
                                <a href="#"> <span class="h4 m-b-xs block"><i class=" icon-user-follow i-lg"></i> Login or Create account</span> <span class="text-muted">Save and share your playlist with your friends when you log in or create an account.</span> </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-black wrapper-md r">
                                <a href="#"> <span class="h4 m-b-xs block"><i class="icon-cloud-download i-lg"></i> Download our app</span> <span class="text-muted">Get the apps for desktop and mobile to start listening music at anywhere and anytime.</span> </a>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer bg-dark">
                    <div id="jp_container_N">
                        <div class="jp-type-playlist">
                            <div id="jplayer_N" class="jp-jplayer hide"></div>
                            <div class="jp-gui">
                                <div class="jp-video-play hide"> <a class="jp-video-play-icon">play</a> </div>
                                <div class="jp-interface">
                                    <div class="jp-controls">
                                        <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                                        <div> <a class="jp-play"><i class="icon-control-play i-2x"></i></a> <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a> </div>
                                        <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                                        <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                                        <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                                        <div class="jp-progress hidden-xs">
                                            <div class="jp-seek-bar dk">
                                                <div class="jp-play-bar bg-info"> </div>
                                                <div class="jp-title text-lt">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                                        <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                                        <div class="hidden-xs hidden-sm"> <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a> <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a> </div>
                                        <div class="hidden-xs hidden-sm jp-volume">
                                            <div class="jp-volume-bar dk">
                                                <div class="jp-volume-bar-value lter"></div>
                                            </div>
                                        </div>
                                        <div> <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a> <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a> </div>
                                        <div> <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a> <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a> </div>
                                        <div class="hide"> <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a> <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-playlist dropup" id="playlist">
                                <ul class="dropdown-menu aside-xl dker">
                                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                    <li class="list-group-item"></li>
                                </ul>
                            </div>
                            <div class="jp-no-solution hide"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="../../../external.html?link=http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                        </div>
                    </div>
                </footer>
            </section>
        </section>
        <!-- side content -->
        <aside class="aside-md bg-light dk" id="sidebar">
            <section class="vbox animated fadeInUp">
                <section class="scrollable hover">
                    <div class="list-group no-radius no-border no-bg m-t-n-xxs m-b-none auto">
                        <a href="genres.html" class="list-group-item"> All </a>
                        <a href="genres.html" class="list-group-item active"> acoustic </a>
                        <a href="genres.html" class="list-group-item"> ambient </a>
                        <a href="genres.html" class="list-group-item"> blues </a>
                        <a href="genres.html" class="list-group-item"> classical </a>
                        <a href="genres.html" class="list-group-item"> country </a>
                        <a href="genres.html" class="list-group-item"> electronic </a>
                        <a href="genres.html" class="list-group-item"> emo </a>
                        <a href="genres.html" class="list-group-item"> folk </a>
                        <a href="genres.html" class="list-group-item"> hardcore </a>
                        <a href="genres.html" class="list-group-item"> hip hop </a>
                        <a href="genres.html" class="list-group-item"> indie </a>
                        <a href="genres.html" class="list-group-item"> jazz </a>
                        <a href="genres.html" class="list-group-item"> latin </a>
                        <a href="genres.html" class="list-group-item"> metal </a>
                        <a href="genres.html" class="list-group-item"> pop </a>
                        <a href="genres.html" class="list-group-item"> pop punk </a>
                        <a href="genres.html" class="list-group-item"> punk </a>
                        <a href="genres.html" class="list-group-item"> reggae </a>
                        <a href="genres.html" class="list-group-item"> rnb </a>
                        <a href="genres.html" class="list-group-item"> rock </a>
                        <a href="genres.html" class="list-group-item"> soul </a>
                        <a href="genres.html" class="list-group-item"> world </a>
                    </div>
                </section>
            </section>

        </aside>
        <!-- / side content -->
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>
</section>
</section>
</section>

    <div class="modal fade inactive" id="user" data-backdrop="false">
    <div class="right w-xl white b-l">
        <div class="row-col"><a data-dismiss="modal" class="pull-right text-muted text-lg p-a-sm m-r-sm">&times;</a>
            <div class="p-a b-b"><span class="h5">Members</span></div>
            <div class="row-row">
                <div class="row-body">
                    <div class="row-inner">
                        <div class="list-group no-radius no-borders">
                            <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><img src="images/a1.jpg" alt="." class="pull-left w-40 m-r img-circle">
                                <div class="clear"><span class="font-bold block">Jonathan Doe</span> <span class="clear text-ellipsis text-xs">"Hey, What's up"</span></div>
                            </a>
                            <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><img src="images/a2.jpg" alt="." class="pull-left w-40 m-r img-circle">
                                <div class="clear"><span class="font-bold block">James Pill</span> <span class="clear text-ellipsis text-xs">"Lorem ipsum dolor sit amet onsectetur adipiscing elit"</span></div>
                            </a>
                            <div class="p-x-md m-t p-v-xs">Work</div><a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-success text-xs m-r-xs"></i> <span>Jonathan Morina</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-success text-xs m-r-xs"></i> <span>Mason Yarnell</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-warning text-xs m-r-xs"></i> <span>Mike Mcalidek</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Cris Labiso</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Daniel Sandvid</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Helder Oliveira</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Jeff Broderik</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Daniel Sandvid</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Helder Oliveira</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Jeff Broderik</span></a>
                            <div class="p-x-md m-t p-v-xs">Partner</div><a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-success text-xs m-r-xs"></i> <span>Mason Yarnell</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-warning text-xs m-r-xs"></i> <span>Mike Mcalidek</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Cris Labiso</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Jonathan Morina</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Daniel Sandvid</span></a> <a data-toggle="modal" data-target="#chat" data-dismiss="modal" class="list-group-item p-x-md"><i class="fa fa-circle text-muted text-xs m-r-xs"></i> <span>Helder Oliveira</span></a></div>
                    </div>
                </div>
            </div>
            <div class="p-a b-t"><a href="#" class="text-muted"><i class="fa fa-fw fa-twitter"></i> Twitter</a> <a href="#" class="text-muted m-h"><i class="fa fa-fw fa-facebook"></i> Facebook</a></div>
        </div>
    </div>
</div>
<!-- Bootstrap -->
<!-- App -->
<script src="js/auth.js"></script>

<script>

</script>
<script src="js/app.v1.js"></script>
<div class="modal fade" id="modal-form">
<div class="modal-dialog">
<div class="modal-content">
<div id="cancel" name="cancel" class="modal-body wrapper-lg cancel">
<div class="row">
<div class="col-sm-6 b-r">
<h3 class="m-t-none m-b">Sign in</h3>
<p>Sign in to meet your friends.</p>
<form role="form">
<div class="form-group"> <label>Email</label> <input type="email" id="txtEmail" class="form-control" placeholder="Enter email"> </div>
<div class="form-group"> <label>Password</label> <input type="password" id="txtPassword" class="form-control" placeholder="Password"> </div>
<div class="checkbox m-t-lg"> <button type="submit" id="btnLogin" class="btn btn-sm btn-success pull-right text-uc m-t-n-xs"><strong>Log in</strong>
</button> <label> <input type="checkbox"> Remember me </label> </div>
</form>
</div>
<div class="col-sm-6">
<h4>Not a member?</h4>
<p>You can create an account <a href="#" class="text-info">here</a></p>
<p>OR</p> <a href="#" id="faBtn" class="btn btn-primary btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
<a href="#" id="twBtn"  onclick=twittersignin() value="twitter sign in" class="btn btn-info btn-block m-b-sm"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
<a href="#" id="goBtn"   onclick=googleSignin() value="Google Sign In" class="btn btn-danger btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google+</a>
</div>
</div>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<script src="js/app.plugin.js"></script>
<script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
</html>
