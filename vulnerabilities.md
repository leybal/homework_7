Asgard Security Scanner не удалось установить, по этому поставил Better WP Security и Wordfence. Работая на локале исключаю FTP.
Первоначальные проблемы с безопасностью:
1) The admin user still exists.
2) Your login area is not protected from brute force attacks.
3) You are not enforcing strong passwords for any users.
4) A user with id 1 still exists.
5) Your website is not looking for changed files. Consider turning on file change detections.
6) Your WordPress site is not blocking suspicious looking information in the URL. Click here to block users from trying to execute code that they should not be able to execute.
7) Your database table prefix should not be wp_.

В плагине CP Multi View Event Calendar выполняется обращение к базе данных с помощью стандартных PHP команд.
