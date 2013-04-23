CREATE DATABASE IF NOT EXISTS `Dyplom_kafedra_calculation` CHARACTER SET `utf8` COLLATE utf8_general_ci;
USE `Dyplom_kafedra_calculation`;

CREATE TABLE IF NOT EXISTS `faculty`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор факультету',
`name` VARCHAR(80) NOT NULL COMMENT 'назва факультету',
`pic` VARCHAR(80) COMMENT 'Логотип факультету, якщо такий є',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про факультети';

CREATE TABLE IF NOT EXISTS `kafedra`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор кафедри',
`fid` INTEGER(2) NOT NULL COMMENT 'Звязок кафедри з факультетом',
`name` VARCHAR(80) NOT NULL COMMENT 'назва кафедри',
`pic` VARCHAR(80) COMMENT 'Логотип кафедри, якщо такий є',
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
`name` VARCHAR(80) NOT NULL COMMENT 'форма навчання',
`prymitka` VARCHAR(80) COMMENT 'примітка',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про різні форми навчання(денна чи заочна)';

CREATE TABLE IF NOT EXISTS `groups_of_students`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор групи',
`kid` INTEGER(2) NOT NULL COMMENT 'Звязок групи з кафедрою',
`sfid` INTEGER(2) NOT NULL COMMENT 'Звязок групи з формою навчання',
`name` VARCHAR(80) NOT NULL COMMENT 'назва групи',
`count_stud` INTEGER(2) COMMENT 'кількість студентів у групі, якщо лінь заповнювати дані про студентів групи',
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
`key_name` VARCHAR(20) NOT NULL COMMENT 'тут містяться назви ключів', 
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
`val` VARCHAR(80) NOT NULL COMMENT 'тут містяться значення ключів', 
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

CREATE TABLE IF NOT EXISTS `lesson_cycle`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор циклу',
`name` VARCHAR(80) NOT NULL COMMENT 'назва циклу',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються дані про цикли предметів';

