-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2022 a las 13:32:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Categorias_idCategorias` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `id_Productos` int(11) NOT NULL,
  `datos` varchar(300) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `Promociones` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES
(0, 'tallarin', 0, 'Es un tipo de masa alargada, de ancho pequeño y forma achatada que integran el conjunto de las paste asciutte de origen italiano.', '300', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Espagueti', 1, 'Es un tipo de pasta italiana elaborada con harina de grano duro y agua. Tiene forma de delgada cuerda larga, sección circular y un tamaño aproximado entre 25 y 30 centímetros', '250', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Fettuccine', 2, 'Es un tipo de pasta y una de sus características más importantes es que es un fideo plano elaborado con huevo, agua y harina.', '340', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Bucatini', 3, 'Es una especie de espagueti que tiene un agujero longitudinal a través de él.', '300', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Maccheroni', 4, 'Es un tipo de pasta italiana elaborado con agua, harina de trigo y, a veces, huevo, que suele tener forma de tubo alargado, conocidos como plumas.', '500', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Ñoqui', 5, 'Son un tipo de pasta italiana. Se elaboran con papa, harina y queso de ricota.', '350', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Fusilli', 6, 'Es una pasta con forma helicoidal, generalmente de cuatro centímetros de largo.', '400', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Ravioli', 7, 'Es el nombre de un tipo de pasta rellena italiana realizada con diferentes ingredientes y generalmente replegada en forma cuadrada.', '500', 'puedes seleccionar una salsa con 100% de desc'),
(0, 'Cappelletti', 8, 'Son un tipo de pasta rellena producido plegando cuadrados o círculos de pasta al huevo, primero en dos triángulos, y uniendo a continuación los extremos alrededor de un dedo de la mano.', '600', 'puedes seleccionar una salsa con 100% de desc'),
(1, 'Alfredo', 9, 'Crema de leche,queso parmesano y mantequilla', '200', ''),
(1, 'Amatriciana', 10, 'Tomate,panceta,mozzarela y cebolla', '150', ''),
(1, 'Arrabbiata', 11, 'Tomate,ajo y guindillas', '100', ''),
(1, 'Boloñesa', 12, 'Carne picada,cebolla,tomate y zanahoria', '200', ''),
(1, 'Carbonara', 13, 'Crema de leche,beacon,cebolla y queso', '200', ''),
(1, 'Napolitana', 14, 'Ajo,tomate y albahaca', '240', ''),
(1, 'Pesto genovés', 15, 'Albahaca,parmesano,ajo,pinones y aceite', '100', ''),
(1, 'puttanesca', 16, 'Ajo,filetes de anchoa,tomate,aceitunas negras y alcaparras en vinagre', '190', ''),
(1, 'Funghi', 17, 'Champiñones,cebolla,vino blanco y nata', '300', ''),
(1, 'Pimentón picante', 18, 'Pimientos verdes y rojos , cebolla ,setas,laurel y tomates', '200', '50% de descuento en jalapeños'),
(2, 'Muzzarella', 19, 'Pizza de muzzarella', '800', ''),
(2, 'napolitana', 20, 'Pizza de muzzarella con tomates', '850', ''),
(2, 'rellena', 21, 'Pizza rellena de mozzarella y jamon con muzzarella , jamon , albahaca y tomates', '1700', ''),
(2, 'torta', 22, 'Pizza de 6 niveles con mozzarela , tomate y jamon', '3000', ''),
(2, 'hawaiana', 23, 'Pizza con mozzarella piña y jamon', '1000', ''),
(2, 'arcoiris', 24, 'Pizza con pimiento rojo,zanahoria,choclo,brócoli,cebolla morada,col morada y mozzarella', '1200', ''),
(2, 'queso y jamón', 25, 'Pizza con queso y jamon', '900', ''),
(3, 'clasica', 26, 'Hamburgueza simple (carne incluida)', '600', ''),
(3, 'palta', 27, 'Hamburgueza con palta en vez de pan', '700', ''),
(3, 'árabe', 28, 'Hamburgueza con pan arabe', '650', ''),
(3, 'vegetariana', 29, 'Hamburgueza con medallon de lentejas', '900', ''),
(3, 'mexicana con guacamole', 30, 'Hamburgueza con una salsa de tomate, cebolla, jalapeño, cilantro y lima', '700', ''),
(3, 'doble clasica', 31, 'Hamburgueza con 2 medallones de carne', '850', ''),
(3, 'queso', 32, 'Hamburgueza con queso extra', '640', ''),
(3, 'doble con queso', 33, 'Hamburgueza con 2 medallones de carne y mucho queso', '900', ''),
(3, 'XXL', 34, 'La hamburgueza pesa aproximadamente 2.5kg y 18 cm de diametro recomendada para un minimo de 5 personas contiene 2 medallones de carne de 750g queso,pepino cebolla,tomate lechuga,mostaza y ketchup', '6000', ''),
(4, 'Yakiniku', 35, '\'carne a la parrilla\' Se entrega a la mesa una parilla y carne con vegetales para hacer en la parrilla', '1600', ''),
(4, 'Sushi', 36, 'Un plato vasado en arroz relleno de salmon y envuelto en alga nori', '300', ''),
(4, 'Kare raisu', 37, 'Curry japones', '500', ''),
(4, 'Onigiri', 38, 'Unos triangulos de arroz rellenos con salmon o atun con alga por fuera', '200', ''),
(4, 'Ramen', 39, 'Un plato de fideos japonés', '600', ''),
(4, 'Yakisoba', 40, 'tallarines fritos', '1400', ''),
(4, 'Chawanmushi', 41, 'El chawanmushi es un plato a base de natilla de huevo típico de la cocina japonesa y que utiliza como uno de sus ingredientes las semillas del gingko. A diferencia de otras natillas, se suelen consumir como un aperitivo. Dicha natilla consiste en una mezcla de huevo con salsa de soja, dashi y mirin,', '1000', ''),
(4, 'Kaiseki', 42, 'Kaiseki es una cena tradicional japonesa de varios platos. El término también se refiere a la colección de habilidades y técnicas que permiten la preparación de tales comidas y es análogo a la alta cocina occidental.', '12000', ''),
(5, 'Tacos al pastor', 43, 'Es un deribado del shawarma. ingredientes: Carne de cerdo, adobo pastor, piña, tortilla, cilantro, cebolla.', '3000', ''),
(5, 'Tacos gobernador', 44, 'es una variedad de taco. ingrediente: camarón, cebolla, chile poblano, tomate y queso', '3400', ''),
(5, 'Quesadillas', 45, 'tortilla rellena de queso y otros ingredientes a eleccion', '2500', ''),
(5, 'Burritos', 46, 'es una tortilla en con relleno con varios ingredientes enbuelto en forma cilindrica', '2700', ''),
(6, 'atun y queso', 47, 'empanada de atun con queso', '200', ''),
(6, 'atun picante', 48, 'empanada de atun con queso y un poco de chile', '210', ''),
(6, 'carne', 49, 'empanada de carne', '130', ''),
(6, 'carne picante', 50, 'empanada de carne y chiles picantes', '150', ''),
(6, 'carne extra picante', 51, 'empanada de carne y chiles fantasmas', '170', ''),
(6, 'pollo', 52, 'empanada de pollo', '130', ''),
(6, 'pollo picante', 53, 'empanada de pollo con chile', '150', ''),
(6, 'arabes', 54, 'empanadas de carne con forma triangulas cosinadas con limon', '140', ''),
(6, 'humita', 55, 'empanadas de maiz', '170', ''),
(6, 'queso ricotta y espinacas', 56, 'empanadas de queso , ricota y espinacas', '150', ''),
(6, 'manzana', 57, 'empanadas de manzana', '200', ''),
(6, 'el reto', 58, '¿jalapeños?,¿gas pimienta?,¿habanero?... estan hechas con Capsaicina y le dejamos al chef que decida la cantidad el resto de los ingredientes son carne', '150', ''),
(7, 'empanada de hamburguesa', 59, 'un medallon de carne preparado dentro de una empanada', '700', ''),
(7, 'arroz a la española', 60, 'Está preparado con arroz jazmín cocido en cebolla, comino, ajo en polvo, chile en polvo, tomate, caldo de pollo y cubierto con cilantro fresco', '500', ''),
(7, 'Arroz picante', 61, 'arroz con salsa picante', '550', ''),
(7, 'Calzone napolitano', 62, 'media tarta preparado como una pizza por arriba', '1000', ''),
(7, 'pizza envuelta', 63, 'la pizza que el chef no logro sacar con exito del horno', '600', ''),
(7, 'el reto harcore', 64, 'un calzone con el relleno de &#34el reto&#34', '1500', ''),
(8, 'helado de vainilla', 65, '250g de helado', '450', ''),
(8, 'helado de chocolate', 66, '250g de helado', '450', ''),
(8, 'helado de menta', 67, '250g de helado', '450', ''),
(8, 'helado de frutilla', 68, '250g de helado', '450', ''),
(8, 'helado de limon', 69, '250g de helado', '450', ''),
(8, 'flan', 70, '1 flan', '250', ''),
(8, 'gelatina', 71, '1 gelatina', '300', ''),
(8, 'yogur y gelatina', 72, 'un pote de yogur y una gelatina', '400', ''),
(8, 'Macarrones', 73, '3 Macarrones', '700', ''),
(8, 'jalapeños', 74, '4 jalapeños', '50', '40% de descuento con la compra de Bloody Mary'),
(8, 'banana', 75, 'una banana', '80', ''),
(8, 'manzana', 76, 'una manzana', '80', ''),
(8, 'naranja', 77, 'una naranja', '70', ''),
(8, 'frutillas', 78, '500g de frutillas', '300', ''),
(8, 'frutillas con crema', 79, '500g frutillas con crema', '570', ''),
(8, 'chocolate y queso', 80, '', ' 300', ' '),
(9, 'locro', 81, '\'locro\' es un plato tradicional argentino', '1000', ' '),
(10, 'asado', 82, '1 kg de asado, pieza a eleccion', '5000', ''),
(10, 'picada', 83, 'aros de cebolla, jamon,queso,queso empanado,salame,empanaditas y pan', '2000', ''),
(11, 'agua', 84, '1 botella de agua', '100', ''),
(11, 'coca cola', 85, '1 botella de coca', '240', ''),
(11, 'sprite', 86, '1 botella de sprite', '240', ''),
(11, 'pepsi', 87, '1 botella de pepsi', '200', ''),
(11, 'fanta', 88, '1 botella de fanta', '220', ''),
(11, 'coca zero', 89, '1 botella de coca zero', '240', ''),
(11, 'fernet con coca', 90, 'fernet con coca', '450', ''),
(11, 'fernet con manaos uva', 91, '1 manaos uva y 30% del vaso con fernet IMPORTANTE:el restaurante no se hace responsable de lo que pase al consumir esta bebida', '400', '50% de descuento en postres con la compra de '),
(11, 'destornillador', 92, 'vodka con jugo de naranja', '600', ''),
(11, 'cuba libre', 93, 'ron con coca cola', '600', ''),
(11, 'Julepe de Menta', 94, 'whisky con bourbon, azucar y menta', '700', ''),
(11, 'Negroni', 95, 'campari, ginebra, vermut rojo y piel de naranja', '700', ''),
(11, 'Piña Colada', 96, 'jugo de piña, ron, crema de coco ,leche evaporada, piña y cereza marrasquino', '800', ''),
(11, 'Margarita', 97, 'tequila blanco, triple seco, zumo de lima y hielo', '800', ''),
(11, 'Bloody Mary', 98, 'vodka,zumo de tomate,salsa perrins,salsa tabasco,zumo de limon,pimienta negra molida y 1 ramita de apio', '700', ''),
(11, 'vodka', 99, '100 ml de vodka', '300', ''),
(11, 'cerveza', 100, '1 cerveza', '400', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_Productos`),
  ADD KEY `fk_Productos_Categorias1_idx` (`Categorias_idCategorias`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Categorias1` FOREIGN KEY (`Categorias_idCategorias`) REFERENCES `categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
