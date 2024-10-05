CREATE DATABASE horuscore_inventory;

USE horuscore_inventory;

CREATE TABLE inventory (
    inventory_id INT PRIMARY KEY,
    name VARCHAR(50),
    description VARCHAR(100)
);

INSERT INTO inventory (inventory_id, name, description) VALUES 
(1001, 'COG', 'convenience goods'),
(2001, 'SHG', 'shopping goods'),
(2008, 'SPG', 'specialty goods'),
(3001, 'UNG', 'unsought goods');
