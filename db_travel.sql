set foreign_key_checks=0;

drop table if exists pelanggan;

set foreign_key_checks=1;

CREATE TABLE pelanggan
(
Username varchar(30) primary key not null,
Nama varchar(30) not null,
Alamat varchar(50) not null default 'Tidak Diketahui',
No_Telp char(13) not null,
Email varchar(30) not null,
Password varchar(30) not null
)ENGINE=InnoDb;

INSERT INTO pelanggan (Username, Nama, Alamat, No_Telp, Email, Password)
VALUES
	('ika','Ika Widya','Jl.Cijawura Hilir','-','ikawidyaa@gmail.com','123456'),
	('widya','Widya Ika','Jl.Ciwastra','-','widyaa@gmail.com','qwerty'),
	('dina','Dina Magdalena','Jl.Kopo','-','dinamg@gmail.com','123456'),
	('euis','Euis Siti','Jl.Soreang','-','euissiti@gmail.com','123456');

#---
SELECT "MEMBER" AS "MEMBER";
#---
	
SELECT * FROM pelanggan;

/*
set foreign_key_checks=0;
DROP TABLE IF EXISTS pool;
set foreign_key_checks=1;
CREATE TABLE pool
(
Id_Pool char(20) primary key not null,
Pool varchar(21) not null
)ENGINE=InnoDb;

INSERT INTO pool (Id_Pool, Pool)
VALUES
	('1','Bandung1'),
	('2','Bandung2');
	
#---
SELECT "POOL" AS "POOL";
#---
SELECT * FROM pool;

set foreign_key_checks=0;
DROP TABLE IF EXISTS tujuan;
set foreign_key_checks=1;
CREATE TABLE tujuan
(
Id_Tujuan char(20) primary key not null,
Tujuan varchar(21) not null
)ENGINE=InnoDb;

INSERT INTO tujuan (Id_Tujuan, Tujuan)
VALUES
	('1','Jakarta'),
	('2','Bekasi'),
	('3','Bogor'),
	('4','Tangerang'),
	('5','Depok'),
	('6','Yogjakarta'),
	('7','Solo'),
	('8','Surabaya');

#---
SELECT "TUJUAN" AS "TUJUAN";
#---
SELECT * FROM tujuan;
*/


set foreign_key_checks=0;
DROP TABLE IF EXISTS trayek;
set foreign_key_checks=1;


CREATE TABLE trayek
(
Id_Trayek char(20) primary key not null,
Pool varchar(20) not null,
Tujuan varchar(20) not null,
Kode_Tempat int(11) not null,
Harga char(30) not null
)ENGINE=InnoDb;

INSERT INTO trayek (Id_Trayek, Pool, Tujuan, Kode_Tempat, Harga)
VALUES
	('1','Cabang1','Jakarta',1234,'100000'),
	('2','Cabang2','Jakarta',2345,'50000'),
	('3','Cabang1','Depok',1234,'50000'),
	('4','Cabang2','Bogor',2345,'50000');
	
#---
SELECT "TRAYEK" AS "TRAYEK";
#---
SELECT * FROM trayek;

set foreign_key_checks=0;

DROP TABLE if exists waktu;

set foreign_key_checks=1;

CREATE TABLE waktu
(
Id_Waktu char(20) primary key not null,
Waktu time not null
)
ENGINE=InnoDb;

INSERT INTO waktu (Id_Waktu, Waktu)
values
	('1','07:00'),
	('2','08:00'),
	('3','09:00'),
	('4','10:00'),
	('5','11:00'),
	('6','12:00'),
	('7','13:00'),
	('8','14:00'),
	('9','15:00'),
	('10','16:00'),
	('11','17:00');

#---
SELECT "WAKTU" AS "WAKTU";
#---
SELECT * FROM waktu;

set foreign_key_checks=0;

DROP TABLE if exists jadwal;

set foreign_key_checks=1;

CREATE TABLE jadwal
(
Id_Jadwal char(20) primary key not null,
Id_Trayek char(20)  not null,
Id_Waktu char(20) not null,
foreign key (Id_Trayek) references trayek(Id_Trayek)
on delete cascade on update cascade,
foreign key (Id_Waktu) references waktu(Id_Waktu)
on delete cascade on update cascade
)
ENGINE=InnoDb;

INSERT INTO jadwal (Id_Jadwal, Id_Trayek, Id_Waktu)
VALUES
	('1','1','1'),
	('2','1','1'),
	('3','2','1'),
	('4','2','2'),
	('5','3','2'),
	('6','3','2');

#---
SELECT "JADWAL" AS "JADWAL";
#---	
SELECT * FROM jadwal;

set foreign_key_checks=0;

DROP TABLE if exists booking;

set foreign_key_checks=1;

CREATE TABLE booking
(
Id_Pesanan char(20) primary key not null,
No_Kursi char(2) not null,
Username varchar(30) not null,
Id_Jadwal char(20) not null,
Tanggal_Pesan date not null,
foreign key (Username) references pelanggan(Username)
on delete cascade on update cascade,
foreign key (Id_Jadwal) references jadwal(Id_Jadwal)
on delete cascade on update cascade
)
ENGINE=InnoDb;

INSERT INTO booking (Id_Pesanan, No_Kursi, Username, Id_Jadwal, Tanggal_Pesan)
values
	('1','1','ika','2','2014/10/20'),
	('2','2','euis','2','2014/10/21'),
	('3','3','dina','2','2014/10/22'),
	('4','4','widya','2','2014/10/20'),
	('5','5','ika','2','2014/10/20'),
	('6','6','euis','2','2014/10/21');

#---
SELECT "PESANAN" AS "PESANAN";
#---
SELECT * FROM booking;


	