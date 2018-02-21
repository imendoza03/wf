create database test default character set= utf8 collate= utf8_bin;
use test;
create table roles(
id int unsigned not null auto_increment primary key,
createdAt datetime not null,
label varchar(50) null);
