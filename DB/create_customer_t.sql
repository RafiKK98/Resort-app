CREATE TABLE customer_t (
	mail_id VARCHAR(32) NOT NULL, 
	password VARCHAR(10) NOT NULL,
	name VARCHAR(32) NOT NULL,
	phone_number VARCHAR(14) NOT NULL,
	address VARCHAR(32) NOT NULL,
	booked_room INT(11),
	CONSTRAINTS contact_pk PRIMARY KEY (mail_id)
);