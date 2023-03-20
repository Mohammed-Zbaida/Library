    DROP DATABASE IF EXISTS library;  

    CREATE DATABASE library;

    USE library;


    CREATE TABLE members (
    Id_member INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Full_name VARCHAR(55),
    Adresse VARCHAR(55),
    email VARCHAR(55),
    cin   VARCHAR(55),
    phone INT,
    date_naissance DATE,
    type VARCHAR(55),
    password VARCHAR(55),
    dt_open_account DATE,
    penalite INT
    );

    CREATE TABLE books (
    IdBook INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(55),
    author_name VARCHAR(55),
    cover_photo VARCHAR(55),
    state VARCHAR(55),
    type VARCHAR(55),
    date_publishing DATE,
    date_editions DATE,
    number_of_pages INT
    );

    CREATE TABLE reservations (
    ID_Reservation INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date_Reservation DATE,
    Check_reservi  VARCHAR(55),
    Id_member INT NOT NULL,
    IdBook INT NOT NULL,
    FOREIGN KEY (Id_member) REFERENCES members(Id_member) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idBook) REFERENCES books(IdBook) ON DELETE CASCADE ON UPDATE CASCADE
    );


    CREATE TABLE admin (
    ID_admin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    frist_name VARCHAR(55),
    last_name VARCHAR(55),
    email VARCHAR(55),
    password VARCHAR(55)
    );

    CREATE TABLE loan (
    ID_loan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    loan_dat DATE,
    date_routerConfirm DATE ,
    date_router DATE ,
    ID_Reservation INT,
    ID_admin INT,
    FOREIGN KEY (ID_Reservation) REFERENCES reservations(ID_Reservation) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (ID_admin) REFERENCES admin(ID_admin) ON DELETE CASCADE ON UPDATE CASCADE
    );