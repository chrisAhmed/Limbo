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
	claimed				   SET("claimed", "not claimed"),
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

/*INSERT INTO stuff (stuff_name, description, location, room_lf, 
	date_lf, name, phone, dorm, room_num)
VALUES
	("bag", "brown bag", "donelly", "225", "21355","Chris","23423523","champ","2342","lost"),
	("bag", "blue bag", "dyson", "234", "214253355","Jackie","234776","gart","12","lost");*/
	
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
