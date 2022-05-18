/*
To create the database:
1. Start up XAMPP on your device. Make sure you start Apache & MySQL
2. Navigate to localhost/dashboard/
3. Navigate to phpMyAdmin which is in the upper right corner of the screen
4. Select the databases tab
5. Under the create database header enter the database name cs268project and click create
*/

--SQL queries for database. All can be put in the SQL tab of the cs268project database

CREATE TABLE logins (
    id INT(4) NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    passcode VARCHAR(50) NOT NULL, 
	PRIMARY KEY (id)
);

INSERT INTO logins (username, passcode) VALUES ('omtechAdmin', 'testPassword');


CREATE TABLE members (
    position VARCHAR(50) NOT NULL,
    memberName VARCHAR(50) NOT NULL,
	gradeYear VARCHAR(50) NOT NULL, 
	major VARCHAR(50) NOT NULL,
	minor VARCHAR(50),
	omtechFav VARCHAR(280) NOT NULL,
	omtechEvent VARCHAR(280) NOT NULL,
	uwecFav VARCHAR(280) NOT NULL,
	funFact VARCHAR(280) NOT NULL,
	profileSrc VARCHAR (100) NOT NULL,
	memberSrc VARCHAR(100) NOT NULL,
	PRIMARY KEY (position)
);

INSERT INTO members (position, memberName, gradeYear, major, minor, omtechFav, omtechEvent, uwecFav, funFact, profileSrc, memberSrc) VALUES ('President', 'Katie Brand', 'Senior', 'Software Engineering', 'Management & Information Systems', 'Talking with everyone during meetings.', 'The scavenger hunt!', 'Just walking around campus in the warm months.', 'I have two different colored eyes!', 'images/katie_headshot.jpg', 'images/omtech_asd_photo.jpg');
INSERT INTO members (position, memberName, gradeYear, major, minor, omtechFav, omtechEvent, uwecFav, funFact, profileSrc, memberSrc) VALUES ('Secretary', 'Hannah Good', 'Sophomore', 'Software Engineering & Spanish', NULL, 'Seeing people I have seen in class outside of class!', 'Trivia Night', 'It is just a gorgeous place to be now is it not!', 'I own a fanny pack, and I am very proud of it.', 'images/hannah_headshot.jpg', 'images/omtech_scavenger_hunt_6.jpg');
INSERT INTO members (position, memberName, gradeYear, major, minor, omtechFav, omtechEvent, uwecFav, funFact, profileSrc, memberSrc) VALUES ('Vice President', 'Laura Pryor', 'Senior', 'Computer Science & Criminal Justice', NULL, 'The connections you make with other students. It is always nice to walk into a class and see a familiar face from OmTech!', 'The scavenger hunt we did at the beginning of the Fall Semester to help students get acclimated with campus!', 'The doors it has opened for me. Three years ago I would have never thought I would have written internationally published research!', 'I am double jointed in both of my elbows.', 'images/laura_headshot.jpg', 'images/omtech_icecreamsocial_1.jpg');
INSERT INTO members (position, memberName, gradeYear, major, minor, omtechFav, omtechEvent, uwecFav, funFact, profileSrc, memberSrc) VALUES ('Treasurer', 'Laura Pryor', 'Senior', 'Computer Science & Criminal Justice', NULL, 'The connections you make with other students. It is always nice to walk into a class and see a familiar face from OmTech!', 'The scavenger hunt we did at the beginning of the Fall Semester to help students get acclimated with campus!', 'The doors it has opened for me. Three years ago I would have never thought I would have written internationally published research!', 'I am double jointed in both of my elbows.', 'images/laura_headshot.jpg', 'images/omtech_icecreamsocial_1.jpg');
INSERT INTO members (position, memberName, gradeYear, major, minor, omtechFav, omtechEvent, uwecFav, funFact, profileSrc, memberSrc) VALUES ('Webmaster', 'Collin Kozlowski', 'Freshman', 'Software Engineering', 'Mathematics', 'Meeting new friends within your field of study!', 'Movie Nights!', 'Einsteins Bagels', 'Three of the Einsteins employees know my name because that is basically all I eat.', 'images/collin_headshot.jpg', 'images/omtech_icecreamsocial_2.jpg');


