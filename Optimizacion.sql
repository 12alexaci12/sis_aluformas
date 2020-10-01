/*--------------CLAVES INDEX.PHP------------------------*/

SELECT u.*, ur.id_rol, r.rol
FROM usuarios u, usuarios_roles ur, roles r
WHERE u.usuario1 = ?
AND u.clave = ?
AND u.id_usuario = ur.id_usuario
AND ur.id_rol = r.id_rol
AND u.estado <> '0'
AND ur.estado <> '0'
AND r.estado <> '0'

SELECT u.*, ur.id_rol, r.rol
FROM usuarios_roles ur
INNER JOIN usuarios u ON ur.id_usuario = u.id_usuario
INNER JOIN roles r ON ur.id_rol = r.id_rol
WHERE u.usuario1 = ?
AND u.clave = ?
AND u.estado <> '0'
AND ur.estado <> '0'
AND r.estado <> '0'

/*---------------------COTIZACIONES.PHP----------------------------------------------*/

SELECT emp.nombre AS empleado, cli.nombre AS cliente, cot.fecha, cot.precio_final, cot.id_cotizacion
FROM cotizaciones AS cot, empleados AS emp, clientes AS cli
WHERE cot.estado <> '0'
AND cot.id_cotizacion >= 1
AND cli.id_cliente = cot.id_cliente
AND emp.id_empleado = cot.id_empleado
ORDER BY cot.fecha ASC

SELECT emp.nombre AS empleado, cli.nombre AS cliente, cot.fecha, cot.precio_final, cot.id_cotizacion
FROM cotizaciones cot
INNER JOIN empleados emp ON cot.id_empleado = emp.id_empleado
INNER JOIN clientes cli ON cot.id_cliente = cli.id_cliente
WHERE cot.estado <> '0'
ORDER BY cot.fecha ASC
LIMIT ? OFFSET ?

/*--------------------------RTP_empleados_cotizaciones1.PHP--------------------------------------------*/

SELECT coti.fecha, coti.precio_final, emp.nombre as nombre_emp, cli.nombre as nombre_cli, cli.telefono
FROM cotizaciones coti
INNER JOIN empleados emp ON coti.id_empleado = emp.id_empleado
INNER JOIN clientes cli ON coti.id_cliente = cli.id_cliente
AND coti.estado <> '0'
AND emp.estado <> '0'

SELECT coti.fecha, coti.precio_final, emp.nombre as nombre_emp, cli.nombre as nombre_cli, cli.telefono
FROM cotizaciones coti, empleados emp, clientes cli
where coti.id_empleado = emp.id_empleado
AND coti.id_cliente = cli.id_cliente
AND coti.estado <> '0'
AND emp.estado <> '0'

/*-------------------------------ROLES.PHP----------------------------------------*/

SELECT *
FROM usuarios u, roles r, usuarios_roles ur
WHERE u.id_usuario = ur.id_usuario
AND ur.id_rol = r.id_rol
AND u.estado <> '0'
AND r.estado <>'0'
AND ur.estado <>'0'
ORDER BY ur.id_usuario_rol DESC

SELECT *
FROM usuarios_roles ur
INNER JOIN usuarios u ON ur.id_usuario = u.id_usuario
INNER JOIN roles r ON ur.id_rol = r.id_rol
WHERE u.estado<>'0'
AND r.estado<>'0'
AND ur.estado<>'0'
ORDER BY r.id_rol DESC

/*------------------------cotizaciones DETALLES.PHP------------------------------------------------*/

SELECT pro.nombre, det.alto, det.ancho, round((det.alto * det.ancho * pro.precio_m2/10000)) AS precio
FROM detalle_cotizaciones det
INNER JOIN productos pro ON det.id_producto = pro.id_producto
INNER JOIN cotizaciones cot ON cot.id_cotizacion = det.id_cotizacion
WHERE det.estado <> 0
AND det.id_cotizacion = {$idCotizaion}

SELECT pro.nombre, det.alto, det.ancho, round((det.alto * det.ancho * pro.precio_m2/10000)) AS precio
FROM productos AS pro, detalle_cotizaciones AS det, cotizaciones AS cot
WHERE det.estado <> 0
AND det.id_cotizacion = {$idCotizaion}
AND det.id_cotizacion = cot.id_cotizacion
AND pro.id_producto = det.id_producto
