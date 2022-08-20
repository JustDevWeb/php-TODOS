<?php include 'head.php'?>
<body>
<?php include 'menu.php'?>

<div class="container text-center">
    <h1 class="display-2 mt-5"><?=$pageHeader?></h1>
    <div class="d-flex justify-content-center">
        <form class="w-50 mt-5" method="post">
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
            <div class="row mb-3">
                <label for="inputLogin3" class="col-sm-2 col-form-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" name="login" class="form-control" id="inputLogin3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCheckPassword" class="col-sm-2 col-form-label">Repeat password</label>
                <div class="col-sm-10">
                    <input type="password" name="pass_check" class="form-control" id="inputCheckPassword">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg d-block mx-auto mt-3">Отправить</button>
        </form>
    </div>


</div>

</body>
</html>