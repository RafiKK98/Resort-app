CREATE TABLE admin_t (
	mail_id VARCHAR(32) NOT NULL, 
	password VARCHAR(32) NOT NULL,
	CONSTRAINTS admin_pk PRIMARY KEY (mail_id)
);