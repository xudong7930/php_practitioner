<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?php if ($task->isComplete()): ?>
                    <strike><?php echo $task->title; ?></strike>
                <?php else: ?>
                    <?php echo $task->title; ?>
                <?php endif ?>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
