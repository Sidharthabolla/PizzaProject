-- Portable script for creating the pizza database
-- on your dev system:
-- mysql -u root -p < dev_setup.sql    
-- mysql -D pizzadb -u root -p < createdb.sql 
--  or, on topcat:
-- mysql -D <user>db -u <user> -p < createdb.sql 
create table pizza_size(
id integer not null auto_increment,
s_status integer not null,  -- 0 = inactive, 1 = active
size_name varchar(30) not null,
primary key (id),
unique (size_name));

create table pizza_orders(
id integer not null auto_increment,
room_number integer not null,
size_id integer not null,
day integer not null,
status integer not null, -- 1 , 2, 3 (see PizzaOrder.java)
primary key(id),
foreign key (size_id) references pizza_size(id));

create table toppings(
id integer not null auto_increment,
t_status integer not null,  -- 0 = inactive, 1 = active
topping_name varchar(30) not null,
primary key(id),
unique (topping_name));

create table order_topping (
order_id integer not null,
topping_id integer not null,
primary key (order_id, topping_id),
foreign key (order_id) references pizza_orders (id),
foreign key (topping_id) references toppings(id));

create table pizza_sys_tab (
next_order_id integer not null, -- not in use with auto_increment
next_topping_id integer not null, -- not in use with auto_increment
next_size_id integer not null, -- not in use with auto_increment
current_day integer not null);

insert into pizza_sys_tab values (1, 1, 1, 1);

-- minimal toppings and sizes: one each
insert into toppings values (1,1,'Pepperoni');
insert into pizza_size values (1,1,'small');
