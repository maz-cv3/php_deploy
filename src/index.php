<?php

require_once 'vendor/autoload.php';
\Sentry\init(['dsn' => 'http://dc5f73a5d03e4c828bf23a81a832d462@10.0.3.77:9000/1', 'traces_sample_rate' => 1.0,
        'profiles_sample_rate' => 1.0
 ]);

echo "version v1.0.2! <br>";
echo "Hello, World from Docker! <br>";
echo "Hello ECS! <br>";
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png">';


?>
