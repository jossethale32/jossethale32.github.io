<?php
    require_once('Datatables/src/BrowserDetection.php');
?>
<!DOCTYPE html>
<head lang="es">
    <meta charset="utf-8">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Martian+Mono">
</head>
<body style="background-color:#15202b">
    <?php
		function getIPPublic(){
			return $ippublica = file_get_contents("https://api.ipify.org");
		}
        function getIPPublic2(){
			$ippublica = file_get_contents("https://api.ipify.org");
            echo "<h1 style='color: whitesmoke;, serif; font-size: 48px;'>$ippublica</h1>";
		}
		function getOS(){
			$Browser = new foroco\BrowserDetection();
		    $useragent = $_SERVER['HTTP_USER_AGENT'];

			$device = $Browser->getAll($useragent);

		    $localIP = getHostByName(getHostName());

		    return $dispositivo = $device["os_title"]."--".$device["browser_name"];
		}
        getIPPublic2()
	?>
    <h1 style="color: whitesmoke; font-family: 'Martian Mono', serif; font-size: 48px;">𝌆HOLA 😐</h1>
    <pre style="display: block; color: whitesmoke; font-family: 'Martian Mono', serif; font-size: 18px;">
        __          _                                                    
     /\ \ \__ _  __| | __ _    ___  ___   ___  ___  __ _ _   _ _ __ ___  
    /  \/ / _` |/ _` |/ _` |  / _ \/ __| / __|/ _ \/ _` | | | | '__/ _ \ 
   / /\  / (_| | (_| | (_| | |  __/\__ \ \__ \  __/ (_| | |_| | | | (_) |
   \_\ \/ \__,_|\__,_|\__,_|  \___||___/ |___/\___|\__, |\__,_|_|  \___/ 
                                                   |___/                 
   </pre>
</body>
<footer style="background-color:#15202b">
    <div>
        <h3 style="display: block; text-align: end; margin-top: 100px; color: whitesmoke; font-family: 'Martian Mono', serif; font-size: 18px;"><svg width="3%"
            height="3%" class="svg-icon" viewBox="0 0 20 20" style="fill: whitesmoke;">
            <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
        </svg>Info: security expert and passionate about reverse engineering</h3>
        <h3 style="display: block; text-align: end; margin-top: 10px; color: whitesmoke; font-family: 'Martian Mono', serif; font-size: 18px;"><svg width="3%"
            height="3%" class="svg-icon" viewBox="0 0 20 20" style="fill: whitesmoke;">
            <path d="M8.749,9.934c0,0.247-0.202,0.449-0.449,0.449H4.257c-0.247,0-0.449-0.202-0.449-0.449S4.01,9.484,4.257,9.484H8.3C8.547,9.484,8.749,9.687,8.749,9.934 M7.402,12.627H4.257c-0.247,0-0.449,0.202-0.449,0.449s0.202,0.449,0.449,0.449h3.145c0.247,0,0.449-0.202,0.449-0.449S7.648,12.627,7.402,12.627 M8.3,6.339H4.257c-0.247,0-0.449,0.202-0.449,0.449c0,0.247,0.202,0.449,0.449,0.449H8.3c0.247,0,0.449-0.202,0.449-0.449C8.749,6.541,8.547,6.339,8.3,6.339 M18.631,4.543v10.78c0,0.248-0.202,0.45-0.449,0.45H2.011c-0.247,0-0.449-0.202-0.449-0.45V4.543c0-0.247,0.202-0.449,0.449-0.449h16.17C18.429,4.094,18.631,4.296,18.631,4.543 M17.732,4.993H2.46v9.882h15.272V4.993z M16.371,13.078c0,0.247-0.202,0.449-0.449,0.449H9.646c-0.247,0-0.449-0.202-0.449-0.449c0-1.479,0.883-2.747,2.162-3.299c-0.434-0.418-0.714-1.008-0.714-1.642c0-1.197,0.997-2.246,2.133-2.246s2.134,1.049,2.134,2.246c0,0.634-0.28,1.224-0.714,1.642C15.475,10.331,16.371,11.6,16.371,13.078M11.542,8.137c0,0.622,0.539,1.348,1.235,1.348s1.235-0.726,1.235-1.348c0-0.622-0.539-1.348-1.235-1.348S11.542,7.515,11.542,8.137 M15.435,12.629c-0.214-1.273-1.323-2.246-2.657-2.246s-2.431,0.973-2.644,2.246H15.435z"></path>
        </svg>Contact: jossethale32 - find me in tor</h3>
        <h3 style="display: block; text-align: end; margin-top: 10px; color: whitesmoke; font-family: 'Martian Mono', serif; font-size: 18px; text-decoration: none; background-color: none;"><svg  width="3%"
            height="3%" class="svg-icon" viewBox="0 0 20 20" style="fill: whitesmoke;">
            <path d="M14.999,8.543c0,0.229-0.188,0.417-0.416,0.417H5.417C5.187,8.959,5,8.772,5,8.543s0.188-0.417,0.417-0.417h9.167C14.812,8.126,14.999,8.314,14.999,8.543 M12.037,10.213H5.417C5.187,10.213,5,10.4,5,10.63c0,0.229,0.188,0.416,0.417,0.416h6.621c0.229,0,0.416-0.188,0.416-0.416C12.453,10.4,12.266,10.213,12.037,10.213 M14.583,6.046H5.417C5.187,6.046,5,6.233,5,6.463c0,0.229,0.188,0.417,0.417,0.417h9.167c0.229,0,0.416-0.188,0.416-0.417C14.999,6.233,14.812,6.046,14.583,6.046 M17.916,3.542v10c0,0.229-0.188,0.417-0.417,0.417H9.373l-2.829,2.796c-0.117,0.116-0.71,0.297-0.71-0.296v-2.5H2.5c-0.229,0-0.417-0.188-0.417-0.417v-10c0-0.229,0.188-0.417,0.417-0.417h15C17.729,3.126,17.916,3.313,17.916,3.542 M17.083,3.959H2.917v9.167H6.25c0.229,0,0.417,0.187,0.417,0.416v1.919l2.242-2.215c0.079-0.077,0.184-0.12,0.294-0.12h7.881V3.959z"></path>
        </svg>Or: <a href="mailto:jossethale32@pm.me" style="text-decoration: none; background-color: none; color: whitesmoke;">Correo</h3>
    </div>
    
</footer>
</html>