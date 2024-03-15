create database ElectronicDirectory;
use ElectronicDirectory;
create table Departments(
	DepartmentID int NOT NULL AUTO_INCREMENT,
	DepartmentName varchar(255),
    Address varchar(255),
    Email varchar(255),
    Phone varchar(10),
    Logo varchar(255),
    Website varchar(255),
    ParentDepartmentID int,
	PRIMARY KEY(DepartmentID),
    FOREIGN KEY (ParentDepartmentID) REFERENCES Departments (DepartmentID)
);
create table Employees(
	EmployeeID int not null auto_increment,
    FullName varchar(50),
    Address varchar(255),
    Email varchar(255),
    MobilePhone varchar(10),
    Position varchar(255),
    Avatar varchar(255),
    DepartmentID int not null,
    primary key(EmployeeID),
    foreign key (DepartmentID) references Departments (DepartmentID)
);
create table Users(
	Username varchar(50),
    Password varchar(255),
    Role varchar(10),
    EmployeeID int not null,
    primary key(Username),
    foreign key(EmployeeID) references Employees (EmployeeID)
);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Accounting', '69715 Westerfield Place', 'fiwanowicz0@marriott.com', '4503283811', 1, 1, 1);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Legal', '609 Grover Street', 'bjiran1@webs.com', '1695394486', 2, 2, 2);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Business Development', '10 Red Cloud Hill', 'ethies2@feedburner.com', '4391420005', 3, 3, 3);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Support', '54039 Miller Center', 'mwhyteman3@zdnet.com', '7732214966', 4, 4, 4);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Services', '43 Hallows Drive', 'swyburn4@epa.gov', '2541417217', 5, 5, 5);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Legal', '039 Nelson Parkway', 'rdomsalla5@yahoo.com', '7716152832', 6, 6, 6);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Legal', '8375 Miller Alley', 'fpierse6@tmall.com', '7729681181', 7, 7, 7);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Services', '65602 Melvin Way', 'lcristoferi7@apache.org', '1956181454', 8, 8, 8);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Business Development', '2 Gina Center', 'mbettinson8@github.com', '9229113049', 9, 9, 9);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Marketing', '830 Fremont Center', 'jtookill9@usnews.com', '4355309078', 10, 10, 10);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Sales', '5 Anniversary Place', 'kdelamainea@ycombinator.com', '8326459486', 11, 11, 11);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Product Management', '20614 Doe Crossing Alley', 'cbucklerb@intel.com', '9107504476', 12, 12, 12);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Legal', '4272 Maple Lane', 'bbottlestonec@mapy.cz', '1416049031', 13, 13, 13);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Services', '0 Stephen Court', 'astanningd@miibeian.gov.cn', '6487355152', 14, 14, 14);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Human Resources', '36838 Briar Crest Drive', 'cheretye@nytimes.com', '7051276938', 15, 15, 15);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Research and Development', '091 Mallard Junction', 'wcaddf@nature.com', '6432162608', 16, 16, 16);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Research and Development', '1 Coleman Terrace', 'dsucreg@usa.gov', '7527476317', 17, 17, 17);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Services', '859 East Street', 'cwilesh@wunderground.com', '9172861818', 18, 18, 18);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Training', '84420 David Crossing', 'mdevinni@cdc.gov', '6528421778', 19, 19, 19);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Marketing', '27 Loomis Terrace', 'bjozsefj@dropbox.com', '4243849483', 20, 20, 20);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Legal', '24440 Sauthoff Plaza', 'cocuolahank@twitter.com', '5486096783', 21, 21, 21);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Engineering', '3 Butternut Crossing', 'ghaydenl@macromedia.com', '5206263587', 22, 22, 22);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Business Development', '807 Waywood Center', 'hroccam@opensource.org', '1107358394', 23, 23, 23);
insert into Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values ('Engineering', '33182 Dayton Street', 'scantrelln@bloomberg.com', '1897690852', 24, 24, 24);
select * from departments;
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Shannon Boick', '30775 Debs Lane', 'sboick0@symantec.com', '8305561852', 'Estimator', 1, 1);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Culley Lorand', '2171 Coolidge Place', 'clorand1@ftc.gov', '7779295394', 'Construction Manager', 2, 2);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Chandra Dwight', '397 Hagan Trail', 'cdwight2@nbcnews.com', '7608577363', 'Engineer', 3, 3);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Quintana Avrahamof', '6 Buena Vista Point', 'qavrahamof3@mtv.com', '5979681922', 'Electrician', 4, 4);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Jeffy Mumbray', '89 Heath Terrace', 'jmumbray4@fc2.com', '6256627080', 'Construction Manager', 5, 5);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Shari Ibbitson', '332 Straubel Road', 'sibbitson5@google.nl', '4533372758', 'Supervisor', 6, 6);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Shermy Worcester', '4 Spenser Terrace', 'sworcester6@cdbaby.com', '3856982830', 'Supervisor', 7, 7);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Evangelia McEvoy', '94 Logan Alley', 'emcevoy7@bbb.org', '3429924036', 'Estimator', 8, 8);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Malissa Oakey', '3 International Parkway', 'moakey8@surveymonkey.com', '4962129310', 'Electrician', 9, 9);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Pall Rossant', '12935 Superior Alley', 'prossant9@umich.edu', '6866789481', 'Architect', 10, 10);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Jose Dudden', '91228 Fordem Avenue', 'jduddena@youku.com', '1057559577', 'Architect', 11, 11);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Pierette Aldwich', '99 Hayes Plaza', 'paldwichb@sbwire.com', '2107162368', 'Estimator', 12, 12);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Ruperto Novelli', '0788 Corben Point', 'rnovellic@theatlantic.com', '4803751891', 'Engineer', 13, 13);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Damon Corris', '87972 International Crossing', 'dcorrisd@studiopress.com', '9958870782', 'Construction Foreman', 14, 14);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Johnathan Potteridge', '8 Blue Bill Park Avenue', 'jpotteridgee@opensource.org', '3425090544', 'Construction Worker', 15, 15);
insert into employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values ('Loydie Ransbury', '83126 Thierer Circle', 'lransburyf@exblog.jp', '6143460400', 'Surveyor', 16, 16);
select * from employees;
insert into Users (Username, Password, Role, EmployeeID) values ('admin','admin','Admin',1);
insert into Users (Username, Password, Role, EmployeeID) values ('Uy','123','Regular',5);
select * from users;