CREATE USER 'zappcom'@'localhost' IDENTIFIED BY 'zappcom123@';

GRANT ALL PRIVILEGES ON db_zappcom. * TO 'zappcom'@'localhost';

FLUSH PRIVILEGES;