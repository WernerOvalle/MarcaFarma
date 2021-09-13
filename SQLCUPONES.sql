

use marcafarma
;

create  table cupones(
id_cupon int primary key AUTO_INCREMENT,
nombre varchar
(50),
telfono int,
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
email varchar
(50),
`ip` varchar
(50));

create table cupones_canjeados
(
    id_cupon int not null ,
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);




INSERT INTO cupones
    (
    nombre,
    telfono,
    email,

    `ip`)
VALUES
    ('Werner', 55910727, 'wernerovalle1995@hotmail.com', '1921.15645.');


select *
from cupones;


select *
from cupones
where ip='127.0.0.1';

Select *
from cupones
ORDER BY fecha desc
LIMIT 1
