 CREATE TABLE IF NOT EXISTS categorie (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS gestionaleUser (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(20) NOT NULL,
  password varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS statistic (
  id int(11) NOT NULL AUTO_INCREMENT,
  ip varchar(20) NOT NULL,
  viewCounter int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

 CREATE TABLE IF NOT EXISTS servizi(
   id int(11) NOT NULL AUTO_INCREMENT,
   nome int(11) NOT NULL,
   filename varchar(100) NOT NULL,
   descrizione varchar(300) NOT NULL,
   PRIMARY KEY (id)
 )ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

 CREATE TABLE IF NOT EXISTS fotogallery(
   id int(11) NOT NULL AUTO_INCREMENT,
   categoryId int(11) NOT NULL,
   nome varchar(100) NULL,
   descrizione varchar(300) NULL,
   filename varchar(100) NOT NULL,
   PRIMARY KEY (id),
   FOREIGN KEY (categoryId) REFERENCES categorie(id)
     ON DELETE NO ACTION
     ON UPDATE NO ACTION
 )ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

 CREATE TABLE IF NOT EXISTS newsletter(
   id int(11) NOT NULL AUTO_INCREMENT,
   email varchar(150) NOT NULL,
   nomeCognome varchar(200) NULL,
   PRIMARY KEY (id)
 )ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

 CREATE TABLE IF NOT EXISTS plannedmail(
   id int(11) NOT NULL AUTO_INCREMENT,
   oggetto varchar(500) NOT NULL,
   testo varchar(5000) NOT NULL,
   sent varchar(25) NOT NULL,
   mydate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (id)
 )ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

 CREATE TABLE IF NOT EXISTS configuration(
   chiave varchar(500) NOT NULL,
   valore varchar(5000) NOT NULL,
   PRIMARY KEY (chiave)
 )ENGINE=MyISAM  DEFAULT CHARSET=utf8;