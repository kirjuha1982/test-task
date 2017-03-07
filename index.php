<?php

$_start = microtime(true);

require_once( "models/Db.php" );
require_once( "models/Method.php" );


$request = new Method();
if(isset($_GET['action']) && $_GET['action'] != ''){
    switch ($_GET['action']) {
        case 'task_1':
            $request->actionTask1($_POST['text']);
            break;
        case 'task_2':
            $request->actionTask2($_POST['text']);
            break;
        case 'task_4':
            $db = new Db();
            $request->actionTask4($db);
            break;
        case 'task_5':
            $db = new Db();
            $request->actionTask5($db);
            break;
        case 'task_6':
            $request->actionTask6();
            break;
        case 'task_7':
            $request->actionTask7();
            break;
    }
}else{
    $db = new Db();
    $request->render($db, $db->log);
}


$_end = microtime(true);
$_diff = $_end-$_start;

echo "<br> 
Время выполнения: ".$_diff;
