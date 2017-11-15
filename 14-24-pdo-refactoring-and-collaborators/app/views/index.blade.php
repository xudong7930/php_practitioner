<?php require('partial/header.blade.php'); ?>

    <?php require('partial/nav.blade.php'); ?>
    <div class="container">
        <ul>
            <?php foreach($tasks as $task): ?>
                <li>
                <?php if($task->finish): ?>
                    <strike><?php echo $task->title; ?></strike>
                <?php else: ?>
                    <?php echo $task->title; ?>
                <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <h1>submit your name</h1>
        <form action='/names' method="post">
            <input type="text" name="names">
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
        <dl>
            <dt>names:</dt>
            <?php foreach($names as $name): ?>
                <dd><?php echo $name->name; ?></dd>
            <?php endforeach; ?>
        </dl>
    </div>

<?php require('partial/footer.blade.php'); ?>
