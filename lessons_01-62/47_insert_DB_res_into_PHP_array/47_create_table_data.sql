create table data (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	text varchar(128) not null   
);

INSERT INTO data (text) 
VALUES (
    'The quick brown fox jumps over the lazy dog.'
);

INSERT INTO data (text) 
VALUES (
    'and again.'
);

INSERT INTO data (text) 
VALUES (
    'aaand once more.'
);