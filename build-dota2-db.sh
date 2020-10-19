#!/bin/bash
###########################################################################################################
#create database and table for Dota2 account 
#Printing a colored output
#Producing a colored output on the terminal is very interesting and is achieved by using escape sequences

#Colors are represented by color codes, some examples being, reset = 0, black = 30, red = 31,
#green = 32, yellow = 33, blue = 34, magenta = 35, cyan = 36, and white = 37.

#For a colored background, reset = 0, black = 40, red = 41, green = 42, yellow = 43, blue = 44,
#magenta = 45, cyan = 46, and white=47, are the color codes that are commonly used.

############################################################################################################

mysql -h db.gnsina.net -u master -p --default_character_set utf8 << EOF

CREATE DATABASE Dota2_db;

use Dota2_db;

#INSERT INTO Account 
#(Name, Surname, Username, Password, Email, Mobile, Birthday)VALUES('$Name','$Surname','$Username','$Password','$Email','$Mobile','$Birthday');

#quit

CREATE TABLE Account (

	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(100),
	Surname VARCHAR(100),
	Username VARCHAR(100),
	Password VARCHAR(100),
	Email VARCHAR(100),
	Mobile VARCHAR(50),
	Birthday DATE
);

#INSERT into Account VALUES ('$Name','$Surname','$USername','$Password','$Email','$Mobile','$birthday',);
quit

EOF

