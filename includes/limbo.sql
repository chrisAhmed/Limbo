/*Assignment #2- Database Design
Jackie Trivino and Chris Ahmed*/

DROP DATABASE IF EXISTS limbo_db;
CREATE DATABASE IF NOT EXISTS limbo_db;
USE limbo_db;


CREATE TABLE IF NOT EXISTS stuff (
	stuff_id                  INT           AUTO_INCREMENT,
	stuff_name                TEXT          NOT NULL,
	description               TEXT          NOT NULL,
	location                  TEXT          NOT NULL,
	room_lf                 INT            not null ,
	date_lf                 datetime          not null ,
	name                      text                not null, 
	phone                     int                  not null, 
	dorm                      text not null, 
	room_num                  int not null, 
	status                    SET ("found" , "lost"),
	claimed				   SET("claimed", "unclaimed"),
	PRIMARY KEY (stuff_id)
);


CREATE TABLE IF NOT EXISTS admins (
	user_id		 INT           NOT NULL  AUTO_INCREMENT,
	username    VARCHAR(65)          NOT NULL default '',
	password     VARCHAR(65)          NOT NULL default '',
	PRIMARY KEY (user_id)
);


CREATE TABLE IF NOT EXISTS locations (
	loc_id           INT             AUTO_INCREMENT,
	name         TEXT            NOT NULL,
	PRIMARY KEY (loc_id)
);

INSERT INTO stuff (stuff_name, description, location, room_lf, 
	date_lf, name, phone, dorm, room_num,status, claimed)
VALUES
	("Phone", "8gb iPhone 5s BLACK. Cracked around camera", "Donelly", "225", "2014-05-01 04:55:00","Chris","8455555555","NONE","0","lost","unclaimed"),
	("Laptop", "Acer C720p chromebook with stickers on top", "Dyson parking lot", "0", "2014-04-16 11:36:00","Josh Groben","9142375489","Gartland","14","lost","unclaimed"),
	("Backpack", "Denim LL Bean backpack. 2 binders, calculator and 2 notebooks inside", "Fontaine", "208", "2014-4-26 15:20:00","Jackie","5563214785","Gartland","5","lost","unclaimed"),
	("Binder", "Fashionology binder, blue with yellow print on the front", "Library", "112", "2014-3-11 22:08:00","Randy Inspirati","8529637410","Champ","122","found","unclaimed"),
	("Phone", "Red Samsung Galaxy s4 with pink cover", "Lowel Thomas", "200", "2014-3-23 2:16:00","Steve Wholesome","9999999999","Upper West","481","found","unclaimed"),
	("Bag", "Leather Gucci bag with lots of keychains", "Hancock", "300", "2014-04-01 7:44:00","Stacy Kiebler","7410852364","Lower West","85","found","unclaimed");
	
INSERT INTO admins (user_id, username, password)
	VALUES 
		("1", "ADMIN", "gaze11e");
		
INSERT INTO locations (name) 
	VALUES
		('Library'),
		('Upper West Cedar'),
		('Gartland'),
		('Tennis Pavilion'),
		('Fontaine Hall'),
		('Fern Tor'),
		('Longview Park'),
		('Dyson'),
		('Fountaine Annex'),
		('Foy Townhouses'),
		('Kirk House'),
		('Kieran Gatehouse'),
		('Midrise Hall'),
		('McCann Center'),
		('New Fulton Townhouses'),
		('Fulton Townhouses'),
		('Greystone Hall'),
		('Lower Townhouses'),
		('Marist Boathouses'),
		('New Townhouses'),
		('St.Peters'),
		('St. Anne'),
		('Steel Plant'),
		('Rotunda'),
		('Tenney Stadium'),
		('Cornell Boathouse'),
		('Donnelly Hall'),
		('Leo Hall'),
		('Champagnat Hall'),
		('Sheahan Hall'),
		('Marian Hall'),
		('Student Center'),
		('Dining Hall'),
		('Lowell-Thomas Communications Center'),
		('Our Lady Seat of Wisdom Chapel'),
		('Byrne House'),
		('Music Hall');
