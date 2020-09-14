--create database php62

create table keystring (
  keystringId int(11) not null primary key auto_increment,
  keystringKey varchar(256) not null
);

insert into keystring (keystringKey)
values ('a');
insert into keystring (keystringKey)
values ('b');
insert into keystring (keystringKey)
values ('c');