CREATE DATABASE IF NOT EXISTS `Dyplom_kafedra_calculation` CHARACTER SET `utf8` COLLATE utf8_general_ci;
USE `Dyplom_kafedra_calculation`;

CREATE TABLE IF NOT EXISTS `faculty`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор факультету',
`name` VARCHAR(255) NOT NULL COMMENT 'назва факультету',
`pic` VARCHAR(255) COMMENT 'Логотип факультету, якщо такий є',
`description` TEXT COMMENT 'примітки',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про факультети';

CREATE TABLE IF NOT EXISTS `kafedra`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор кафедри',
`fid` INTEGER(2) NOT NULL COMMENT 'Звязок кафедри з факультетом',
`name` VARCHAR(255) NOT NULL COMMENT 'назва кафедри',
`pic` VARCHAR(255) COMMENT 'Логотип кафедри, якщо такий є',
`description` TEXT COMMENT 'примітки',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(fid) REFERENCES `faculty`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про кафедри';

CREATE TABLE IF NOT EXISTS `study_form`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор',
`name` VARCHAR(255) NOT NULL COMMENT 'форма навчання',
`description` TEXT COMMENT 'примітка',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про різні форми навчання(денна чи заочна)';

CREATE TABLE IF NOT EXISTS `groups_of_students`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор групи',
`kid` INTEGER(2) NOT NULL COMMENT 'Звязок групи з кафедрою',
`sfid` INTEGER(2) NOT NULL COMMENT 'Звязок групи з формою навчання',
`name` VARCHAR(255) NOT NULL COMMENT 'назва групи',
`count_stud` INTEGER(2) COMMENT 'кількість студентів у групі, якщо лінь заповнювати дані про студентів групи',
`description` TEXT COMMENT 'примітки',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(kid) REFERENCES `kafedra`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(sfid) REFERENCES `study_form`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про навчальні групи';

/*next three tables need to percept as one table student*/

CREATE TABLE IF NOT EXISTS `student`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор студента',
`gid` INTEGER(2) NOT NULL COMMENT 'Звязок студента з групою',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(gid) REFERENCES `groups_of_students`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про студентів';

CREATE TABLE IF NOT EXISTS `student_key`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`key_name` VARCHAR(255) NOT NULL COMMENT 'тут містяться назви ключів', 
`key_weight` INTEGER (2) NOT NULL COMMENT 'вага ключа', 
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються ключі таблиці студент';

CREATE TABLE IF NOT EXISTS `student_key_value`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`sid` INTEGER(2) NOT NULL COMMENT 'Звязок зі студентом',
`skid` INTEGER(2) NOT NULL COMMENT 'Звязок із ключем',
`val` VARCHAR(255) NOT NULL COMMENT 'тут містяться значення ключів', 
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(sid) REFERENCES `student`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(skid) REFERENCES `student_key`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються значення ключів таблиці студент';

/*end of three tables for students*/
/*
CREATE TABLE IF NOT EXISTS `lesson_cycle`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор циклу',
`name` VARCHAR(80) NOT NULL COMMENT 'назва циклу',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про цикли предметів';
*/

CREATE TABLE IF NOT EXISTS `lessons`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор предмету',
`kid` INTEGER(2) NOT NULL COMMENT 'звязок з кафедрою',
`name` VARCHAR(255) NOT NULL COMMENT 'назва дисципліни',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(`kid`) REFERENCES `kafedra`(id) 
	ON UPDATE CASCADE 
	ON DELETE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про предмети';

/*Three tables for teachers*/

CREATE TABLE IF NOT EXISTS `teacher`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор студента',
`kid` INTEGER(2) NOT NULL COMMENT 'Звязок викладача з кафедрою',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(kid) REFERENCES `kafedra`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про викладачів';

CREATE TABLE IF NOT EXISTS `teacher_key`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`key_name` VARCHAR(255) NOT NULL COMMENT 'тут містяться назви ключів', 
`key_weight` INTEGER (2) NOT NULL COMMENT 'вага ключа', 
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються ключі таблиці викладач';

CREATE TABLE IF NOT EXISTS `teacher_key_value`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`tid` INTEGER(2) NOT NULL COMMENT 'Звязок зі викладачем',
`tkid` INTEGER(2) NOT NULL COMMENT 'Звязок із ключем',
`val` VARCHAR(255) NOT NULL COMMENT 'тут містяться значення ключів', 
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(tid) REFERENCES `teacher`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(tkid) REFERENCES `teacher_key`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються значення ключів таблиці викладач';

/*end of three tables*/

/*Three tables for sub navant for every teacher*/

CREATE TABLE IF NOT EXISTS `personal_navant`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор персонального навантаження',
`tid` INTEGER(2) NOT NULL COMMENT 'Звязок навантаження з викладачем',
`startSem` DATETIME NOT NULL COMMENT 'Дата початку семестру',
`endSem` DATETIME NOT NULL COMMENT 'Дата кінця семестру',
`stavka` FLOAT(2) NOT NULL COMMENT 'ставка викладача в даному семестрі',
`planove_navant` FLOAT(2) NOT NULL COMMENT 'планове навантаження викладача в даному семестрі',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(tid) REFERENCES `teacher`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про персональні навантаження викладачів(дипломні, магістерські)';

CREATE TABLE IF NOT EXISTS `personal_navant_key`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`key_name` VARCHAR(255) NOT NULL COMMENT 'тут містяться назви ключів', 
`key_weight` INTEGER (2) NOT NULL COMMENT 'вага ключа', 
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються ключі таблиці персональне навантаження';

CREATE TABLE IF NOT EXISTS `personal_navant_key_value`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`pnid` INTEGER(2) NOT NULL COMMENT 'Звязок зі персональним навантаженням',
`pnkid` INTEGER(2) NOT NULL COMMENT 'Звязок із ключем',
`val` VARCHAR(255) NOT NULL COMMENT 'тут містяться значення ключів', 
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(pnid) REFERENCES `personal_navant`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(pnkid) REFERENCES `personal_navant_key`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються значення ключів таблиці персональне навантаження';

/*end of three tables*/

/*Three tables for sub navant for every teacher*/

CREATE TABLE IF NOT EXISTS `main_navant`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор навантаження',
`tid` INTEGER(2) NOT NULL COMMENT 'Звязок навантаження з викладачем',
`lid` INTEGER(2) NOT NULL COMMENT 'Звязок навантаження з предметом',
`gid` INTEGER(2) NOT NULL COMMENT 'Звязок навантаження з групою',
`startSem` DATETIME NOT NULL COMMENT 'Дата початку семестру',
`endSem` DATETIME NOT NULL COMMENT 'Дата кінця семестру',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(tid) REFERENCES `teacher`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(lid) REFERENCES `lessons`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(gid) REFERENCES `groups_of_students`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про навантаження викладачів(контрольні, іспити)';

CREATE TABLE IF NOT EXISTS `main_navant_key`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`key_name` VARCHAR(255) NOT NULL COMMENT 'тут містяться назви ключів', 
`key_weight` INTEGER (2) NOT NULL COMMENT 'вага ключа', 
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються ключі таблиці навантаження';

CREATE TABLE IF NOT EXISTS `main_navant_key_value`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор значення',
`mnid` INTEGER(2) NOT NULL COMMENT 'Звязок зі навантаженням',
`mnkid` INTEGER(2) NOT NULL COMMENT 'Звязок із ключем',
`val` VARCHAR(255) NOT NULL COMMENT 'тут містяться значення ключів', 
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(mnid) REFERENCES `main_navant`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE,
CONSTRAINT FOREIGN KEY(mnkid) REFERENCES `main_navant_key`(id) 
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються значення ключів таблиці навантаження';

