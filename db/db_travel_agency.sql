-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 05:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adventures`
--

CREATE TABLE `tbl_adventures` (
  `adventure_id` int(11) NOT NULL,
  `adventure_img` varchar(255) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `travel_option` varchar(100) NOT NULL,
  `accomodation` varchar(4) NOT NULL,
  `food_drinks` varchar(4) NOT NULL,
  `tour_guide` varchar(4) NOT NULL,
  `description` text NOT NULL,
  `price` float(11,2) NOT NULL,
  `promo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adventures`
--

INSERT INTO `tbl_adventures` (`adventure_id`, `adventure_img`, `location_name`, `country`, `travel_option`, `accomodation`, `food_drinks`, `tour_guide`, `description`, `price`, `promo`) VALUES
(1, 'salar de uyuni1634625356.jpg', 'salar de uyuni', 'bolivia', 'Air', 'yes', 'yes', 'yes', 'Salar de Uyuni, located in the Daniel Campos province of Bolivia, looks like it belongs on another planet. Stretching for more than 4,050 square miles—a little smaller than the state of Connecticut—it is the world’s largest salt flat, formed when several prehistoric lakes dried up 25,000 to 10,000 years ago, leaving behind hexagonal patterns of salt on the otherwise featureless surface. When nearby lakes overflow, or the area gets rain, a thin layer of water covers the expanse, transforming it into a massive reflective mirror that makes for jaw-dropping, dreamlike photos. \r\n\r\nThe natural wonder has served as a valuable source of salt and lithium for Bolivia, and it has long been a hot spot for tourism in South America. There’s even a hotel built out of salt bricks: the Palacio de Sal. If you’re planning a trip to witness the surreal beauty of the Salar de Uyuni salt flat, here’s what you need to know.', 9500.00, 5),
(2, 'emerald coast1634625595.jpg', 'emerald coast', 'florida', 'Air', 'yes', 'yes', 'yes', 'The Emerald coast is a wonder to see. The beautiful clear emerald waters and sugary-white sand gives the place a mysteriousness about. It makes it unique and unlike any other place you’ve seen before. There is a uniqueness about it that makes it a special place. Compiled is a list of 4 unique characteristics that make the Emerald Coast a must see destination to put on your bucket list. It is the perfect vacation destination and the best repeat weekend stop. The Emerald Coast is known for it’s signature white sand, turquoise waters, as well as other natural occurrences, like dune lakes and the nearby barrier islands.', 7999.00, 0),
(3, 'brygen, bergen1634625706.jpg', 'brygen, bergen', 'norway', 'Air', 'yes', 'yes', 'yes', 'Bergen is the Gateway to the Fjords of Norway. As a UNESCO World Heritage City and a European City of Culture, the Bergen region has the ideal combination of nature, culture and exciting urban life all year around.\r\n\r\nIn Bergen you can find a range of different accommodation ranging from exclusive hotels to charming Bed & Breakfasts. In Bergen you can also enjoy some of the finest seafood restaurants in Norway. If you are looking for things to do in Bergen, check out the large selecation of activities and attractions.', 12545.00, 15),
(4, 'faroe island1634626335.jpg', 'faroe island', 'denmark', 'Air', 'yes', 'no', 'no', 'If you havent already heard of the Faroe Islands, you will soon. Tucked between Iceland and Norway in the North Atlantic Ocean (and politically part of Denmark), this self-governed group of 18 volcanic islands is fast becoming a favorite Nordic destination. Music lovers may already recognize the region for its festival scene—it typically hosts five live music festivals throughout the year—but adventurers are also starting to catch wind of the archipelagos steep cliffs, hiking trails, waterfalls, and rocky coastlines. And for Instagrammers, there are more than enough sites to keep you snapping photos (hello, puffins and grass-roofed houses). Here are 18 reasons to pack your coat and head to the Faroe islands.', 8999.00, 0),
(5, 'pena palace1634626426.jpg', 'pena palace', 'porugal', 'Air', 'yes', 'no', 'no', 'The National Palace of Pena stands out as the renowned jewel in the crown of the Sintra Hills. The surrounding park, in close harmony with the magical character of the palace, triggers emotions of mystery and discovery. In its nooks and corners, our gaze gets lost amongst its charms.\r\n\r\nThe coloured tones of the palace, the pinnacle of Romanticism in Portugal and the eternal legacy of Ferdinand II, the King-Artist, opens the doors to the imagination of all those who cross its threshold, with the infinite shades of green painting the surrounding park establishing an idyllic scenario, frequently hidden under the veil of the mists that characterise the Sintra Hills. As if having stepped out of a fairy tale, this has been the place of dreams for all the generation who have passed here and gazed upon its magnificence.', 11500.00, 25),
(6, 'mont saint michel1634626583.jpg', 'mont saint michel', 'france', 'Air', 'no', 'yes', 'yes', 'Perched on a rocky islet in the midst of vast sandbanks exposed to powerful tides, at the limit between Normandy and Brittany, stands “Wonder of the West”, a Gothic-style Benedictine abbey dedicated to the Archangel St Michel, and the village that grew up in the shadow of its walls. Built between the 11th and 16th centuries, the abbey is a technical and artistic tour de force, having had to adapt to the problems posed by this unique natural site. Thus, the practical and aesthetic solutions inscribed in the stones of the edifice are henceforth inseparable from its natural environment.\r\n\r\nThis Benedictine abbey, founded in 966, was erected on a sanctuary dedicated to the Archangel Michel since 708 and conserves some vestiges of the Romananesque period. The older part of the present abbey, the small pre-Romanesque church with a double nave, Notre-Dame-sous-terre, in granite masonry and flat bricks, dates back undoubtedly to the 10th century. The contribution of the Romanesque period is still visible in the nave of the abbey church, whose crossing is supported by the rock summit, and in a group of conventual staggered buildings (the chaplaincy or gallery of Aquilon, the covered gallery of the monks of which the vault, constructed after 1103, would be one of the earliest examples of ribbed vaulting).', 12000.00, 0),
(7, 'son doong1634627012.jpg', 'al khazneh', 'jordan', 'Air', 'no', 'yes', 'yes', 'The Nabataeans had staged this overture when entering their capital from the east in a far more imposing manner than the present sight suggests. The forecourt lay about 6 m lower, was paved, and might have contained a pond. An open staircase about 13 m length and more than 5 m width led over older graves (see below) to a terrace in front of the portico. The magnificent rock-cut mausoleum (25 m wide, 39 m high) was probably built during the second half of the reign of King Aretas IV (ruled 9 BC - 40 AD), but it is not known for whom. Traces of burnt incense found on the plaza suggest that Al Khazneh was an important pilgrimage site.\r\n\r\nSuch a representative burial monument at this highly prominent location can actually only have been built for a Nabataean king or queen. It was erected in the initial phase of a massive development of Petra to become an international showcase of the Nabataean Kingdom (S. G. Schmid). Its upper classes were well acquainted with the architecture and art of the Mediterranean metropolises and knew how to impress high-ranking visitors. These models provided inspiration, but were adapted and interpreted by the Nabataeans according to their own needs and visions.', 8700.00, 15),
(8, 'son doong1634627214.jpg', 'son doong', 'vietnam', 'Air', 'yes', 'yes', 'yes', 'Local man Ho Khanh discovered Son Doong in 1990 while searching Phong Nha-Ke Bang National Park for food and timber to earn a modest income. During his search he stumbled across an opening in a limestone cliff, noticed clouds billowing out from the entrance and heard the sounds of a river raging from somewhere inside. He returned home and forgot about the cave.\r\n\r\nHo Khanh met Howard and Deb Limbert of the British Cave Research Association (BRCA), who were conducting exploratory caving expeditions in the area. After hearing his stories, they urged Ho Khanh to rediscover the cave, which he eventually did in 2008, after several attempts. In 2009, he led Howard, Deb and a team of other caving professionals to the opening. After the first survey in 2009, the team were able to conclude that the cave had the largest cross-section of any cave anywhere on the planet.', 8000.99, 10),
(9, 'big buddha1634627397.jpg', 'big buddha', 'thailand', 'Sea', 'yes', 'yes', 'yes', 'Zhangjiajie National Park is located in the central-eastern area of China in the Wulingyuan Scenic Area which features multiple protected areas.  The national park encompasses an area of 18.59 square miles (48.15 sq km).  It is a GANP Ambassador Park.\r\n\r\nThe larger Wulingyuan Scenic Area covers 153.5 square miles (397.5 sq km).  The collective Wulingyuan area is a UNESCO World Heritage Site.  Zhangjiajie National Forest Park is probably the most coveted part of the area.\r\n\r\nThe park is comprised of dense forests, deep ravines, deep canyons, unusual peaks, caves, and pillar-like rock formations blanketed throughout the park.  These pillar rock formations are what the park is renowned for around the world.\r\n\r\nThe pillar rock formations are not typical limestone-eroded pillars.  The pillar rock formations are comprised of quartz-sandstone and formed from physical erosion caused by the abundant rains.\r\n\r\nThe landscapes created by the mountains, pillar rock formations, dense forests, and clouds are the epitome of Chinese landscapes that inspire so many different types of artwork.\r\n\r\nThe Bailong Elevator and Zhangjiajie Grand Canyon Glass Bridge are two record-holding features that help visitors experience the splendor of the national park.', 8999.00, 15),
(10, 'zhangjiajie national forest park1634629989.jpg', 'zhangjiajie national forest park', 'china', 'Air', 'yes', 'no', 'yes', 'Zhangjiajie National Park is located in the central-eastern area of China in the Wulingyuan Scenic Area which features multiple protected areas.  The national park encompasses an area of 18.59 square miles (48.15 sq km).  It is a GANP Ambassador Park.\r\n\r\nThe larger Wulingyuan Scenic Area covers 153.5 square miles (397.5 sq km).  The collective Wulingyuan area is a UNESCO World Heritage Site.  Zhangjiajie National Forest Park is probably the most coveted part of the area.\r\n\r\nThe park is comprised of dense forests, deep ravines, deep canyons, unusual peaks, caves, and pillar-like rock formations blanketed throughout the park.  These pillar rock formations are what the park is renowned for around the world.\r\n\r\nThe pillar rock formations are not typical limestone-eroded pillars.  The pillar rock formations are comprised of quartz-sandstone and formed from physical erosion caused by the abundant rains.\r\n\r\nThe landscapes created by the mountains, pillar rock formations, dense forests, and clouds are the epitome of Chinese landscapes that inspire so many different types of artwork.\r\n\r\nThe Bailong Elevator and Zhangjiajie Grand Canyon Glass Bridge are two record-holding features that help visitors experience the splendor of the national park.', 9999.00, 0),
(11, 'heydar aliyev center1634630101.jpg', 'heydar aliyev center', 'azerbaijan', 'Air', 'yes', 'no', 'yes', 'The design of the Heydar Aliyev Center establishes a continuous, fluid relationship between its surrounding plaza and the building’s interior. The plaza, as the ground surface; accessible to all as part of Baku’s urban fabric, rises to envelop an equally public interior space and define a sequence of event spaces dedicated to the collective celebration of contemporary and traditional Azeri culture. Elaborate formations such as undulations, bifurcations, folds, and inflections modify this plaza surface into an architectural landscape that performs a multitude of functions: welcoming, embracing, and directing visitors through different levels of the interior. With this gesture, the building blurs the conventional differentiation between architectural object and urban landscape, building envelope and urban plaza, figure and ground, interior and exterior.', 9999.99, 3),
(12, 'atacama desert1634630233.jpg', 'atacama desert', 'chile', 'Air', 'no', 'yes', 'yes', 'The Atacama is the oldest desert on Earth and has experienced semiarid conditions for roughly the past 150 million years, according to a paper in the November 2018 issue of Nature. Scientists estimate that the deserts inner core has been hyperarid for roughly 15 million years, thanks to a combination of unique geologic and atmospheric conditions in the area. This perfectly parched inner-desert region spans roughly 50,000 square miles (130,000 square km), according to soil scientist Ronald Amundson of the University of California, Berkeley.\r\n\r\nThe Atacama is tucked in the shadow of the snow-capped Andes Mountains, which block rainfall from the east. To the west, the upwelling of cold water from deep in the Pacific Ocean promotes atmospheric conditions that hamper the evaporation of seawater and prevent the formation of clouds and rain. [Photos: The Haunting Splendor of Chiles Atacama Desert]\r\n\r\nIn other deserts around the world, like the Sahara, the mercury can soar above 130 degrees Fahrenheit (50 degrees Celsius). But temperatures in the Atacama are comparatively mild throughout the year. The average temperature in the desert is about 63 degrees F (18 degrees C).', 11500.00, 5),
(13, 'falklands islands1634630423.jpg', 'falklands islands', 'united kingdom', 'Sea', 'no', 'yes', 'no', 'Imagine a place that is so far off the beaten track you have miles of stunning landscape, beaches and magnificent bird life all to yourself.  Imagine a silence that is only broken by the call of the birds, and your own footsteps as you explore these beautiful islands in the South Atlantic Ocean.\r\n\r\nThis is the Falkland Islands, one of the last great wilderness destinations where your trip becomes an adventure.  Four wheel drives are our mode of transport, and our little planes will take you to islands abundant with penguins, albatrosses and petrels that are there for you alone to discover and enjoy.\r\n\r\nAt the end of each day you can look forward to traditional cosy Falkland Islands hospitality in the hotels, lodges and guesthouses scattered around the islands.\r\n\r\nEscape on a holiday like no other.', 9500.50, 0),
(14, 'krusevo1634630585.jpg', 'krusevo', 'north macedonia', 'Air', 'yes', 'no', 'yes', 'In Macedonian language, Krusevo means ‘Place of the Pear Trees’, a sweet moniker for an undeniably beautiful slice of the country. In summer and fall, trees drip plums, pears and figs onto fields of tobacco leaf, and in winter, the rolling hills transform into ski slopes.\r\n\r\nKrusevians might take issue with me attaching the words ‘lovely’ or ‘sweet’ to their town, though. Beneath the quiet, almost somber veneer, Krusevo has long been known for a fierce fighting spirit that coaxed a grassroots rebel liberation movement into existence in 1903.\r\n\r\nThe Ilinden Uprising originated in Krusevo. It started by calling on people of all ethnicities and religions to unite against the ruling Ottoman Sultanate, and ended with the declaration of the Republic of Krushevo, the only self-governed area in the Ottoman Empire at the time.', 9400.50, 50),
(15, 'El Nido, Palawan1634630681.jpg', 'El Nido, Palawan', 'Philippines', 'Sea', 'yes', 'yes', 'yes', 'El Nido is situated at the northern end of Palawan island in the Philippines. Palawan is an extremely popular tourist destination thanks to El Nido, but most flights to the island land in the main city of Puerto Princessa.\r\n\r\nPreviously there were only 2 ways to get to El Nido. You could fly into Puerto Princessa and ride in a minivan for 5 hours on a windy bumpy road. Or you could fly to the island of Busuanga and take the ferry from Coron to El Nido which is a 3-4 hour boat ride.\r\n\r\nLuckily, these days there is a third option. A new airport has been built just 15 minutes outside of the town of El Nido (Airport code: ENI) and AirSWIFT operates numerous flights a day between El Nido and other popular tourist destinations in the Philippine including Manila, Boracay, Busuanga (Coron), and Cebu.', 9000.00, 0),
(16, 'Mayon Volcano, Legaspi1634630767.jpg', 'Mayon Volcano, Legaspi', 'Philippines', 'Land', 'no', 'yes', 'yes', 'Mayon Volcano towers above the region, primarily in Legazpi City, and provides a breathtaking backdrop wherever you are in the province. \r\n\r\nLegend has it that its name came from ‘magayon’, a Bicolano word that means beautiful which is more than appropriate to describe how stunning this natural scenery is from every angle.\r\n\r\nIf youve always wanted to see the spectacular Mayon Volcano, here’s a complete guide for a fun-filled adventure exploring one of the top tourist spots in the Philippines.', 4500.00, 3),
(17, 'kawasan falls, cebu1634630871.jpg', 'kawasan falls, cebu', 'Philippines', 'Sea', 'no', 'no', 'no', 'Kawasan Falls is a multi-layered waterfall system located in Barangay Matutinao in the town of Badian, Cebu. It is without doubt the most visited tourist attraction here in Badian.  Famous for its beautiful turquoise water, Kawasan Falls sits at the foot of Mantalongon Mountain Range, approximately one kilometer from the national road of Badian and at least four hours of trekking from Osmeña Peak of Dalaguete. Its cold and clear water cascades through layers of waterfalls emanating from Kandayvic Spring before going to Matutinao River and the Tañon Strait.  The waterfall system consists of two main cascades both with deep natural pools ideal for swimming. The first cascade stands at approximately 40 meters while the less crowded second level has a height of approximately 20 meters and can be reached within ten minutes of trekking.', 4999.00, 0),
(18, 'banaue rice terreces1634630956.jpg', 'banaue rice terreces', 'philippines', 'Land', 'no', 'no', 'no', 'The Rice Terraces of the Philippine Cordilleras is an outstanding example of an evolved, living cultural landscape that can be traced as far back as two millennia ago in the pre-colonial Philippines. The terraces are located in the remote areas of the Philippine Cordillera mountain range on the northern island of Luzon, Philippine archipelago. While the historic terraces cover an extensive area, the inscribed property consists of five clusters of the most intact and impressive terraces, located in four municipalities.  They are all the product of the Ifugao ethnic group, a minority community that has occupied these mountains for thousands of years.\r\n\r\nThe five inscribed clusters are; the Nagacadan terrace cluster in the municipality of Kiangan, a rice terrace cluster manifested in two distinct ascending rows of terraces bisected by a river; the Hungduan terrace cluster that uniquely emerges into a spider web; the central Mayoyao terrace cluster which is characterized by terraces interspersed with traditional farmers’ bale (houses) and alang (granaries); the Bangaan terrace cluster in the municipality of Banaue that backdrops a typical Ifugao traditional village; and the Batad terrace cluster of the municipality of Banaue that is nestled in amphitheatre-like semi-circular terraces with a village at its base.', 3950.99, 5),
(19, 'chocolate hills, bohol1634631085.jpg', 'chocolate hills, bohol', 'philippines', 'Sea', 'no', 'yes', 'yes', 'The Chocolate Hills are a group of unusually shaped hills located in the middle of the island of Bohol in Philippines. This extraordinary landscape is unique to this small island.\r\n\r\nIt is unknown how many chocolate hills there are. It is known that at the bare minimum there are 1268 hills but some estimates put this number as high as 1776.\r\n\r\nThe hills are not huge; the highest one barely reaches 120 meters in height. Even so, most hills are between 30 and 50 meters. The conical Chocolate hills are scattered within a fifty square kilometer area.\r\n\r\nMystery still surrounds how the Chocolate Hills were formed. One of the more popular local legends is that long ago, two giants fought for days, hurling earth and stones at one another, until they fell exhausted, friends once more, into each others arms.\r\n\r\nMore romantic is the handsome young giant, Arogo, who fell in love with a mortal woman. When, as mortals must, she Chocolate Hillsdied, the giant wept, his great teardrops turning into the Chocolate Hills.', 4299.99, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `blog_id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`blog_id`, `sender`, `description`) VALUES
(1, 'Alex Roger Calayag De Guzman', 'We would not hesitate to book another holiday through Travel Online! The process was quick and easy, with our holiday going as smooth as we could have hoped for.\r\nEverything was sorted for us, and all we had to worry about was packing our suitcases! The price also couldnt be beat, and we even have friends and family who are thinking of booking their next holiday too :)\r\n\r\nThank you for making our holiday unforgettable!'),
(2, 'Bryan Andrei Pascua Medina', 'Given the repeated lockdowns and changes in dates I proposed, the service was always very accommodating. I was always offered a change of date or refund.'),
(3, 'John Jesreel Balangue Libed', 'I just want to say thank you for everything. We always use LeggoTravel you are all so helpful. We had a wonderful time away.'),
(4, 'Darwin Bulgado Labiste', 'Very happy with the service received. Helpful and obliging!'),
(5, 'Angel Ann Tabale Ramos', 'The trip package and inclusions were a great deal and value for money and it meant we didnt have much to worry about organizing. Lisa and the team were a pleasure to deal with and they replied promptly with our questions and kept us informed of any changes. Will definitely use it again!'),
(6, 'Christine Dee Villena Sarmiento', 'Received excellent customer service for this booking. The staff was very responsive, helpful, and professional.'),
(7, 'Phoebe Joy Laugo Peneyra', 'It was very efficient and professional. When lockdown came, they advised us that it had been canceled and asked if we wanted our money back or rebook. We rebooked with no trouble. We got exactly what was advertised and paid for. Good Value and excellent accommodation.'),
(8, 'James Rold Damaso Baliscao', 'Great professional service. Easy to book, pay and quick contact for any enquiries. Thank you for making our holiday experience very enjoyable.'),
(9, 'Carty King Correa Paglinawan', 'Great Communication from the commencement of the booking until the completion of travel. No hidden fees. Our travel was incident-free and smooth. I would recommend using TravelOnline and would book again with them.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(125) NOT NULL,
  `location` varchar(100) NOT NULL,
  `persons` int(11) NOT NULL,
  `price` float(11,2) NOT NULL,
  `total_price` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `user_id`, `customer_name`, `location`, `persons`, `price`, `total_price`) VALUES
