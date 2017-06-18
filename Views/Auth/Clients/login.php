<?php include ROOT . '/layouts/header.php'; ?>


    <!-- Header -->
    <header>
        <div class="container auth-form" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul class="list-group">
                            <?php foreach ($errors as $error): ?>
                                <li class = 'list-group-item-danger'> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <form class="form-horizontal" method="POST" action="/clients/auth">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="login">Логин:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" value="<?= $login; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="password">Пароль:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" value="<?= $password; ?>" required>
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