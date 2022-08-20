<?php include 'head.php' ?>
<body>
<?php include 'menu.php'?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display 2 my-5"><?=$pageHeader?></h1>
            <div class="w-75">
                <?php if (isset($undoneTasks) && count($undoneTasks)):?>
                <ol class="list-group list-group-numbered">
                    <?php foreach ($undoneTasks as $task): ?>
                        <li class="list-group-item list-group-item-primary d-flex">
                            <div class="ms-2 me-auto"><?="{$task['description']}"?></div> <a class="btn btn-success btn-sm" href="?controller=tasks&action=done&key=<?=$task['id']?>">готово</a>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <?php else : ?>
                <div class="alert alert-warning" role="alert">
                    Задач еще нет! Добавьте задачу.
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col">
        <h2 class="display 1 my-5"> Добавить задание</h2>
        <form class="row" method="post">
            <div class="col-7"> <input class="form-control me-auto" type="text" name="task" placeholder="Добавьте задание здесь..." aria-label="Add your item here..."></div>
           <div class="col-auto"> <button type="submit" class="btn btn-secondary">Отправить</button></div>
        </form>
        </div>
    </div>

</div>
</body>
</html>
