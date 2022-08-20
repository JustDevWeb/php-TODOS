<?php include 'head.php' ?>
<body>
<?php include 'menu.php' ?>

<div class="container">
    <?php if (isset($userName)):?>
        <h1 class="display-2 my-5">Добро пожаловать <?=$userName?></h1>
        <p class="mb-3"> Перейти к задачам   <a class="btn btn-success ms-3" href="?controller=tasks"> К задачам</a> </p>
        <p class="mb-3"> Выйти из профиля <a class="btn btn-danger ms-3" href="?controller=security&action=logout"> Выйти</a> </p>
    <?php else :?>
        <h1 class="display-2 my-5">Добро пожаловать гость</h1>
        <p>Дорогой гость вам нужно авторизоваться <a class="btn btn-success ms-3" href="/?controller=security"> К авторизации</a></p>
    <?php endif;?>
</div>

</body>
</html>


