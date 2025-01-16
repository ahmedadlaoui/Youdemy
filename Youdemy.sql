Create DATABASE Youdemy;
-- @block
USE Youdemy;
-- @block
CREATE table tags(
    tag_id int primary key auto_increment,
    tag_title varchar(100) not null unique
);
-- @block
create table category(
    category_id int primary key auto_increment,
    category_title varchar(100) not null unique
);

-- @block
CREATE TABLE courses_library(
    user_id int not null,
    course_id int not NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
);
-- @block 
CREATE TABLE assigned_tags(
    course_id int not null,
    tag_id int not null,
    FOREIGN KEY (course_id) REFERENCES courses(course_id),
    FOREIGN KEY (tag_id) REFERENCES tags(tag_id)
)

-- @block
ALTER TABLE users
MODIFY is_suspended BOOLEAN DEFAULT FALSE;
ALTER TABLE users
MODIFY is_active BOOLEAN DEFAULT FALSE;
-- @block

SELECT * FROM users;
-- @block
CREATE TABLE users(
    user_id int primary key auto_increment,
    user_fullname varchar(30) not null,
    email varchar(100) not null unique,
    password varchar(200) not null,
    profile_pic varchar(400),
    is_suspended boolean,
    is_active boolean
    role ENUM('student', 'admin', 'teacher') NOT NULL
);

--@block
DESCRIBE tags;

-- @block
create table courses(
    course_id int primary key auto_increment,
    course_title varchar(100) not null,
    course_description varchar(400) not null,
    Teacher_ID int not null,
    category_id int not null,
    course_banner varchar(200),
    course_type enum('video', 'text'),
    video_content varchar(300),
    text_content text,
    FOREIGN KEY (Teacher_ID) REFERENCES users(user_id),
    FOREIGN KEY (category_id) REFERENCES category(category_id)
);
-- @block
SELECT * FROM tags ;