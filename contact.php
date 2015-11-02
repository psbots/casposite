<html>
<?php

    //include <head>
    include('templates/header.php');

?>

<body id="single-while-bg">

    <section class="hero">
        <section class="navigation fixed fixed-alltime">
     <?php

            //menu-elements

            include('templates/menu_temp.php');

            ?>

        </section>


        <section class="features">

            <div class="container">

                <div class="row">


                    <div class="col-md-6 margin--header no-shadow">

                        <h3>Caspo LLC</h3>
                        <p><strong>Caspo LLC</strong><br>824 Saint Stephens Grn<br>Oak Brook, IL 605223<br></p>

                        </br></br>

                        <h5>Contact @ Caspo</h5>
                        <p><i class="fa fa-envelope-o"></i> contact@caspoenergy.com
                        </br>
                        <!-- <i class="fa fa-whatsapp"></i>  +91 9239203233 -->
                        </p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>

                    <div class="contact--map col-md-6">
                      <br><br><br>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">theme circle themes</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(41.8397865,-87.95355339999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.8397865, -87.95355339999998)});infowindow = new google.maps.InfoWindow({content:"<b>824 Saint Stephens Grn</b><br/>Oak Brook<br/>60523 IL" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div>

                </div>



            </div>

        </section>









    <div class="clear"></div>
        <div class="main-footer">
                       <?php

            //menu-elements

            include('templates/footer_default_credits.php');
?>
        </div>






 <?php

            //menu-elements

            include('templates/footer_scripts.php');

        ?>


</body>
</html>
