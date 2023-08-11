/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  11/08/2023 12:12:01                      */
/*==============================================================*/


drop table if exists apprenants;

drop table if exists tuteurs;

/*==============================================================*/
/* Table : apprenants                                           */
/*==============================================================*/
create table apprenants
(
   id_apprenants        int not null,
   id_tuteurs           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   age                  int,
   telephone            int,
   email                varchar(254),
   primary key (id_apprenants)
);

/*==============================================================*/
/* Table : tuteurs                                              */
/*==============================================================*/
create table tuteurs
(
   id_tuteurs           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   telephone            int,
   email                varchar(254),
   genre                varchar(254),
   primary key (id_tuteurs)
);

alter table apprenants add constraint FK_association1 foreign key (id_tuteurs)
      references tuteurs (id_tuteurs) on delete restrict on update restrict;

