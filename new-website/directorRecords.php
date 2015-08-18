<?php
    // Start the session
    session_start();
    if(!isset($_SESSION['employee_id']))
        header("location: ../staff-login.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Happyhealth - Stay Healthy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Website Description" />
    <meta name="keywords" content="Website Keywords" />
    <link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
    <!--<link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" />-->

    <script src="script/modernizr.js" type="text/javascript"></script>
    <script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="script/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="script/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
    <script src="script/jquery.flexslider.js" type="text/javascript"></script>
    <script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="script/jquery.retina.js" type="text/javascript"></script>
    <script src="script/matt.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $("a[data-rel^='prettyPhoto']").prettyPhoto({
                default_width: 600,
                default_height: 420,
                social_tools: false
            });
            $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) || ($(window).width() < 1024) ) {
            } else {
                $('#slideshow-tabs .ui-tabs-panel').parallax("50%", 0.5);
                $('.content-home-1').parallax("0", 0.5);
                $('.content-home-2').parallax("100%", 0.5);
                $('.content-home-3').parallax("0", 0.5);
                $('#title-content').parallax("50%", 0.5);
                $("#content-side-title").show();
                setTimeout(function() { $("#content-side-title").animate({width: 'toggle'}); },100);
            }
            $('.side-title .flexslider').flexslider({
                animation: "slide",
                pauseOnAction: true,
            });
            $('.link-side-title').click(function() {
                $(this).next("#content-side-title").animate({width: 'toggle'});
            });
            $('#tabs-service').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
            $('#tabs-doctor').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
            $('a[data-rel]').each(function() {
                $(this).attr('rel', $(this).data('rel'));
            });
            $('img[data-retina]').retina({checkIfImageExists: true});
            $(".open-menu").click(function(){
                $("body").addClass("no-move");
            });
            $(".close-menu, .close-menu-big").click(function(){
                $("body").removeClass("no-move");
            });
        });

        function selectDefault(id, value) {
            var target = document.getElementById(id);
            for (var i=0; i<target.length; i++) {
                if (target.options[i].value == value) {
                    target.selectedIndex = i;
                    return;
                }
            }
        }
    </script>
