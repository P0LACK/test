1. Установка и запуск OpenServer:

    Скачайте и установите OpenServer с официального сайта: OpenServer.
    Запустите OpenServer. После запуска в правом нижнем углу появится значок OpenServer (зеленый квадрат).
    Щелкните по значку OpenServer и выберите пункт меню "PhpMyAdmin". Это откроет интерфейс управления базами данных.

2. Создание базы данных:

    В интерфейсе phpMyAdmin перейдите на вкладку "Базы данных".
    Введите название базы данных (например, project) в поле "Создать базу данных" и нажмите кнопку "Создать".

3. Импорт структуры базы данных:

    На вкладке "Импорт" выберите файл test.sql, который содержит структуру базы данных проекта.
    Нажмите кнопку "Выполнить".

4. Размещение файлов проекта:

    Скопируйте все файлы проекта в папку domains внутри папки, где установлен OpenServer (по умолчанию это OSPanel/domains).

5. Запуск сервера:

    Убедитесь, что сервер Apache и сервер MySQL запущены в OpenServer. Вы можете проверить это, щелкнув по значку OpenServer в трее Windows.
    Если сервера запущены, веб-приложение должно быть доступно по адресу http://localhost.

6. Вход в систему:

    Откройте браузер и введите адрес http://localhost/auth/login.php.
    Войдите в систему, используя учетные данные, которые установилены в файле auth/login.php.
