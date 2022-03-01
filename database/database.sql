CREATE TABLE Advert(
        id          Int  Auto_increment  NOT NULL ,
        title       Varchar(50)NOT NULL ,
        postal_code Varchar (5) NOT NULL ,
        city        Varchar (50)NOT NULL ,
        type        Varchar (50) NOT NULL ,
        price       Varchar (50)NOT NULL ,
        reservation_message   Varchar (100) NOT NULL ,
                    PRIMARY KEY (id)
)ENGINE=InnoDB;