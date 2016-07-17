<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>35th St. Bistro : Food</title>
<meta name="keywords" content="35th St. Bistro, 35th St. Bistro Seattle, 35th St. Bistro Fremont, Fremont bistro, Fremont restaurant, french restaurant Seattle, Provence restaurant Seattle, french restaurant Fremont, 35 street bistro, 35th street bistro" />
<meta name="description" content="35th St. Bistro in Fremont, Seattle serves exquisitely prepared meals using sustainably grown ingredients." />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1 class="hide">35th St. Bistro : Fremont, Seattle</h1>
<div id="logo-vertical">&nbsp;</div>

<div id="top-photo">
<a href="index.html"><img src="images/img-top-photo-food.jpg" alt="35th St. Bistro" border="0" /></a>
</div>
<!-- #BeginLibraryItem "/Library/header.lbi" --><div id="title-logo"><a href="index.html"><img src="images/img-logo.gif" alt="35th St. Bistro logo" border="0" /></a></div>

<div id="navigation">
	<ul>
	<li id="food"><a href="food.html"><span>food</span></a></li>
	<li id="wine"><a href="wine.html"><span>wine</span></a></li>
	<li id="about"><a href="about.html"><span>about</span></a></li>
	<li id="reviews"><a href="reviews.html"><span>reviews</span></a></li>
	<li id="events"><a href="events.html"><span>events</span></a></li>
	<li id="info"><a href="info.html"><span>info</span></a></li>
	<li id="news"><a href="news.html"><span>newsletter</span></a></li>
	</ul>
</div><!-- #EndLibraryItem --><div id="content">

<p><big>I</big>n many countries, eating is a national pastime, one that regulates the pace of life and expands life's pleasurable moments to an everyday affair; where mealtime is a time of conviviality and friendship; of making acquaintances and discussing the issues of the day. Our menus, both food and wine together, are meant to provide just such a comfortable and pleasurable experience.</p>
<p>We serve fresh, seasonal cuisine dedicated to responsible agriculture and the leisurely pleasures of a simply delicious meal.</p>
<p class="smquote">...the best way to bring people together, and the best way to create caring, compassionate, peaceful communities, is to bring people together around food. - Alice Waters</p>

<!--<div id="copy-image"><img src="images/copy-home.png" alt="" /></div> -->
<h2><img src="images/img-hed-dinnermenu.gif"></h2>
<p class="fineprint">(Menus change frequently)</p>
<ul class="menu">
	<?php 
		 $lines=file('dinner.txt');
		  foreach ($lines as $line) {
			$data[]=explode("\t",$line);
			}
		foreach ($data as $items => $columns) {
			echo "<li>$columns[0] <i>$columns[1]</i><span>$columns[2]<span></li>";
		}
 	?>

