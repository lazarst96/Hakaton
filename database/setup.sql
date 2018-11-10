drop database if exists `pmf`;

create database `pmf`
	default character set utf8
	default collate utf8_general_ci
;

use `pmf`;

create table user (
	id int auto_increment not null primary key,
	email varchar(64) not null,
	name varchar(64) not null,
	password varchar(256),
	citizen_id varchar(16) not null
);

create table patient (
	user_id int not null primary key,
	phone varchar(32),
	foreign key (user_id) references user(id)
		on delete cascade
		on update cascade
);

create table doctor (
	user_id int not null primary key,
	foreign key (user_id) references user(id)
		on delete cascade
		on update cascade
);

create table therapy (
	id int not null primary key,
	patient_id int not null,
	doctor_id int not null,
	open_time datetime,
	close_time datetime,
	name varchar(128),
	description text,
	period int,

	foreign key (patient_id) references patient(user_id)
		on delete cascade
		on update cascade,

	foreign key (doctor_id) references doctor(user_id)
		on delete cascade
		on update cascade
);

create table reminder (
	id int not null primary key,
	therapy_id int not null,
	`time` datetime,
	visited datetime,

	foreign key (therapy_id) references therapy(id)
		on delete cascade
		on update cascade
);

create table report (
	id int not null primary key,
	therapy_id int not null,
	`time` datetime,
	`description` text,

	foreign key (therapy_id) references therapy(id)
		on update cascade
		on delete cascade
);

create table image (
	id int not null primary key,
	source varchar(256) not null,
	report_id int not null,

	foreign key (report_id) references report(id)
		on update cascade
		on delete cascade
);