CREATE TABLE groupEvents (
    id INT(4) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    eventDate VARCHAR(50) NOT NULL, 
	location VARCHAR(50) NOT NULL, 
	eventTime VARCHAR(50) NOT NULL, 
	description VARCHAR(280) NOT NULL, 
	imgFilePath VARCHAR(100) NOT NULL,
	imgALT VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO groupEvents (name, eventDate, location, eventTime, description, imgFilePath, imgALT) VALUES ('Escape Room', '3/31/22', 'Phillips 265', '5:30pm', 'Behold as Phillip 265 gets transformed into an escape room where all members must work together to figure out how to leave.', 'images/escaperoom.jpg', 'escape room');
INSERT INTO groupEvents (name, eventDate, location, eventTime, description, imgFilePath, imgALT) VALUES ('Guest Speaker', '4/14/22', 'Phillips 265', '5:30pm', 'Join OmTech as we have a guest speaker come in to tell everyone about their job and company. Great way to learn more about a certain company and start networking!', 'images/guestspeaker.jpg', 'guest speaker');
INSERT INTO groupEvents (name, eventDate, location, eventTime, description, imgFilePath, imgALT) VALUES ('Minute To Win It', '4/28/22', 'Phillips 265', '5:30pm', 'OmTech will be hosting an array of minute to win it games with the ultimate prize being bragging rights (and maybe a crisp high five)! Come watch people get overly into fun challenges while you participate or eat free snacks and beverages on the sidelines.', 'images/minutetowinit.jpg', 'minute to win it');
INSERT INTO groupEvents (name, eventDate, location, eventTime, description, imgFilePath, imgALT) VALUES ('Homework Help Night', '5/12/22', 'Phillips 265', '5:30pm', 'As finals approach OmTech understand people need a break. Therefore OmTech will be hosting a Homework Help/Movie Night. All members will be willing to help with homework if anyone needs help otherwise a fun movie will be playing in the background. Come and relax with friends!', 'images/homeworkhelp.jpg', 'homework help night');


CREATE TABLE news (
    id INT(4) NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    description VARCHAR(400) NOT NULL, 
	imgFilePath VARCHAR (100) NOT NULL,
	imgAlt VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO news (title, description, imgFilePath, imgAlt) VALUES ('OmTech Meets New Blugolds @ Admitted Student Day!', 'On March 4th, the OmTech executive board participated in the UWEC Student Org showcase for Admitted Student Day. Members of the exec board spent the afternoon talking with new blugolds about our organization and the university in general. The showcase was a great success and we loved talking to the class of 2026!', 'images/omtech_asd_photo.jpg', 'OmTech at admitted student day');
INSERT INTO news (title, description, imgFilePath, imgAlt) VALUES ('Goodbye Alexis :(', 'Last December, our former president Alexis Lappe handed over her keys to our new president Katie Brand. Alexis graduated this December and we are so proud of everything she was able to accomplish at UWEC. While we are all sad to say goodbye and will miss her greatly, we wish her all the best in her future endeavors and can not wait to see what she will accomplish!', 'images/omtech_alexisKatieSwitch.jpg', 'Goodbye Alexis');
INSERT INTO news (title, description, imgFilePath, imgAlt) VALUES ('Spring Semester Events Announced!', 'The OmTech Executive Board have officially planned all of the meetings for Spring Semester! Take a look at what is coming this spring!', 'images/omtech_spring_events_photo.jpg', 'Spring Event Schedule');


CREATE TABLE contactSubmissions (
    id INT(4) NOT NULL AUTO_INCREMENT,
    userName VARCHAR(50) NOT NULL,
    userEmail VARCHAR(50) NOT NULL,
	userMessage VARCHAR(400) NOT NULL, 
	PRIMARY KEY (id)
);