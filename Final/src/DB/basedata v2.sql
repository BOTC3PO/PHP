-- MySQL Script generated by MySQL Workbench
-- Fri Nov 11 16:45:17 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Categorias` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Categorias` (
  `idCategorias` INT NOT NULL,
  `Nombre` VARCHAR(40) NULL,
  `link` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategorias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Productos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Productos` (
  `Categorias_idCategorias` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `id_Productos` INT NOT NULL,
  `datos` VARCHAR(300) NULL,
  `precio` VARCHAR(45) NULL,
  `Promociones` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Productos`),
  CONSTRAINT `fk_Productos_Categorias1`
    FOREIGN KEY (`Categorias_idCategorias`)
    REFERENCES `mydb`.`Categorias` (`idCategorias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Productos_Categorias1_idx` ON `mydb`.`Productos` (`Categorias_idCategorias` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Dias_permitidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Dias_permitidos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Dias_permitidos` (
  `id_dias` INT NOT NULL AUTO_INCREMENT,
  `Productos_id_Productos` INT NOT NULL,
  `Categorias_idCategorias` INT NOT NULL,
  `dia` VARCHAR(8) NULL,
  PRIMARY KEY (`id_dias`),
  CONSTRAINT `fk_Dias_permitidos_Productos0`
    FOREIGN KEY (`Productos_id_Productos`)
    REFERENCES `mydb`.`Productos` (`id_Productos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Dias_permitidos_Categorias1`
    FOREIGN KEY (`Categorias_idCategorias`)
    REFERENCES `mydb`.`Categorias` (`idCategorias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Dias_permitidos_Productos_idx` ON `mydb`.`Dias_permitidos` (`Productos_id_Productos` ASC) ;

CREATE INDEX `fk_Dias_permitidos_Categorias1_idx` ON `mydb`.`Dias_permitidos` (`Categorias_idCategorias` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`Categorias`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (0, 'Pastas', 'productos.php?id=Pastas&n=0');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (1, 'Salsas', 'productos.php?id=Salsas&n=1');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (2, 'Pizzas', 'productos.php?id=Pizzas&n=2');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (3, 'Hamburguezas', 'productos.php?id=Hamburguezas&n=3');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (4, 'Japones', 'productos.php?id=Japones&n=4');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (5, 'Mexicano', 'productos.php?id=Mexicano&n=5');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (6, 'Empanadas', 'productos.php?id=Empanadas&n=6');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (7, 'Otros', 'productos.php?id=Otros&n=7');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (8, 'Postres', 'productos.php?id=Postres&n=8');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (9, 'Locro', 'productos.php?id=Locro&n=9');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (10, 'Fiesta', 'productos.php?id=Fiesta&n=10');
INSERT INTO `mydb`.`Categorias` (`idCategorias`, `Nombre`, `link`) VALUES (11, 'Bebidas y tragos', 'productos.php?id=Bebidasytragos&n=11');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`Productos`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'tallarin', 0, 'Es un tipo de masa alargada, de ancho pequeño y forma achatada que integran el conjunto de las paste asciutte de origen italiano.', '300', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Espagueti', 1, 'Es un tipo de pasta italiana elaborada con harina de grano duro y agua. Tiene forma de delgada cuerda larga, sección circular y un tamaño aproximado entre 25 y 30 centímetros', '250', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Fettuccine', 2, 'Es un tipo de pasta y una de sus características más importantes es que es un fideo plano elaborado con huevo, agua y harina.', '340', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Bucatini', 3, 'Es una especie de espagueti que tiene un agujero longitudinal a través de él.', '300', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Maccheroni', 4, 'Es un tipo de pasta italiana elaborado con agua, harina de trigo y, a veces, huevo, que suele tener forma de tubo alargado, conocidos como plumas.', '500', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Ñoqui', 5, 'Son un tipo de pasta italiana. Se elaboran con papa, harina y queso de ricota.', '350', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Fusilli', 6, 'Es una pasta con forma helicoidal, generalmente de cuatro centímetros de largo.', '400', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Ravioli', 7, 'Es el nombre de un tipo de pasta rellena italiana realizada con diferentes ingredientes y generalmente replegada en forma cuadrada.', '500', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (0, 'Cappelletti', 8, 'Son un tipo de pasta rellena producido plegando cuadrados o círculos de pasta al huevo, primero en dos triángulos, y uniendo a continuación los extremos alrededor de un dedo de la mano.', '600', 'puedes seleccionar una salsa con 100% de descuento');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Alfredo', 9, 'Crema de leche,queso parmesano y mantequilla', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Amatriciana', 10, 'Tomate,panceta,mozzarela y cebolla', '150', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Arrabbiata', 11, 'Tomate,ajo y guindillas', '100', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Boloñesa', 12, 'Carne picada,cebolla,tomate y zanahoria', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Carbonara', 13, 'Crema de leche,beacon,cebolla y queso', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Napolitana', 14, 'Ajo,tomate y albahaca', '240', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Pesto genovés', 15, 'Albahaca,parmesano,ajo,pinones y aceite', '100', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'puttanesca', 16, 'Ajo,filetes de anchoa,tomate,aceitunas negras y alcaparras en vinagre', '190', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Funghi', 17, 'Champiñones,cebolla,vino blanco y nata', '300', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (1, 'Pimentón picante', 18, 'Pimientos verdes y rojos , cebolla ,setas,laurel y tomates', '200', '50% de descuento en jalapeños');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'Muzzarella', 19, 'Pizza de muzzarella', '800', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'napolitana', 20, 'Pizza de muzzarella con tomates', '850', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'rellena', 21, 'Pizza rellena de mozzarella y jamon con muzzarella , jamon , albahaca y tomates', '1700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'torta', 22, 'Pizza de 6 niveles con mozzarela , tomate y jamon', '3000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'hawaiana', 23, 'Pizza con mozzarella piña y jamon', '1000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'arcoiris', 24, 'Pizza con pimiento rojo,zanahoria,choclo,brócoli,cebolla morada,col morada y mozzarella', '1200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (2, 'queso y jamón', 25, 'Pizza con queso y jamon', '900', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'clasica', 26, 'Hamburgueza simple (carne incluida)', '600', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'palta', 27, 'Hamburgueza con palta en vez de pan', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'árabe', 28, 'Hamburgueza con pan arabe', '650', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'vegetariana', 29, 'Hamburgueza con medallon de lentejas', '900', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'mexicana con guacamole', 30, 'Hamburgueza con una salsa de tomate, cebolla, jalapeño, cilantro y lima', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'doble clasica', 31, 'Hamburgueza con 2 medallones de carne', '850', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'queso', 32, 'Hamburgueza con queso extra', '640', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'doble con queso', 33, 'Hamburgueza con 2 medallones de carne y mucho queso', '900', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (3, 'XXL', 34, 'La hamburgueza pesa aproximadamente 2.5kg y 18 cm de diametro recomendada para un minimo de 5 personas contiene 2 medallones de carne de 750g queso,pepino cebolla,tomate lechuga,mostaza y ketchup', '6000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Yakiniku', 35, '\'carne a la parrilla\' Se entrega a la mesa una parilla y carne con vegetales para hacer en la parrilla', '1600', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Sushi', 36, 'Un plato vasado en arroz relleno de salmon y envuelto en alga nori', '300', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Kare raisu', 37, 'Curry japones', '500', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Onigiri', 38, 'Unos triangulos de arroz rellenos con salmon o atun con alga por fuera', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Ramen', 39, 'Un plato de fideos japonés', '600', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Yakisoba', 40, 'tallarines fritos', '1400', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Chawanmushi', 41, 'El chawanmushi es un plato a base de natilla de huevo típico de la cocina japonesa y que utiliza como uno de sus ingredientes las semillas del gingko. A diferencia de otras natillas, se suelen consumir como un aperitivo. Dicha natilla consiste en una mezcla de huevo con salsa de soja, dashi y mirin, junto con diversos ingredientes como shiitake, kamaboko, gamba, almeja o pollo servidos en un chawan o taza similar a los utilizados para servir el té.', '1000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (4, 'Kaiseki', 42, 'Kaiseki es una cena tradicional japonesa de varios platos. El término también se refiere a la colección de habilidades y técnicas que permiten la preparación de tales comidas y es análogo a la alta cocina occidental.', '12000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (5, 'Tacos al pastor', 43, 'Es un deribado del shawarma. ingredientes: Carne de cerdo, adobo pastor, piña, tortilla, cilantro, cebolla.', '3000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (5, 'Tacos gobernador', 44, 'es una variedad de taco. ingrediente: camarón, cebolla, chile poblano, tomate y queso', '3400', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (5, 'Quesadillas', 45, 'tortilla rellena de queso y otros ingredientes a eleccion', '2500', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (5, 'Burritos', 46, 'es una tortilla en con relleno con varios ingredientes enbuelto en forma cilindrica', '2700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'atun y queso', 47, 'empanada de atun con queso', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'atun picante', 48, 'empanada de atun con queso y un poco de chile', '210', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'carne', 49, 'empanada de carne', '130', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'carne picante', 50, 'empanada de carne y chiles picantes', '150', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'carne extra picante', 51, 'empanada de carne y chiles fantasmas', '170', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'pollo', 52, 'empanada de pollo', '130', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'pollo picante', 53, 'empanada de pollo con chile', '150', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'arabes', 54, 'empanadas de carne con forma triangulas cosinadas con limon', '140', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'humita', 55, 'empanadas de maiz', '170', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'queso ricotta y espinacas', 56, 'empanadas de queso , ricota y espinacas', '150', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'manzana', 57, 'empanadas de manzana', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (6, 'el reto', 58, '¿jalapeños?,¿gas pimienta?,¿habanero?... estan hechas con Capsaicina y le dejamos al chef que decida la cantidad el resto de los ingredientes son carne', '150', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (7, 'empanada de hamburguesa', 59, 'un medallon de carne preparado dentro de una empanada', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (7, 'arroz a la española', 60, 'Está preparado con arroz jazmín cocido en cebolla, comino, ajo en polvo, chile en polvo, tomate, caldo de pollo y cubierto con cilantro fresco', '500', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (7, 'Arroz picante', 61, 'arroz con salsa picante', '550', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (7, 'Calzone napolitano', 62, 'media tarta preparado como una pizza por arriba', '1000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (7, 'pizza envuelta', 63, 'la pizza que el chef no logro sacar con exito del horno', '600', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (7, 'el reto harcore', 64, 'un calzone con el relleno de &#34el reto&#34', '1500', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'helado de vainilla', 65, '250g de helado', '450', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'helado de chocolate', 66, '250g de helado', '450', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'helado de menta', 67, '250g de helado', '450', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'helado de frutilla', 68, '250g de helado', '450', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'helado de limon', 69, '250g de helado', '450', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'flan', 70, '1 flan', '250', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'gelatina', 71, '1 gelatina', '300', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'yogur y gelatina', 72, 'un pote de yogur y una gelatina', '400', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'Macarrones', 73, '3 Macarrones', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'jalapeños', 74, '4 jalapeños', '50', '40% de descuento con la compra de Bloody Mary');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'banana', 75, 'una banana', '80', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'manzana', 76, 'una manzana', '80', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'naranja', 77, 'una naranja', '70', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'frutillas', 78, '500g de frutillas', '300', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'frutillas con crema', 79, '500g frutillas con crema', '570', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (8, 'chocolate y queso', 80, ' ', '400', ' ');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (9, 'locro', 81, '\'locro\' es un plato tradicional argentino', '1000', ' ');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (10, 'asado', 82, '1 kg de asado, pieza a eleccion', '5000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (10, 'picada', 83, 'aros de cebolla, jamon,queso,queso empanado,salame,empanaditas y pan', '2000', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'agua', 84, '1 botella de agua', '100', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'coca cola', 85, '1 botella de coca', '240', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'sprite', 86, '1 botella de sprite', '240', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'pepsi', 87, '1 botella de pepsi', '200', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'fanta', 88, '1 botella de fanta', '220', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'coca zero', 89, '1 botella de coca zero', '240', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'fernet con coca', 90, 'fernet con coca', '450', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'fernet con manaos uva', 91, '1 manaos uva y 30% del vaso con fernet IMPORTANTE:el restaurante no se hace responsable de lo que pase al consumir esta bebida', '400', '50% de descuento en postres con la compra de este trago');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'destornillador', 92, 'vodka con jugo de naranja', '600', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'cuba libre', 93, 'ron con coca cola', '600', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'Julepe de Menta', 94, 'whisky con bourbon, azucar y menta', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'Negroni', 95, 'campari, ginebra, vermut rojo y piel de naranja', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'Piña Colada', 96, 'jugo de piña, ron, crema de coco ,leche evaporada, piña y cereza marrasquino', '800', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'Margarita', 97, 'tequila blanco, triple seco, zumo de lima y hielo', '800', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'Bloody Mary', 98, 'vodka,zumo de tomate,salsa perrins,salsa tabasco,zumo de limon,pimienta negra molida y 1 ramita de apio', '700', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'vodka', 99, '100 ml de vodka', '300', '');
INSERT INTO `mydb`.`Productos` (`Categorias_idCategorias`, `nombre`, `id_Productos`, `datos`, `precio`, `Promociones`) VALUES (11, 'cerveza', 100, '1 cerveza', '400', '');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`Dias_permitidos`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`Dias_permitidos` (`id_dias`, `Productos_id_Productos`, `Categorias_idCategorias`, `dia`) VALUES (1, 81, 9, '25-05');
INSERT INTO `mydb`.`Dias_permitidos` (`id_dias`, `Productos_id_Productos`, `Categorias_idCategorias`, `dia`) VALUES (2, 81, 9, '9-07');

COMMIT;