/*end of three tables*/

/*Таблиці для привілеїв*/

CREATE TABLE IF NOT EXISTS `users_groups`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'Ідентифікатор групи користувачів',
`name` VARCHAR(255) NOT NULL COMMENT 'назва групи',
`description` TEXT NOT NULL COMMENT 'опис групи',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються групи користувачів';

CREATE TABLE IF NOT EXISTS `priviledges`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'Ідентифікатор привілею',
`name` VARCHAR(255) NOT NULL COMMENT 'назва привілею',
`description` TEXT NOT NULL COMMENT 'опис привілею',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються назви привілеїв';

CREATE TABLE IF NOT EXISTS `group_priviledges`(
`idGroup` INTEGER(2) NOT NULL COMMENT 'звязок з групами користувачів',
`idPriv` INTEGER(2) NOT NULL COMMENT 'звязок з привілеями',
PRIMARY KEY(`idGroup`,`idPriv`),
FOREIGN KEY(idGroup) REFERENCES `users_groups`(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE,
FOREIGN KEY(idPriv) REFERENCES `priviledges`(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій відбувається співставлення груп і даних групам привілеїв';

CREATE TABLE IF NOT EXISTS `users`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор користувача',
`ugid` INTEGER(2) NOT NULL DEFAULT 2 COMMENT 'звязок з групою користувачів',
`email` VARCHAR(255) NOT NULL COMMENT 'електронна пошта',
`pass` CHAR(32) NOT NULL COLLATE utf8_bin COMMENT 'пароль',
`salt` CHAR(32) NOT NULL COLLATE utf8_bin COMMENT 'сіль(для засолювання паролю)',
`val_url` VARCHAR(50) NOT NULL COLLATE utf8_bin COMMENT 'адреса для активації користувача',
`active` BOOLEAN NOT NULL DEFAULT false COMMENT 'чи підтверджено адресу електронної пошти',
`counter` INTEGER(2) NOT NULL COMMENT 'кількість прогонів циклу при перевірці співпадіння паролів',
PRIMARY KEY(`id`),
UNIQUE KEY(`email`,`val_url`),
FOREIGN KEY(ugid) REFERENCES `users_groups`(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються користувачі';

/*Таблиці для аудиторій*/
CREATE TABLE IF NOT EXISTS `building`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор',
`number_bld` VARCHAR(6) NOT NULL COMMENT 'номер корпусу',
`description` TEXT NOT NULL COMMENT 'опис',
PRIMARY KEY(id),
UNIQUE KEY(`number_bld`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються навчальні корпуси';

CREATE TABLE IF NOT EXISTS`auditory`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор',
`number_aud` VARCHAR(6) NOT NULL COMMENT 'номер аудиторії',
`id_build` INTEGER(2) NOT NULL COMMENT 'звязок з корпусом',
`number_place` INTEGER(2) COMMENT 'Кількість місць',
`descript` TEXT COMMENT 'опис',
PRIMARY KEY(id),
UNIQUE KEY(`number_aud`),
FOREIGN KEY(id_build) REFERENCES `building`(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються аудиторії';

INSERT INTO `building`(`number_bld`,`description`)
	VALUES	(1,'1-ий корпус'),
			(2,'2-ий корпус'),
			(3,'3-ий корпус'),
			(4,'4-ий корпус'),
			(5,'5-ий корпус');
			
INSERT INTO `auditory`(`number_aud`,`id_build`,`number_place`,`descript`)
	VALUES	('1014',1,20,'Це аудиторія'),
			('1015',1,20,'Це аудиторія'),
			('1015a',1,15,'Це аудиторія'),
			('1018',1,20,'Це аудиторія'),
			('1114',1,25,'Це аудиторія'),
			('1118',1,28,'Це аудиторія'),
			('1108',1,20,'Це аудиторія'),
			('1102',1,24,'Це аудиторія'),
			('1214',1,25,'Це аудиторія'),
			('1218',1,28,'Це аудиторія'),
			('1208',1,20,'Це аудиторія'),
			('1202',1,24,'Це аудиторія'),
			('1314',1,25,'Це аудиторія'),
			('1318',1,28,'Це аудиторія'),
			('1308',1,20,'Це аудиторія'),
			('1302',1,24,'Це аудиторія'),
			('1415',1,20,'Це аудиторія'),
			('1418',1,22,'Це аудиторія'),
			('1419',1,26,'Це аудиторія'),
			('1414',1,24,'Це аудиторія'),
			('1514',1,60,'Це аудиторія'),
			('1518',1,32,'Це аудиторія'),
			('1508',1,20,'Це аудиторія'),
			('1502',1,24,'Це аудиторія'),
			('1503',1,48,'Це аудиторія');
			
/*Кінець аудиторій*/		

/*Користувачі, їх групи та права*/	
INSERT INTO `users_groups`(`name`,`description`)
	VALUES	('Гості','незалогінені користувачі'),
			('Користувачі','залогінені користувачі'),
			('Адміністратори','користувачі з підвищеними привілеями'),
			('Супер адміністратори','користувачі з усіма привілеями');
			
INSERT INTO	`priviledges`(`name`,`description`)
	VALUES	('READ','читання'),
			('WRITE','запис'),
			('UPDATE','оновлення'),
			('DELETE','видалення'),
			('DROP','знищення'),
			('CREATE','створення');
			
INSERT INTO	`group_priviledges`(`idGroup`,`idPriv`)
	VALUES	(1,1),
			(2,1),
			(3,1),
			(3,2),
			(3,3),
			(3,4),
			(4,1),
			(4,2),
			(4,3),
			(4,4),
			(4,5),
			(4,6);
			
INSERT INTO `users`(`ugid`,`email`,`pass`,`salt`,`val_url`,`active`,`counter`)			
	VALUES	(2,'vova@gmail.com','password1','salt','site1.com',TRUE,75),
			(2,'petya@gmail.com','password2','salt','site2.com',TRUE,75),
			(2,'vasya@gmail.com','password3','salt','site3.com',TRUE,75),
			(2,'dima@gmail.com','password4','salt','site4.com',TRUE,75),
			(3,'oleh@gmail.com','password5','salt','site5.com',TRUE,75),
			(3,'igor@gmail.com','password6','salt','site6.com',TRUE,75),
			(4,'ira@gmail.com','password7','salt','site7.com',TRUE,75);
			
/*кінець привілеїв*/

INSERT INTO `faculty`(`name`,`pic`)
	VALUES	('Факультет інформаційних технологій(ФІТ)','img/fac/defPic.png'),
			('Факультет нафтогазопроводів (ФНГП)','img/fac/defPic.png'),
			('Факультет управління та інформаційної діяльності (ФУІД)','img/fac/defPic.png');
	
INSERT INTO `kafedra`(`fid`,`name`,`pic`)
	VALUES	(1,'Кафедра інформатики','/images/maybe/default_pic.png'),
			(1,'Кафедра програмного забезпечення автоматизованих систем','img/kaf/defPic.png'),
			(2,'Кафедра транспорту і зберігання нафти і газу ','img/kaf/defPic.png'),
			(2,'Кафедра нафтової і газової гідромеханіки','img/kaf/defPic.png'),
			(3,'Кафедра соціальних комунікацій та права','img/kaf/defPic.png'),
			(3,'Кафедра державного управління та місцевого самоврядування','img/kaf/defPic.png');
	
INSERT INTO `study_form`(`name`,`description`)
	VALUES	('Денна','денна(стаціонарна) форма навчання'),
			('Заочна','заочна форма навчання');
	
INSERT INTO `groups_of_students`(`kid`,`sfid`,`name`)
	VALUES	(1,'1','АКТ-11-1'),
			(1,'2','АКТ-10-2'),
			(2,'1','СІ-10-2'),
			(2,'2','ПЗ-08-1'),
			(3,'1','ТЗ-08-2'),
			(3,'2','ТЗ-08-1м'),
			(4,'1','ПС-08-1'),
			(4,'2','ПС-10-2'),
			(5,'1','ДМ-08-1'),
			(5,'2','ДМ-10-1'),
			(6,'1','ДМ-09-2'),
			(6,'2','ДМ-11-2');
			
/*Студенти*/	

INSERT INTO `student`(`gid`) 
	VALUES	(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5);
			
INSERT INTO `student_key`(`key_name`,`key_weight`) 
	VALUES	('Прізвище',1),
			('Ім\'я',1),
			('По-батькові',1),
			('№ залікової',1),
			('№ телефону',1),
			('№ та серія паспорту',1),
			('Прізвище 2',2),
			('№ залікової 2',2),
			('Фото',1);
			
INSERT INTO `student_key_value`(`sid`,`skid`,`val`)
	VALUES	(1,1,'Клюфінський'),
			(1,2,'Володимир'),
			(1,3,'Степанович'),
			(1,4,'0000001'),
			(1,5,'+380500000001'),
			(1,6,'СЕ 000001'),
			(1,9,'img/students/defPic.jpg'),
			/*new one*/
			(2,1,'Бах'),
			(2,2,'Йоганн'),
			(2,3,'Себастьянович'),
			(2,4,'0000002'),
			(2,5,'+380500000002'),
			(2,6,'СЕ 000002'),
			(2,9,'img/students/defPic.jpg'),
			/*new one*/
			(3,1,'Дурко'),
			(3,2,'Іра'),
			(3,3,'Василівна'),
			(3,4,'0000003'),
			(3,5,'+380500000003'),
			(3,6,'СЕ 000003'),
			(3,9,'img/students/defPic.jpg'),
			/*new one*/
			(4,1,'Абсент'),
			(4,2,'Віктор'),
			(4,3,'Бухович'),
			(4,4,'0000004'),
			(4,5,'+380500000004'),
			(4,6,'СЕ 000004'),
			(4,9,'img/students/defPic.jpg'),
			/*new one*/
			(5,1,'Міцик'),
			(5,2,'Іван'),
			(5,3,'Степанович'),
			(5,4,'0000005'),
			(5,5,'+380500000005'),
			(5,6,'СЕ 000005'),
			(5,9,'img/students/defPic.jpg'),
			/*new one*/
			(6,1,'Лисиця'),
			(6,2,'Дзвінка'),
			(6,3,'Степанівна'),
			(6,4,'0000006'),
			(6,5,'+380500000006'),
			(6,6,'СН 000006'),
			(6,9,'img/students/defPic.jpg'),
			/*new one*/
			(7,1,'Креветка'),
			(7,2,'Наталя'),
			(7,3,'Василівна'),
			(7,4,'0000007'),
			(7,5,'+380500000007'),
			(7,6,'СЕ 000007'),
			(7,9,'img/students/defPic.jpg'),
			/*new one*/
			(8,1,'Інтел'),
			(8,2,'Орест'),
			(8,3,'Віталійович'),
			(8,4,'0000008'),
			(8,5,'+380500000008'),
			(8,6,'СЕ 000008'),
			(8,9,'img/students/defPic.jpg'),
			/*new one*/
			(9,1,'Пентіум'),
			(9,2,'В\'ячеслав'),
			(9,3,'Орестович'),
			(9,4,'0000009'),
			(9,5,'+380500000009'),
			(9,6,'СЕ 000009'),
			(9,9,'img/students/defPic.jpg'),
			/*new one*/
			(10,1,'Дрімвівер'),
			(10,2,'Ольга'),
			(10,3,'Вікторівна'),
			(10,4,'0000010'),
			(10,5,'+380500000010'),
			(10,6,'СЕ 000010'),
			(10,9,'img/students/defPic.jpg'),
			/*new one*/
			(11,1,'Волошин'),
			(11,2,'Ольга'),
			(11,3,'Романівна'),
			(11,4,'0000011'),
			(11,5,'+380500000011'),
			(11,6,'СЕ 000011'),
			(11,9,'img/students/defPic.jpg'),
			/*new one*/
			(12,1,'Карбон'),
			(12,2,'Антон'),
			(12,3,'Григорович'),
			(12,4,'0000012'),
			(12,5,'+380500000012'),
			(12,6,'СЕ 000012'),
			(12,9,'img/students/defPic.jpg'),
			/*new one*/
			(13,1,'Оксишин'),
			(13,2,'Ольга'),
			(13,3,'Вікторівна'),
			(13,4,'0000013'),
			(13,5,'+380500000013'),
			(13,6,'СЕ 000013'),
			(13,7,'Болюк'),
			(13,9,'img/students/defPic.jpg'),
			/*new one*/
			(14,1,'Амброзяк'),
			(14,2,'Ігор'),
			(14,3,'Вікторович'),
			(14,4,'0000014'),
			(14,5,'+380500000014'),
			(14,6,'СЕ 000014'),
			(14,9,'img/students/defPic.jpg'),
			/*new one*/
			(15,1,'Поттер'),
			(15,2,'Гарі'),
			(15,3,'Джошович'),
			(15,4,'0000015'),
			(15,5,'+380500000015'),
			(15,6,'СЕ 000015'),
			(15,9,'img/students/defPic.jpg'),
			/*new one*/
			(16,1,'Обраян'),
			(16,2,'Джон'),
			(16,3,'Семенович'),
			(16,4,'0000016'),
			(16,5,'+380500000016'),
			(16,6,'СЕ 000016'),
			(16,8,'1000001'),
			(16,9,'img/students/defPic.jpg'),
			/*new one*/
			(17,1,'Дракула'),
			(17,2,'Ігор'),
			(17,3,'Богданович'),
			(17,4,'0000017'),
			(17,5,'+380500000017'),
			(17,6,'СЕ 000017'),
			(17,9,'img/students/defPic.jpg'),
			/*new one*/
			(18,1,'Боґдановіч'),
			(18,2,'Борис'),
			(18,3,'Степанович'),
			(18,4,'0000018'),
			(18,5,'+380500000018'),
			(18,6,'СЕ 000018'),
			(18,9,'img/students/defPic.jpg'),
			/*new one*/
			(19,1,'Суровий'),
			(19,2,'Володимир'),
			(19,3,'Ігорович'),
			(19,4,'0000019'),
			(19,5,'+380500000019'),
			(19,6,'СЕ 000019'),
			(19,9,'img/students/defPic.jpg'),
			/*new one*/
			(20,1,'Кучма'),
			(20,2,'Олеся'),
			(20,3,'Вікторівна'),
			(20,4,'0000020'),
			(20,5,'+380500000020'),
			(20,6,'СЕ 000020'),
			(20,9,'img/students/defPic.jpg'),
			/*new one*/
			(21,1,'Перун'),
			(21,2,'В\'ячеслав'),
			(21,3,'Альбертович'),
			(21,4,'0000021'),
			(21,5,'+380500000021'),
			(21,6,'СЕ 000021'),
			(21,8,'1000002'),
			(21,9,'img/students/defPic.jpg'),
			/*new one*/
			(22,1,'Фіреворкс'),
			(22,2,'Дмитро'),
			(22,3,'Панасович'),
			(22,4,'0000022'),
			(22,5,'+380500000022'),
			(22,6,'СЕ 000022'),
			(22,9,'img/students/defPic.jpg'),
			/*new one*/
			(23,1,'Коте'),
			(23,2,'Василь'),
			(23,3,'Вікторович'),
			(23,4,'0000023'),
			(23,5,'+380500000023'),
			(23,6,'СЕ 000023'),
			(23,9,'img/students/defPic.jpg'),
			/*new one*/
			(24,1,'Брутфорс'),
			(24,2,'Ольга'),
			(24,3,'Омелянівна'),
			(24,4,'0000024'),
			(24,5,'+380500000024'),
			(24,6,'СЕ 000024'),
			(24,9,'img/students/defPic.jpg'),
			/*new one*/
			(25,1,'Осзон'),
			(25,2,'Віталіна'),
			(25,3,'Вікторівна'),
			(25,4,'0000025'),
			(25,5,'+380500000025'),
			(25,6,'СЕ 000025'),
			(25,9,'img/students/defPic.jpg'),
			/*new one*/
			(26,1,'Сірко'),
			(26,2,'Іван'),
			(26,3,'Дем\'янович'),
			(26,4,'0000026'),
			(26,5,'+380500000026'),
			(26,6,'СЕ 000026'),
			(26,9,'img/students/defPic.jpg'),
			/*new one*/
			(27,1,'Костишин'),
			(27,2,'Ірина'),
			(27,3,'Карлівна'),
			(27,4,'0000027'),
			(27,5,'+380500000027'),
			(27,6,'СЕ 000027'),
			(27,9,'img/students/defPic.jpg'),
			/*new one*/
			(28,1,'Олександрова'),
			(28,2,'Ольга'),
			(28,3,'Богданівна'),
			(28,4,'0000028'),
			(28,5,'+380500000028'),
			(28,6,'СЕ 000028'),
			(28,9,'img/students/defPic.jpg'),
			/*new one*/
			(29,1,'Булл'),
			(29,2,'Джошуа'),
			(29,3,'Вікторович'),
			(29,4,'0000029'),
			(29,5,'+380500000029'),
			(29,6,'СЕ 000029'),
			(29,9,'img/students/defPic.jpg'),
			/*new one*/
			(30,1,'Васерман'),
			(30,2,'Лев'),
			(30,3,'Карлович'),
			(30,4,'0000030'),
			(30,5,'+380500000030'),
			(30,6,'СЕ 000030'),
			(30,9,'img/students/defPic.jpg'),
			/*new one*/
			(31,1,'Васильченко'),
			(31,2,'Сергій'),
			(31,3,'Дмитрович'),
			(31,4,'0000031'),
			(31,5,'+380500000031'),
			(31,6,'СЕ 000031'),
			(31,9,'img/students/defPic.jpg'),
			/*new one*/
			(32,1,'Драгоманов'),
			(32,2,'Михайло'),
			(32,3,'Сергійович'),
			(32,4,'0000032'),
			(32,5,'+380500000032'),
			(32,6,'СЕ 000032'),
			(32,9,'img/students/defPic.jpg'),
			/*new one*/
			(33,1,'Василишин'),
			(33,2,'Ігор'),
			(33,3,'Бориславович'),
			(33,4,'0000033'),
			(33,5,'+380500000033'),
			(33,6,'СЕ 000033'),
			(33,9,'img/students/defPic.jpg'),
			/*new one*/
			(34,1,'Каськів'),
			(34,2,'Павло'),
			(34,3,'Петрович'),
			(34,4,'0000034'),
			(34,5,'+380500000034'),
			(34,6,'СЕ 000034'),
			(34,9,'img/students/defPic.jpg'),
			/*new one*/
			(35,1,'Коцюбинський'),
			(35,2,'Анатолій'),
			(35,3,'Геннадійович'),
			(35,4,'0000035'),
			(35,5,'+380500000035'),
			(35,6,'СЕ 000035'),
			(35,9,'img/students/defPic.jpg'),
			/*new one*/
			(36,1,'Грач'),
			(36,2,'Петро'),
			(36,3,'Тарасович'),
			(36,4,'0000036'),
			(36,5,'+380500000036'),
			(36,6,'СЕ 000036'),
			(36,9,'img/students/defPic.jpg'),
			/*new one*/
			(37,1,'Ланова'),
			(37,2,'Уляна'),
			(37,3,'Ігорівна'),
			(37,4,'0000037'),
			(37,5,'+380500000037'),
			(37,6,'СЕ 000037'),
			(37,9,'img/students/defPic.jpg'),
			/*new one*/
			(38,1,'Корнїйчук'),
			(38,2,'Сніжана'),
			(38,3,'Антипівна'),
			(38,4,'0000038'),
			(38,5,'+380500000038'),
			(38,6,'СЕ 000038'),
			(38,9,'img/students/defPic.jpg'),
			/*new one*/
			(39,1,'Витребенько'),
			(39,2,'Афанасій'),
			(39,3,'Павлович'),
			(39,4,'0000039'),
			(39,5,'+380500000039'),
			(39,6,'СЕ 000039'),
			(39,9,'img/students/defPic.jpg'),
			/*new one*/
			(40,1,'Полохало'),
			(40,2,'Борис'),
			(40,3,'Сергійови'),
			(40,4,'0000040'),
			(40,5,'+380500000040'),
			(40,6,'СЕ 000040'),
			(40,9,'img/students/defPic.jpg'),
			/*new one*/
			(41,1,'Бандера'),
			(41,2,'Добромисл'),
			(41,3,'Живосилович'),
			(41,4,'0000041'),
			(41,5,'+380500000041'),
			(41,6,'СЕ 000041'),
			(41,9,'img/students/defPic.jpg'),
			/*new one*/
			(42,1,'Гамула'),
			(42,2,'Килина'),
			(42,3,'Курилович'),
			(42,4,'0000042'),
			(42,5,'+380500000042'),
			(42,6,'СЕ 000042'),
			(42,9,'img/students/defPic.jpg'),
			/*new one*/
			(43,1,'Трухан'),
			(43,2,'Ярина '),
			(43,3,'Мудролюбівна'),
			(43,4,'0000043'),
			(43,5,'+380500000043'),
			(43,6,'СЕ 000043'),
			(43,9,'img/students/defPic.jpg'),
			/*new one*/
			(44,1,'Гайдук'),
			(44,2,'Хорив'),
			(44,3,'Твердиславович'),
			(44,4,'0000044'),
			(44,5,'+380500000044'),
			(44,6,'СЕ 000044'),
			(44,9,'img/students/defPic.jpg'),
			/*new one*/
			(45,1,'Андрейчук'),
			(45,2,'Щастибог'),
			(45,3,'Велемирович'),
			(45,4,'0000045'),
			(45,5,'+380500000045'),
			(45,6,'СЕ 000045'),
			(45,9,'img/students/defPic.jpg'),
			/*new one*/
			(46,1,'Адамів'),
			(46,2,'Світлана'),
			(46,3,'Божедарівна'),
			(46,4,'0000046'),
			(46,5,'+380500000046'),
			(46,6,'СЕ 000046'),
			(46,9,'img/students/defPic.jpg'),
			/*new one*/
			(47,1,'Азарянський'),
			(47,2,'Боян'),
			(47,3,'Волелюбович'),
			(47,4,'0000047'),
			(47,5,'+380500000047'),
			(47,6,'СЕ 000047'),
			(47,9,'img/students/defPic.jpg'),
			/*new one*/
			(48,1,'Злива'),
			(48,2,'Бажана'),
			(48,3,'Збориславівна'),
			(48,4,'0000048'),
			(48,5,'+380500000048'),
			(48,6,'СЕ 000048'),
			(48,9,'img/students/defPic.jpg'),
			/*new one*/
			(49,1,'Хмара'),
			(49,2,'Воїслав'),
			(49,3,'Живосилович'),
			(49,4,'0000049'),
			(49,5,'+380500000049'),
			(49,6,'СЕ 000049'),
			(49,9,'img/students/defPic.jpg'),
			/*new one*/
			(50,1,'Вовченко'),
			(50,2,'Троян'),
			(50,3,'Усович'),
			(50,4,'0000050'),
			(50,5,'+380500000050'),
			(50,6,'СЕ 000050'),
			(50,9,'img/students/defPic.jpg');
/*
INSERT INTO `lesson_cycle`(`name`) 
		VALUES	('Цикл 1 - гуманітарні дисципліни'),
				('Цикл 2 - професійні дисципліни'),
				('Цикл 3 - самостіно вибрані дисципліни');
*/
INSERT INTO `lessons`(`kid`,`name`)
		VALUES	(1,'Організація баз даних та знань'),
				(1,'Операційні ситеми'),
				(1,'Основи теорії надійност'),
				(1,'Інформатика та програмування'),
				(1,'Коп’ютерна техніка і програмування'),
				(2,'Програмування мовою С'),
				(2,'Штучний інтелект'),
				(2,'Глобальні комп’ютерні мережі'),
				(2,'Об’єктно-орієнтовне програмування'),
				(2,'Основи захисту інформації'),
				(3,'Очисні споруди. Охорона довкілля'),
				(3,'Прогресивні технології зберігання і розподілу нафтопродуктів'),
				(3,'Транспорт і зберігання нафти і газу'),
				(3,'Трубопровідний транспорт газу'),
				(3,'Основи нафтогазової справи'),
				(4,'Основи нафтогазової справи'),
				(4,'Газова динаміка'),
				(4,'Гідравліка і гідропривід'),
				(4,'Гідрогазодинаміка'),
				(4,'Загальна гідравліка'),
				(6,'Психологія управління'),
				(6,'Ділова іноземна мова '),
				(6,'Регіональна соціально-економічна політика'),
				(6,'Мікроекономіка '),
				(6,'Управління персоналом'),
				(5,'архівознавство'),
				(5,'господарське законодавство'),
				(5,'корпоративне право'),
				(5,'нотаріат'),
				(5,'інтелектуальна власність');
/*Викладачі*/	

INSERT INTO `teacher`(`kid`) 
	VALUES	(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5),
			(1),
			(1),
			(2),
			(2),
			(3),
			(3),
			(4),
			(4),
			(5),
			(5);

INSERT INTO `teacher_key`(`key_name`,`key_weight`) 
	VALUES	('Прізвище',1),
			('Ім\'я',1),
			('По-батькові',1),
			('Посада',1),
			('№ телефону',1),
			('№ та серія паспорту',1),
			('Прізвище 2',2),
			('№ телефону 2',2),
			('Фото',1);
			
INSERT INTO `teacher_key_value`(`tid`,`tkid`,`val`)
	VALUES	(1,1,'Козак'),
			(1,2,'Володимир'),
			(1,3,'Степанович'),
			(1,4,'професор (за сумісництвом)'),
			(1,5,'+380930000001'),
			(1,6,'СЕ 000001'),
			(1,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(2,1,'Шпуляр'),
			(2,2,'Тарас'),
			(2,3,'Вікторович'),
			(2,4,'асистент'),
			(2,5,'+380930000002'),
			(2,6,'СЕ 000002'),
			(2,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(3,1,'Вурдалака'),
			(3,2,'Іра'),
			(3,3,'Василівна'),
			(3,4,'асистент'),
			(3,5,'+380930000003'),
			(3,6,'СЕ 000003'),
			(3,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(4,1,'Колор'),
			(4,2,'Віктор'),
			(4,3,'Андрійович'),
			(4,4,'доцент (за сумісництвом)'),
			(4,5,'+380930000004'),
			(4,6,'СЕ 000004'),
			(4,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(5,1,'Маркіян'),
			(5,2,'Тарас'),
			(5,3,'Степанович'),
			(5,4,'доцент (за сумісництвом)'),
			(5,5,'+380930000005'),
			(5,6,'СЕ 000005'),
			(5,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(6,1,'Відалія'),
			(6,2,'Олеся'),
			(6,3,'Степанівна'),
			(6,4,'Доцент'),
			(6,5,'+380930000006'),
			(6,6,'СН 000006'),
			(6,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(7,1,'Красуня'),
			(7,2,'Наталя'),
			(7,3,'Ігорівна'),
			(7,4,'доцент (за сумісництвом)'),
			(7,5,'+380930000007'),
			(7,6,'СЕ 000007'),
			(7,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(8,1,'Назгул'),
			(8,2,'Рікардо'),
			(8,3,'Лебронович'),
			(8,4,'асистент (за сумісництвом)'),
			(8,5,'+380930000008'),
			(8,6,'СЕ 000008'),
			(8,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(9,1,'Октобер'),
			(9,2,'Фест'),
			(9,3,'Германійович'),
			(9,4,'асистент (за сумісництвом)'),
			(9,5,'+380930000009'),
			(9,6,'СЕ 000009'),
			(9,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(10,1,'Атака'),
			(10,2,'Олександра'),
			(10,3,'Василівна'),
			(10,4,'асистент (за сумісництвом)'),
			(10,5,'+380930000010'),
			(10,6,'СЕ 000010'),
			(10,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(11,1,'Шекета'),
			(11,2,'Василь'),
			(11,3,'Іванович'),
			(11,4,'доцент'),
			(11,5,'+380930000011'),
			(11,6,'СЕ 000011'),
			(11,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(12,1,'Іщеряков'),
			(12,2,'Сергій'),
			(12,3,'Михайлович'),
			(12,4,'доцент (за сумісництвом)'),
			(12,5,'+380930000012'),
			(12,6,'СЕ 000012'),
			(12,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(13,1,'Дитко'),
			(13,2,'Тарас'),
			(13,3,'Володимирович'),
			(13,4,'асистент (за сумісництвом)'),
			(13,5,'+380930000013'),
			(13,6,'СЕ 000013'),
			(13,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(14,1,'Тимків'),
			(14,2,'Дмитро'),
			(14,3,'Федорович'),
			(14,4,'професор (за сумісництвом)'),
			(14,5,'+380930000014'),
			(14,6,'СЕ 000014'),
			(14,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(15,1,'Бандура'),
			(15,2,'Вікторія'),
			(15,3,'Валерівна'),
			(15,4,'доцент (за сумісництвом)'),
			(15,5,'+380930000015'),
			(15,6,'СЕ 000015'),
			(15,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(16,1,'Яцишин'),
			(16,2,'Микола'),
			(16,3,'Миколайович'),
			(16,4,'доцент (за сумісництвом)'),
			(16,5,'+380930000016'),
			(16,6,'СЕ 000016'),
			(16,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(17,1,'Броновський'),
			(17,2,'Ігор'),
			(17,3,'Васильович'),
			(17,4,'асистент (за сумісництвом)'),
			(17,5,'+380930000017'),
			(17,6,'СЕ 000017'),
			(17,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(18,1,'Вовк'),
			(18,2,'Роман'),
			(18,3,'Богданович'),
			(18,4,'доцент'),
			(18,5,'+380930000018'),
			(18,6,'СЕ 000018'),
			(18,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(19,1,'Жук'),
			(19,2,'Василь'),
			(19,3,'Васильович'),
			(19,4,'асистент (за сумісництвом)'),
			(19,5,'+380930000019'),
			(19,6,'СЕ 000019'),
			(19,9,'img/teachers/defPic.jpg'),
			/*new one*/
			(20,1,'Кріт'),
			(20,2,'Олександр'),
			(20,3,'Ростиславович'),
			(20,4,'Професор'),
			(20,5,'+380930000020'),
			(20,6,'СЕ 000020'),
			(20,9,'img/teachers/defPic.jpg');
			
/*Персональні навантаження для кожного викладача*/			
INSERT INTO `personal_navant`(`tid`,`startSem`,`endSem`,`stavka`,`planove_navant`)
	VALUES	(1,'2009-09-01','2010-05-05',0.5,850),
			(2,'2009-09-01','2010-05-05',0.75,920),
			(3,'2009-09-01','2010-05-05',0.2,400),
			(4,'2009-09-01','2010-05-05',0.5,500),
			(5,'2009-09-01','2010-05-05',0.75,640),
			(6,'2009-09-01','2010-05-05',0.5,838),
			(7,'2009-09-01','2010-05-05',0.5,740),
			(8,'2009-09-01','2010-05-05',1,1124),
			(9,'2009-09-01','2010-05-05',0.75,380),
			(10,'2009-09-01','2010-05-05',0.5,440);
	
INSERT INTO `personal_navant_key`(`key_name`,`key_weight`)
	VALUES	('Дипломне проектування(кількість студентів)',1),
			('Рецензія ДП',2),
			('Магістерська робота(кількість студентів)',3),
			('Рецензція Маг',4),
			('ДЕК',5),
			('Практика',6);
			
INSERT INTO `personal_navant_key_value`(`pnid`,`pnkid`,`val`)
	VALUES	(1,1,'5'),
			(1,2,'2'),
			(1,3,'5'),
			(1,4,'5'),
			(1,5,'5'),
			(1,6,'15'),
			/*next one*/
			(2,1,'5'),
			(2,2,'4'),
			(2,3,'5'),
			(2,4,'1'),
			(2,5,'1'),
			(2,6,'15'),
			/*next one*/
			(3,1,'3'),
			(3,2,'2'),
			(3,3,'5'),
			(3,4,'2'),
			(3,5,'1'),
			(3,6,'15'),
			/*next one*/
			(4,1,'5'),
			(4,2,'2'),
			(4,4,'1'),
			(4,5,'4'),
			(4,6,'15'),
			/*next one*/
			(5,2,'2'),
			(5,3,'5'),
			(1,6,'15'),
			/*next one*/
			(6,1,'4'),
			(6,3,'5'),
			(6,5,'5'),
			/*next one*/
			(6,1,'5'),
			(6,3,'4'),
			(6,4,'3'),
			/*next one*/
			(7,1,'2'),
			(7,2,'2'),
			(7,5,'1'),
			/*next one*/
			(8,3,'3'),
			(8,4,'1'),
			(8,5,'5'),
			/*next one*/
			(9,1,'5'),
			(9,2,'2'),
			(9,3,'4'),
			/*next one*/
			(10,1,'1'),
			(10,4,'4'),
			(10,5,'2');
			
INSERT INTO `main_navant`(`tid`,`lid`,`gid`,`startSem`,`endSem`)
	VALUES	(1,1,1,'2009-09-01','2010-01-21'),
			(1,2,2,'2009-09-01','2010-01-21'),
			(2,3,3,'2009-09-01','2010-01-21'),
			(2,4,4,'2009-09-01','2010-01-21'),
			(3,5,5,'2009-09-01','2010-01-21'),
			(3,6,6,'2009-09-01','2010-01-21'),
			(4,7,7,'2009-09-01','2010-01-21'),
			(4,8,8,'2009-09-01','2010-01-21'),
			(5,9,9,'2009-09-01','2010-01-21'),
			(5,10,10,'2009-09-01','2010-01-21'),
			(6,1,1,'2009-09-01','2010-01-21'),
			(6,2,2,'2009-09-01','2010-01-21'),
			(7,3,3,'2009-09-01','2010-01-21'),
			(7,4,4,'2009-09-01','2010-01-21'),
			(8,5,5,'2009-09-01','2010-01-21'),
			(8,6,6,'2009-09-01','2010-01-21'),
			(9,7,7,'2009-09-01','2010-01-21'),
			(9,7,8,'2009-09-01','2010-01-21'),
			(10,8,9,'2009-09-01','2010-01-21'),
			(10,8,10,'2009-09-01','2010-01-21');
			
INSERT INTO `main_navant_key`(`key_name`,`key_weight`)
	VALUES	('підгрупа',1),
			('Кількість студетів',2),
			('Семестр',3),
			('Лекції',4),
			('Лабораторні',5),
			('Контрольні',6),
			('Практичні',7),
			('Іспит',8),
			('залік',8),
			('Консультація',9);
			
INSERT INTO `main_navant_key_value`(`mnid`,`mnkid`,`val`)
	VALUES	(1,1,'1'),
			(1,2,'10'),
			(1,3,'5'),
			(1,4,'32'),
			(1,5,'4'),
			(1,6,'1'),
			(1,7,'16'),
			(1,8,'15.8'),
			(1,9,'4'),
			/*New one*/
			(2,1,'1'),
			(2,2,'20'),
			(2,3,'6'),
			(2,4,'38'),
			(2,5,'2'),
			(2,6,'1'),
			(2,7,'16'),
			(2,8,'11.6'),
			(2,9,'2'),
			/*New one*/
			(3,1,'1'),
			(3,2,'20'),
			(3,3,'6'),
			(3,4,'38'),
			(3,5,'2'),
			(3,6,'1'),
			(3,7,'16'),
			(3,8,'11.6'),
			(3,9,'2'),
			/*New one*/
			(4,1,'1'),
			(4,2,'20'),
			(4,3,'6'),
			(4,4,'38'),
			(4,5,'2'),
			(4,6,'1'),
			(4,7,'16'),
			(4,8,'11.6'),
			(4,9,'2'),
			/*New one*/
			(5,1,'1'),
			(5,2,'20'),
			(5,3,'6'),
			(5,4,'38'),
			(5,5,'2'),
			(5,6,'1'),
			(5,7,'16'),
			(5,8,'11.6'),
			(5,9,'2'),
			/*New one*/
			(6,1,'1'),
			(6,2,'20'),
			(6,3,'6'),
			(6,4,'38'),
			(6,5,'2'),
			(6,6,'1'),
			(6,7,'16'),
			(6,8,'11.6'),
			(6,9,'2'),
			/*New one*/
			(7,1,'1'),
			(7,2,'20'),
			(7,3,'6'),
			(7,4,'38'),
			(7,5,'2'),
			(7,6,'1'),
			(7,7,'16'),
			(7,8,'11.6'),
			(7,9,'2'),
			/*New one*/
			(8,1,'1'),
			(8,2,'20'),
			(8,3,'6'),
			(8,4,'38'),
			(8,5,'2'),
			(8,6,'1'),
			(8,7,'16'),
			(8,8,'11.6'),
			(8,9,'2'),
			/*New one*/
			(9,1,'1'),
			(9,2,'20'),
			(9,3,'6'),
			(9,4,'38'),
			(9,5,'2'),
			(9,6,'1'),
			(9,7,'16'),
			(9,8,'11.6'),
			(9,9,'2'),
			/*New one*/
			(10,1,'1'),
			(10,2,'20'),
			(10,3,'6'),
			(10,4,'38'),
			(10,5,'2'),
			(10,6,'1'),
			(10,7,'16'),
			(10,8,'11.6'),
			(10,9,'2');
			
/* P R O C E D U R E S */

/* ========== F A C U L T Y ========== */

/* Отримати усі факультети */
DELIMITER \\
CREATE PROCEDURE getAllFaculty()
BEGIN
SELECT `id`,`name`,`pic` FROM `faculty`;
END;
\\
DELIMITER ;

/*Отримати конкретний факультети*/
DELIMITER \\
CREATE PROCEDURE getFacultyById(id INT(2))
BEGIN
SELECT `id`,`name`,`pic`,`description` FROM `faculty` WHERE `faculty`.`id` = id;
END;
\\
DELIMITER ;

/*Додати факультет*/
DELIMITER \\
CREATE PROCEDURE addFaculty(name VARCHAR(255), pic VARCHAR(255), descript TEXT)
BEGIN
INSERT INTO `faculty`(`name`,`pic`,`description`) VALUES (name,pic, descript);
END;
\\
DELIMITER ;

/*Оновити факультет*/
DELIMITER \\
CREATE PROCEDURE updateFaculty(idn INT(2), name VARCHAR(255), pic VARCHAR(255), descript TEXT)
BEGIN
UPDATE `faculty` SET `name` = name, `pic` = pic, `description` = descript WHERE `id` = idn;
END;
\\
DELIMITER ;

/*Видалити факультет*/
DELIMITER \\
CREATE PROCEDURE removeFaculty(id INT(2))
BEGIN
DELETE FROM `faculty` WHERE `faculty`.`id` = id;
END;
\\
DELIMITER ;

/* ========== K A F E D R A ========== */

/*Отримати усі кафедри*/
DELIMITER \\
CREATE PROCEDURE getAllKafedra()
BEGIN
SELECT K.`description`,K.`id`,K.`fid`,K.`name` AS kname,F.`name` AS fname,K.`pic` FROM `faculty` AS F RIGHT JOIN `kafedra` AS K ON K.`fid` = F.`id`;
END;
\\
DELIMITER ;

/*Отримати конкретну кафедру*/
DELIMITER \\
CREATE PROCEDURE getKafedraById(id INT(2))
BEGIN
SELECT K.`description`,K.`id`,K.`fid`,K.`name` AS kname,F.`name` AS fname,K.`pic` FROM `faculty` AS F RIGHT JOIN `kafedra` AS K ON K.`fid` = F.`id` WHERE K.`id` = id;
END;
\\
DELIMITER ;

/*Отримати кафедри конкретного факультету*/
DELIMITER \\
CREATE PROCEDURE getAllKafedrasFromFaculty(id INT(2))
BEGIN
SELECT K.`description`,K.`id`,K.`fid`,K.`name` AS kname,F.`name` AS fname,K.`pic` FROM `faculty` AS F RIGHT JOIN `kafedra` AS K ON K.`fid` = F.`id` WHERE K.`fid` = id;
END;
\\
DELIMITER ;

/*Додати кафедру*/
DELIMITER \\
CREATE PROCEDURE addKafedra(fid INT(2), name VARCHAR(255), pic VARCHAR(255), descript TEXT)
BEGIN
INSERT INTO `kafedra`(`fid`,`name`,`pic`,`description`) VALUES (fid,name,pic,descript);
END;
\\
DELIMITER ;

/*Оновити(редагувати) кафедру*/
DELIMITER \\
CREATE PROCEDURE updateKafedra(idn INT(2), fid INT(2), name VARCHAR(255), pic VARCHAR(255), descript TEXT)
BEGIN
UPDATE `kafedra` SET `fid` = fid,`name` = name,`pic` = pic,`description` = descript WHERE `id` = idn;
END;
\\
DELIMITER ;

/*Видалити кафедру*/
DELIMITER \\
CREATE PROCEDURE removeKafedra(id INT(2))
BEGIN
DELETE FROM `kafedra` WHERE `kafedra`.`id` = id;
END;
\\
DELIMITER ;

/* ========== G R O U P S  O F  S T U D E N T S ========== */

/*Отримати усі групи*/
DELIMITER \\
CREATE PROCEDURE getAllGroupsOfStudents()
BEGIN
SELECT SF.`name` AS sfname, K.`name` AS kname,GOS.`id`,GOS.`kid`,GOS.`sfid`,GOS.`name` as GOSname,GOS.`count_stud` FROM `groups_of_students` AS GOS RIGHT JOIN `kafedra` AS K  ON GOS.`kid` = K.`id` LEFT JOIN `study_form` AS SF ON GOS.`sfid` = SF.`id`;
END;
\\
DELIMITER ;

/*Отримати групу студентів з конкретної кафедри*/
DELIMITER \\
CREATE PROCEDURE getGroupOfStudentsFromKafedra(id INT(2))
BEGIN
SELECT SF.`description`,SF.`name` AS sfname, K.`name` AS kname,GOS.`id`,GOS.`kid`,GOS.`sfid`,GOS.`name` as GOSname,GOS.`count_stud` FROM `groups_of_students` AS GOS RIGHT JOIN `kafedra` AS K  ON GOS.`kid` = K.`id` LEFT JOIN `study_form` AS SF ON GOS.`sfid` = SF.`id` WHERE GOS.`kid` = id;
END;
\\
DELIMITER ;

/*Додати групу студентів*/
DELIMITER \\
CREATE PROCEDURE addGroupOfStudents(kid INT(2), sfid INT(2), name VARCHAR(255), cnt INT(2), descript TEXT)
BEGIN
INSERT INTO `groups_of_students`(`kid`,`sfid`,`name`,`count_stud`,`description`) VALUES (kid,sfid,name,cnt,descript);
END;
\\
DELIMITER ;

/*Оновити групу студентів*/
DELIMITER \\
CREATE PROCEDURE updateGroupOfStudents(idn INT(2), kid INT(2), sfid INT(2), name VARCHAR(255), cnt INT(2), descript TEXT)
BEGIN
UPDATE `groups_of_students` SET `kid` = kid,`sfid` = sfid,`name` = name,`count_stud` = cnt,`description` = descript WHERE `id` = idn;
END;
\\
DELIMITER ;

/*Видалити групу студентів*/
DELIMITER \\
CREATE PROCEDURE removeGroupOfStudents(id INT(2))
BEGIN
DELETE FROM `groups_of_students` WHERE `groups_of_students`.`id` = id;
END;
\\
DELIMITER ;

/* ========== L E S S O N S ========== */

/*Отримати усі предмети*/
DELIMITER \\
CREATE PROCEDURE getAllLessons()
BEGIN
SELECT K.`name` AS kname, L.`id`,L.`kid`,L.`name` FROM `lessons` as L RIGHT JOIN `kafedra` AS K ON L.`kid` = K.`id`;
END;
\\
DELIMITER ;

/*Отримати предмети з конкретної кафедри*/
DELIMITER \\
CREATE PROCEDURE getLessonsFromKafedra(id INT(2))
BEGIN
SELECT K.`name` AS kname, L.`id`,L.`kid`,L.`name` FROM `lessons` as L RIGHT JOIN `kafedra` AS K ON L.`kid` = K.`id` WHERE K.`id`= id;
END;
\\
DELIMITER ;

/*Додати предмет*/
DELIMITER \\
CREATE PROCEDURE addLesson(kid INT(2), name VARCHAR(80))
BEGIN
INSERT INTO `lessons`(`kid`,`name`) VALUES (kid,name);
END;
\\
DELIMITER ;

/*Оновити предмет*/
DELIMITER \\
CREATE PROCEDURE updateLesson(idn INT(2), kid INT(2), name VARCHAR(80))
BEGIN
UPDATE `lessons` SET `kid` = kid,`name` = name WHERE `id` = idn;
END;
\\
DELIMITER ;

/*Видалити предмет*/
DELIMITER \\
CREATE PROCEDURE removeLesson(id INT(2))
BEGIN
DELETE FROM `lessons` WHERE `lessons`.`id` = id;
END;
\\
DELIMITER ;

/* ========== A U D I T O R Y ========== */

DELIMITER \\
CREATE PROCEDURE addAuditory(audNum VARCHAR(6), build INT(2), place INT(2), descr TEXT)
BEGIN
INSERT INTO `auditory`(`number_aud`,`id_build`,`number_place`,`descript`) VALUES (audNum, build, place, descr);
END;
\\
DELIMITER ;

DELIMITER \\
CREATE PROCEDURE removeAuditory(idn INT(2))
BEGIN
DELETE FROM `auditory` WHERE `id` = idn;
END;
\\
DELIMITER ;

DELIMITER \\
CREATE PROCEDURE updateAuditory(idn INT(2), audNum VARCHAR(6), build INT(2), place INT(2), descr TEXT)
BEGIN
UPDATE `auditory` SET `number_aud` = audNum, `id_build` = build, `number_place` = place,`descript` = descr WHERE `id` = idn;
END;
\\
DELIMITER ;

/* ========== B U I L D I N G ==========*/

DELIMITER \\
CREATE PROCEDURE addBuilding(numbBld VARCHAR(6), descr TEXT)
BEGIN
INSERT INTO `building`(`number_bld`,`descript`) VALUES (numBld, descr);
END;
\\
DELIMITER ;

DELIMITER \\
CREATE PROCEDURE removeBuilding()
BEGIN
DELETE FROM `building` WHERE `id` = idn;
END;
\\
DELIMITER ;

DELIMITER \\
CREATE PROCEDURE updateBuilding(numbBld VARCHAR(6), descr TEXT, idn iNT(2))
BEGIN
UPDATE `building` SET `number_bld` = numBld,`descript` = descr WHERE `id` = idn;
END;
\\
DELIMITER ;

/* ========== U S E R S ========== */

/*insert new user BY DEFAULT PRIVILEDGES USER ! into db*/

DELIMITER \\
CREATE PROCEDURE add_user(email VARCHAR(30), pass CHAR(32), salt VARCHAR(30), val_url VARCHAR(50), cnt INTEGER(2))
BEGIN
INSERT INTO `users`(`ugid`,`email`,`pass`,`salt`,`val_url`,`active`,`counter`) VALUES (default,email,pass,salt,val_url,default,cnt);
END;
\\
DELIMITER ;

/*set user active by validate url*/

DELIMITER \\
CREATE PROCEDURE validate_user(val_urli VARCHAR(50))
BEGIN
DECLARE user_id INT DEFAULT '0';
SELECT `id` INTO user_id FROM `users` WHERE `users`.`val_url` = val_urli;
IF user_id THEN
UPDATE `users` SET `active` = true WHERE `id` = user_id;
END IF;
SELECT `email` FROM `users` WHERE `users`.`id` = user_id;
END;
\\
DELIMITER ;

/* ========== S T U D E N T S ========== */

DELIMITER \\
CREATE PROCEDURE getAllStudents()
BEGIN
SELECT GOS.`name`,S.`id`,SK.`id`,SK.`key_name`,SK.`key_weight`,SKV.`id`,SKV.`sid`,SKV.`skid`,SKV.`val` FROM `student` AS S LEFT JOIN `student_key_value` AS SKV ON S.id = SKV.sid LEFT JOIN `student_key` AS SK ON SK.id = SKV.skid INNER JOIN `groups_of_students` AS GOS ON S.`gid` = GOS.`id`;
END;
\\
DELIMITER ;

DELIMITER \\
CREATE PROCEDURE getStudentsByGroup(gosId INT(2))
BEGIN
SELECT GOS.`name`,S.`id`,SK.`id`,SK.`key_name`,SK.`key_weight`,SKV.`id`,SKV.`sid`,SKV.`skid`,SKV.`val` FROM `student` AS S LEFT JOIN `student_key_value` AS SKV ON S.id = SKV.sid LEFT JOIN `student_key` AS SK ON SK.id = SKV.skid INNER JOIN `groups_of_students` AS GOS ON S.`gid` = GOS.`id` WHERE GOS.`id` = gosId;
END;
\\
DELIMITER ;

/* =========== T E A C H E R   L O A D ========== */
/*Персональне навантаження викладача*/
DELIMITER \\
CREATE PROCEDURE getTeachersLoadById(idt INT(2))
BEGIN
SELECT	T.`id`,T.`kid`,
		TKV.`id`,TKV.`tid`,TKV.`tkid`,TKV.`val`,
		TK.`id`, TK.`key_name`,TK.`key_weight`,
		PN.`id`,PN.`tid`,PN.`startSem`,PN.`endSem`,PN.`stavka`,PN.`planove_navant`,
		PNKV.`id`,PNKV.`pnid`,PNKV.`pnkid`,PNKV.`val`,
		PNK.`id`, PNK.`key_name`,PNK.`key_weight`/*,
		MN.`id`, MN.`tid`,MN.`startSem`, MN.`endSem`,
		MNKV.`id`, MNKV.`mnid`, MNKV.`mnkid`, MNKV.`val`,
		MNK.`id`, MNK.`key_name`, MNK.`key_weight`*/
		FROM `teacher` AS T INNER JOIN `teacher_key_value` AS TKV ON T.`id` = TKV.`tid`
							INNER JOIN `teacher_key` AS TK ON TKV.`tkid` = TK.`id`
							INNER JOIN `personal_navant` AS PN ON T.`id` = PN.`tid`
							INNER JOIN `personal_navant_key_value` AS PNKV ON PN.`id` = PNKV.`pnid`
							INNER JOIN `personal_navant_key` AS PNK ON PNKV.`pnkid` = PNK.`id`
							WHERE T.`id` = idt;
END;
\\
DELIMITER ;
/*
SELECT GOS.`name`,MN.`id`,MN.`tid`,MN.`lid`,MN.`gid`,L.`name`, MNKV.`val` AS ispyt
									FROM `main_navant` AS MN
									INNER JOIN `teacher` AS T ON T.`id` = MN.`tid`
									INNER JOIN `groups_of_students` AS GOS ON GOS.`id` = MN.`gid`
									INNER JOIN `lessons` AS L ON L.`id` = MN.`lid`,
									INNER JOIN `main_navant_key_value` AS MNKV ON MN.`id` = MNKV.`mnid`,
									INNER JOIN `main_navant_key` AS MNK ON MNKV.`mnkid` = MNK.`id`,
									WHERE MNKV.`mnkid` = 8;*/