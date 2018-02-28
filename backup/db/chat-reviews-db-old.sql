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

CREATE TABLE Topic(
topic_id char(10),
name char(20),
category char(20),

PRIMARY KEY (topic_id)
);

CREATE TABLE Chatting_partner(
cp_id char(10),
name char(50),
cs_id char(10),

PRIMARY KEY (cp_id),
CONSTRAINT fk_Chatting_partner FOREIGN KEY(cs_id) REFERENCES Chat_sessions(cs_id)
);

CREATE TABLE Message(
msg_id integer NOT NULL AUTO_INCREMENT,
msg VARCHAR(100),
cs_id char(10),
topic_id char(10),

PRIMARY KEY (msg_id),
CONSTRAINT fk_Message_1 FOREIGN KEY(cs_id) REFERENCES Chat_sessions(cs_id),
CONSTRAINT fk_Message_2 FOREIGN KEY(topic_id) REFERENCES Topic(topic_id)
);




