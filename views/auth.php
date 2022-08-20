<?php include 'head.php' ?>

<body>
    <?php include 'menu.php'?>
    <div class="d-flex flex-column align-items-center container">
        <h1 class="display-1"><?=$pageHeader?></h1>
        <form class="w-50 mt-4 border rounded p-3" method="post">
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
            <div class="mb-3">
                <label for="inputLogin" class="form-label">Логин</label>
                <input type="text" name="username" id="inputLogin" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Готово</button>
        </form>
    </div>



</body>
</html>
