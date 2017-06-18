<?php include ROOT . '/layouts/header.php'; ?>
    <!-- Header -->
    <header>
        <div class="container auth-form" id="maincontent" tabindex="-1">
            <div class="row">
                <form class="form-horizontal" >
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="login">Логин:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="login" placeholder="Введите логин">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="password">Пароль:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="password" placeholder="Введите пароль">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-7 col-md-2">
                            <button type="submit" name="submit" class="btn btn-default btn-block">Вход</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
<?php include ROOT . '/layouts/footer.php'; ?>