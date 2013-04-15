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
`cid` INTEGER(2) NOT NULL COMMENT 'звязок з циклом предмету',
`name` VARCHAR(80) NOT NULL COMMENT 'назва дисципліни',
PRIMARY KEY(`id`),
CONSTRAINT FOREIGN KEY(`kid`) REFERENCES `kafedra`(id) 
	ON UPDATE CASCADE 
	ON DELETE CASCADE,
CONSTRAINT FOREIGN KEY(`cid`) REFERENCES `lesson_cycle`(id)
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
	VALUES	('name',1),
			('surname',2),
			('patronimic',3),
			('number_zalik',4);