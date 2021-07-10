<?php
/*
Plugin Name: St Cecilia's Google Analytics
Description: Simply hooks Google Analytics into the site.
Author: Matt DelSordo
Version: 1.0
*/
?>
<?php
function stcecilias_google_analytics() {?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25737241-20"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-25737241-20');
    </script>
<?php }
add_action('wp_head', 'stcecilias_google_analytics', 10); 