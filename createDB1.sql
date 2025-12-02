drop database if exists bookappoinment;
create database bookappoinment;
use bookappoinment;
create table appointmentbooking (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    primary key(id)
);
create table patientname (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    primary key(id)
);