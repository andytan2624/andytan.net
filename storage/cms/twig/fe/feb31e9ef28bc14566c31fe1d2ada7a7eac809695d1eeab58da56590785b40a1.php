<?php

/* /Applications/MAMP/htdocs/atan/themes/main/pages/contact.htm */
class __TwigTemplate_a29c643b4a391b0ac72839f0b881867ac0810ab28ff77bb2b4f891ac44306e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"intro-header\"></header>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"location-mapping-wrap\">

            <div class=\"location-caption-outter\">
                <div class=\"location-caption-wrap\">
                    <div class=\"location-caption\">
                        <div class=\"office-title\">
                            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "
                        </div>
                        <div class=\"office-address\">
                            I am currently based in Sydney at the moment. If you would like to get in contact, contact me through LinkedIn
                            <a target=\"_blank\" href=\"https://au.linkedin.com/in/andytan87\">here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"gmap-outter\">
                <div id=\"gmap\" style=\"width: 100%;height: 100%;\">
                </div>

            </div>
        </div>
    </div>
</div>


<script type=\"text/javascript\"
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDfOOte0Y-iuoaBmWPFMj_gr52tQ5F4nGg&callback=initMap\"></script>
<script type=\"text/javascript\">
    function initialize() {
        var myLatlng = new google.maps.LatLng(";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "lat", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "long", array()), "html", null, true);
        echo ");

        var mapOptions = {
            center: {lat: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "lat", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "long", array()), "html", null, true);
        echo "},
            zoom: 13
        };
        var map = new google.maps.Map(document.getElementById('gmap'),
                mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
        map.panBy(200, 0);
        var styles = [
            {
                \"featureType\": \"water\",
                \"stylers\": [
                    {\"visibility\": \"simplified\"},
                    {\"color\": \"#ccf7ff\"}
                ]
            },
            {
                \"featureType\": \"road.highway\",
                \"elementType\": \"geometry.fill\",
                \"stylers\": [
                    {\"color\": \"#B0B0B0\"},
                    {\"visibility\": \"on\"}
                ]
            },
            {
                \"featureType\": \"poi\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                    {\"visibility\": \"on\"},
                    {\"color\": \"#e1d7d0\"}
                ]
            },
            {
                \"featureType\": \"landscape\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                    {\"visibility\": \"on\"},
                    {\"color\": \"#dacfc6\"}
                ]
            },
            {
                \"featureType\": \"road.arterial\",
                \"elementType\": \"geometry.fill\",
                \"stylers\": [
                    {\"color\": \"#e2e2e1\"}
                ]
            },
            {
                \"featureType\": \"road.local\",
                \"elementType\": \"geometry.fill\",
                \"stylers\": [
                    {\"color\": \"#e2e2e1\"}
                ]
            },
            {
                \"featureType\": \"road.highway\",
                \"elementType\": \"geometry.stroke\",
                \"stylers\": [
                    {\"color\": \"#999999\"}
                ]
            },
            {
                \"featureType\": \"transit.line\",
                \"elementType\": \"geometry.fill\",
                \"stylers\": [
                    {\"color\": \"#B0B0B0\"},
                    {\"visibility\": \"on\"}
                ]
            },
            {
                \"featureType\": \"road.arterial\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                    {\"color\": \"#9b9b9b\"}
                ]
            },
            {
                \"featureType\": \"road.arterial\",
                \"elementType\": \"labels.text.stroke\",
                \"stylers\": [
                    {\"color\": \"#dadbdb\"}
                ]
            },
            {
                \"featureType\": \"poi\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                    {\"color\": \"#b1b0b1\"}
                ]
            },
            {
                \"featureType\": \"poi\",
                \"elementType\": \"labels.text.stroke\",
                \"stylers\": [
                    {\"color\": \"#e9e9e9\"}
                ]
            },
            {
                \"featureType\": \"road.highway\",
                \"elementType\": \"labels.text.stroke\",
                \"stylers\": [
                    {\"color\": \"#dfd8d8\"}
                ]
            },
            {
                \"featureType\": \"road\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                    {\"color\": \"#d0835a\"}
                ]
            }
        ];

        map.setOptions({styles: styles, draggable: false});
    }

    google.maps.event.addDomListener(window, 'load', initialize);


</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 36,  56 => 33,  30 => 10,  19 => 1,);
    }
}
/* <header class="intro-header"></header>*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="location-mapping-wrap">*/
/* */
/*             <div class="location-caption-outter">*/
/*                 <div class="location-caption-wrap">*/
/*                     <div class="location-caption">*/
/*                         <div class="office-title">*/
/*                             {{ this.page.title }}*/
/*                         </div>*/
/*                         <div class="office-address">*/
/*                             I am currently based in Sydney at the moment. If you would like to get in contact, contact me through LinkedIn*/
/*                             <a target="_blank" href="https://au.linkedin.com/in/andytan87">here</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="gmap-outter">*/
/*                 <div id="gmap" style="width: 100%;height: 100%;">*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript"*/
/*         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfOOte0Y-iuoaBmWPFMj_gr52tQ5F4nGg&callback=initMap"></script>*/
/* <script type="text/javascript">*/
/*     function initialize() {*/
/*         var myLatlng = new google.maps.LatLng({{ this.page.lat }}, {{ this.page.long }});*/
/* */
/*         var mapOptions = {*/
/*             center: {lat: {{ this.page.lat }}, lng: {{ this.page.long }}},*/
/*             zoom: 13*/
/*         };*/
/*         var map = new google.maps.Map(document.getElementById('gmap'),*/
/*                 mapOptions);*/
/* */
/*         var marker = new google.maps.Marker({*/
/*             position: myLatlng,*/
/*             map: map,*/
/*             title: 'Hello World!'*/
/*         });*/
/*         map.panBy(200, 0);*/
/*         var styles = [*/
/*             {*/
/*                 "featureType": "water",*/
/*                 "stylers": [*/
/*                     {"visibility": "simplified"},*/
/*                     {"color": "#ccf7ff"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.highway",*/
/*                 "elementType": "geometry.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#B0B0B0"},*/
/*                     {"visibility": "on"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "poi",*/
/*                 "elementType": "geometry",*/
/*                 "stylers": [*/
/*                     {"visibility": "on"},*/
/*                     {"color": "#e1d7d0"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "landscape",*/
/*                 "elementType": "geometry",*/
/*                 "stylers": [*/
/*                     {"visibility": "on"},*/
/*                     {"color": "#dacfc6"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.arterial",*/
/*                 "elementType": "geometry.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#e2e2e1"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.local",*/
/*                 "elementType": "geometry.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#e2e2e1"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.highway",*/
/*                 "elementType": "geometry.stroke",*/
/*                 "stylers": [*/
/*                     {"color": "#999999"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "transit.line",*/
/*                 "elementType": "geometry.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#B0B0B0"},*/
/*                     {"visibility": "on"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.arterial",*/
/*                 "elementType": "labels.text.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#9b9b9b"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.arterial",*/
/*                 "elementType": "labels.text.stroke",*/
/*                 "stylers": [*/
/*                     {"color": "#dadbdb"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "poi",*/
/*                 "elementType": "labels.text.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#b1b0b1"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "poi",*/
/*                 "elementType": "labels.text.stroke",*/
/*                 "stylers": [*/
/*                     {"color": "#e9e9e9"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road.highway",*/
/*                 "elementType": "labels.text.stroke",*/
/*                 "stylers": [*/
/*                     {"color": "#dfd8d8"}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 "featureType": "road",*/
/*                 "elementType": "labels.text.fill",*/
/*                 "stylers": [*/
/*                     {"color": "#d0835a"}*/
/*                 ]*/
/*             }*/
/*         ];*/
/* */
/*         map.setOptions({styles: styles, draggable: false});*/
/*     }*/
/* */
/*     google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/* */
/* </script>*/