(2, 4, 'Darwin Bulgado Labiste', 'chocolate hills, bohol, philippines', 2, 4299.99, 8599.98),
(3, 5, 'Angel Ann Tabale Ramos', 'kawasan falls, cebu, Philippines', 3, 4999.00, 14997.00),
(4, 7, 'Christine Dee Villena Sarmiento', 'El Nido, Palawan, Philippines', 2, 9000.00, 18000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `firstname`, `middlename`, `lastname`, `email`, `password`) VALUES
(1, 'Alex Roger', 'Calayag', 'De Guzman', 'alexroger@gmail.com', 'Password123!'),
(2, 'Bryan Andrei', 'Pascua', 'Medina', 'bryanandreimedina@gmail.com', 'Password123!'),
(3, 'John Jesreel', 'Balangue', 'Libed', 'johnjesreellibed@gmail.com', 'Password123!'),
(4, 'Darwin', 'Bulgado', 'Labiste', 'personal.darwinlabiste@gmail.com', 'Password123!'),
(5, 'Angel Ann', 'Tabale', 'Ramos', 'angelannramos0@gmail.com', 'Password123!'),
(6, 'Phoebe Joy', 'Laugo', 'Peneyra', 'pjpeneyra@gmail.com', 'Password123!'),
(7, 'Christine Dee', 'Villena', 'Sarmiento', 'deesarmiento123@gmail.com', 'Password123!'),
(8, 'James Rold', 'Damaso', 'Baliscao', 'jamesroldbaliscao@gmail.com', 'Password123!'),
(9, 'Carty King', 'Correa', 'Paglinawan', 'cartykingpaglinawan512@gmail.com', 'Password123!'),
(10, 'Eduardo', 'Mallari', 'Reyes II', 'edmallarireyes42@gmail.com', 'Password123!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_adventures`
--
ALTER TABLE `tbl_adventures`
  ADD PRIMARY KEY (`adventure_id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_adventures`
--
ALTER TABLE `tbl_adventures`
  MODIFY `adventure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
