create database agenda_de_turnos;
use agenda_de_turnos;

drop table if exists patients;
create table patients(
	patientId int auto_increment,
	name varchar(20),
	lastname varchar(20),
	phone varchar(20),
    constraint PK_patientId primary key (patientId)
);

delete from patients;
insert into patients (name, lastname, phone) 
	values 	("Alex","Echeverria","2234334234"), 
			("Gustavo","Lencinas","23432423"), 
            ("Maira","Echeverria","34534554"),
            ("Maria","Gomez","435345"),
            ("Lit","Killah","3423423"),
            ("Adrian","Suar","8678679"),
            ("Ricardo","Darin","213246745");
select * from patients;

drop table if exists descriptions;
create table descriptions(
	descriptionId int auto_increment,
	description varchar(20),
    constraint PK_descriptionId primary key (descriptionId)
);

delete from descriptions;
insert into descriptions (description) 
	values ("Cleaning"),("Consultation"),("Revision"),("Operation"),("Other");
select * from descriptions;

drop table if exists turns;
create table turns(
	turnId int auto_increment,
	patientId int,
	date varchar(20),
	hour varchar(20),
	description varchar(20),
	constraint PK_turnId primary key (turnId)
);

delete from turns;
insert into turns (patientId, date,hour, description) 
	values (1,"2023-03-03","12:20","1"), 
			(2,"2023-03-13","10:30","2"),
            (3,"2023-03-04","17:30","3"),
            (4,"2023-03-12","11:00","4"),
			(5,"2023-04-13","23:10","5");
select * from turns;

select 	t.turnId,
		t.patientId,
		t.date,
		t.hour,
		t.description,
        concat(p.name, " ", p.lastname) as "Patient",
        d.description as "Description"
        from turns t 
        inner join patients p on t.patientId = p.patientId
        inner join descriptions d on t.description = d.descriptionId;
        
delete from turns where turnId between 6 and 8;
select * from turns;
    