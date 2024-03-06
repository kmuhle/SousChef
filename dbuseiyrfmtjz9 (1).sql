-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2023 at 08:35 PM
-- Server version: 5.7.39-42-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuseiyrfmtjz9`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `ingredients` text NOT NULL,
  `instruction` text NOT NULL,
  `time` int(11) NOT NULL,
  `health_labels` text,
  `meal_type` text,
  `cuisine_type` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `title`, `ingredients`, `instruction`, `time`, `health_labels`, `meal_type`, `cuisine_type`, `user_id`) VALUES
(1, 'Creamy Curry Chicken With Yellow Rice', '2 Tbsps olive oil\r\n1 large onion\r\n2  garlic cloves\r\n1.5 tsps ground cumin\r\n1 tsp ground turmeric\r\n1 tsp ground coriander\r\n1 tsp garam masala\r\n1 pinch ground ginger\r\n1.25 cups coconut milk\r\n1 cup tomatoes\r\n2 tsps lemon juice\r\n1 Tbsp brown sugar\r\n1.5 tsps corn starch\r\n3 servings salt\r\n2 Tbsps cilantro\r\n2  wholes\r\n', 'Heat the olive oil in a large, heavy-bottom pan over medium heat.\r\nAdd the chicken and cook for 6 to 8 minutes, turning frequently, until lightly browned and cooked through.\r\nRemove from the pan and set aside.\r\nAdd the onion and saut for a few minutes.\r\nAdd the garlic, cumin, turmeric, ground coriander, garam masala, ginger and cook for one minute.\r\nMix the corn starch with the coconut milk until smooth. Return the chicken to the pan and stir in the coconut milk, brown sugar and tomatoes. Cook over medium heat and stir for 1 to 2 minutes. Partially cover and cook for 15 more minutes until the sauce has reduced and thickened. Stir in the lemon juice and season with salt.\r\nServe the creamy chicken curry on a bed of yellow rice (I use brown rice cooked in water with salt and 1 teaspoon of turmeric) sprinkled with fresh cilantro.\r\n', 45, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'antipasti,starter,snack,appetizer,antipasto,hor d', 'Indian,Asian', 4),
(2, 'Cauliflower, Brown Rice, and Vegetable Fried Rice', '2 cups broccoli\r\n1 head cauliflower\r\n1  t coconut oil\r\n3 cups brown rice\r\n5 cloves garlic\r\n1  t grapeseed oil\r\n3 Tbsps soy sauce\r\n1 cup peas\r\n8 servings salt\r\n8 servings additional scallion tops\r\n7  scallions\r\n2 tsps sesame oil\r\n8 servings sesame seeds\r\n', 'Remove the cauliflower', 30, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,antipasti,starter,snack,appetizer,antipasto,hor d', 'Chinese,Asian', 4),
(3, 'Salmon Caesar Salad', '2 Tbsps caesar dressing\r\n2 Tbsps lemon juice\r\n1 Tbsp olive oil\r\n0.25 tsps paprika\r\n8 Tbsps parmesan cheese\r\n2 servings add pepper\r\n8 oz romaine\r\n6 oz salmon fillet\r\n0.25 tsps salt\r\n1 Tbsp slivered almonds\r\n', 'Heat up a skillet/frying pan and sir the Salmon in the coconut oil/olive oil (don', 45, 'gluten free,primal,pescatarian,ketogenic', 'side dish,lunch,main course,salad,main dish,dinner', 'American', 6),
(4, 'Red Kidney Bean Jambalaya', '2 cups brown rice\r\n2 medium carrots\r\n2 stalks celery\r\n1 tsp celery seed\r\n2 cups kidney beans\r\n1 tsp marjoram\r\n2 tsps thyme\r\n1 medium eggplant\r\n2 cloves garlic\r\n3 handfuls green beans\r\n6 servings ground pepper\r\n2 tsps ground sage\r\n0.5 tsps liquid smoke\r\n2 Tbsps olive oil\r\n1  bell pepper\r\n1 small onion\r\n1.5 tsps sea salt\r\n1 tsp sriracha\r\n2 medium tomatoes\r\n3 cups vegetable stock\r\n', 'Rinse the kidney beans and brown rice separately. Cover the kidney beans with water and soak for 8 hours or overnight. In a separate bowl, cover the brown rice with water and soak for 8 hours or overnight.\r\nDrain and rinse the kidney beans, then transfer to a medium saucepan and cover with fresh water. Bring to a boil, reduce heat to medium-low, cover, and simmer for 1 hour or until just tender but not falling apart.\r\nDrain and set aside.\r\nHeat the oil in a large saucepan over medium heat. When hot, add the onion and saut for 5 minutes. Now add the garlic, carrots, celery and green beans, and stir for another 5 minutes. Next add the tomatoes, red pepper, eggplant, sage, thyme, marjoram and celery seed, and continue to stir for another few minutes.\r\nPour in the vegetable stock, liquid smoke, rice and the cooked kidney beans. Bring to a boil, reduce heat to medium low, cover, and cook, stirring occasionally, for 45 minutes or until the rice is tender.\r\nAdd water as necessary if the stew becomes too dry.Season with sriracha, salt and pepper, and taste for seasoning  add more liquid smoke, sriracha, salt, pepper or herbs as desired.\r\n', 45, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'lunch,main course,main dish,dinner', 'Cajun,Creole', 4),
(5, 'Slow Cooker Beef Stew', '14.5 oz beef broth\r\n2 large carrots\r\n2 stalks celery\r\n26 oz cream of mushroom soup\r\n3  green onions\r\n10  new potatoes\r\n1 small onion\r\n0.5 cups dale', 'To get started, heat your slow cooker to low.\r\nPour in the cream of mushroom soup, Dale', 490, 'gluten free,dairy free', 'lunch,soup,main course,main dish,dinner', '', 4),
(6, 'Cauliflower, Brown Rice, and Vegetable Fried Rice', '2 cups broccoli\r\n1 head cauliflower\r\n1  t coconut oil\r\n3 cups brown rice\r\n5 cloves garlic\r\n1  t grapeseed oil\r\n3 Tbsps soy sauce\r\n1 cup peas\r\n8 servings salt\r\n8 servings additional scallion tops\r\n7  scallions\r\n2 tsps sesame oil\r\n8 servings sesame seeds\r\n', 'Remove the cauliflower', 30, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,antipasti,starter,snack,appetizer,antipasto,hor d', 'Chinese,Asian', 1),
(7, 'Berry Banana Breakfast Smoothie', '0.25 cups banana\r\n2 Tbsps graham cracker crumbs\r\n1 cup soy milk\r\n0.5 cups strawberries\r\n1 container vanilla yogurt\r\n', 'Take some yogurt in your favorite flavor and add 1 container to your blender.\r\nAdd in the berries, banana, and soy milk and blend. Top your glass with a few graham cracker crumbs and serve.\r\n', 5, 'lacto ovo vegetarian', 'morning meal,brunch,beverage,breakfast,drink', '', 1),
(8, 'Alouette® Stuffed Mushroom Caps', '3 Tbsps seasoned bread crumbs\r\n18  mushroom caps\r\n6.5 oz alouette spinach & artichoke spread\r\n', 'Preheat oven to 375 F.\r\nPlace mushroom caps hollow side up on baking sheet. Fill each cap with 1 tsp. Alouette Garlic & Herbs\r\nSpreadable Cheese and sprinkle with seasoned bread crumbs.\r\nBake 12-15 minutes.\r\nGarnish and serve.\r\n', 45, 'dairy free,lacto ovo vegetarian,vegan', 'antipasti,starter,snack,appetizer,antipasto,hor d', '', 4),
(9, 'Cauliflower, Brown Rice, and Vegetable Fried Rice', '2 cups broccoli\r\n1 head cauliflower\r\n1  t coconut oil\r\n3 cups brown rice\r\n5 cloves garlic\r\n1  t grapeseed oil\r\n3 Tbsps soy sauce\r\n1 cup peas\r\n8 servings salt\r\n8 servings additional scallion tops\r\n7  scallions\r\n2 tsps sesame oil\r\n8 servings sesame seeds\r\n', 'Remove the cauliflower', 30, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,antipasti,starter,snack,appetizer,antipasto,hor d', 'Chinese,Asian', 4),
(23, 'Bacon Wrapped Filet Mignon', '4 inches beef tenderloin steaks<br>4 slice bacon<br>2 large cloves garlic<br>4 servings salt', 'Place the tenderloins on a large dish and wrap a slice of room temperature bacon around each filet, gently stretching the bacon if needed. Secure the ends of the bacon with a toothpick.<br>Cut the garlic cloves in half and rub both sides of each filet with the cut ends of the garlic. Season well with salt and pepper on both sides.<br>Pre-heat grill to very hot. With tongs, place each steak on the grill and for medium-rare cook for 3-4 minutes, rotating the steaks halfway through 90 degrees for nice grill marks.<br>Turn the steaks over and cook another 3-4 minutes.<br>Remove from the grill and let rest loosely covered for 5 minutes before removing toothpicks and serving.<br>Serve as is or with sauted garlic mushrooms<br>', 45, 'gluten free,dairy free,paleolithic,primal,whole 30', 'side dish', 'undefined', 4),
(24, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(25, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(26, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(27, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(28, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(29, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(30, 'Almond Sandwich Cookies', '7 oz almond paste<br>0.5 cups almonds<br>1 Tbsp cinnamon<br>0.25 cups egg whites<br>1 Tbsp sugar<br>', 'Preheat the oven to 350 degrees F. Line to large baking sheets with parchment paper. Break the almond paste into chunks and place it in a food processor.<br>Add the sugar and cinnamon and grind until fine.<br>Add the egg whites and pulse until smooth. Scoop the mixture into a large zip bag and snip a hole in one corner. Heres where the recipe varies<br>If the almond mixture in thick, pour the sliced almonds on to a plate. Then squeeze circle onto the almonds. Flip them over so the are covered with almonds on both sides, then lay them on the cookie sheets. If the almond mixture is loose, place little mounds of sliced almonds on the cookies sheets where the cookies will be. Squeeze the mixture into circles on top of the little almond piles. Then sprinkle with a few more almonds.<br>Bake for 9-12 minutes. Keep an eye on them at the end because they turn dark quickly. Allow the cookies to cool completely on the parchment paper. Then turn half of them over and top with jam or frosting. Give each cookie a top and sprinkle with powdered sugar.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,fodmap friendly', 'dessert', 'undefined', 25),
(31, 'Red Kidney Bean Jambalaya', '2 cups brown rice<br>2 medium carrots<br>2 stalks celery<br>1 tsp celery seed<br>2 cups kidney beans<br>1 tsp marjoram<br>2 tsps thyme<br>1 medium eggplant<br>2 cloves garlic<br>3 handfuls green beans<br>6 servings ground pepper<br>2 tsps ground sage<br>0.5 tsps liquid smoke<br>2 Tbsps olive oil<br>1  bell pepper<br>1 small onion<br>1.5 tsps sea salt<br>1 tsp sriracha<br>2 medium tomatoes<br>3 cups vegetable stock<br>', 'Rinse the kidney beans and brown rice separately. Cover the kidney beans with water and soak for 8 hours or overnight. In a separate bowl, cover the brown rice with water and soak for 8 hours or overnight.<br>Drain and rinse the kidney beans, then transfer to a medium saucepan and cover with fresh water. Bring to a boil, reduce heat to medium-low, cover, and simmer for 1 hour or until just tender but not falling apart.<br>Drain and set aside.<br>Heat the oil in a large saucepan over medium heat. When hot, add the onion and saut for 5 minutes. Now add the garlic, carrots, celery and green beans, and stir for another 5 minutes. Next add the tomatoes, red pepper, eggplant, sage, thyme, marjoram and celery seed, and continue to stir for another few minutes.<br>Pour in the vegetable stock, liquid smoke, rice and the cooked kidney beans. Bring to a boil, reduce heat to medium low, cover, and cook, stirring occasionally, for 45 minutes or until the rice is tender.<br>Add water as necessary if the stew becomes too dry. Season with sriracha, salt and pepper, and taste for seasoning  add more liquid smoke, sriracha, salt, pepper or herbs as desired.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'lunch,main course,main dish,dinner', 'undefined', 4),
(32, 'Red Kidney Bean Jambalaya', '2 cups brown rice<br>2 medium carrots<br>2 stalks celery<br>1 tsp celery seed<br>2 cups kidney beans<br>1 tsp marjoram<br>2 tsps thyme<br>1 medium eggplant<br>2 cloves garlic<br>3 handfuls green beans<br>6 servings ground pepper<br>2 tsps ground sage<br>0.5 tsps liquid smoke<br>2 Tbsps olive oil<br>1  bell pepper<br>1 small onion<br>1.5 tsps sea salt<br>1 tsp sriracha<br>2 medium tomatoes<br>3 cups vegetable stock<br>', 'Rinse the kidney beans and brown rice separately. Cover the kidney beans with water and soak for 8 hours or overnight. In a separate bowl, cover the brown rice with water and soak for 8 hours or overnight.<br>Drain and rinse the kidney beans, then transfer to a medium saucepan and cover with fresh water. Bring to a boil, reduce heat to medium-low, cover, and simmer for 1 hour or until just tender but not falling apart.<br>Drain and set aside.<br>Heat the oil in a large saucepan over medium heat. When hot, add the onion and saut for 5 minutes. Now add the garlic, carrots, celery and green beans, and stir for another 5 minutes. Next add the tomatoes, red pepper, eggplant, sage, thyme, marjoram and celery seed, and continue to stir for another few minutes.<br>Pour in the vegetable stock, liquid smoke, rice and the cooked kidney beans. Bring to a boil, reduce heat to medium low, cover, and cook, stirring occasionally, for 45 minutes or until the rice is tender.<br>Add water as necessary if the stew becomes too dry. Season with sriracha, salt and pepper, and taste for seasoning  add more liquid smoke, sriracha, salt, pepper or herbs as desired.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'lunch,main course,main dish,dinner', 'undefined', 4),
(33, 'Cauliflower, Brown Rice, and Vegetable Fried Rice', '2 cups broccoli<br>1 head cauliflower<br>1  t coconut oil<br>3 cups brown rice<br>5 cloves garlic<br>1  t grapeseed oil<br>3 Tbsps soy sauce<br>1 cup peas<br>8 servings salt<br>8 servings additional scallion tops<br>7  scallions<br>2 tsps sesame oil<br>8 servings sesame seeds<br>', 'Remove the cauliflower\'s tough stem and reserve for another use. Using a food processor, pulse cauliflower florets until they resemble rice or couscous. You should end up with around four cups of \"cauliflower rice. \"<br>Heat 1T butter and 1T oil in a large skillet over medium heat.<br>Add garlic and the white and light green pieces of scallion. Sauté about a minute.<br>Add the cauliflower to the pan. Stir to coat with oil, then spread out in pan and let sit; you want it cook a bit and to caramelize (get a bit brown), which will bring out the sweetness. After a couple of minutes, stir and spread out again.<br>Add cold rice (it separates easily, so it won\'t clump up during cooking), plus the additional grapeseed and coconut oil or butter. Raise heat to medium-high. Toss everything together and, again, spread the mixture out over the whole pan and press a bit into the bottom.<br>Let it sit for about two minutes—so the rice can get toasted and a little crispy.<br>Add the peas and broccoli and stir again.<br>Drizzle soy sauce and toasted sesame oil over rice. Cook for another minute or so and turn off heat.<br>Add chopped scallion tops and toss. I like to toast some sesame seeds in a dry pan; I sprinkle these and some more raw, chopped scallion over the top of the rice for added flavor and crunch. Season to taste with salt and, if you\'d like, more soy sauce. Keep in mind that if you\'re serving this with something salty and saucy (ie. teriyaki chicken) you may want to hold off on adding too much salt to the fried rice.<br>', 30, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,antipasti,starter,snack,appetizer,antipasto,hor d', 'undefined', 4),
(34, 'Cauliflower, Brown Rice, and Vegetable Fried Rice', '2 cups broccoli<br>1 head cauliflower<br>1  t coconut oil<br>3 cups brown rice<br>5 cloves garlic<br>1  t grapeseed oil<br>3 Tbsps soy sauce<br>1 cup peas<br>8 servings salt<br>8 servings additional scallion tops<br>7  scallions<br>2 tsps sesame oil<br>8 servings sesame seeds<br>', 'Remove the cauliflower\'s tough stem and reserve for another use. Using a food processor, pulse cauliflower florets until they resemble rice or couscous. You should end up with around four cups of \"cauliflower rice. \"<br>Heat 1T butter and 1T oil in a large skillet over medium heat.<br>Add garlic and the white and light green pieces of scallion. Sauté about a minute.<br>Add the cauliflower to the pan. Stir to coat with oil, then spread out in pan and let sit; you want it cook a bit and to caramelize (get a bit brown), which will bring out the sweetness. After a couple of minutes, stir and spread out again.<br>Add cold rice (it separates easily, so it won\'t clump up during cooking), plus the additional grapeseed and coconut oil or butter. Raise heat to medium-high. Toss everything together and, again, spread the mixture out over the whole pan and press a bit into the bottom.<br>Let it sit for about two minutes—so the rice can get toasted and a little crispy.<br>Add the peas and broccoli and stir again.<br>Drizzle soy sauce and toasted sesame oil over rice. Cook for another minute or so and turn off heat.<br>Add chopped scallion tops and toss. I like to toast some sesame seeds in a dry pan; I sprinkle these and some more raw, chopped scallion over the top of the rice for added flavor and crunch. Season to taste with salt and, if you\'d like, more soy sauce. Keep in mind that if you\'re serving this with something salty and saucy (ie. teriyaki chicken) you may want to hold off on adding too much salt to the fried rice.<br>', 30, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,antipasti,starter,snack,appetizer,antipasto,hor d', 'undefined', 4),
(35, 'Cauliflower, Brown Rice, and Vegetable Fried Rice', '2 cups broccoli<br>1 head cauliflower<br>1  t coconut oil<br>3 cups brown rice<br>5 cloves garlic<br>1  t grapeseed oil<br>3 Tbsps soy sauce<br>1 cup peas<br>8 servings salt<br>8 servings additional scallion tops<br>7  scallions<br>2 tsps sesame oil<br>8 servings sesame seeds<br>', 'Remove the cauliflower\'s tough stem and reserve for another use. Using a food processor, pulse cauliflower florets until they resemble rice or couscous. You should end up with around four cups of \"cauliflower rice. \"<br>Heat 1T butter and 1T oil in a large skillet over medium heat.<br>Add garlic and the white and light green pieces of scallion. Sauté about a minute.<br>Add the cauliflower to the pan. Stir to coat with oil, then spread out in pan and let sit; you want it cook a bit and to caramelize (get a bit brown), which will bring out the sweetness. After a couple of minutes, stir and spread out again.<br>Add cold rice (it separates easily, so it won\'t clump up during cooking), plus the additional grapeseed and coconut oil or butter. Raise heat to medium-high. Toss everything together and, again, spread the mixture out over the whole pan and press a bit into the bottom.<br>Let it sit for about two minutes—so the rice can get toasted and a little crispy.<br>Add the peas and broccoli and stir again.<br>Drizzle soy sauce and toasted sesame oil over rice. Cook for another minute or so and turn off heat.<br>Add chopped scallion tops and toss. I like to toast some sesame seeds in a dry pan; I sprinkle these and some more raw, chopped scallion over the top of the rice for added flavor and crunch. Season to taste with salt and, if you\'d like, more soy sauce. Keep in mind that if you\'re serving this with something salty and saucy (ie. teriyaki chicken) you may want to hold off on adding too much salt to the fried rice.<br>', 30, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,antipasti,starter,snack,appetizer,antipasto,hor d', 'undefined', 4),
(36, 'Chestnuts Roasting on an Open Fire', '1 serving all the nuts<br>1 serving roasted chestnuts were sold on the streets of rome in the sixteenth century and are still sold on th<br>1 serving roman soldiers were given chestnut porridge before entering battle<br>1 serving chestnut is japan\'s most ancient fruit. kuri was cultivated even before growing rice<br>1 serving in hungarian cuisine<br>1 serving in george orwell\'s 1984<br>', 'Preheat oven to 425℉<br>Arrange the prepared chestnuts evenly on a baking sheet<br>Roast for about 15 to 20 minutes or until the meat of the chestnut is soft <br>Peel and eat (or peel, dip in melted butter, and eat)<br>', 45, 'gluten free,dairy free,paleolithic,lacto ovo vegetarian,primal,fodmap friendly,whole 30,vegan', 'side dish', 'undefined', 4),
(37, 'Cannellini Bean and Asparagus Salad with Mushrooms', '3.75 cups cannellini beans<br>1 handful curry leaves<br>0.25 cups tarragon<br>1 clove garlic<br>3  juice of lemon<br>1 tsp lemon zest<br>0.5 cups olive oil<br>2 tsps olive oil<br>6 servings cracked pepper<br>1 tsp sea salt<br>8 large mushrooms<br>1 tsp grain mustard<br>', 'Rinse the cannellini beans and soak for 8 hours or overnight in several inches of water.<br>Drain and rinse, then transfer to a medium saucepan and cover with fresh water.<br>Add the curry leaves or bay leaf and bring to a boil. Reduce heat to medium-low, cover, and simmer for 1 hour or until the beans are tender but not falling apart.<br>Drain and transfer to a large salad bowl. Meanwhile, snap the woody ends off of the asparagus spears and steam the spears for 6 minutes or until just tender but still retaining their crunch.<br>Transfer to the salad bowl. Now cook the mushrooms.<br>Heat the oil in a large skillet over high heat. As soon as the oil is hot, drop in the mushrooms and cook, stirring constantly, for 5 minutes or until the mushrooms begin to brown and lose some of their liquid.<br>Transfer to the bowl with the asparagus. To make the dressing, combine the tarragon, lemon zest, garlic, lemon juice, olive oil and mustard in a small food processor or blender. Process until smooth.<br>Pour the dressing over the salad, season with salt and pepper, and toss.<br>Serve at room temperature or chilled.<br>', 45, 'gluten free,dairy free,lacto ovo vegetarian,vegan', 'side dish,lunch,salad,main course,main dish,dinner', 'undefined', 26),
(38, 'Cake De Naranja', '0.5 cups butter<br>1 cup sugar<br>1  egg<br>1 cup flour<br>1 tsp salt<br>1 tsp soda<br>1 cup buttermilk<br>1  rind of orange<br>1 tsp vanilla<br>', 'Mix and sift flour and salt.<br>Cream butter and sugar, add beaten egg.<br>Add soda to buttermilk, add to butter mixture. Blend in flour, mix well, add vanilla and grated orange rind.<br>Mix until blended.<br>Bake in moderate oven for 30 to 40 minutes.<br>PREPARE: juice of I orange, juice of 1 lemon,  cup sugar.<br>Mix this well and when cake is done and cool pour over cake.<br>', 45, 'lacto ovo vegetarian', 'dessert', 'undefined', 4),
(39, 'Alouette® Stuffed Mushroom Caps', '3 Tbsps seasoned bread crumbs<br>18  mushroom caps<br>6.5 oz alouette spinach ', 'Preheat oven to 375 F.<br>Place mushroom caps hollow side up on baking sheet. Fill each cap with 1 tsp. Alouette Garlic ', 45, 'dairy free,lacto ovo vegetarian,vegan', 'antipasti,starter,snack,appetizer,antipasto,hor d', 'undefined', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Friends`
--