</ul>
<h2><img src="images/img-hed-lunchmenu.gif"></h2>
<p class="fineprint">(Menus change frequently)</p>
<ul class="menu">
<li>soup du jour<span>5</span></li>
<li>roasted beet salad arugula, shaved fennel, red onion, anise vinaigrette  <span>6</span></li>
<li>organic greens toasted walnuts, point reyes blue cheese, tarragon vinaigrette<span>7</span></li>
<li>bistro salad trio of lettuces, pancetta, blue cheese dressing<span>8</span></li>
<li>prosciutto and roasted tomato omelette goat cheese, green salad<span>10</span></li>
<li>tuscan steak salad grilled naturally raised beef, baby arugula, olive oil<span>12</span></li>
<li>dungeness crab cake caper brown butter sauce<span>10</span></li>
<li>salade niçoise seared albacore tuna, green beans, cherry tomatoes, niçoise olives, hard boiled egg<span>11</span></li>
<li>poisson du jour preparation changes daily<span>12</span></li>
<li>tarragon chicken salad sandwich potato threads<span>8</span></li>
<li>moules et frites penn cove mussels, thyme, shallots, white wine<span>9</span></li>
<li>pasta del giorno daily pasta<span>9</span></li>
<li>lamb ragoût traditional lamb stew<span>9</span></li>
<li>croque monsieur grilled ham, gruyère cheese<span>8</span></li>
<li>bacon lettuce tomato & avocado sandwich petite salad<span>8</span></li>
<li>toasted brie & walnut on baguette<span>7</span></li>
<li>35th street burger naturally raised beef, tilamook cheddar, tomatoes, onions, bacon, aioli dressing, bistro frites<span>9</span></li>
<li>bistro frites reggiano, garlic oil, chives, crème fraîche<span>5</span></li>
<li>cheese collage artisan cheeses, seasonal accompaniments<span>14</span></li>
<li>&nbsp;</li>
</ul>
<h2><img src="images/img-hed-brunchmenu.gif"></h2>
<p class="fineprint">(Menus change frequently)</p>
<ul class="menu">
<li>eggs benedict country ham, tarragon hollandaise, greens and country potatoes<span>10</span></li>
<li>blueberry pancakes vermont maple syrup, fruit<span>8</span></li>
<li>orange ricotta french toast pear compote, powdered sugar, vermont maple syrup, fruit<span>7</span></li>
<li>fried egg sandwich prosciutto, crisp red onion<span>9</span></li>
<li>wild mushroom omelette Leeks, thyme, gruyere cheese, country potatoes<span>11</span></li>
<li>prosciutto and roasted tomato omelette goat cheese, green salad<span>10</span></li>
<li>pepper bacon or country ham <span>3</span></li>
<li>soup du jour <span>5</span></li>
<li>roasted beet salad arugula, shaved fennel, red onion, anise vinaigrette<span>6</span></li>
<li>organic greens toasted walnuts, point reyes blue cheese, tarragon vinaigrette<span>7</span></li>
<li>bistro salad trio of lettuces, pancetta, blue cheese dressing<span>8</span></li>
<li>tuscan steak salad grilled naturally raised beef, baby arugula, olive oil<span>12</span></li>
<li>dungeness crab cake caper brown butter sauce<span>10</span></li>
<li>salade niçoise seared albacore tuna, green beans, cherry tomatoes, niçoise olives, hard boiled egg<span>11</span></li>
<li>poisson du jour preparation changes daily<span>12</span></li>
<li>tarragon chicken salad sandwich potato threads<span>8</span></li>
<li>moules et frites penn cove mussels, thyme, shallots, white wine<span>9</span></li>
<li>pasta del giorno daily pasta<span>9</span></li>
<li>lamb ragoût traditional lamb stew<span>9</span></li>
<li>croque monsieur grilled ham, gruyère cheese<span>8</span></li>
<li>bacon lettuce tomato & avocado sandwich petite salad<span>8</span></li>
<li>toasted brie, walnut & pear on baguette dijon, leeks<span>7</span></li>
<li>35th street burger naturally raised beef, tilamook cheddar, tomatoes, onions, bacon, aioli dressing, bistro frites<span>9</span></li>
<li>bistro frites reggiano, garlic oil, chives, crème fraîche<span>5</span></li>
<li>cheese collage artisan cheeses, seasonal accompaniments<span>14</span></li>
<li>&nbsp;</li>
</ul>
<h2>Dessert</h2>
<p class="fineprint">(Menus change frequently)</p>
<ul class="menu">

<li>Gateau Victoire - flourless chocolate espresso torte, raspberry sauce<span>6</span></li>
<li>Fruit and Berry Crisp - seasonal fruit, vanilla ice cream<span>6</span></li>
<li>Mocha Crème Brûlée - toffee almond crunch <span>6</span></li>
<li>Tuscan Olive Oil Cake - whipped crème fraiche, grilled figs<span>6</span></li>
<li>Trio of Gelato and Sorbeto<span>6</span></li>  
<li>Cheese Collage - selection of artisan cheeses  <span>14</span></li>
</ul>




<!-- #BeginLibraryItem "/Library/footer.lbi" --><div id="footer"><p>709 N. 35th St., Seattle, WA	· 206.547.9850 · <a href="mailto:contact@35bistro.com" title="Contact 35th St. Bistro">contact@35bistro.com</a><br />© 2005 35th St. Bistro All rights reserved. </p></div><!-- #EndLibraryItem --></div>
</body>
</html>
