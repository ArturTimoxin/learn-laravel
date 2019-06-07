<?php require('partials/head.php') ?>
    
    <?php require('partials/nav.php') ?>

    <h1>Submit your name!</h1>

    <!-- Атрибут name у input-ов должен быть всегда если мы хотим чтобы в параметры url записались значения! -->

    <form method="POST" action="/users">
    
        <input type="text" name="name" />

        <button type="submit">Submit</button>    

    </form>

    <h2>All users:</h2>

    <ul>
        <?php foreach ($users as $user) : ?> 
            <li><?= $user->user_id . ' ' . $user->user_name ?></li>
        <?php endforeach; ?>
    </ul>

<?php require('partials/footer.php') ?>