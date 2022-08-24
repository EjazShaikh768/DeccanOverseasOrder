-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 09:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deccanoverseasorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `prod_id`, `user_id`, `prod_name`, `prod_price`, `prod_quantity`) VALUES
(15, 28, 3, 'VISHALA WATERMELON ', '45 ', '3'),
(23, 8, 2, 'DWAF CAVENDISH BANANA ', '85 ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `cartorder`
--

CREATE TABLE `cartorder` (
  `cartOrder_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `altphone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `dscnt` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `grandTotal` varchar(255) NOT NULL,
  `tracker_id` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartorder`
--

INSERT INTO `cartorder` (`cartOrder_id`, `user_id`, `full_name`, `email`, `phone`, `altphone`, `address`, `total`, `dscnt`, `tax`, `shipping`, `grandTotal`, `tracker_id`, `date`) VALUES
(14, 3, 'SHaikh Ejaz', 'ejaz@gmail.com', '9307616840', '9307616840', 'jam mohalla bhusawal', ' 135', ' 20.25', ' 0', ' 0', ' 114.75', 1891207966, '2022-08-12 12:25:13'),
(15, 2, 'Ejaz Shaikh', 'ejaz88337@gmail.com', '8446931810', '9307616840', 'Near Poona college Camp pune', ' 255', ' 38.25', ' 0', ' 0', ' 216.75', 1065755308, '2022-08-12 12:38:20'),
(16, 2, 'Ejaz Shaikh', 'ejaz88337@gmail.com', '8446931810', '', 'camp near poona college pune', ' 255', ' 38.25', ' 0', ' 0', ' 216.75', 807163378, '2022-08-13 13:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(100) NOT NULL,
  `subcat_quntity` int(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `subcat_quntity`, `status`) VALUES
(1, 'FRUITS', '1659455685-cat_fruit.jpg', 26, 1),
(2, 'VEGETABLES', '1659455703-cat_vegetables.jpg', 25, 1),
(3, 'DRY FRUITS', '1659455727-cat_dryFruits.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `messagee` varchar(255) NOT NULL,
  `status` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `phone`, `email`, `subject`, `messagee`, `status`) VALUES
(1, 'EJAZ SHAIKH', '8446931810', 'ejaz88337@gmail.com', 'for selling', 'Hello ,\r\nI am Seller  i want sell You fruits for selling are you intrest then contact me mail or phone .\r\nthank you', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_image` varchar(255) NOT NULL,
  `emp_phone` varchar(255) NOT NULL,
  `emp_phone2` varchar(255) NOT NULL,
  `emp_aadhar` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_city` varchar(255) NOT NULL,
  `emp_pincode` varchar(255) NOT NULL,
  `emp_role` varchar(255) NOT NULL,
  `emp_joiningDate` date NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_image`, `emp_phone`, `emp_phone2`, `emp_aadhar`, `emp_address`, `emp_city`, `emp_pincode`, `emp_role`, `emp_joiningDate`, `emp_email`, `emp_password`, `status`) VALUES
(1, 'Ejaz Shaikh', '1659524089-b213a85d-da37-41ab-a5ca-75c148a52c47.jpg', '8446931810', '9307616840', '865423236545', 'Near Poona college Camp ', 'pune', '481102', '1', '2022-07-24', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(2, 'TAUSEEF PATEL', '1659878344-emran.jpg', '9632658965', '8956256325', '861265478965', 'camp near bhavani peth', 'pune', '480011', '3', '2022-07-25', 'admin@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', NULL),
(4, 'USAMA SHAIKH', '1659878125-srk.jpg', '7559330142', '7559330142', '865423236545', 'mitha nagar knodwa ', 'pune', '480011', '4', '2022-08-08', 'usama755@gmail.com', 'fb62579e990da4e2a8f15c3d1e123438', NULL),
(5, 'MUBASHIR SHAIKH', '1659878186-nawaz.jpg', '7558661909', '7558661901', '861265478965', 'camp near bhavani peth', 'pune', '425201', '5', '2022-08-08', 'mubbu755`@gmail.com', '6c44e5cd17f0019c64b042e4a745412a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` int(255) NOT NULL,
  `prod_quantity` int(255) NOT NULL,
  `prod_total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`id`, `user_id`, `prod_id`, `prod_name`, `prod_price`, `prod_quantity`, `prod_total`) VALUES
(6, 3, 28, 'VISHALA WATERMELON ', 45, 3, 135),
(7, 2, 8, 'DWAF CAVENDISH BANANA ', 85, 3, 255),
(8, 2, 8, 'DWAF CAVENDISH BANANA ', 85, 3, 255);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_description` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dlt_price` int(255) NOT NULL,
  `prod_price` int(255) NOT NULL,
  `prod_quantity` varchar(255) NOT NULL,
  `prstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_description`, `prod_image`, `sub_category`, `category`, `dlt_price`, `prod_price`, `prod_quantity`, `prstatus`) VALUES
(3, 'Red Banana', '   Red bananas are a subgroup of bananas from Southeast Asia with red skin. They\'re soft and have a sweet flavor when ripe. Some people say they taste like a regular banana — but with a hint of raspberry sweetness. They\'re often used in desserts bu', '1659510424-prod1_redBanana.webp', '1', '1', 135, 120, '2', 1),
(4, 'AMBRI APPLE', '  The Ambri apple is an attractive variety with a distinctively oblong/conical shape, often flattened at the base. Some fruits also have some ribbing.', '1659512677-prodF_ambriApple.jpg', '2', '1', 160, 150, '1 ', 1),
(5, 'CHERRY TOMATOES', '  Cherry tomatoes are round, bite-sized, and so juicy that they may pop when you bite into them.\r\nOne cherry tomato (17 grams) contains only 3 calories and trace amounts of several vitamins and minerals (2Trusted Source). ', '1659512229-prodV_cherryTomato.jpg', '11', '2', 50, 40, '1', 1),
(6, 'TOTAPARI', '  Totapuri Mangoes (Magnifera indica) are ablong with prominent beak in shape and about 6-8 inches long. The skin of the fruit is thick and green, yellow or a fanciful combination of these colours, but is inedible. There is a central large seed surrounded', '1659512247-prodF_totapariMango.jpeg', '7', '1', 160, 150, '1', 0),
(7, 'ROBUSTA  BANANA', '     Banana robusta\r\n    Graded, sorted and quality fruits and vegetables\r\n    Fresh, hygienic and natural\r\n    Semi tall variety with a very sweet taste and a good aroma\r\n    Specifications (length> 17cm), sweet flavored, mushy and soft bananas.\r\n    The', '1659512265-prodF_robostuBanana.webp', '1', '1', 95, 80, '1', 1),
(8, 'DWAF CAVENDISH BANANA', ' Dwarf cavendish banana trees can grow indoors and outdoors and produce large bunches of bananas every harvesting season. Read our guide to learn how to grow a healthy Dwarf Cavendish banana tree. ', '1659512278-prodF_dwafBanana.jpg', '1', '1', 90, 85, '1', 1),
(9, 'LAAL VELCHI BANANA', '  Red banana is the most relished and highly prized variety of Kerala and Tamil Nadu. Its commercial cultivation is prominent in Kanyakumari and Tirunelveli districts of Tamil Nadu. It is also popular in Karnataka, Andhra Pradesh and to some extent in Wes', '1659512294-prodF_lalVelchiBanana.jpg', '1', '1', 80, 70, '1', 1),
(10, 'GOLDEN DELICIOUS APPLE', ' \'Golden Delicious\' is a cultivar of apple. It is one of the 15 most popular cultivars in the United States. It is not closely related to \'Red Delicious\'.', '1659512307-prodF_goldenApple.webp', '2', '1', 180, 160, '1', 1),
(11, 'RED DELICIOUS APPLE', ' The bright red coloured and heart shaped Red Delicious apples are crunchy, juicy and slightly sweet.\r\nRed Delicious Apples are a natural source of fibre and are fat free. They contain a wide variety of anti-oxidants and polynutrients. ', '1659512324-prodF_redApple.jpg', '2', '1', 195, 170, '1', 1),
(12, 'GRANNY SMITH APPLE', '  Fresho Cut Granny smith apples are nicely sliced and chopped which can be very convenient for your use. Sourced from best growers, these fruits are first cleaned, diced and packed with utmost care so that they do not lose their nutritional value. Green ', '1659512338-prodF_grainySmithAplle.jpeg', '2', '1', 160, 140, '1', 1),
(13, 'HAPUS MANGOS', '  King of Mangoes Hapus mangoes  Alphonso mangoes from the Coastal Konkan area of Maharashtra with juicy pulpy and an amazing yellow tinge.', '1659512353-prodF_hapusMango.jpg', '6', '1', 220, 200, '1', 1),
(14, 'NEELUM MANGO', '  Mallika (mango) ... The \'Mallika\' mango is the result of the hybridization of the Indian mango varieties Neelum and Dasheri. ... The variety was introduced by Dr.', '1659512367-prodF_neelamMango.jpg', '7', '1', 190, 170, '1', 1),
(15, 'BADAMI MANGO', '  \r\n    Also called Karnataka Alphonso due to their taste and texture.\r\n    100% Natural, Great in taste\r\n    Rich in Vitamin A, C, iron, folate and magnesium\r\n    Store in cool and dry place\r\n    100% Carbide Free & Naturally Ripened\r\n', '1659512378-prodF_badamiMango.jpg', '7', '1', 150, 130, '1', 1),
(16, 'MOON DROP GRAPES', '  Moon Drop® grapes are a medium to large varietal that grows in loose bunches averaging 29 centimeters in length and 16 centimeters in width. Each grape has a distinct, elongated, uniform, and cylindrical shape,', '1659512393-prodF_moonGrapes.webp', '8', '1', 95, 80, '1', 1),
(17, 'VALIANT GRAPES', '  Valiant Grapes produce medium sized fruit on well-filled 4\"\" clusters. This grape\'s flavor is rich and tangy with a beautiful blue color. It can be enjoyed for table use, juices and wines. This variety of grape was developed by South Dakota State Univer', '1659512406-prodF_vailentGrapes.jpg', '8', '1', 105, 90, '1', 1),
(18, 'LIMBERGER GRAPES', '  Officially classified under the name “Blauer Limberger”, this red grape variety also goes by the synonyms “Lemberger” and “Blaufränkisch”.', '1659512417-prodF_limbergerGrapes.jpg', '8', '1', 85, 70, '1', 1),
(19, 'CRIMSIN SEEDLESS GRAPES', ' Crimson Seedless is a late-season red seedless table grape developed by David Ramming and Ron Tarailo of the USDA Fruit Genetics and Breeding Research Unit, Fresno, CA. Crimson Seedless, previously known as selection #102-26, resulted from a cross of Emp', '1659512431-prodF_crimsinGrapes.webp', '8', '1', 90, 75, '1', 1),
(20, 'SWEET LIME ORANGE', '  Oranges are known to be sweeter than the two varieties. Keenu has more sour taste than all of them while mosambi is mild sweet in taste.', '1659512445-prodF_sweetLimeOrange.jpg', '6', '1', 90, 70, '1', 1),
(21, 'TANGERINE ORANGE', '  The tangerine is a type of orange. Its scientific name varies. It has been treated as a separate species under the name Citrus tangerina or Citrus', '1659512474-prodF_tangrinOrange.jpg', '6', '1', 75, 60, '1', 1),
(22, 'ORANGE', ' Orange skin is often called \"orange peel\". Oranges are an important food source in many parts of the world for several reasons. They are a commonly available source of vitamin C. They last longer than many other fruits when they are stored', '1659512456-prodF_Orange.jpg', '6', '1', 90, 80, '1', 1),
(23, 'LEMON GUAVA', '  A Lemon guava grows on a small tree. The fruits are small in size, around 3 to 5 centimeters in diameter, though it is larger than the petite strawberry ', '1659512489-prodF_lemonGauva.jpg', '9', '1', 75, 60, '1', 1),
(24, 'TROPIC WHITE GUAVA', '  The Tropic White receives its name from its white flesh. These Guavas have bright yellowish-green peels and creamy white meat. While this variety has slightly', '1659512504-prodF_tropicWhiteGauva.jpg', '9', '1', 90, 80, '1', 1),
(25, 'PINEAPPLE GUAVA', ' pineapple guava as a multi-stemmed shrub or prune it as a small tree, with a central trunk. It features silver-green, oval foliage', '1659512517-prodF_pineappleGauvua.jpg', '9', '1', 80, 75, '1', 1),
(26, 'RED GUAVA', ' Red Guava Fruits ... Guava tree is a tropical evergreen shrub. In fact, guava is a large berry which is round or oval in shape with light green or light yellow', '1659512531-prodF_redGauva.jpg', '9', '1', 95, 70, '1', 1),
(28, 'VISHALA WATERMELON', '  VISHALA WATERMELON · The attractions of this variety are its beautiful golden-yellow rind and the uniform oblong shape. ', '1659512544-prodF_vishalaWaterMelon.jpg', '10', '1', 55, 45, '1', 1),
(29, 'NAMDHARI WATERMELON', '  Namdhari watermelon are best quality seeds have vigorous and strong vine and a fruit with firm appealing deep red flesh with oblong shape', '1659512151-prodF_nimdhariWatermelon.jpeg', '10', '1', 65, 50, '1', 1),
(30, 'AAROHI WATERMELON', '  Plant is vigorous & good yielder. Fruit is weighing 3-4Kg, oblong shaped with attractive dark yellow flesh. Fruit rind is dark green with darker stripes. Rind color may be lighter under strong sunlight. Under normal weather conditions, it takes 70-75 da', '1659512125-prodF_aarohiWatermelon.webp', '10', '1', 60, 50, '1', 1),
(31, 'BROCOLI', ' Calabrese broccoli, destiny broccoli, and belstar broccoli — these are the different varieties of broccoli. When you see broccoli in the produce section, it’s like likely one of these. It has a thick stalk and is part of the cabbage family.', '1659882497_subcatV_brocouli.webp', '50', '2', 0, 30, '1', 1),
(32, 'CHINESE BROCCOLI', 'Picture kale leaves on a thick stem. That’s Chinese broccoli. As the name implies, it’s poplar in Asian cuisine. It has a sweeter taste than regular broccoli.', '1659882588_chinese-broccoli-gai-lan.jpg', '50', '2', 0, 45, '1', 1),
(33, 'BROCCOLI RAAB (rapini)', ' While it sure looks a lot like a type of broccoli, it’s technically part of the same family as turnips. Italian chefs love to cook with it. Flavor-wise, it’s a little bitter and little earthy.', '1659882666_rampini.jpg', '50', '2', 0, 50, '1', 1),
(34, ' ROMANESCO BROCCOLI', ' Think of flower buds that are spikey and exotic looking. That’s romanesco. It’s bitter and crunchy like regular broccoli but a bit earthier.', '1659882735_romanesco-1.jpg', '50', '2', 0, 45, '1', 1),
(35, 'GOLDEN BEETS', ' These beets have a mild flavor and a golden or yellow color. According to experts, they have been around since at least the 1820s. They are colorful and sweet and their taste becomes more pronounced when you roast them. There are also different varieties', '1659882854_golden-beets-july282020-min.jpg', '49', '2', 0, 60, '1', 1),
(36, 'MANGAL WURZEL BEETS', ' Also called the Mangold beet, it was originally fed only to animals but has gained popularity over the past decades. It is shaped like a cross between a beet and a carrot, in part because of the fact that it is fat and top-heavy. There is also a Mammoth ', '1659882915_mangel-wurzel-beets-july282020-min.jpg', '49', '2', 0, 60, '1', 1),
(37, 'RED BEETS', ' Red and purple beets are the types that people are most familiar with but canned beets taste completely different than fresh beets. Red beets tend to take on the flavor of whatever food item they are cooked with, much as potatoes do, and if you use them ', '1659882966_red-beets-july282020-min.jpg', '49', '2', 0, 50, '1', 1),
(38, 'GARDEN BEETS', ' These types of beets are also called beetroot or table beets and they are normally classified by color.', '1659883017_common-garden-beets-july282020-min-e1595925352616.webp', '49', '2', 0, 40, '1', 1),
(39, 'ARMENIAN CUCUMBER', '  Armenian cucumbers are long, thin, and slightly variegated in darker and lighter shades of light green or a yellowish-green. They are delightfully crunchy and are delicious when simply sliced and eaten raw.\r\nThese cucumbers have very soft seeds and thin', '1659883156_Armenian-Cucumber-57a0a2bc3df78c32769f8698.webp', '45', '2', 0, 40, '1', 1),
(40, 'GARDEN CUCUMBER', '  Garden cucumbers are the most common cucumbers in North America. They are relatively smooth-skinned and dark green.\r\n\r\nCucumbers sold at grocery stores tend to be waxed to help them retain moisture. For this reason, you\'ll want to peel these cucumbers. ', '1659883205_Garden-cucumber-GettyImages-475297671-589884fa3df78caebc439b11.webp', '45', '2', 0, 50, '1', 1),
(41, 'BELL PEPPER CAPSICUM', ' These big sweet peppers come in a rainbow of colors (green, red, orange, yellow, purple and more). Because of their size and mild-sweet taste, they are perfect to stuff, but are also incredibly versatile, adding flavor to any dish they are used in. ', '1659883376_close-up-of-green-red-and-orange-bell-peppers-royalty-free-image-622418542-1558536290.jpg', '43', '2', 0, 30, '1', 1),
(42, 'MIN SWEET PEPPER ', ' These tiny peppers look and taste similar to bell peppers but are smaller, have less seeds to dig out and are often slightly sweeter. Use them as scoops for your favorite dip or roast or sauté them like you would a bell pepper.', '1659883446_fresh-bell-peppers-royalty-free-image-507033344-1558536146.jpg', '43', '2', 0, 45, '1', 1),
(43, ' CUBANELLE PEPPER', ' Also known as the Italian Frying Pepper, this sweet pepper packs a touch of heat. This light greenish-yellow in pepper is long, has a slight wrinkle to its thin skin and is widely used in cuisines of Cuba, Puerto Rico and Dominican Republic. Because of t', '1659883519_raw-green-organic-cubanelle-peppers-royalty-free-image-1061828022-1558536368.jpg', '43', '2', 0, 30, '1', 1),
(44, ' BANANA PEPPER', ' These peppers got their name for their long curved shape and yellowish hue. They are tangy but mild and are most often found pickled for piling on sandwiches.', '1659883582_Banana Pepper.jpg', '43', '2', 0, 30, '1', 1),
(45, ' BHUT JOLOKIA', ' Bhut Jolokia, also known as ‘ghost pepper’ is cultivated in the North-Eastern states of the country .', '1659883737_image.jpg', '42', '2', 0, 80, '1', 1),
(46, 'KAHSMERI CHILLI', ' The Kashmiri chilli is the most extensively used chilli in Indian households because of its unique.', '1659883800_1.jpg', '42', '2', 0, 100, '1', 1),
(47, 'KANTHARI CHILLI', ' The Kanthari chilli is also known as the ‘Bird’s Eye’ chilli of Kerala. The chilli becomes white in ...', '1659883864_2.jpg', '42', '2', 0, 120, '1', 1),
(48, 'BAYADAGI CHILLI', ' Named after the town of Byadagi, in Karnataka, this is a very famous variety of chilli that is known...\r\n', '1659883920_3.jpg', '42', '2', 0, 150, '1', 1),
(49, 'YELLOW GINGER', ' Known as cream garland lily, yellow ginger is a perennial flowering plant that is native to the Himalayas, Northern Vietnam, Sichuan and is cultivated in other regions like Hawaii. The plant of a yellow ginger has a short stem with tufted leaves, while i', '1659884037_img_6180e9faf0703.jpg', '41', '2', 0, 80, '1', 1),
(50, 'WHITE GINGER', ' Known as the coronarium, white ginger is a variety of ginger that is commonly seen in various regions of Hawaii. This hardy plant type of ginger can grow up to 8 feet tall. In some areas, it is also called a Butterfly flower or ginger lily. ', '1659884087_img_6180e9fbaa474.jpg', '41', '2', 0, 40, '1', 1),
(51, 'CHESNOK RED', '  Chesnok Red is an attractive hardneck purple stripe garlic that originates in the Republic of Georgia. It is very cold-hardy. It has wonderful robust flavor, a large number of cloves, and a long shelf life. The outer skins are white but peeling reveals ', '1659884228_ChesnokRedolindana-a373fcb7f6af484189f7c73c741a8627.webp', '36', '2', 0, 90, '1', 1),
(52, 'BOGATYR', ' The cultivar name means \"penicillin\" in Russian and refers to this garlic\'s rich supply of magnesium, vitamin C and vitamin B6. The flavor is rather intense; this hardneck purple stripe garlic is a good one for pickling or fermenting, in addition to impa', '1659884334_bogatyrscarecrowfarmsinsta-a67db2a9ff354304a33f4f4de227e9fe.webp', '36', '2', 0, 90, '1', 1),
(53, 'YELLOW ONION', ' If a recipe doesn’t specify what type of onion to use, your safest bet is a yellow onion. “Yellow onions are your standard cooking onion. I always reach for a yellow onion unless I have some other reason to reach for something else,” says Kim Reddin, the', '1659884433_13_Onions_Ways-to-Slash-Your-Risk-of-Osteoporosis-According-to-Science_554742319_EVGENIYA68.jpg', '35', '2', 0, 80, '1', 1),
(54, 'SWEET ONION', ' Popular sweet onions include Vidalias, Walla Wallas and Mauis. “These well-known varieties have a pale yellow skin. The inside may look white but they are yellow,” says Reddin, who fields questions about onions as The Onionista. If you’re looking for an ', '1659884538_shutterstock_172293707.jpg', '35', '2', 0, 60, '1', 0),
(55, 'RED ONION', ' Red onions are ubiquitous on salads, sandwiches and other raw preparations partly because of their appealing deep-purple color. Reddin warns, however, “Red onions, specifically, can have a really peppery, spicy flavor to them.” This variety is sweetest f', '1659884586_shutterstock_28612930-e1515537001512.jpg', '35', '2', 0, 50, '1', 1),
(56, 'WHITE ONION', ' White onions it the type of onion you’ll usually find in prepared salads (potato and macaroni salads, for instance) and traditionally in Mexican cuisine. “White onions can be strong but they tend to have less aftertaste,” Reddin says. Their slightly swee', '1659884628_shutterstock_268183568.jpg', '35', '2', 0, 70, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `prod_id`, `prod_name`, `full_name`, `message`, `date`, `status`) VALUES
(1, 3, '', 'Ejaz Shaikh', ' this is good', '2022-08-06', 1),
(2, 6, '', 'Ejaz Shaikh', ' this is good  quanliy and fast dilevery', '2022-08-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcat_id` int(255) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `product_quntity` int(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `subcat_name`, `description`, `category_image`, `cat_name`, `product_quntity`, `status`) VALUES
(1, 'BANANA', '    A banana is a fleshy and edible fruit that does not contain any seeds. Its family is Musa named scientifically, Musa acuminate, variable in size, color, and elongated, curve-shaped. It is all fleshy and sweet, full of starch, and is green, yellow, red', '1659456205-subcatF_banana.jpg', '1', 6, 1),
(2, 'APPLE', ' An apple is an edible fruit that is cultivated worldwide from the species Malus. This fruit contains vital minerals, vitamins, and other nutrients, which are beneficial for our body. Its color is red, pink, green, and has a sweet taste.', '1659457316-subcatF_apple.jpg', '1', 3, 1),
(6, 'ORANGE', ' Oranges are citrus fruit from the family Rutaceae. It is also called sweet orange tastes sweet, sour, and bitter. This fruit reproduces asexually found in green colors, orange colors.', '1659457395-subcatF_orange.jpg', '1', 4, 1),
(7, 'MANGO', ' The mango is an edible fruit rich in vitamins(A, C &D), and the taste is either sweet when ripe and sour when before ripen. This fruit is also called the king of all fruits, scientifically called Mangifera indica, mostly cultivated in tropical areas.', '1659457411-subcatF_mango.jpg', '1', 3, 1),
(8, 'GRAPES', ' Grape is a berry-type fruit that is used to make wines and is grown on the flowering plant from the Vitis family. It is green in color and a non-climatic type of fruit. Its seeds are used to extract raisins, vinegar, and grape seed oil.', '1659457430-subcatF_grapes.jpg', '1', 3, 1),
(9, 'GUAVA', '  The fruits are round to pear-shaped and measure up to 7.6 cm in diameter; their pulp contains many small hard seeds (more abundant in wild forms than in cultivated varieties). The fruit has a yellow skin and white, yellow, or pink flesh. The musky, at t', '1659457772-subcatF_gauva.jpg', '1', 4, 1),
(10, 'WATERMELON', '  watermelon, (Citrullus lanatus), succulent fruit and vinelike plant of the gourd family (Cucurbitaceae), native to tropical Africa and cultivated around the world. The fruit contains vitamin A and some vitamin C and is usually eaten raw. The rind is som', '1659457784-subcatF_watermelon.webp', '1', 4, 1),
(11, 'TOMATO', '  The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, fro', '1659459462-subcatV_tomato.webp', '2', 1, 1),
(13, 'PINEAPPLE', '  Pineapple is a tropical plant that produces edible fruit from the family Bromeliaceae. This fruit is the third most well-known fruit in the world. It is also called das the commercial fruit.', '1659457804-subcatF_pinapple.jpg', '1', 0, 1),
(14, 'POMEGRANATE', ' Pomegranate is a seed-bearing fruit that grows in the flowering plant from the Lythracaea family, and its scientific name is Punica granatum, respectively. It is a fruit-bearing deciduous shrub from the family Lythraceae and subfamily panic ideas. The sc', '1659457819-subcatF_pomegrant.jpg', '1', 0, 1),
(15, 'AVOCADO', ' Avocado is a fruit that grows on flowering plants from the family Lauraceae. This fruit consists of a single large seed inside it and is green, red, orange. It contains more potassium minerals than bananas.', '1659457834-subcatF_avocado.jpg', '1', 0, 1),
(16, 'COCONUT', ' The coconut is a juicy fruit full of water in it called coconut water, and its outer shell is rough, and the inner shell is a fleshy, soft white part. It is a species from the genus cocos. In India and some other countries, coconut is a fruit used in dev', '1659457856-subcatF_coconut.jpg', '1', 0, 1),
(17, 'PAPAYA', ' Papaya is from the family Caricaceae. Its scientific name is Carica papaya, having colors like green, orange, yellow, etc., and is also used for making vegetables while unripe.', '1659457881-subcatF_papaya.jpg', '1', 0, 1),
(18, 'STRAWBERRY', ' The strawberry is a type of berry fruit, which is a hybrid species of genus Fragaria, produced all over the world. This is a very appreciable fruit by the characteristics of bright red color, its juicy texture, sweetness, and aroma. It is used in making ', '1659457892-subcatF_straberry.jpg', '1', 0, 1),
(19, 'CHERRY', ' Cherry is a fruit of genus prunus, is a fleshy drupe. The sweet cherry is scientifically named Prunus avium, and the sour cherry is named Prunus cerasus. It is red, green, orange in colors, and produced in the flowering plants. It is also called cherry b', '1659457904-subcatF_cherry.jpg', '1', 0, 1),
(20, 'APRICOT', ' An apricot is a stone fruit from the family Rosaceae having the scientific name of Prunus armeniaca. This fruit is closely related to peaches, plums, cherries, and almonds, respectively. It can be eaten fresh or preserved.', '1659457918-subcatF_apricot.jpg', '1', 0, 1),
(21, 'KIWI FRUIT', ' Kiwifruit is also known as a Chinese gooseberry, which is famous for its short name kiwi. It belongs to the genus Actinidia. It has a shape like an oval, and having light green and golden flesh, has a unique flavor with tiny black edible seeds.', '1659457931-subcatF_kiwifruit.jpg', '1', 0, 1),
(22, 'PEAR TREE', ' Peartree produces pears from the species of genus Pyrus, from the family Rosaceae. Certain pear fruit species are known for edible fruit and juices, while others are called trees.', '1659457950-subcatF_pear.jpg', '1', 0, 1),
(23, 'FIG', ' Fig is a fruit, also called Ficus carica, an Asian flowering plant from the mulberry family. It is also called Common Fig. This is considered an ornamental plant, as well as fruit.\r\nFigs are a sweet fruit having multiple seeds and soft skin that can be e', '1659457965-subcatF_fig.jpg', '1', 0, 1),
(24, 'MUSKMELON', ' Muskmelon is a species of melon that includes smooth-skinned varieties like honeydew, casaba, etc. This species comes from the category of Watermelon and cabbage.', '1659457980-subcatF_maskmelon.jpg', '1', 0, 1),
(25, 'OLIVE', ' Olive is a fruit having the botanical name Olea europaea, which means European olive. This is a species of a small plant from the family Oleaceae.', '1659457997-subcatF_olive.jpg', '1', 0, 1),
(26, 'JAVA PLUM', ' Java Plum, which is also known as Malabar plum, black plum has a scientific name Syzygium cumini. It is an evergreen tropical plant from the flowering plant species called Myrtaceae. This fruit is good in taste, sweet, and sometimes sour.', '1659458029-subcatF_plumjava.jpg', '1', 0, 1),
(27, 'CUSTARD APPLE', ' The Custard Apple is a common name for the fruit which bears this fruit, named scientifically Annona reticulata. This fruit may vary by shape, like heart-shaped, spherical, obligated, or irregular, respectively. The fruit looks brown or yellowish with re', '1659458044-subcatF_custuredApple.jpg', '1', 0, 1),
(28, 'PEACH', ' Peach is a fruit produced in a deciduous, its scientific name is Prunus persica, from the family Rosaceae. This fruit is also eaten by fish and baked into pines. Peach having yellow flesh inside is rich in vitamin A.', '1659458057-subcatF_peach.jpg', '1', 0, 1),
(29, 'TAMARIND', ' Tamarind is a leguminous tree bearing edible fruit from the genus Tamarindus species, which is monotypic and contains a single species in it. The fruit of tamarind is an indehiscent legume called pods, having a hard, brown outer shell and is fleshy, juic', '1659458071-subcatF_tamarind.jpg', '1', 0, 1),
(30, 'LIME', ' Lime is a fruit, also known as lemon, a citrus fruit that contains citric acid in it. This is the same as that of the orange, grapefruit, etc. It is round, green, and contains acidic juice vesicles.', '1659458107-subcatF_lime.jpg', '1', 0, 1),
(31, 'POTATO', ' The scientific name for potato is Solanum Tuberosum, a starchy edible tuber. Potato is one of the main food crops in the world. They are frequently served whole or mashed as a cooked vegetable.', '1659459482-subcatV_potato.jpg', '2', 0, 1),
(32, 'CABBAGE', ' The cabbage, a green leafy vegetable full of leaves covered on it, looks like ahead, and it is closely related to broccoli and cauliflowers.', '1659459498-subcatV_cabbage.jpg', '2', 0, 1),
(33, 'BRINJAL', ' Brinjal is an eggplant, a plant species in the nightshade family, Solanaceae, with a scientific name, Solanum melongena.', '1659459516-subcatV_brinjal.jpg', '2', 0, 1),
(34, 'RADISH', ' A radish, from the family Brassicaceae, is an edible root vegetable, which can easily be grown and consumed all over the world. It is mostly used for making salads, having numerous varieties of size, color, flavor, and producing time. This is good for he', '1659459531-subcatV_radish.webp', '2', 0, 1),
(35, 'ONION', ' The onion is a vegetable, also known as the bulb onion, that comes from the species Allium. This vegetable is closed with garlic, leek, scallion, etc. ', '1659459547-subcatV_onion.jpg', '2', 4, 1),
(36, 'GARLIC', ' Garlic, a species of Allium, is a relative of the onion. It is a herb-type plant and a useful vegetable produced under the ground.', '1659459578-subcatV_garlic.webp', '2', 2, 1),
(37, 'LADY FINGER', '  Ladyfinger, also called okra or okra, has the scientific name Abelmoschus esculentus. This green vegetable is of the valued edible seed pods.', '1659459591-subcatV_ladyFinger.webp', '2', 0, 1),
(38, 'CAULI FLOWER', ' Cauliflower is a white vegetable that comes from the species Brassica oleracea from the Brassicaceae family. This vegetable has a tendency to grow in all seasons, especially in the winter seasons.', '1659459606-subcatV_cauliFlower.webp', '2', 0, 1),
(39, 'PUMPKIN', ' A pumpkin is a winter squash vegetable that looks like a round, big, little ribbed skin, and orange from inside. The outer shell is thick and contains seeds and pulp', '1659459632-subcatV_pumpkin.jpg', '2', 0, 1),
(40, 'CARROT', ' A carrot is a root vegetable, grows under the ground having several colors like red, orange, white, purple. This vegetable is good for health and contains vital nutrients, minerals, vitamins, etc.', '1659459651-subcatV_carrot.webp', '2', 0, 1),
(41, 'GINGER', ' Ginger is a root vegetable that grows under the ground, and it is a flowering plant and also a medicinal plant. This vegetable is useful for curing throat problems.', '1659459669-subcatV_ginger.jpg', '2', 2, 1),
(42, 'CHILLI', ' The chili pepper has the scientific name capsicum from the Solanaceae family. It is used to make many cuisines as it adds some spice and is of red and green colors.', '1659459683-subcatV_chilli.webp', '2', 4, 1),
(43, 'CAPSICUM', ' The capsicum is also a type of chili vegetable, belonging to the family Solanaceae. It is a flowering plant, and it is also added to various cuisines to make the spice. It has some colors, like red, green, etc.', '1659459701-subcatV_capsicum.jpg', '2', 4, 1),
(44, 'SPINACH', ' Spinach is a green leafy vegetable and a flowering plant. It is a high fibrous vegetable that can be eaten fresh or consumed after storage under preservation techniques. This helps to nurture the body with its vitamins and nutrients.', '1659459717-subcatV_spinach.jpg', '2', 0, 1),
(45, 'CUCUMBER', ' Cucumber is a creeping vine plant from the Cucurbitaceae gourd family. The cucumiform fruits can also be consumed as a vegetable has a lot of varieties like pickling, slicing, seedless. It has green, light green, yellow colors.', '1659459739-subcatV_cucumber.jpg', '2', 2, 1),
(46, 'JACK FRUIT', ' The jackfruit grows on a jack tree, a species of tree in a fig, mulberry, and breadfruit family.\r\nIt has a spike-like outer shell and presents in green, brown, yellow colors. Mostly found in the southern Indian region and rainforest of Malaysia.', '1659459756-subcatV_jackFruit.webp', '2', 0, 1),
(47, 'MUSHROOM', ' A mushroom is also called toadstool, a fleshy and spore-bearing fruit body of a fungus, produced above the ground, on the soil, and on its food source. Scientifically it is called Agaricus bisporus and is good for health', '1659459773-subcatV_mushroom.webp', '2', 0, 1),
(49, 'BEETROOT', ' The beetroot vegetable is a taproot portion of the beet plant. It is good for the improvement of blood formation in the body and is red beet, dinner beet, golden beet, garden beet, table beet, etc.', '1659459811-subcatV_beetroot.webp', '2', 4, 1),
(50, 'BROCCOLI', ' A broccoli vegetable comes in the cabbage family, which has a large flowering head and small leaves with stalks, which are also edible. This word comes from the Italian word broccoli, which means the flowering crest of cabbage.', '1659459827-subcatV_brocouli.webp', '2', 4, 1),
(51, 'GREEN BEAN', ' Green beans are also called grapes. It is the immature, fresh fruit common beans. The immature beans or pods have green in color, and after the beans have ripened, they turn into a yellowish color.', '1659459847-subcatV_greenBean.jpg', '2', 0, 1),
(52, 'PEAS', ' Peas are green in color, and pod-like fruit grows in the plant. The scientific name for this fruit is Pisum sativum. Each pea contains some peas which are green or yellow in color. This pea grows from the ovary of the flower. It is good in taste and s]al', '1659459867-subcatV_peas.jpg', '2', 0, 1),
(53, 'CORN', ' Maize, also called corn, is a cereal grain fruit that has a leafy stalk plant that produces pollen inflorescences that yield seeds or kernels.', '1659459882-subcatV_corn.jpg', '2', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `fname`, `phone`, `email`, `address`, `status`) VALUES
(2, 'Ejaz Shaikh', '8446931810', 'ejaz88337@gmail.com', 'camp near poona college pune', 1),
(3, 'SHaikh Ejaz', '9307616840', 'ejaz@gmail.com', 'bhavani peth pune', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishList_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `MonthDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishList_id`, `user_id`, `prod_id`, `prod_name`, `prod_price`, `MonthDate`) VALUES
(30, 2, 29, 'NAMDHARI WATERMELON ', '50 ', '2022-08-05 01:27:33'),
(31, 3, 29, 'NAMDHARI WATERMELON ', '50 ', '2022-08-05 01:27:58'),
(32, 3, 24, 'TROPIC WHITE GUAVA ', '80 ', '2022-08-05 01:28:07'),
(33, 2, 26, 'RED GUAVA ', '70 ', '2022-08-06 13:13:26'),
(34, 2, 56, 'WHITE ONION ', '70 ', '2022-08-09 18:16:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cartorder`
--
ALTER TABLE `cartorder`
  ADD PRIMARY KEY (`cartOrder_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishList_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cartorder`
--
ALTER TABLE `cartorder`
  MODIFY `cartOrder_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishList_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
