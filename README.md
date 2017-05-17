Initial back-end mysql database in cloud9:

mysql-ctl cli;
CREATE USER 'mifeng'@'%' IDENTIFIED BY 'mifeng';
GRANT ALL PRIVILEGES ON *.* TO 'mifeng'@'%' WITH GRANT OPTION; 

after that you can tab:"mysql -u mifeng -p'mifeng';" to get into the back-end mysql database;
Then create tables:

create database forum;
use forum;

CREATE TABLE users (
user_name   VARCHAR(30) NOT NULL,
user_pw   VARCHAR(255) NOT NULL,
PRIMARY KEY (user_name)
) engine=INNODB;

CREATE TABLE topics (
topic_name       VARCHAR(255) NOT NULL,
user_name		 VARCHAR(30) NOT NULL,
topic_detail     VARCHAR(255) NOT NULL,
FOREIGN KEY (user_name) REFERENCES users(user_name),
PRIMARY KEY (topic_name)
) engine=INNODB;

CREATE TABLE comments (
comment_detail      VARCHAR(255) NOT NULL,
topic_name    VARCHAR(255) NOT NULL,
user_name      VARCHAR(30) NOT NULL,
FOREIGN KEY (user_name) REFERENCES users(user_name),
FOREIGN KEY (topic_name) REFERENCES topics(topic_name),
PRIMARY KEY (comment_detail)
) engine=INNODB;


