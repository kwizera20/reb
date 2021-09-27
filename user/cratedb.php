create table users1(
    id int(10) not null primary key auto_increment,
    title char(10) not null,
    firstname char(50) not null,
    lastname char(50) not null,
    gender char(10) not null,
    phone text(30) not null,
    email text(50) not null,
    role text(100) not null,
    department char(50) not null,
    unit text(10) not null,
    picture text(100) not null,
    pwd text(100)not null

)