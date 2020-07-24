Using [XAMPP](https://www.apachefriends.org/download.html) for this tutorial 

Find the XAMPP control panel and hit run on the `Apache` and `MySQL` services

Navigate to `localhost/myphpadmin` to check that's all working 

What about Postgres? 

https://stackoverflow.com/questions/11593602/differences-between-postgresql-and-mysql-for-php-developers

^ There are pros and cons

Next, delete everything in `xampp/htdocs` and make a new root folder for our website, e.g. `phplessons`

Go ahead and plop a hello world script `index.php` in that folder:

```
<?php
//sort out spaces, set default tab = 2 spaces
    echo "Hello, world!";
?>
```

and navigate to `localhost/phplessons/index.php`