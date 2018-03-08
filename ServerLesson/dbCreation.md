```sql
create table `register` . `user` (
	id int unsigned auto_increment primary key,
    username varchar(255),
	`password` varchar(255)
)
engine = InnoDB
default character set  = utf8
collate = utf8_bin;
```