CREATE TABLE `Friends` (
  `id` int(11) NOT NULL,
  `User1` int(11) NOT NULL,
  `User2` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Friends`
--

INSERT INTO `Friends` (`id`, `User1`, `User2`, `Status`) VALUES
(1, 1, 3, 0),
(2, 1, 2, 1),
(3, 2, 1, 1),
(4, 4, 1, 1),
(5, 1, 4, 1),
(6, 4, 2, 0),
(17, 24, 4, 1),
(18, 4, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `user_id` int(11) NOT NULL,
  `ingredient_list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`user_id`, `ingredient_list`) VALUES
(4, ''),
(8, 'Chicken'),
(6, 'Potato'),
(17, 'Banana'),
(11, ',Tomato'),
(23, 'Blueberries,Grapes,Yogurt'),
(25, 'Eggs,Cheese');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `ingredients` text NOT NULL,
  `instruction` text NOT NULL,
  `time` int(11) NOT NULL,
  `health_labels` text,
  `meal_type` text,
  `cuisine_type` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `ingredients`, `instruction`, `time`, `health_labels`, `meal_type`, `cuisine_type`, `user_id`) VALUES
(1, 'Best Chocolate Cake', '2 cups all-purpose flour\r\n2 cups granulated sugar\r\n3/4 cup unsweetened cocoa powder\r\n2 tsp baking powder\r\n1 1/2 tsp baking soda\r\n1 tsp salt\r\n1 cup milk\r\n1/2 cup vegetable oil\r\n2 large eggs\r\n2 tsp vanilla extract\r\n1 cup boiling water', 'Preheat the oven to 350°F (180°C). Grease two 9-inch round cake pans with cooking spray or butter, and line the bottoms with parchment paper.\r\n\r\nIn a large mixing bowl, whisk together the flour, sugar, cocoa powder, baking powder, baking soda, and salt until well combined.\r\n\r\nAdd the milk, vegetable oil, eggs, and vanilla extract to the bowl. Beat on medium speed with an electric mixer for about 2 minutes, or until the batter is smooth and well combined.\r\n\r\nStir in the boiling water by hand until the batter is thin and liquidy.\r\n\r\nPour the batter evenly into the prepared cake pans.\r\n\r\nBake for 30-35 minutes, or until a toothpick inserted into the center of the cakes comes out clean.\r\n\r\nLet the cakes cool in the pans for 10 minutes, then remove them from the pans and transfer them to a wire rack to cool completely.\r\n\r\nTo make the frosting, cream the softened butter in a mixing bowl with an electric mixer until light and fluffy.\r\n\r\nAdd the cocoa powder, powdered sugar, milk, and vanilla extract to the bowl. Beat on low speed until the ingredients are just combined, then increase the speed to high and beat until the frosting is smooth and creamy.\r\n\r\nOnce the cakes are cool, place one cake layer on a serving platter or cake stand. Spread a layer of frosting over the top of the cake, then place the second cake layer on top. Spread more frosting over the top and sides of the cake, as desired.\r\n\r\nSlice and serve the cake, and enjoy!', 50, 'Vegetarian', 'Dessert', 'American', 1),
(4, 'Grandma\'s Famous Cookies', '2 1/4 cups all-purpose flour\r\n1 tsp baking soda\r\n1 tsp salt\r\n1 cup unsalted butter, at room temperature\r\n3/4 cup white granulated sugar\r\n3/4 cup brown sugar, packed\r\n2 large eggs\r\n2 tsp vanilla extract\r\n2 cups semisweet chocolate chips', 'Preheat your oven to 375°F (190°C) and line a baking sheet with parchment paper.\r\nIn a medium-sized bowl, whisk together the flour, baking soda, and salt.\r\nIn a large mixing bowl, cream the butter, white sugar, and brown sugar until light and fluffy.\r\nAdd the eggs, one at a time, and mix well after each addition.\r\nMix in the vanilla extract.\r\nGradually add the flour mixture to the butter mixture, mixing well after each addition.\r\nStir in the chocolate chips.\r\nUsing a cookie scoop or spoon, drop rounded balls of dough onto the prepared baking sheet, spacing them about 2 inches apart.\r\nBake for 10-12 minutes, or until the edges are golden brown.\r\nAllow the cookies to cool on the baking sheet for a few minutes before transferring them to a wire rack to cool completely. Enjoy!', 150, 'Gluten Free, Vegetarian, Lacto-Vegetarian, Ovo-Vegetarian, Ketogenic, Vegan, Pescetarian, Paleo, Primal', 'Dessert, Appetizer, Salad, Bread, Breakfast, Soup, Side Dish, Beverage, Sauce, Marinade, Fingerfood, Main Course, Snack, Drink', 'African, British, Cajun, Caribbean, Chinese, Eastern European, American, European, French, German, Greek, Indian, Irish, Italian, Japanese, Korean, Latin American, Mediterranean, Jewish, Mexican, Southern, Spanish, Nordic, Thai, Vietnamese', 4),
(5, 'Meatballs', '1 pound ground beef\n1/2 cup breadcrumbs\n1/4 cup milk\n1/4 cup grated Parmesan cheese\n1/4 cup finely chopped fresh parsley\n1 egg, beaten\n1 teaspoon salt\n1/4 teaspoon black pepper\n1 pound spaghetti\n2 tablespoons olive oil\n4 cloves garlic, minced\n1/2 teaspoon red pepper flakes (optional)\n1 (28-ounce) can crushed tomatoes\n1 teaspoon salt\n1/4 teaspoon black pepper\n1/4 cup chopped fresh basil leaves', 'In a large bowl, combine the ground beef, breadcrumbs, milk, Parmesan cheese, parsley, egg, salt, and pepper. Mix well.\nForm the mixture into 1 1/2-inch balls, and set them aside.\nCook the spaghetti according to the package directions until al dente. Drain and set aside.\nIn a large skillet, heat the olive oil over medium heat.\nAdd the garlic and red pepper flakes (if using) and cook until fragrant, about 1 minute.\nAdd the meatballs to the skillet and brown on all sides, about 10 minutes total.\nAdd the crushed tomatoes, salt, and black pepper to the skillet and stir to combine.\nReduce the heat to low, cover the skillet, and simmer for 15-20 minutes, or until the meatballs are cooked through.\nServe the meatballs and sauce over the spaghetti, and garnish with chopped fresh basil leaves.', 1200, 'Paleo', 'Dinner', 'Italian', 4),
(6, 'The Perfect Spaghetti ', '1 pound spaghetti\r\n1/4 cup olive oil\r\n4 cloves garlic, minced\r\n1/2 teaspoon red pepper flakes (optional)\r\n1 (28-ounce) can crushed tomatoes\r\n1 teaspoon sugar\r\nSalt and freshly ground black pepper\r\nFresh basil leaves, chopped\r\nParmesan cheese, grated', 'Bring a large pot of salted water to a boil. Add spaghetti and cook until al dente according to the package instructions. Reserve 1/2 cup of the pasta water, then drain the spaghetti and set it aside.\r\n\r\nIn a large skillet, heat olive oil over medium heat. Add minced garlic and red pepper flakes (if using) and cook until fragrant, about 1 minute.\r\n\r\nAdd crushed tomatoes and sugar to the skillet, and stir to combine. Season with salt and pepper to taste.\r\n\r\nLet the sauce simmer for 10-15 minutes, stirring occasionally, until it has thickened slightly.\r\n\r\nAdd the cooked spaghetti to the skillet, along with the reserved pasta water. Toss the spaghetti with the sauce until it is well coated.\r\n\r\nServe the spaghetti hot, topped with chopped fresh basil and grated Parmesan cheese.', 30, 'Vegetarian', 'Main Course', 'Italian', 1),
(51, 'My Famous Stew', '2 lbs beef chuck, cut into 1-inch cubes\r\n1/4 cup all-purpose flour\r\n2 tbsp vegetable oil\r\n1 large onion, chopped\r\n4 cloves garlic, minced\r\n4 cups beef broth\r\n1 cup red wine\r\n4 large carrots, peeled and cut into 1-inch pieces\r\n2 celery stalks, sliced\r\n1 lb potatoes, peeled and cut into 1-inch pieces\r\n2 bay leaves\r\n1 tsp dried thyme', 'Season the beef cubes with salt and black pepper, and dredge them in flour until coated.\r\nHeat the oil in a large Dutch oven or pot over medium-high heat. Add the beef cubes in batches and cook until browned on all sides, about 5 minutes per batch. Remove the beef from the pot and set aside.\r\nAdd the chopped onion and garlic to the pot and cook until softened, about 5 minutes.\r\nPour in the beef broth and red wine and bring to a simmer, scraping any browned bits from the bottom of the pot.\r\nReturn the beef to the pot, along with the carrots, celery, potatoes, bay leaves, and thyme. Season with salt and black pepper to taste.\r\nBring the stew to a boil, then reduce the heat to low and cover the pot. Simmer the stew for 2-3 hours, or until the beef is tender and the vegetables are cooked through.\r\nRemove the bay leaves from the stew and discard. Serve hot, garnished with chopped fresh parsley.', 120, 'Paleo, Primal', 'Main Course, Soup', 'American', 4),
(52, 'te', 'tt', 'Tet', 10, 'Ketogenic, Paleo, Vegan, Ovo-Vegetarian', 'Appetizer, Beverage', 'American, Chinese, European', 25),
(53, 'The Best Leaves', 'At least two leaves', 'Eat them :)', 5, 'Gluten Free, Ketogenic, Vegetarian, Lacto-Vegetarian, Ovo-Vegetarian, Vegan, Pescetarian, Paleo, Primal', 'Main Course', 'American, African, British, Cajun, Caribbean, Chinese, Eastern European, European, French, German, Greek, Indian, Irish, Italian, Japanese, Jewish, Korean, Latin American, Mediterranean, Mexican, Middle Eastern, Nordic, Southern, Spanish, Thai, Vietnamese', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `preferences` text,
  `member` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `preferences`, `member`) VALUES
