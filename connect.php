<?php
$yhendus=new mysqli("localhost", "artur21", "12345", "linktarpv21");
$yhendus->set_charset('utf8');
/*CREATE TABLE kaubagrupid(
    id int PRIMARY KEY  auto_increment,
    grupinimi varchar(50)
);
CREATE TABLE kaubad(
    id int PRIMARY KEY  auto_increment,
    nimetus varchar(30),
    kaubagrupi_id int,
    hind int,
    foreign key (kaubagrupi_id) references   kaubagrupid(id)
)*/
?>

