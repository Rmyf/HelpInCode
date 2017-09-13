

CREATE TABLE users (id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(32),
    age DATE
    photo VARCHAR
    email VARCHAR(300   
    password VARCHAR (1000),
    reg_date DATETIME,
    
);

CREATE TABLE articles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    categorie VARCHAR(100),
    titre VARCHAR(100),
    contenu mediumtext,
    auteur VARCHAR(32),
    creation_date DATE
);