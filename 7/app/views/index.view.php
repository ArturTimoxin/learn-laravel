<?php require('partials/head.php') ?>
    
    <?php require('partials/nav.php') ?>

    <!-- <h1>My Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?> 
            <li><?= $task->description . ' ' ?><span><?= $task->completed ? '+' : '-' ?></span></li>
        <?php endforeach; ?>
    </ul> -->


    <!-- <h1>Submit your name!</h1> -->

    <!-- Атрибут name у input-ов должен быть всегда если мы хотим чтобы в параметры url записались значения! -->

    <!-- <form method="POST" action="/names">
    
        <input type="text" name="name" />

        <button type="submit">Submit</button>    

    </form>

    <ul>
        <?php foreach ($users as $user) : ?> 
            <li><?= $user->user_id . ' ' . $user->user_name ?></li>
        <?php endforeach; ?>
    </ul> -->


    <h1>Home Page</h1>



<?php require('partials/footer.php') ?>