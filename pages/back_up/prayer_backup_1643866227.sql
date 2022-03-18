

CREATE TABLE `login` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO login VALUES("1","prayer","prayer");
INSERT INTO login VALUES("2","ADMIN","ADMIN");



CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `PHONE` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ZONE` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `CONTACT` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRAYER_REQUEST` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO users VALUES("1","jeci","2021-12-14","8870126722","Iyyanar kudi","ZONE 3","2022-02-24","Yes","CWECEWCWE","2022-02-02 16:47:53","2022-02-02 16:47:53","1");
INSERT INTO users VALUES("2","SAGA","2022-06-07","8870126722","Iyyanar kudi","ZONE 2","2022-02-10","Yes","CWCQWD","2022-02-02 16:48:11","2022-02-02 16:48:11","1");
INSERT INTO users VALUES("3","ARUN","2022-02-03","8870126722","Iyyanar kudi","ZONE 1","2022-02-10","No","CCWEC","2022-02-02 16:48:23","2022-02-02 16:48:23","1");
INSERT INTO users VALUES("4","kavi","2022-03-08","8870126722","Iyyanar kudi","ZONE 2","2022-02-11","Yes","CWECWE","2022-02-02 16:48:40","2022-02-02 16:48:40","1");
INSERT INTO users VALUES("5","jeci","2021-12-14","8870126722","Iyyanar kudi","ZONE 3","2022-02-24","Yes","CWECEWCWE","2022-02-02 16:47:53","2022-02-02 16:47:53","1");
INSERT INTO users VALUES("6","SAGA","2022-06-07","8870126722","Iyyanar kudi","ZONE 2","2022-02-10","Yes","CWCQWD","2022-02-02 16:48:11","2022-02-02 16:48:11","1");
INSERT INTO users VALUES("7","ARUN","2022-02-03","8870126722","Iyyanar kudi","ZONE 1","2022-02-10","No","CCWEC","2022-02-02 16:48:23","2022-02-02 16:48:23","1");
INSERT INTO users VALUES("8","kavi","2022-03-08","8870126722","Iyyanar kudi","ZONE 2","2022-02-11","Yes","CWECWE","2022-02-02 16:48:40","2022-02-02 16:48:40","1");

