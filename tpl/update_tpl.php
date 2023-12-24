<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update task</title>
    <link rel="stylesheet" href="assets/css/update_style.css">
</head>
<body>
    <form action="update.php?update_task=<?= $_GET['update_task'] ?>" method="post">
    <label for="upTitle">Task Name :
        <input type="text" class="inp_up" name="upTitle" value="<?= $task_data->title ?? '' ?>">
    </label>
    <label id="foldersName">Folder Name :
        <input list="folders" name="foldersName" class="inp_up">
            <datalist id="folders">
                <?php foreach($folders as $key => $value ): ?>
                    <option value="<?= $value->name ?>" />
                <?php endforeach ?>
            </datalist>
    </label>
        <input type="submit" name="send" class="btn_up">
    </form>
</body>
</html>
