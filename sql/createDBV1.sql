drop database if exists bookappointment;
create database bookappointment;
use bookappointment;

create table appointmentbooking (
    id int auto_increment,
    bookingtime varchar(30),
    bookingdate varchar(30),
    treatment varchar(30),
    primary key (id)
);

create table patientname (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    primary key (id)
);

create table patientappointment (
    id int auto_increment,
    appointmentid int,
    patientid int,
    primary key (id)
);
