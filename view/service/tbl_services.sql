CREATE TABLE IF NOT EXIST `tbl_services`(
  `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `client_id` int(11) UNSIGNED NOT NULL,
  `client_name` varchar(250) NOT NULL,
  `service_category` char(50) NOT NULL,
  `service_price` DECIMAL NOT NULL,
  PRIMARY KEY(`id`)
  FOREIGN KEY(`client_id`) REFERENCES `client`
 ) ENGINE:MYISAM charset=latin1;
  