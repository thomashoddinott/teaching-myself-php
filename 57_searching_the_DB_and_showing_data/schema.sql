--create database dbphpsearch

create table article (
  a_id int(11) not null primary key auto_increment,
  a_title varchar(256) not null,
  a_text text not null,
  a_author varchar(256) not null,
  a_date datetime not null
);

insert into article (a_title, a_text, a_author, a_date)
values (
  '50 great summer recipes',
  'There are many recipes you can create for the summer which involve grilling, boiling, frying and toasting',
  'Admin',
  '2017-11-25 12:23:11'
  );

insert into article (a_title, a_text, a_author, a_date)
values (
  'A series of computer software',
  'In this article, you will learn about some of the software used on computers.',
  'Daniel Nielsen',
  '2017-11-25 12:23:11'
  );