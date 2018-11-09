<?php
/**
 * 定时执行数据计算
 */

$currentDir = realpath(dirname(__FILE__). '/') ;

require $currentDir.'./bootstrap.php';
use \main\app\classes\CrontabProject;

try{
    $crontabProject = new CrontabProject();
    // 每一个小时计算冗余的项目数据
    $ret = $crontabProject->computeIssue();
    print_r($ret);
}catch (Exception $exception){
    print $exception->getMessage();
}
