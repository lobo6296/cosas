CREATE EVENT actualiza_negocios
ON SCHEDULE EVERY 1 DAY STARTS ‘2017-01-05 00:00:05’
DO UPDATE negocio SET estado = B WHERE fecha_baja < SYSDATE() ;

CREATE EVENT actualiza_anuncios
ON SCHEDULE EVERY 1 DAY STARTS ‘2017-01-05 00:00:05’
DO UPDATE anuncios SET estado = B WHERE fecha_baja < SYSDATE();