<?php
require 'bootstrap/init.php' ;

if (isset($_GET['update_task']) && is_numeric($_GET['update_task'])) {
    $task_data = getTaskById($_GET['update_task']) ?? null;
    $folders = getCurrentFolders() ;
    $task_id = $_GET['update_task'] ?? null;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['upTitle'];
    $folderName = $_POST['upFolder']; 
    $folder_id = getCurrentFolderIdByName($folderName) ;
    if (empty($folder_id) or empty($title)) {
        setMessageAndRedirect('Fileds Is Empty Or Folder Invalid..! .' , '') ;
    }
    updateTask($task_id,$title,$folder_id->id) ? setMessageAndRedirect('Task IS Successfully Updated .' , '') : setMessageAndRedirect('Updated Is Filed !!' , '') ;
}

require 'tpl/update_tpl.php' ;