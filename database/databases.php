CREATE DATABASE task;

create table task(
    id int not null auto_increment primary key,
    title varchar(255),
    description text,
    created_task timestamp DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE products(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    description text
);

CREATE TABLE categories(
 	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(50),
    description text
)