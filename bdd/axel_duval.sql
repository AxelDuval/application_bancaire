DROP DATABASE IF EXISTS banque_php;

CREATE DATABASE banque_php CHARACTER SET 'utf8';

USE banque_php;

DROP USER IF EXISTS 'BanquePHP' @'Localhost';

CREATE USER 'BanquePHP' @'Localhost';

GRANT ALL PRIVILEGES ON banque_php.* To 'BanquePHP' @'Localhost' IDENTIFIED BY 'banque76';

CREATE TABLE IF NOT EXISTS user (
    id INT NOT NULL AUTO_INCREMENT,
    first_name TEXT(30) NOT NULL,
    last_name TEXT(30) NOT NULL,
    birthday DATE NOT NULL,
    user_account_creation DATE NOT NULL,
    email VARCHAR(60) NOT NULL,
    password VARCHAR(60) NOT NULL,
    adress VARCHAR(60) NOT NULL,
    postcode INT(15) NOT NULL,
    city TEXT(30) NOT NULL,
    country TEXT(30) NOT NULL,
    phone INT(30) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB;

INSERT INTO
    user
VALUES
    (
        default,
        'Axel',
        'Duval',
        '1985-12-19',
        NOW(),
        'axel.duval@gmail.com',
        'admin',
        '4 rue de Normare',
        76000,
        'Rouen',
        'France',
        0625740022
    );

CREATE TABLE IF NOT EXISTS accounts (
    id INT NOT NULL AUTO_INCREMENT,
    account_type VARCHAR(30) NOT NULL,
    account_number VARCHAR(30) NOT NULL,
    account_amount INT(30) NOT NULL,
    account_creation_date DATE NOT NULL,
    owner_id INT NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB;

ALTER TABLE
    accounts
ADD
    CONSTRAINT FK_user_accounts FOREIGN KEY (owner_id) REFERENCES banque_PHP.User(id);

INSERT INTO
    accounts
VALUES
    (
        default,
        'Livret A',
        4354645456465,
        300,
        NOW(),
        default
    );

CREATE TABLE IF NOT EXISTS operations (
    id INT NOT NULL AUTO_INCREMENT,
    operation_type TEXT(30) NOT NULL,
    operation_date DATE NOT NULL,
    operation_amount INT(30) NOT NULL,
    operation_status TEXT(30) NOT NULL,
    account_id INT NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB;

ALTER TABLE
    operations
ADD
    CONSTRAINT FK_account_operations FOREIGN KEY (account_id) REFERENCES accounts(id);

INSERT INTO
    operations
VALUES
    (
        default,
        'virement',
        NOW(),
        50,
        'en cours',
        default
    );


