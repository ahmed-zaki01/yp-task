-- seed categories table --

insert into `categories` (`name`) values ('web development');
insert into `categories` (`name`) values ('ui development');
insert into `categories` (`name`) values ('desktop development');
insert into `categories` (`name`) values ('mobile development');
insert into `categories` (`name`) values ('data science');


-- seed cities table --

insert into `cities` (`name`) values ('cairo');
insert into `cities` (`name`) values ('giza');
insert into `cities` (`name`) values ('fayoum');
insert into `cities` (`name`) values ('alexandria');

-- seed areas table --

insert into `areas` (`name`, `city_id`) values ('helwan', 1);
insert into `areas` (`name`, `city_id`) values ('maadi', 1);
insert into `areas` (`name`, `city_id`) values ('nasr city', 1);
insert into `areas` (`name`, `city_id`) values ('haram', 2);