</head>
<body>

    <!-- ######################################### Nav Bar ##############################################-->
    <header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <img src="images/logo.png" data-retina="images/logo-retina.png" >
                <nav id="nav" class="clearfix">
                    <div id="nav-container">
                        <ul id="nav-main">
                            <li><a href="director.php">Personal Info</a></li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="directorServices.php?fac=palliative">Palliative</a></li>
                                    <li><a href="directorServices.php?fac=childrens_unit">Childrens Unit</a></li>
                                    <li><a href="directorServices.php?fac=surgical_unit">Surgical Unit</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Supplies</a>
                                <ul>
                                    <li><a href="#">Storage Units</a>
                                        <ul>
                                            <li><a href="directorStorage.php?fac=palliative">Palliative</a></li>
                                            <li><a href="directorStorage.php?fac=childrens_unit">Childrens Unit</a></li>
                                            <li><a href="directorStorage.php?fac=surgical_unit">Surgical Unit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Supply Rooms</a>
                                        <ul>
                                            <li><a href="directorSupplies.php?fac=palliative&floor=first">Palliative First Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=palliative&floor=second">Palliative Second Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=palliative&floor=third">Palliative Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=childrens_unit&floor=first">Childrens Unit First Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=childrens_unit&floor=second">Childrens Unit Second Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=childrens_unit&floor=third">Childrens Unit Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=surgical_unit&floor=first">Surgical Unit Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=surgical_unit&floor=second">Surgical Unit Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=surgical_unit&floor=third">Surgical Unit Third Floor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kitchens</a>
                                        <ul>
                                            <li><a href="directorKitchen.php?fac=palliative">Palliative</a></li>
                                            <li><a href="directorKitchen.php?fac=childrens_unit">Childrens Unit</a></li>
                                            <li><a href="directorKitchen.php?fac=surgical_unit">Surgical Unit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="directorSurgeries.php">Surgeries</a></li>
                            <li><a href="#">Records</a>
                                <ul>
                                    <li><a href="directorRecords.php?fac=1">Palliative</a></li>
                                    <li><a href="directorRecords.php?fac=2">Childrens Unit</a></li>
                                    <li><a href="directorRecords.php?fac=3">Surgical Unit</a></li>
                                </ul>
                            </li>
                            <li><a href="php/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- ######################################### Main Image ##############################################-->
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
            <h1><span style="color:white; font-weight: bold"><?php echo $_SESSION['employee_name'];?></span></h1>
        </header>

        <!-- ######################################### PHP ##############################################-->
        <?php

            include 'database.php';

            function set_default_select($name, $stored_value, $default_value) {
                $write_value = (empty($stored_value)) ? $default_value : $stored_value;
                echo '<script>selectDefault("'.$name.'", "'.$write_value.'")</script>';
            }

            if (isset($_POST['submit'])) {
                $facility = $_GET['fac'];
                $storage_id = $_POST['storage_type'];
                $date = $_POST['year-month'];
                $year = date("Y", strtotime($date));
                $month = date("m",strtotime($date));

                $query = "SELECT date, supply_name, quantity, cost
                          FROM orders NATURAL JOIN supplies
                          WHERE facility_id=$facility
                          AND storage_id='$storage_id'
                          AND YEAR(date)=$year
                          AND MONTH(date)=$month
                          ORDER BY date";

                $attributes = array('date', 'supply_name', 'quantity', 'cost');
                $orders = get_table_w_sum($query, $attributes);
            }


        ?>


        <div style="text-align:center">

            <!-- ######################################### Style ##############################################-->
            <style scoped>
                a { float: left; color: white; margin: 5px; font-size: 20pt; text-decoration: none; }
                h3 { font-weight: bold; font-size: 16pt; }
                h4 { font-weight: bold }
                label { float: left; }
                .nav { margin: 0 auto; padding: 40px; margin-bottom: 35px; width: 139px; height: 40px; background-color: #5B94AB; color:white; }
                .form { background-color: #5B94AB; color: white; text-shadow: 1px 1px 1px black; margin-top: 30px; margin-bottom: 50px; padding: 50px; border: 4px double white; width: 1070px; clear: both; }
                .row { display: flex; }
                .col { flex: 1; width: 300px; min-height: 250px; }
                .col.left { padding-right: 30px; border-right: 1px solid white; }
                .col.right { padding-left: 30px; }
                input[type=text] { width: 300px; }
                .output { color: black; text-shadow: 1px 1px 1px white; border: 1px solid black; padding: 5px }
                .output.h { background-color: lightblue; border: 1px solid black; }
                .del { font-size: 12pt; color: black;  }
                .del:visited { color: black; }
                .del:hover { color: #5B94AB }
            </style>

            <!-- ######################################### Form ##############################################-->
            <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] . "?fac=$facility" ?>">
                <h3>Records</h3><br/>

                <hr/>

                <div class="row">
                    <div class="col left">
                        <h4>Record</h4><br/>
                        <?php
                            echo $orders;
                        ?>
                    </div>

                    <div class="col right">
                        <h4>Select Criteria</h4><br/><br/>

                        <label for="storage_type">Storage Type: </label>
                        <select name="storage_type" id="storage_type">
                            <option value="facility">Storage Unit</option>
                            <option value="1">Supply Room - 1st Floor</option>
                            <option value="2">Supply Room - 2nd Floor</option>
                            <option value="3">Supply Room - 3rd Floor</option>
                            <option value="kitchen">Kitchen</option>
                        </select><br/><br/>
                        <?php set_default_select('storage_type', $storage_id, 'facility'); ?>

                        <label for="year-month">Year-Month: </label>
                        <input id="year-month" name="year-month" type="month" value="<?php echo $date ?>"/><br/><br/><br/>


                        <input type="submit" name="submit" value="View Record"/>
                    </div><br/>
                </div>
            </form>
        </div>
</body>
</html>
