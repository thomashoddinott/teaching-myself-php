-- create DB galleryexample

create table gallery (
  idGallery int(11) auto_increment primary key not null,
  titleGallery longtext not null,
  descGallery longtext not null,
  imgFullNameGallery longtext not null,
  orderGallery longtext not null
);

-- init table with something

INSERT INTO gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
VALUES
	('Python', 'The Python logo', 'python.jpg', '1'),
	('JavaScript', 'The JavaScript logo', 'JS.png', '2'),
	('Elixir', 'The Elixir logo', 'elixir.png', '3')
;