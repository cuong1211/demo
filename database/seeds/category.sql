drop database category;
create database `category` default character set utf8 collate utf8_general_ci;

use category;

create table category
(
    id int primary key not null auto_increment,
    name varchar(100) not null unique,
    status tinyint(1) default '1',
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp
);


insert into category(name)
values
('ao nam'),
('ao nu'),
('ao thun'),
('ao dai'),
('ao ngan'),
('quan dai'),
('quan dui'),
('quan lung'),
('quan jean'),
('quan ngo'),
('vay'),
('tui xach'),
('vi da'),
('vong deo tay'),
('vong trang suc');


