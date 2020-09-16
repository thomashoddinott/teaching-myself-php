-- create DB galleryexample

create table gallery (
  idGallery int(11) auto_increment primary key not null,
  titleGallery longtext not null,
  descGallery longtext not null,
  imgFullNameGallery longtext not null,
  orderGallery longtext not null
);