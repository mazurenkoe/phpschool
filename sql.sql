CREATE TABLE `forms` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `content` TEXT NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `forms` (`id`, `title`, `content`) VALUES
(NULL, 'First', 'FIrst content'),
(NULL, 'Second', 'Second content');

