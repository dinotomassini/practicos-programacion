create if not exist database alumnosbd;
use alumnosbd;
create table alumnos(
  mail varchar(80) primary key,
  nombre varchar(20) not null
);
insert into alumnos values('dino@dino.com','Dino Tomassini');
insert into alumnos values('emma@emma.com','Emma Tomassini');
insert into alumnos values('leon@leon.com','Leon De Los Heros');
