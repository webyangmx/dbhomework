/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.7.9-log : Database - int
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`int` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `int`;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `cid` int(4) NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `visits_made` int(5) DEFAULT NULL,
  `last_visit_time` datetime DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `customers` */

insert  into `customers`(`cid`,`cname`,`city`,`visits_made`,`last_visit_time`) values (1,'Kathy','Vestal',2,'2013-11-28 10:25:32'),(2,'Brown','Binghamton',1,'2013-12-05 09:12:30'),(3,'Anne','Vestal',1,'2013-11-29 14:30:00'),(4,'Jack','Vestal',1,'2013-12-04 16:48:02'),(5,'Mike','Binghamton',1,'2013-11-30 11:52:16');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `eid` int(3) NOT NULL AUTO_INCREMENT,
  `ename` varchar(15) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `employees` */

insert  into `employees`(`eid`,`ename`,`city`) values (1,'Amy','Vestal'),(2,'Bob','Binghamton'),(3,'John','Binghamton'),(4,'Lisa','Binghamton'),(5,'Matt','Vestal');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `logid` int(5) NOT NULL AUTO_INCREMENT,
  `who` varchar(20) NOT NULL,
  `time` datetime NOT NULL,
  `table_name` varchar(20) NOT NULL,
  `operation` varchar(6) NOT NULL,
  `key_value` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=1280 DEFAULT CHARSET=utf8;

/*Data for the table `logs` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `pid` int(4) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `qoh` int(5) NOT NULL,
  `qoh_threshold` int(5) DEFAULT NULL,
  `original_price` decimal(6,2) DEFAULT NULL,
  `discnt_rate` decimal(3,2) DEFAULT NULL,
  `sid` int(2) DEFAULT NULL,
  `p_img` varchar(50) NOT NULL DEFAULT '6108PPVOdoL.jpg',
  `p_descri` varchar(300) DEFAULT '无',
  PRIMARY KEY (`pid`),
  KEY `sid` (`sid`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`pid`,`pname`,`qoh`,`qoh_threshold`,`original_price`,`discnt_rate`,`sid`,`p_img`,`p_descri`) values (1,'Milk',12,10,'2.40','0.10',1,'6108PPVOdoL.jpg','无'),(2,'Egg',15,10,'1.50','0.20',2,'6108PPVOdoL.jpg','无'),(3,'Bread',12,10,'1.20','0.10',1,'6108PPVOdoL.jpg','无'),(4,'Pineapple',4,5,'2.00','0.30',1,'6108PPVOdoL.jpg','无'),(5,'Knife',10,8,'2.50','0.20',2,'6108PPVOdoL.jpg','无'),(6,'Shovel',4,5,'7.99','0.10',1,'6108PPVOdoL.jpg','无');

/*Table structure for table `purchases` */

DROP TABLE IF EXISTS `purchases`;

