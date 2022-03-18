

CREATE TABLE `believer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `PHONE` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ZONE` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `RELATION` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `R_NAME` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BELIEVER` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `CONTACT` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRAYER_REQUEST` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO believer VALUES("66","JECI FLORA S","2022-02-04","9080063647","87,SOUTH ST","ZONE 2","FATHER OF","SAGAYAM","Church_Member","2021-12-29","Yes","NIL","2022-02-05 11:21:10","2022-02-05 11:21:10","1");
INSERT INTO believer VALUES("67","SAGAYANATHAN","2022-02-08","9842468634","87,SOUTH ST","ZONE 1","HUSBAND OF","MARY JOHN","Believer","2022-02-23","Yes","MARY PRAYER","2022-02-05 11:22:25","2022-02-05 11:22:25","1");
INSERT INTO believer VALUES("68","MARY JOHN","2022-02-10","9790523381","87, SOUTH ST","ZONE 2","WIFE OF","SAGAYAM","Believer","2022-02-01","No","JESUS PRAYER","2022-02-05 11:23:18","2022-02-05 11:23:18","1");
INSERT INTO believer VALUES("69","MARTIN DANIEL S","2022-02-22","8870126722","87,SOUTH ST","ZONE 3","SON OF","SAGAYAM","Believer","2022-02-23","No","NIL","2022-02-05 11:24:05","2022-02-05 11:24:05","1");
INSERT INTO believer VALUES("70","JENCY S","2022-02-02","8300707388","87,SOUTH ST","ZONE 4","DAUGHTER OF","SAGAYAM","Church_Member","2022-02-01","No","NIL","2022-02-05 11:25:00","2022-02-05 11:25:00","1");
INSERT INTO believer VALUES("71","MANCY S","2022-02-13","7896541230","87,SOUTH ST","ZONE 3","DAUGHTER OF","SAGAYAM","Church_Member","2022-02-11","Yes","NIL","2022-02-05 11:25:36","2022-02-05 11:25:36","1");
INSERT INTO believer VALUES("72","LEO PRASANNA","2022-01-30","8870126722","Iyyanar kudi","ZONE 1","SON OF","CHITHRA","Believer","2022-02-16","Yes","NIL","2022-02-05 11:26:44","2022-02-05 11:26:44","1");
INSERT INTO believer VALUES("73","PRAKASH JULIYAN","2022-03-01","7896541230","fewfw","ZONE 5","SON OF","CHITHRA","Church_Member","2022-02-04","Yes","NIL","2022-02-05 11:27:18","2022-02-05 11:27:18","1");
INSERT INTO believer VALUES("74","CHITHRA","2022-02-11","8870126722","Iyyanar kudi","ZONE 2","WIFE OF","AROKIYA DASS","Believer","2022-01-31","Yes","NIIL","2022-02-05 11:27:55","2022-02-05 11:27:55","1");
INSERT INTO believer VALUES("75","VIGNESH A","2022-02-17","9876541230","REGWEH","ZONE 2","SON OF","CHITHRA","Church_Member","2022-02-16","Yes","NIL","2022-02-05 11:28:21","2022-02-05 11:28:21","1");
INSERT INTO believer VALUES("76","kavi","2022-02-15","7896541230","fewfw","ZONE 2","SON OF","MARY JOHN","Church_Member","2022-02-05","Yes","lugiltgul","2022-02-05 16:46:35","2022-02-05 16:46:35","1");
INSERT INTO believer VALUES("77","ARUN","2022-02-15","8870126722","Iyyanar kudi","ZONE 2","FATHER OF","AROKIYA DASS","Believer","2022-02-02","Yes","gvawgw","2022-02-05 16:48:24","2022-02-05 16:48:24","1");



CREATE TABLE `church_believer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `PHONE` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ZONE` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `RELATION` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BELIEVER` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `CONTACT` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRAYER_REQUEST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO church_believer VALUES("7","kanimozhi","2022-02-08","8870126722","Iyyanar kudi","ZONE 2","FATHER","Church_Believer","2022-02-10","Yes","wefgefwe","2022-02-03 19:04:58","2022-02-03 19:04:58","1");
INSERT INTO church_believer VALUES("8","kanimozhi","2022-02-08","8870126722","Iyyanar kudi","ZONE 2","FATHER","Church_Believer","2022-02-10","Yes","wefgefwe","2022-02-03 19:05:03","2022-02-03 19:05:03","1");
INSERT INTO church_believer VALUES("10","SAGA","2022-02-16","8870126722","Iyyanar kudi","ZONE 1","FATHER","Church_Believer","2022-02-02","Yes","acasca","2022-02-03 19:05:16","2022-02-03 19:05:16","1");
INSERT INTO church_believer VALUES("11","kanimozhi","2022-02-08","8870126722","Iyyanar kudi","ZONE 2","FATHER","Church_Believer","2022-02-10","Yes","wefgefwe","2022-02-03 19:05:22","2022-02-03 19:05:22","1");
INSERT INTO church_believer VALUES("13","SAGA","2022-02-08","8870126722","Iyyanar kudi","ZONE 1","FATHER","Church_Believer","2022-02-05","Yes","ETDDT","2022-02-03 19:05:31","2022-02-03 19:05:31","1");
INSERT INTO church_believer VALUES("14","SAGA","2022-02-12","8870126722","Iyyanar kudi","ZONE 1","FATHER","Church_Believer","2022-02-03","Yes","JDT","2022-02-03 19:05:44","2022-02-03 19:05:44","1");
INSERT INTO church_believer VALUES("15","JEROM","2022-02-25","8870126722","Iyyanar kudi","ZONE 1","FATHER","Church_Believer","2022-02-04","Yes","FEWFER","2022-02-03 19:05:49","2022-02-03 19:05:49","1");
INSERT INTO church_believer VALUES("16","kavi","2022-03-08","8870126722","Iyyanar kudi","ZONE 2","MOTHER","Church_Believer","2022-02-11","Yes","2222222222","2022-02-03 19:05:53","2022-02-03 19:05:53","1");
INSERT INTO church_believer VALUES("17","SAGA","2022-06-07","8870126722","Iyyanar kudi","ZONE 2","MOTHER","Church_Believer","2022-02-10","Yes","CWCQWD","2022-02-03 19:06:08","2022-02-03 19:06:08","1");
INSERT INTO church_believer VALUES("18","ZRUN","2022-02-10","8870126722","Iyyanar kudi","ZONE 1","HUSBAND","Church_Believer","2022-02-10","Yes","SRGWRSG","2022-02-04 11:26:35","2022-02-04 11:26:35","1");
INSERT INTO church_believer VALUES("19","jeci","2022-02-12","8870126722","Iyyanar kudi","ZONE 2","FATHER","Believer","2022-02-14","Yes","qfewfefew","2022-02-04 15:30:03","2022-02-04 15:30:03","1");
INSERT INTO church_believer VALUES("20","jeci","2022-02-12","8870126722","Iyyanar kudi","ZONE 2","MOTHER","Church_Believer","2022-02-10","No","vswvcew","2022-02-04 15:30:18","2022-02-04 15:30:18","1");



CREATE TABLE `login` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO login VALUES("1","prayer","prayer");
INSERT INTO login VALUES("2","ADMIN","ADMIN");

