# muse_website_php 🐘
Project from the ÜK307 with some first experiences in painful PHP

# How to setup

<ol>
  <li>Install <a href="https://www.apachefriends.org/index.html">XAMPP</a></li>
  <li>Place the files under <b>xampp\htdocs</b></li>
  <li>Configure phpMyAdmin</li>
  <li>Create two Databases called <b>login_system</b> & <b>message_system</b></li>
</ol>

## SQL Script for DB login_system

```sql
CREATE TABLE benutzer (
idBenutzer int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
bidBenutzer TINYTEXT NOT NULL,
emailBenutzer TINYTEXT NOT NULL,
pwtBenutzer LONGTEXT NOT NULL
);
```

## SQL Script for DB login_system

```sql
CREATE TABLE messages (
msg_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
msgDateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
msgBid TINYTEXT,
msgVorname TINYTEXT NOT NULL,
msgNachname TINYTEXT NOT NULL,
msgEmail TINYTEXT NOT NULL,
msgmessage LONGTEXT NOT NULL
);
```

## Check if phpMyAdmin Login is correct

In file [dbh.inc.php](https://github.com/Hiekkan/muse_website_php/tree/main/website/include/dbh.inc.php) & [dbh2.inc.php](https://github.com/Hiekkan/muse_website_php/tree/main/website/include/dbh2.inc.php) check if username and password is the same in phpMyAdmin

```php
$dbBenutzer = "root";
$dbPasswort = "";
```

PS: DON'T CONFIGURE THE DATABASE LIKE THAT IN REAL PROJECTS, SEVERE PROBLEMS AND MOCKERY COULD RESULT FROM THIS

# Credits

A certain dude helped me. Unfortunately he's too lazy to set up a github account, so I am unable to give him credit
