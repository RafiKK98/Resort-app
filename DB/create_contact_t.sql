CREATE TABLE contact_t (
	id INT(11) NOT NULL AUTO INCREMENT,
	name VARCHAR(32) NOT NULL,
	message VARCHAR(100) NOT NULL,
	mail_id VARCHAR(32) NOT NULL,
	CONSTRAINTS contact_pk PRIMARY KEY (id),
	CONSTRAINTS contact_fk FOREIGN KEY
	(mail_id) REFERENCES customer_t(mail_id)
);