(1, 'Bill', 'zliu26@tufts.edu', '$2y$10$tSZXJjFxayP9OmoC2dnUu.ZdwztLcXFeOvg3L7K8eLkkWO5EQQwES', NULL, 1),
(2, 'David', 'david@tufts.edu', '$2y$10$s2Z2uu3ayGFeFSdE8D9mHeVK.KKEPJF6texsghY6PT.BJQ5LPKg6.', NULL, 0),
(3, 'Fan', 'fan@tufts.edu', '$2y$10$xDPx8n58wUhjkgCdzzBWWOCENCOgcNjbHO0R3HnTQz95gxOeTlw.K', NULL, 0),
(4, 'John Doe', 'example@gmail.com', '$2y$10$RVxjQubzKPxOSG6/tYVYF.v.pbEQK5qDYXqf3bLfSt283o7bTCW16', 'Vegan', 0),
(5, 'BG', 'BG@tufts.edu', '$2y$10$u0fcZxa3b7LI9LQcji78WutxZgudfezTphcBfYMIAZZbj6GtCJRpO', NULL, 0),
(6, 'AB', 'AB@tufts.edu', '$2y$10$22KpPTVowq3zbzrWbkSBXO/E0ShcBbjfcCTyDi0X5PKkMH2drqSgq', NULL, 0),
(7, 'Shannon', 'SHANNON.2003@gmail.com', '$2y$10$IDXe9X4mEaS6fkAp6TTFQOBR.9SWnhvY/bY485UH75ofpkDGFzRE6', NULL, 0),
(8, 'Jane Doe', 'Jane.Doe@gmail.com', '$2y$10$MLMNDElC4jCGGAY4mcMtteG2s0CTLk5963oopjJl/OHQl7bURij.O', NULL, 0),
(9, 'Example Person', 'Example.person@gmail.com', '$2y$10$vc4L83VPJj3Py67EkTl3yubm3py.lZ32Ai/OL58w/ZIf1pMk92pxK', NULL, 0),
(10, 'asd', 'asdasasdasdad@gmail.com', '$2y$10$jYnaQfLb/iVqZ/yqLFZbDOwb7DsgShR1lbD7Oc0osNhizdbff6X4.', NULL, 0),
(11, 'David', 'jstarkdavid03@gmail.com', '$2y$10$qrHddsxPFVa0IE/haOSSHeV/oCXWttCKcGX/11nU4BhpDQUZhPqzS', NULL, 0),
(12, 'David', 'Dabido@gmail.com', '$2y$10$6tGKDVyj/9CsdrCLVU17vOtqC8LHBprAS0KqOAFNj6UKmvhqG9b0a', NULL, 0),
(13, 'Hello', 'google@google.com', '$2y$10$m8RfT7nCn3APu4wbUj3R5u.ztuuxMkDkMEoCbH4lD9TNtxk3iW9Qi', NULL, 0),
(14, 'David', 'Davidsbsbsbsbs@gmail.com', '$2y$10$Df.iYXlC8ueiT9QDNdw3ZeYQus2aP1TEfmLua5jQTTCjG4si4xcFK', NULL, 0),
(15, 'David', 'asdasdasdadfafqweqe@gmail.com', '$2y$10$aNhAscvH0usNNLLBtWIapuDykGYAM1J0ks0CL7mQfng4wtt.5HREK', NULL, 0),
(16, 'Nicole', 'nicole@tufts.edu', '$2y$10$TaAdTtJttxZMvHPHUuSVeu7r6gHL7ckxkaUIdymR1GrzhCciK91m.', NULL, 0),
(17, 'Jack', 'zlgod1972@gmail.com', '$2y$10$9ym6zDGCjF/iWJsz2JAMo.Ocy0ld/A/cSVkoGVbY5/LTC3PkaDt4C', NULL, 0),
(18, 'David', 'jstarkdavid07@gmail.com', '$2y$10$r4vOaD.fh39JzWfxhm19w.GPsP8s6qR8Y41a9mF55sc.f1xgVnRom', NULL, 0),
(19, 'hello', 'site@ground.com', '$2y$10$QFZkso2DD2YO5kUezzwZje.kn4y9Pg7n5GyO1HiNwQCEN.1X28vh.', NULL, 0),
(20, 'Katie Li', 'KatieLi@gmail.com', '$2y$10$ND/M8B8tIHULCpX9SeF4ZOyodsz19xHfKoz3a6dYJsuK60s5bMJVW', NULL, 0),
(21, 'Benson', 'benson@gmail.com', '$2y$10$obgHvf9zN.lI043.DCgf1OJVf3pkaAmt9.DE6zOZV6FdzstQNV8pW', NULL, 0),
(22, 'asdad', 'jstarkdavid0asdsd3@gmail.com', '$2y$10$lo1xGdd22vxZRvLCua3Cw.YzysR4rQ76UL2fs9P6kcnxyr6HqjkNi', NULL, 0),
(23, 'katie li', 'katie.li@tufts.edu', '$2y$10$Nbh1Lln2KThFi1aLE9NBY.CoZ9zYNnMpW3Ah6RF1tecISdKjfjph.', NULL, 0),
(24, 'David', 'David@asdadas.com', '$2y$10$Gz2qbU9AbrxMB.97og8gqu.buwbRiI8baQ/HVVNo2bIFxUsKRA0ZG', NULL, 0),
(25, 'sam', 'sam@sam.sam', '$2y$10$KIx7vq.QFaYD6CpRxLkNUOcL0TtS2EoBYKc8shrA4niQMNegA7VQq', NULL, 2),
(26, 'david', 'david1@tufts.edu', '$2y$10$cyXik2/Uvh3Eha3UY/s1yO7XztgO/xV3cH.zQf5HMNc8t8zDpji3G', NULL, 0),
(27, 'Shannon Chen', 'shannon.chen2003@gmail.com', '$2y$10$7vYIHbv7lh6xEn.uWTSGzOsD1Ra6SS1FxLKECOD7KthXmB1OH34N.', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Friends`
--
ALTER TABLE `Friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User1` (`User1`),
  ADD KEY `User2` (`User2`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Friends`
--
ALTER TABLE `Friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `Friends`
--
ALTER TABLE `Friends`
  ADD CONSTRAINT `Friends_ibfk_1` FOREIGN KEY (`User1`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Friends_ibfk_2` FOREIGN KEY (`User2`) REFERENCES `user` (`id`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