CREATE TABLE `purchases` (
  `pur` int(4) NOT NULL AUTO_INCREMENT,
  `cid` int(4) NOT NULL,
  `eid` int(3) NOT NULL,
  `pid` int(4) NOT NULL,
  `qty` int(5) DEFAULT NULL,
  `ptime` datetime DEFAULT NULL,
  `total_price` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`pur`),
  KEY `cid` (`cid`),
  KEY `eid` (`eid`),
  KEY `pid` (`pid`),
  CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `employees` (`eid`),
  CONSTRAINT `purchases_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=359 DEFAULT CHARSET=utf8;

/*Data for the table `purchases` */

insert  into `purchases`(`pur`,`cid`,`eid`,`pid`,`qty`,`ptime`,`total_price`) values (1,1,1,1,1,'2013-11-26 12:34:22','2.16'),(2,2,4,4,2,'2013-12-05 09:12:30','2.80'),(3,3,4,1,1,'2013-11-29 14:30:00','2.16'),(4,1,2,2,5,'2013-11-28 10:25:32','6.00'),(5,5,5,3,3,'2013-11-30 11:52:16','3.24'),(6,4,3,6,1,'2013-12-04 16:48:02','7.19');

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `sid` int(2) NOT NULL AUTO_INCREMENT,
  `sname` varchar(15) NOT NULL,
  `city` varchar(15) DEFAULT NULL,
  `telephone_no` char(10) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sname` (`sname`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `suppliers` */

insert  into `suppliers`(`sid`,`sname`,`city`,`telephone_no`) values (1,'Supplier 1','Binghamton','6075555431'),(2,'Supplier 2','NYC','6075555432');

/* Trigger structure for table `customers` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_update_customers_visitmade` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_update_customers_visitmade` AFTER UPDATE ON `customers` FOR EACH ROW BEGIN
	insert into logs(who,time,table_name,operation,key_value) 
	values(current_user,current_timestamp,'customers','update',new.cid);
    END */$$


DELIMITER ;

/* Trigger structure for table `products` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_update_product_qoh` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_update_product_qoh` AFTER UPDATE ON `products` FOR EACH ROW BEGIN
	insert into logs(who,time,table_name,operation,key_value) 
	values(current_user,current_timestamp,'products','update',new.pid);
    END */$$


DELIMITER ;

/* Trigger structure for table `purchases` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `insert_purchases` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `insert_purchases` AFTER INSERT ON `purchases` FOR EACH ROW BEGIN
	UPDATE products SET qoh = qoh - new.qty WHERE pid = new.pid;
	UPDATE customers SET visits_made = visits_made + 1,last_visit_time = CURRENT_TIMESTAMP WHERE cid = new.cid;
	INSERT INTO LOGS(who,TIME,table_name,operation,key_value)
	VALUES(CURRENT_USER,CURRENT_TIMESTAMP,'purchases','insert',new.pur);
    END */$$


DELIMITER ;

/* Procedure structure for procedure `add_product` */

/*!50003 DROP PROCEDURE IF EXISTS  `add_product` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `add_product`(in p_name varchar(15),
    in p_qoh int,in p_qoh_threshold int,in p_original_price decimal(6,2),
    in p_discnt_rate decimal(3,2),in p_sid int)
label:BEGIN
	if (select sid from suppliers where sid = p_sid) is null then
	    leave label;
	end if;
	insert into products(pname,qoh,qoh_threshold,original_price,discnt_rate,sid)
	values(p_name,p_qoh,p_qoh_threshold,p_original_price,p_discnt_rate,p_sid);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `add_purchase` */

/*!50003 DROP PROCEDURE IF EXISTS  `add_purchase` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `add_purchase`(IN c_id INT,IN e_id INT,IN p_id INT,IN pur_qty INT)
label:BEGIN
	declare originalPrice decimal(6,2);
	declare discntRate decimal(3,2);
	DECLARE totalPrice FLOAT;
	declare inventory int;
	IF (SELECT cid FROM customers WHERE cid = C_ID) IS NULL THEN
	   leave label;
	END IF;	
	IF (SELECT eid FROM employees WHERE eid = E_ID) IS NULL THEN
	   LEAVE label;
        END IF;       
	IF (SELECT pid FROM products WHERE pid = P_ID) IS NULL THEN
	   LEAVE label;
        END IF;
        set inventory = (SELECT qoh FROM products WHERE pid = p_id);  
        if pur_qty >= inventory then
	    leave label;
	end if;
	set originalPrice = (select original_price from products where pid = p_id);
	SET discntRate = (SELECT discnt_rate FROM products WHERE pid = p_id);
	set totalPrice = originalPrice * discntRate * pur_qty; 
	IF inventory - pur_qty < (select qoh_threshold from products where pid = p_id) THEN
	    SELECT inventory,inventory + pur_qty inventory_pur_qty;
	    UPDATE products SET qoh = 2*inventory where pid = p_id;
        END IF;
        INSERT INTO purchases(cid,eid,pid,qty,ptime,total_price)
        VALUES (c_id,e_id,p_id,pur_qty,CURRENT_TIMESTAMP,totalPrice);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `report_monthly_sale` */

/*!50003 DROP PROCEDURE IF EXISTS  `report_monthly_sale` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `report_monthly_sale`(in prod_id int)
BEGIN
	select products.`pname`,
	substr(monthname(purchases.`ptime`),1,3) month,
	sum(purchases.`qty`) totalNum,
	sum(purchases.`total_price`) totalMoney,
	cast(SUM(purchases.`total_price`)/SUM(purchases.`qty`) as decimal(10,2)) avgPrice	
	from products,purchases
	where products.`pid` = prod_id and purchases.`pid` = prod_id
	group by month(purchases.`ptime`)
	order by MONTH(purchases.`ptime`);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `show_products` */

/*!50003 DROP PROCEDURE IF EXISTS  `show_products` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `show_products`()
BEGIN
       SELECT * from products;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
