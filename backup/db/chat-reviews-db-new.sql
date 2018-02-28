/*drop table if exists before create 
DROP TABLE IF EXISTS Message; 
DROP TABLE IF EXISTS Chatting_partner;
DROP TABLE IF EXISTS Topic; 
DROP TABLE IF EXISTS Chat_sessions;
DROP TABLE IF EXISTS User;
 */


/*create tables*/
CREATE TABLE User(
	user_id char(10),
	name char(50),
	address char(25),
	age integer,
	email char(25),
	password char(10),

	PRIMARY KEY (user_id)
);

CREATE TABLE Chat_sessions(
	cs_id char(10),
	name char(20),
	date_start char(10),
	date_close char(10),
	user_id char(10),

	PRIMARY KEY (cs_id),
	CONSTRAINT fk_Chat_sessions FOREIGN KEY(user_id) REFERENCES User(user_id)
);

CREATE TABLE Chatting_partner(
	cp_id char(10),
	name char(50),
	cs_id char(10),

	PRIMARY KEY (cp_id),
	CONSTRAINT fk_Chatting_partner FOREIGN KEY(cs_id) REFERENCES Chat_sessions(cs_id)
);
/*topic detection specific data*/
CREATE TABLE Topic(
	topic_id char(10),
	name char(20),
	category char(20),

	PRIMARY KEY (topic_id)
);
/*Personal information specific data*/
CREATE TABLE Personal_info_data(
	pdata_id char(10),
	define_data char(20),
	personal_info_id char(100),

	PRIMARY KEY (pdata_id),
	CONSTRAINT fk_Personal_info_data FOREIGN KEY(personal_info) REFERENCES Personal_info(personal_info)
);

CREATE TABLE Personal_info(
	personal_info_id char(10),
	value_1 char(20),
	value_2 char(20),

	PRIMARY KEY (personal_info_id)
);
/*Evaluate Healthy specific data*/
CREATE TABLE Healthy(
	healthy_id char(10),
	no_of_text int,
	no_of_healthy_text int,
	category chat(10),

	PRIMARY KEY (healthy_id)
);
/*Emotion specific data*/
CREATE TABLE Emotion(
	emotion_id char(10),
	emotion_text char(50),
	category char(10),
    emotion_count int,
	
	PRIMARY KEY (emotion_id)
);
CREATE TABLE Messages(
	msg_id integer NOT NULL AUTO_INCREMENT,
	msg VARCHAR(100),
	cs_id char(10),
	topic_id char(10),
	personal_info_id char(10),
    healthy_id char(10),
	emotion_id char(10),
	
	PRIMARY KEY (msg_id),
	CONSTRAINT fk_Message_Chat_sessions FOREIGN KEY(cs_id) REFERENCES Chat_sessions(cs_id),
	CONSTRAINT fk_Message_Topic FOREIGN KEY(topic_id) REFERENCES Topic(topic_id),
	CONSTRAINT fk_Message_Personal_info FOREIGN KEY(personal_info_id) REFERENCES Personal_info(personal_info_id),
	CONSTRAINT fk_Message_Healthy FOREIGN KEY(healthy_id) REFERENCES Healthy(healthy_id),
	CONSTRAINT fk_Message_Emotion FOREIGN KEY(emotion_id) REFERENCES Emotion(emotion_id)
);




