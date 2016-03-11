# songLab

#### Upload your unfinished music project and find other artists to help bring your song to life.

#### By: _**Jared Beckler, Torrence Stratton, Jessica Fix, Brooke Hurford, Taylor Pokoj**_

## Description

SongLab is a music collaboration website where users can browse and upload musical projects in need of creative collaboration. Users make profiles to keep track of their uploaded projects, to summarize their musical involvement, and to message other users with collaboration requests.

## Setup/Installation Requirements

* _Clone the Repository at_ https://github.com/jaredbeckler/song-lab
* _In your terminal, navigate to the project's main folder and run `composer install` to get Silex, Twig, and PHPUnit installed._
* _Navigate to the project's web folder using terminal and enter `php -S localhost:8000`_
* _Open PHPMyAdmin by going to localhost:8080/phpmyadmin in your web browser_
* _In phpmyadmin choose the Import tab and choose your database file and click "Go"._
* _In your web browser enter localhost:8000 to view the web app._

**If you are not able to import the databases:**
* _Open MAMP and Start Servers_
* _In your terminal enter `/Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot`_
* _Next, enter the following commands into your mySQL shell:_
1. `CREATE DATABASE songlab;`
2. `USE songlab;`
3. `CREATE TABLE collaborations (id serial PRIMARY KEY, project_id INT, user_id INT);`
4. `CREATE TABLE messages (id serial PRIMARY KEY, message TEXT, sender VARCHAR(255), project_id INT);`
5. `CREATE TABLE messages_user (id serial PRIMARY KEY, message_id INT, user_id INT);`
6. `CREATE TABLE projects (id serial PRIMARY KEY, title VARCHAR(255), description TEXT, genre VARCHAR(255), resources VARCHAR(8000), lyrics TEXT, type VARCHAR(255), user_id INT);`
7. `CREATE TABLE users (id serial PRIMARY KEY, first_name VARCHAR(255), last_name VARCHAR(255), email VARCHAR(255), username VARCHAR(255), bio MEDIUMTEXT, photo VARCHAR(700), password VARCHAR(15));`
8. `CREATE DATABASE songlab_test;`
9. `USE songlab_test;`
10. `CREATE TABLE collaborations (id serial PRIMARY KEY, project_id INT, user_id INT);`
11. `CREATE TABLE messages (id serial PRIMARY KEY, message TEXT, sender VARCHAR(255), project_id INT);`
12. `CREATE TABLE messages_user (id serial PRIMARY KEY, message_id INT, user_id INT);`
13. `CREATE TABLE projects (id serial PRIMARY KEY, title VARCHAR(255), description TEXT, genre VARCHAR(255), resources VARCHAR(8000), lyrics TEXT, type VARCHAR(255), user_id INT);`
14. `CREATE TABLE users (id serial PRIMARY KEY, first_name VARCHAR(255), last_name VARCHAR(255), email VARCHAR(255), username VARCHAR(255), bio MEDIUMTEXT, photo VARCHAR(700), password VARCHAR(15));`


## Known Bugs

* _Because of pathing, back button won't work at times._
* _After deleting account, no modals work on the rendered homepage._

## Support and contact details

_Please contact any of us through GitHub with any questions, comments, or concerns._

## Technologies Used

* _Composer_
* _Twig_
* _Silex_
* _PHPUnit_
* _PHP_
* _mySQL_
* _Apache Server_
* _HTML_
* _CSS / Sass_
* _Materialize_
* _Bourbon_

### License

**This software is licensed under the MIT license.**

Copyright (c) 2016 **_Jared Beckler, Torrence Stratton, Jessica Fix, Brooke Hurford, Taylor Pokoj_**
