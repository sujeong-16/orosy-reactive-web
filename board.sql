create table board(
   /* num=제목번호, auto_increment → 자동 +1, not null → 비어있으면 안됨
      id=아이디, name=이름, subject=글제목, content=글내용,
      to_day=오늘날짜, hit=조회수, is_html=? */
   num int not null auto_increment,
   id varchar(15) not null,
   name varchar(10) not null,
   subject varchar(100) not null,
   content text not null,
   to_day varchar(20),
   hit int,
   is_html varchar(1),
   primary key(num)
)engine=innoDB charset=utf8;