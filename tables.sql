drop table data;

create table data
(id integer not null AUTO_INCREMENT PRIMARY KEY,
user varchar(20) not null,
location varchar(20) not null,
comment varchar(500),
upload double,
download double);