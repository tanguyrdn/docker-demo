<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DOCKER APP Tanguy</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <div class="hero" style="background">
            <div class="hero-content" style="background-image: url('assets/image/digital-bg.gif')">
                <h1 class="title">DOCKER LAMP APP</h1>
                <p>Tanguy trying to build a lamp app</p>
            </div>
        </div>
        <div class="site-section">
            <div class="site-section-inside">
                
                 <div class="section-header">
                        <h2>You can test the different services of the app right here :</h2>
                        <ul>
                           <li>PHP : <a href="http://localhost/phpinfo.php">phpinfo()</a></li>
                           <li>MySQL : <a href="http://localhost/test_db.php">Test DB Connection</a></li>
                        </ul>
                 </div>
              </div>
          </div>
	  <footer>
		<h3>This docker app was built with</h3>
                        <ul>
                           <li><?= apache_get_version(); ?></li>
                           <li>PHP <?= phpversion(); ?></li>
                           <li>
                               <?php
                                    $link = mysqli_connect("mysql", "root", "dev", null);

/* check connection */
                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                ?>
                           </li>
                       </ul>
	  </footer>
    </body>
</html>
