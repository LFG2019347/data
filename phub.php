<?php

//$domin=isset($_GET['domin']) ? $_GET['domin'] : '';
$viewkey=isset($_GET['viewkey']) ? $_GET['viewkey'] : '';
//$viewkey='ph5e4abdfeb8af2';
$output=exec("python3 phub_test.py $viewkey 2>&1",$out,$res);
// print_r($out[0]);
//$out='https://v.hoopchina.com.cn/hupuapp/bbs/208511365012543/thread_208511365012543_20200229124455_43117.mp4?auth_key=1584792719-0-0-fb705c14ae53e00a5be73bb138dba0d1';
header('Location:'.$out[0]);