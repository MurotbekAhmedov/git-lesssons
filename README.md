# Настройка сервера
На сервере устанавливаем для работы Phpmailer: sudo apt-get install libphp-phpmailer -y
# Настройка почты
В файле check.php в строке $mail->addAddress("murotahmedoc@gmail.com", "Админ"); указываем свой почтовый адрес
# Настройка Бд
В бд utf8_general_ci используеться
в строке mysql в консоле можно так создать
CREATE TABLE `bd_auth`. (`id` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `firstname` VARCHAR(255) NOT NULL , `pass` INT(11) NOT NULL , `positionjob` VARCHAR(255) NOT NULL , `level` VARCHAR(255) NOT NULL , `language` VARCHAR(255) NOT NULL , `comments` VARCHAR(255) NOT NULL , `file` BLOB NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
В phpmyadmin настройка
Имя базы данных bd_auth
Имя таблицы users
id int 11 A_I
email varchar 255
firstname varchar 255
pass int 11
positionjob varchar 255
level varchar 255
language varchar 255
comments varchar 255
file blob 20
# Бэкап
бэкап бд bd_auth.sql в корневом папке project.devel