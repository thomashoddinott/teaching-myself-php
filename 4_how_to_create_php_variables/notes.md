`.` operator used to concatenate strings with variables in php

```php
  $name = "Bob Ross";
  echo $name. " is a handsome fellow";
```

Passing data along the url

```php
<!-- //GET passes to URL -->
<form method="GET"> 
  <input type="text" name="person">
  <button>SUBMIT</button>
</form>
```

e.g. 

```
http://localhost/teaching-myself-php/4_how_to_create_php_variables/?person=Bob+Ross
```

Using `$_GET` to retrieve that data:

```php
  $name = $_GET['person'];
  echo $name. " is a handsome fellow";
```

example of a turnary in php:

```php
  $name = !empty($_GET['person']) ? $_GET['person'] : '...';
```