 <?php
                        $adrandroid= 'market://details?id=se.subitoservices.fasttrack.lillasaigon';$adrios= 'https://itunes.apple.com/us/app/lilla-saigon/id1071386433?l=sv&ls=1&mt=8';
                       echo '
                       <!DOCTYPE html>
                       <html lang="en">
                       <head>
                       <title>Lilla Saigon</title>
                       <style>
                       .in {
                               margin-left: auto;
                                 margin-right: auto;
                                   display: table;
                       }
                       body {
                               background-color: lightgrey;
                       }
                       </style>
                       </head>
                       <body>
                       ';
                       echo '<br /><br /><div class="in"><a href="'.$adrios.'">
                         <img src="../../img/app1.png" alt="App Store"></a>';
                       echo '<br /><br /><br /><br /><a href="'.$adrandroid.'">
                        <img src="../../img/go1.png" alt="Google Play"></a></div>';
                       echo'</body></html>';
