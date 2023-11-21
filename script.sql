CREATE TABLE IF NOT EXISTS utilisateurs (
	id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20),
    pssword VARCHAR(20),
    date_iscription DATE
);

CREATE TABLE IF NOT EXISTS contacts (
id_contact INT PRIMARY KEY AUTO_INCREMENT,
id_user INT,
nom VARCHAR(30),
    tel VARCHAR(30),
    email VARCHAR(30),
    adresse VARCHAR(30),
FOREIGN KEY (id_user) REFERENCES utilisateurs(id_user)
);