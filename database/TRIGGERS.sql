CREATE TRIGGER registro_usuario
BEFORE INSERT ON USUARIOS
FOR EACH ROW
BEGIN
	INSERT INTO LOG_EVENTOS
	USUARIOS_id_usuario = (
		SELECT id_usuario
		FROM USUARIOS
	),
	accion = "Alta en sistema",
	ip = 192.168.20.168,
	fecha_evento = NOW();
END;		

CREATE TRIGGER validar_huerta
BEFORE INSERT
ON USUARIOS
FOR EACH ROW
BEGIN
	IF NEW.nombre = nombre AND NEW.HUERTAS.cuit = HUERTAS.cuit
		raiserror('Huerta NO registrada') 
        ROLLBACK TRANSACTION
	END If;
END;