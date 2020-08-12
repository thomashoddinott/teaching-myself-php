--from `http://localhost/phpmyadmin/db_sql.php?db=phplessons` we can use the SQL console to execute SQL: 
--e.g.
create table posts (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	subject varchar(128) not null,
  content varchar(100) not null,
  date datetime not null   
);