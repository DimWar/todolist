<?php
// link bank page
require 'bootstrap/init.php' ;


// delete folder
if (isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])) {
    $folder_id = $_GET['delete_folder'] ;
    deleteFolder($folder_id) ? setMessageAndRedirect('Folder Is Successfully Deleted .' , '') : setMessageAndRedirect('Deleted Is Filed !!' , '') ;
}
if (isset($_GET['delete_task']) && is_numeric($_GET['delete_task'])) {
    $task_id = $_GET['delete_task'] ;
    deleteTask($task_id) ? setMessageAndRedirect('Task IS Successfully Deleted .' , '') : setMessageAndRedirect('Deleted Is Filed !!' , '') ;
}



// query find folder data
$folder_data = getFolders() ;
// query find task data
$task_data = getTasks() ;
// tmplate index page
require 'tpl/index_tpl.php' ;