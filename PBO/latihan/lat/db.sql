create database data;

use data;

create table `mahasiswa` (
    `id` int(10) NOT NULL auto_increment,
    `nama` varchar(100),
    `prodi` varchar(100),
    primary key (`id`)
);