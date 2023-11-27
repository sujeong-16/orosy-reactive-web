create table orosy(
  id varchar(15) not null,
  pw varchar(20) not null,
  name varchar(12) not null,
  email varchar(80) not null,
  phone int(20),
  primary key(id)
)engine=innoDB charset=utf8;