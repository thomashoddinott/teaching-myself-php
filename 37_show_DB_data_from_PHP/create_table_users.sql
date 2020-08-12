create table users (
	user_id int(11) auto_increment primary key not null,
	user_first varchar(256) not null,
	user_last varchar(256) not null,
	user_email varchar(256) not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null
);

insert into users(user_first, user_last, user_email, user_uid, user_pwd)
values ('Hank', 'Hill', 'hh@koth.com', 'Admin', 'test123');

insert into users(user_first, user_last, user_email, user_uid, user_pwd)
values ('Jane', 'Doe', 'jane@gmail.com', 'jane245a', 'test1234');