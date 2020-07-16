Perquisites: HTML, CSS

You don't need to know JS, but knowing it will help. 

As with nodeJS, PHP helps make your sites more dynamic than using HTML and CSS alone. Difference being, PHP is SSR. nodeJS can be made SSR compatible with libraries like nextJS. 

WordPress and Facebook use PHP.

It's easy to learn.

Really easy to talk to the DB

e.g. 

```php
<?php
// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=publishing user=www password=foo")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM authors';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
```

You write HTML in your .php files. Similar to JSX for React. 