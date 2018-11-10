use pmf;

delete from user;
delete from doctor;
delete from patient;
delete from therapy;

insert into user(id, email, name, password, citizen_id, type) values
	(1, 'dragisa4@eps.rs', 'Dragisa Stankovic', 'gaga1', '1104955730055', 0),
	(2, 'dankajov@ptt.rs', 'Danka Jovanovic', 'zucapariz', '0607956735044', 0),
	(3, 'zoran.kostic113@gmail.com', 'Zoran Kostic', 'pt.43#zz8', '0511968730033', 1)
;

insert into doctor(user_id) values
	(3)
;

insert into patient(user_id, phone) values
	(1, '064 8573941'),
	(2, '+381 66 7584851')
;

insert into therapy(id, patient_id, doctor_id, open_time, close_time,
	name, description, period) values

	(1, 1, 3, '2018-10-04 11:30:05', null, 'Atletsko stopalo', 'Pacijent ima atletsko stopalo. Prepisana je terapija preparatom atlex na svaka 3 dana.', 3),
	(2, 2, 3, '2009-11-05 08:22:54', '2013-11-23 15:05:13', 'Promena na melanomu', 'Pacijentu je preporuceno da prati promene na melanomu na levoj podlaktici jednom godisnje.', 365),
	(3, 2, 3, '2013-12-24 09:45:00', '2014-03-24 09:45:00', 'Operacija', 'Pracenje stanja posle operacije uklanjanja melanoma', 14);

insert into report(id, therapy_id, `time`, description) values
	(1, 1, '2018-10-07 11:30:05', 'Sve ok, mazem atlex.'),
	(2, 1, '2018-10-10 11:30:05', 'Sve ok, mazem atlex.'),
	(3, 1, '2018-10-13 11:30:05', 'Sve ok, mazem atlex.'),
	(4, 1, '2018-10-16 11:30:05', 'Sve ok, mazem atlex.'),
	(5, 1, '2018-10-19 11:30:05', 'Sve ok, mazem atlex.'),
	(6, 1, '2018-10-22 11:30:05', 'Sve ok, mazem atlex.'),
	(7, 1, '2018-10-25 11:30:05', 'Sve ok, mazem atlex.'),
	(8, 1, '2018-10-28 11:30:05', 'Sve ok, mazem atlex.'),
	(9, 1, '2018-10-31 11:30:05', 'Sve ok, mazem atlex.'),
	(10, 1, '2018-11-03 11:30:05', 'Sve ok, mazem atlex.'),
	(11, 1, '2018-11-06 11:30:05', 'Sve ok, mazem atlex.'),
	(12, 1, '2018-11-09 11:30:05', 'Sve ok, mazem atlex.'),

	(13, 2, '2009-11-08 08:22:54', 'Izgleda isto kao pre. Danka'),
	(14, 2, '2010-11-08 08:22:54', 'Izgleda isto kao pre. Danka'),
	(15, 2, '2011-11-08 08:22:54', 'Izgleda isto kao pre. Danka'),
	(16, 2, '2012-11-08 08:22:54', 'Izgleda isto kao pre. Danka'),
	(17, 2, '2013-11-08 08:22:54', 'Izgleda drugacije, saljem sliku. Danka'),

	(18, 3, '2013-12-26 09:22:54', 'Dobro sam, malo me svrbe konci. Danka');

insert into image(id, report_id, source) values
	(1, 17, 'snoopy-2.png');
