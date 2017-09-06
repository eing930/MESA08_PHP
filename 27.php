<?php
    date_default_timezone_set("Asia/Taipei");
    $dir = @opendir(".") or exit ('sever busy');
    while ($cont =readdir($dir)) {
        echo $cont . ":";
        if (is_dir("./{$cont}")) {
            echo "{DIR}";
        } else if (is_file("./{$cont}")) {
            echo "{FILE}";
        }
        echo date('Y-m-d H:i:s', filemtime("./{$cont}"));
        echo '<br>';
        echo '<hr>';
        if (copy('./dir1/file1', './dir3/file2')) {
            echo 'COPY ok';
        } else {
            echo 'COPY Fail';
        }
    }
    unlink("./dir1/file1");//這樣就能將程式中的檔案砍掉(使用unlink)