CREATE TABLE IF NOT EXISTS `lessons`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор предмету',
`kid` INTEGER(2) NOT NULL COMMENT 'звязок з кафедрою',
`name` VARCHAR(80) NOT NULL COMMENT 'назва дисципліни',
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
`key_name` VARCHAR(20) NOT NULL COMMENT 'тут містяться назви ключів', 
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
`val` VARCHAR(80) NOT NULL COMMENT 'тут містяться значення ключів', 
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
`key_name` VARCHAR(20) NOT NULL COMMENT 'тут містяться назви ключів', 
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
`val` VARCHAR(80) NOT NULL COMMENT 'тут містяться значення ключів', 
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
`key_name` VARCHAR(20) NOT NULL COMMENT 'тут містяться назви ключів', 
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
`val` VARCHAR(80) NOT NULL COMMENT 'тут містяться значення ключів', 
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
`name` VARCHAR(30) NOT NULL COMMENT 'назва групи',
`description` VARCHAR(30) NOT NULL COMMENT 'опис групи',
PRIMARY KEY(`id`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються групи користувачів';

CREATE TABLE IF NOT EXISTS `priviledges`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'Ідентифікатор привілею',
`name` VARCHAR(30) NOT NULL COMMENT 'назва привілею',
`description` VARCHAR(30) NOT NULL COMMENT 'опис привілею',
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
`email` VARCHAR(30) NOT NULL COMMENT 'електронна пошта',
`pass` CHAR(32) NOT NULL COLLATE utf8_bin COMMENT 'пароль',
`salt` VARCHAR(32) NOT NULL COLLATE utf8_bin COMMENT 'сіль(для засолювання паролю)',
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

CREATE TABLE IF NOT EXISTS`auditory`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор',
`number_aud` VARCHAR(6) NOT NULL COMMENT 'номер аудиторії',
`number_place` INTEGER(2) COMMENT 'Кількість місць',
`descript` MEDIUMTEXT COMMENT 'опис',
PRIMARY KEY(id),
UNIQUE KEY(`number_aud`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються аудиторії';

CREATE TABLE IF NOT EXISTS `building`(
`id` INTEGER(2) NOT NULL AUTO_INCREMENT COMMENT 'ідентифікатор',
`number_bld` VARCHAR(6) NOT NULL COMMENT 'номер корпусу',
`description` MEDIUMTEXT NOT NULL COMMENT 'опис',
PRIMARY KEY(id),
UNIQUE KEY(`number_bld`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій зберігаються навчальні корпуси';

CREATE TABLE IF NOT EXISTS `build_auditory`(
`id_auditory` INTEGER(2) NOT NULL COMMENT 'звязок з групами користувачів',
`id_build` INTEGER(2) NOT NULL COMMENT 'звязок з привілеями',
PRIMARY KEY(`id_auditory`,`id_build`),
FOREIGN KEY(id_auditory) REFERENCES `auditory`(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE,
FOREIGN KEY(id_build) REFERENCES `building`(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
)ENGINE = InnoDB
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci
COMMENT = 'Таблиця в якій відбувається співставлення аудиторій та навчальних корпусів';

/*Заповнення даними*/

/*Аудиторії + корпуси, і їх співставлення*/
INSERT INTO `auditory`(`number_aud`,`number_place`,`descript`)
	VALUES	('1014',20,'Це аудиторія'),
			('1015',20,'Це аудиторія'),
			('1015a',15,'Це аудиторія'),
			('1018',20,'Це аудиторія'),
			('1114',25,'Це аудиторія'),
			('1118',28,'Це аудиторія'),
			('1108',20,'Це аудиторія'),
			('1102',24,'Це аудиторія'),
			('1214',25,'Це аудиторія'),
			('1218',28,'Це аудиторія'),
			('1208',20,'Це аудиторія'),
			('1202',24,'Це аудиторія'),
			('1314',25,'Це аудиторія'),
			('1318',28,'Це аудиторія'),
			('1308',20,'Це аудиторія'),
			('1302',24,'Це аудиторія'),
			('1415',20,'Це аудиторія'),
			('1418',22,'Це аудиторія'),
			('1419',26,'Це аудиторія'),
			('1414',24,'Це аудиторія'),
			('1514',60,'Це аудиторія'),
			('1518',32,'Це аудиторія'),
			('1508',20,'Це аудиторія'),
			('1502',24,'Це аудиторія'),
			('1503',48,'Це аудиторія');
			
INSERT INTO `building`(`number_bld`,`description`)
	VALUES	(1,'1-ий корпус'),
			(2,'2-ий корпус'),
			(3,'3-ий корпус'),
			(4,'4-ий корпус'),
			(5,'5-ий корпус');
			
INSERT INTO `build_auditory`(`id_auditory`,`id_build`)
	VALUES	(1,1),
			(2,1),
			(3,1),
			(4,1),
			(5,1),
			(6,1),
			(7,1),
			(8,1),
			(9,1),
			(10,1),
			(11,1),
			(12,1),
			(13,1),
			(14,1),
			(15,1),
			(16,1),
			(17,1),
			(18,1),
			(19,1),
			(20,1),
			(21,1),
			(22,1),
			(23,1),
			(24,1);
			
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
	VALUES	('Факультет інформаційних технологій(ФІТ)','/images/maybe/default_pic.png'),
			('Факультет нафтогазопроводів (ФНГП)','/images/maybe/default_pic.png'),
			('Факультет управління та інформаційної діяльності (ФУІД)','/images/maybe/default_pic.png');
	
INSERT INTO `kafedra`(`fid`,`name`,`pic`)
	VALUES	(1,'Кафедра інформатики','/images/maybe/default_pic.png'),
			(1,'Кафедра програмного забезпечення автоматизованих систем','/images/maybe/default_pic.png'),
			(2,'Кафедра транспорту і зберігання нафти і газу ','/images/maybe/default_pic.png'),
			(2,'Кафедра нафтової і газової гідромеханіки','/images/maybe/default_pic.png'),
			(3,'Кафедра соціальних комунікацій та права','/images/maybe/default_pic.png'),
			(3,'Кафедра державного управління та місцевого самоврядування','/images/maybe/default_pic.png');
	
INSERT INTO `study_form`(`name`,`prymitka`)
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
			(5);
			
INSERT INTO `student_key`(`key_name`,`key_weight`) 
	VALUES	('Прізвище',1),
			('Ім\'я',2),
			('По-батькові',3),
			('№ залікової',4),
			('№ телефону',5),
			('№ та серія паспорту',6),
			('Прізвище 2',2),
			('№ залікової 2',4);
			
INSERT INTO `student_key_value`(`sid`,`skid`,`val`)
	VALUES	(1,1,'Клюфінський'),
			(1,2,'Володимир'),
			(1,3,'Степанович'),
			(1,4,'0000001'),
			(1,5,'+380500000001'),
			(1,6,'СЕ 000001'),
			/*new one*/
			(2,1,'Бах'),
			(2,2,'Йоганн'),
			(2,3,'Себастьянович'),
			(2,4,'0000002'),
			(2,5,'+380500000002'),
			(2,6,'СЕ 000002'),
			/*new one*/
			(3,1,'Дурко'),
			(3,2,'Іра'),
			(3,3,'Василівна'),
			(3,4,'0000003'),
			(3,5,'+380500000003'),
			(3,6,'СЕ 000003'),
			/*new one*/
			(4,1,'Абсент'),
			(4,2,'Віктор'),
			(4,3,'Бухович'),
			(4,4,'0000004'),
			(4,5,'+380500000004'),
			(4,6,'СЕ 000004'),
			/*new one*/
			(5,1,'Міцик'),
			(5,2,'Іван'),
			(5,3,'Степанович'),
			(5,4,'0000005'),
			(5,5,'+380500000005'),
			(5,6,'СЕ 000005'),
			/*new one*/
			(6,1,'Лисиця'),
			(6,2,'Дзвінка'),
			(6,3,'Степанівна'),
			(6,4,'0000006'),
			(6,5,'+380500000006'),
			(6,6,'СН 000006'),
			/*new one*/
			(7,1,'Креветка'),
			(7,2,'Наталя'),
			(7,3,'Василівна'),
			(7,4,'0000007'),
			(7,5,'+380500000007'),
			(7,6,'СЕ 000007'),
			/*new one*/
			(8,1,'Інтел'),
			(8,2,'Орест'),
			(8,3,'Віталійович'),
			(8,4,'0000008'),
			(8,5,'+380500000008'),
			(8,6,'СЕ 000008'),
			/*new one*/
			(9,1,'Пентіум'),
			(9,2,'В\'ячеслав'),
			(9,3,'Орестович'),
			(9,4,'0000009'),
			(9,5,'+380500000009'),
			(9,6,'СЕ 000009'),
			/*new one*/
			(10,1,'Дрімвівер'),
			(10,2,'Ольга'),
			(10,3,'Вікторівна'),
			(10,4,'0000010'),
			(10,5,'+380500000010'),
			(10,6,'СЕ 000010');
INSERT INTO `lesson_cycle`(`name`) 
		VALUES	('Цикл 1 - гуманітарні дисципліни'),
				('Цикл 2 - професійні дисципліни'),
				('Цикл 3 - самостіно вибрані дисципліни');
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
			(5);

INSERT INTO `teacher_key`(`key_name`,`key_weight`) 
	VALUES	('Прізвище',1),
			('Ім\'я',2),
			('По-батькові',3),
			('Посада',4),
			('№ телефону',5),
			('№ та серія паспорту',6),
			('Прізвище 2',7);
			
INSERT INTO `teacher_key_value`(`tid`,`tkid`,`val`)
	VALUES	(1,1,'Козак'),
			(1,2,'Володимир'),
			(1,3,'Степанович'),
			(1,4,'професор (за сумісництвом)'),
			(1,5,'+380930000001'),
			(1,6,'СЕ 000001'),
			/*new one*/
			(2,1,'Шпуляр'),
			(2,2,'Тарас'),
			(2,3,'Вікторович'),
			(2,4,'асистент'),
			(2,5,'+380930000002'),
			(2,6,'СЕ 000002'),
			/*new one*/
			(3,1,'Вурдалака'),
			(3,2,'Іра'),
			(3,3,'Василівна'),
			(3,4,'асистент'),
			(3,5,'+380930000003'),
			(3,6,'СЕ 000003'),
			/*new one*/
			(4,1,'Колор'),
			(4,2,'Віктор'),
			(4,3,'Андрійович'),
			(4,4,'доцент (за сумісництвом)'),
			(4,5,'+380930000004'),
			(4,6,'СЕ 000004'),
			/*new one*/
			(5,1,'Маркіян'),
			(5,2,'Тарас'),
			(5,3,'Степанович'),
			(5,4,'доцент (за сумісництвом)'),
			(5,5,'+380930000005'),
			(5,6,'СЕ 000005'),
			/*new one*/
			(6,1,'Відалія'),
			(6,2,'Олеся'),
			(6,3,'Степанівна'),
			(6,4,'Доцент'),
			(6,5,'+380930000006'),
			(6,6,'СН 000006'),
			/*new one*/
			(7,1,'Красуня'),
			(7,2,'Наталя'),
			(7,3,'Ігорівна'),
			(7,4,'доцент (за сумісництвом)'),
			(7,5,'+380930000007'),
			(7,6,'СЕ 000007'),
			/*new one*/
			(8,1,'Назгул'),
			(8,2,'Рікардо'),
			(8,3,'Лебронович'),
			(8,4,'асистент (за сумісництвом)'),
			(8,5,'+380930000008'),
			(8,6,'СЕ 000008'),
			/*new one*/
			(9,1,'Октобер'),
			(9,2,'Фест'),
			(9,3,'Германійович'),
			(9,4,'асистент (за сумісництвом)'),
			(9,5,'+380930000009'),
			(9,6,'СЕ 000009'),
			/*new one*/
			(10,1,'Атака'),
			(10,2,'Олександра'),
			(10,3,'Василівна'),
			(10,4,'асистент (за сумісництвом)'),
			(10,5,'+380930000010'),
			(10,6,'СЕ 000010');
			
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
SELECT `id`,`name`,`pic` FROM `faculty` WHERE `faculty`.`id` = id;
END;
\\
DELIMITER ;

/*Додати факультет*/
DELIMITER \\
CREATE PROCEDURE addFaculty(name VARCHAR(80), pic VARCHAR(80))
BEGIN
INSERT INTO `faculty`(`name`,`pic`) VALUES (name,pic);
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
SELECT K.`id`,K.`fid`,K.`name` AS kname,F.`name` AS fname,K.`pic` FROM `faculty` AS F RIGHT JOIN `kafedra` AS K ON K.`fid` = F.`id`;
END;
\\
DELIMITER ;

/*Отримати конкретну кафедру*/
DELIMITER \\
CREATE PROCEDURE getKafedraById(id INT(2))
BEGIN
SELECT K.`id`,K.`fid`,K.`name` AS kname,F.`name` AS fname,K.`pic` FROM `faculty` AS F RIGHT JOIN `kafedra` AS K ON K.`fid` = F.`id` WHERE K.`id` = id;
END;
\\
DELIMITER ;

/*Отримати кафедри конкретного факультету*/
DELIMITER \\
CREATE PROCEDURE getAllKafedrasFromFaculty(id INT(2))
BEGIN
SELECT K.`id`,K.`fid`,K.`name` AS kname,F.`name` AS fname,K.`pic` FROM `faculty` AS F RIGHT JOIN `kafedra` AS K ON K.`fid` = F.`id` WHERE K.`fid` = id;
END;
\\
DELIMITER ;

/*Додати кафедру*/
DELIMITER \\
CREATE PROCEDURE addKafedra(fid INT(2), name VARCHAR(80), pic VARCHAR(80))
BEGIN
INSERT INTO `kafedra`(`fid`,`name`,`pic`) VALUES (fid,name,pic);
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
SELECT SF.`name` AS sfname, K.`name` AS kname,GOS.`id`,GOS.`kid`,GOS.`sfid`,GOS.`name` as GOSname,GOS.`count_stud` FROM `groups_of_students` AS GOS RIGHT JOIN `kafedra` AS K  ON GOS.`kid` = K.`id` LEFT JOIN `study_form` AS SF ON GOS.`sfid` = SF.`id` WHERE GOS.`kid` = id;
END;
\\
DELIMITER ;

/*Додати групу студентів*/
DELIMITER \\
CREATE PROCEDURE addGroupOfStudents(kid INT(2), sfid INT(2), name VARCHAR(80), cnt INT(2))
BEGIN
INSERT INTO `groups_of_students`(`kid`,`sfid`,`name`,`count_stud`) VALUES (kid,sfid,name,cnt);
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