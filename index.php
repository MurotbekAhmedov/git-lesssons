<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="register_form">
                <?php if (isset($user_is_created) && $user_is_created != false): ?>
        <div class="alert alert-success" role="alert">
            Форма отправлена успешно!
        </div>
        <?php  elseif (isset($user_is_created) && $user_is_created == false ): ?>
        <div class="alert alert-danger" role="alert">
            Форма не отправлена!Заполните обязательные поля Email,First name,Password!
        </div>
        <?php  else: ?>

        <?php endif; ?>
            <h1>Свяжитесь с нами!</h1>
            <form action="check.php" method="post">
                <div class="form-group">
                    <label for="emailAdress">Email адресс</label>
                    <input type="email" name="email" class="form-control" id="emailAdress" aria-describedby="emailHelp" placeholder="Введите email">
                </div>
                <div class="form-group">
                    <label for="firstname">Имя</label>
                    <input type="text" name="firstname" class="form-control" id="firstname"  placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="pass">Пароль</label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">
                </div>
                <div class="form-check">
                    <input type="checkbox"  value="Студент" name="positionjob" class="form-check-input" id="checkbox-1" checked>
                    <label class="form-check-label" for="checkbox-1" >Студент</label>
                </div>
                <div class="form-check">
                    <input type="checkbox"  value="Сотрудник" name="positionjob" class="form-check-input" id="checkbox-2">
                    <label class="form-check-label" for="checkbox-2">Сотрудник</label>
                </div>
                <div class="form-group">
                    <label for="level">Уровень</label>
                    <select class="form-control" name="level" id="level">
                    <option>Intern</option>
                    <option>Junior</option>
                    <option>Middle</option>
                    <option>Senior</option>
                    </select>
                </div>
                <h4>Основной язык</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="language" id="language1" value="ru" checked>
                        <label class="form-check-label" for="language1">
                        Русский
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="language" id="language2" value="en">
                        <label class="form-check-label" for="language2">
                            Английский
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="language" id="language3" value="uz">
                        <label class="form-check-label" for="language3">
                            Узбекский
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="coments">Коментарии</label>
                        <textarea class="form-control" name="coments" id="coments" rows="3"></textarea>
                    </div>
                <div class="form-group">
                    <label for="fileControl">Выберите файл</label>
                    <input type="file" name="file" class="form-control-file" id="fileControl">
                </div>
                <input type="reset" class="btn btn-primary reset" value="Reset">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <a href="result.php" class="badge badge-success">Результаты</a>


    </div>
</body>
</html>