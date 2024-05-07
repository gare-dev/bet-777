create database loginRegisterDb;
use loginRegisterDb;

select * from login;

create table login(

	id 		int auto_increment primary key,
    login 	varchar(20),
    senha 	varchar (15),
    tip		varchar(20)
    
);

delete from login 
where id = "34";

alter table login add column money double;

