use ol_orkester;
drop table beers;
drop table results;
create table beers(id INT AUTO_INCREMENT PRIMARY KEY, beer_name VARCHAR(255),volume VARCHAR(255),alcohol_content VARCHAR(255),color VARCHAR(255), image_url TEXT);
create table results(id INT AUTO_INCREMENT PRIMARY KEY, year INT, event VARCHAR(255) NOT NULL,beer_id INT, score FLOAT NOT NULL, notes VARCHAR(255));
insert into beers(beer_name,image_url) VALUES
('Ringnes Juleøl','img/2018/jul/1.jpg'),
('Brew Dog Santa Paws','img/2018/jul/2.jpg'),
('7null4 Juleøl Ale','img/2018/jul/3.jpg'),
('Nøgne Ø Hvit Jul','img/2018/jul/4.jpg'),
('Austmann Juleøl','img/2018/jul/5.jpg'),
('Inderøy Nisseøl','img/2018/jul/6.jpg'),
('Pilotbryggeriet Lussekatt Trippel','img/2018/jul/7.jpg'),
('Tubort Juleøl','img/2018/jul/8.jpg'),
('Falcon Julebryggd','img/2018/jul/9.jpg'),
('Jule Aass','img/2018/jul/10.jpg'),
('Charlis Snöfall','img/2018/jul/11.jpg'),
('Wisby Gotland','img/2018/jul/12.jpg'),
('St. Eriks','img/2018/jul/13.jpg'),
('Ringnes Juleøll Sterk','img/2018/jul/14.jpg'),
('Hansa Julebrygg','img/2018/jul/15.jpg'),
('Remmarlöv The Christmass','img/2018/jul/16.jpg'),
('Mach God Jul','img/2018/jul/17.jpg'),
('St. Peters','img/2018/jul/18.jpg'),
('Hansa Juleøl','img/2018/jul/19.jpg'),
('Bryggerhuset Gingerbeer Cherry Cinamon','img/2018/jul/20.jpg');

insert into beers(beer_name,volume,alcohol_content,color,image_url) VALUES
('Hans Julebrygg',0.5,4.7,'Temmelig mørk','img/2019/jul/1.jpg'),
('Bryggerhusets Pilotbryggeri Pepperkakeøl',0.33,4.7,'Noe mørkere','img/2019/jul/2.jpg'),
('Ringnes Julebokk',0.33,9.0,'Noe mørkere','img/2019/jul/3.jpg'),
('CB Juleøl',0.33,6.5,'Ganske mørk','img/2019/jul/4.jpg'),
('Laade Gaards Juleøl',0.33,4.7,'Svart som juling','img/2019/jul/5.jpg'),
('Stavanger Juleøl',0.33,6.5,'Mørke, mørke nøtter','img/2019/jul/6.jpg'),
('EC Dahls Lille Bjørn Juleøl',0.33,4.6,'Gylden, grumsete','img/2019/jul/7.jpg'),
('Aass Premium Juleøl',0.33,6.5,'Litt rødlig','img/2019/jul/8.jpg'),
('Munkholm Alkoholfritt Juleøl',0.33,0,'Altfor lys','img/2019/jul/9.jpg'),
('Nordland Juleøl',0.5,4.5,'Fiin','img/2019/jul/10.jpg'),
('St. Halvards Bryggeri Reserve-Jul',0.5,9.0,'Grumsete','img/2019/jul/11.jpg'),
('Delirium Christmas',0.75,10.0,'Grumsete rødlig','img/2019/jul/12.jpg'),
('Haandbryggeriet Bestefar',0.33,9.0,'Mørkeste far','img/2019/jul/13.jpg'),
('Haandbryggeriet Nissefar',0.5,7.0,'Mørkeste nisse (Venta black)','img/2019/jul/14.jpg'),
('Ølkymisten Nonstandard Imperial Christmas Stout',0.33,10.0,'Tjære','img/2019/jul/5.jpg'),
('Nøgne Ø Christmas Ale',0.5,8.5,'Også veldig mørk','img/2019/jul/16.jpg');

insert into results(year,event,beer_id, score) VALUES
(2018,'jul',1,51),
(2018,'jul',2,56.75),
(2018,'jul',3,69),
(2018,'jul',4,26.25),
(2018,'jul',6,68),
(2018,'jul',7,82.25),
(2018,'jul',8,46.25),
(2018,'jul',9,59.75),
(2018,'jul',10,59.25),
(2018,'jul',11,50.25),
(2018,'jul',12,42),
(2018,'jul',13,28.25),
(2018,'jul',14,57),
(2018,'jul',15,51),
(2018,'jul',16,45.5),
(2018,'jul',17,27.25),
(2018,'jul',18,53),
(2018,'jul',19,40.75),
(2018,'jul',20,14);

insert into results(year,event,beer_id,score) VALUES
(2019,'jul',21,58.2),
(2019,'jul',22,58.2),
(2019,'jul',23,48.8),
(2019,'jul',24,46.2),
(2019,'jul',25,46.2),
(2019,'jul',26,47.8),
(2019,'jul',27,37.2),
(2019,'jul',28,72),
(2019,'jul',29,29.5),
(2019,'jul',30,79),
(2019,'jul',31,36.8),
(2019,'jul',32,72),
(2019,'jul',33,47.25),
(2019,'jul',34,38.25),
(2019,'jul',35,10.75),
(2019,'jul',36,17.0);
