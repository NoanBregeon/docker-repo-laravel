CREATE database IF NOT EXISTS produits;
USE produits;
CREATE TABLE IF NOT EXISTS produits (
    id int NOT NULL PRIMARY KEY,
    nom varchar(255) NOT NULL,
    prix decimal(10,2) NOT NULL
);

INSERT INTO produits VALUES
    (1, 'deo', 2.99),
    (2, 'pain ', 0.99 ),
    (3, 'oeuf', 3.49 ),
    (4, 'fromage', 4.99 )
;