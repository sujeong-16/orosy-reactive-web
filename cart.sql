create table cart(
  /* auto_increment = 자동으로 num값 증가
  no=num값, name=상품명, comment=짧은설명,
  price=금액, img=해당 이미지
  */
  no int(11) not null auto_increment,
  name varchar(50) not null,
  comment varchar(200) not null,
  price int(11) not null,
  img varchar(30),
  primary key(no)
)engine=innoDB charset=utf8;