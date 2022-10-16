To run this project you pull it and using terminal go /public and type in: php -S 127.0.0.1:8000

There is a small role system includes 2 roles: Admin and User, so there are 2 seeds for Log In: 
admin - (login: Admin, password: 123123), user (login: Oleg, password: 123123)

The Database is configured as sqlite database, also you can try MySql, but you shuold install it and change connection method manually
in /vendor/db/Connection.php uncommennt 25-th line and comment 26-th line, ofc you should change config data in /congfig.php
