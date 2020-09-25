--create NEW DB imgupload

create table user (
  id int(11) not null primary key auto_increment,
  first varchar(256) not null,
  last varchar(256) not null,
  username varchar(256) not null,
  password varchar(256) not null
);

create table profileimg (
  id int(11) not null primary key auto_increment,
  userid int(11) not null,
  status int(11) not null
);