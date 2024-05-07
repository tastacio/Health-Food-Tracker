<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Health Tracker About Us</title>
    <link rel="stylesheet" href="includes/AboutUs.css">
</head>
<body>
    <header>
        <!-- Same nav from homepage(Will copy this for other pages)-->
        <nav class="homepage-Navbar">
            <div class="logo"><a href="index.php">FoodData Central Health/Food Tracker</a></div>
            <nav>
                <ul>
                    <li><a href="aboutPage.php" target="_blank">About</a></li>
                    <li><a href="FAQPage.php" target="_blank">FAQ/Fcd_Id</a></li>
                </ul>
            </nav>
        </nav>
        <!-- Most hero elements are just titles for various pages-->
        <div class=aboutHero>
            <h1>Features</h1>
            <p>Our website offers comprehensive food nutrition data, empowering you to make healthier dietary choices.</p>
        </div>
    </header>
    <main>
        <!-- Seperate boxes/sections to show user the various features within this project-->
        <div class="features">
        <h2>Explore features like:</h2>
            <section id="FoodSearchAbout">
                <h2><strong>Food Search!</strong></h2>
                <p>This feature allows you:</p>
                <ul>
                    <li>Access detailed information on a wide range of branded foods.</li>
                    <li>Allows you to search for an individual item using <strong>fcd_id</strong> or <strong>gtin_upc</strong></li>
                    <li>Enables you to search up multiple items using <strong>keywords</strong> so search to your hearts content!</li>
                </ul>
            </section>
            <section id="NutrientAbout">
                <h2>Nutrient Breakdown!</h2>
                <p>Monitor your daily nutrient intake with precision.</p>
                <ul>
                    <li>Access Information like what <strong>brand</strong> or <strong>company</strong> owns the specfied item as well as where you can buy it!</li>
                    <li>See all the ingredients needed to make the item!</li>
                    <li>See all the nutrient data that comes with the item such as protein, serving size, etc</li>
                </ul>
            </section>
            <section id="MobileAbout">
                <h2>Mobile Fuctionality!</h2>
                <p>Monitor your daily nutrient intake on the GO!</p>
                <ul>
                    <li>Access Information like what <strong>brand</strong> or <strong>company</strong> on your very own mobile device!</li>
                    <li>scales down elements to ensure easier readability</li>
                    <li>Ensures the user can use all available features on their own mobile device</li>
                </ul>
            </section>
        </div>
        <div class="DataSourceBackground">
            <section id ="DataSource">
                <h2><strong>Data Source</strong></h2>
                <p>All nutritional information provided on this site is sourced from the <a href="https://fdc.nal.usda.gov/" target="_blank">FoodData Central</a> database, an integrated data system that provides expanded nutrient profile data and links to related agricultural research.</p>
                <p>This is the proper citation for FoodData Central U.S. Department of Agriculture, Agricultural Research Service, Beltsville Human Nutrition Research Center. FoodData Central. [cited (5/3/2024)]. Available from https://fdc.nal.usda.gov/.</p>
            </section>
        </div>
    </main>
    <footer>
        <p><a href="aboutPage.php">About</a> | <a href="FAQPage.php">FAQ/Fdc_ID</a> | <a href="https://fdc.nal.usda.gov">FoodData Central Website</a></p>
    </footer>
</body>
</html>
