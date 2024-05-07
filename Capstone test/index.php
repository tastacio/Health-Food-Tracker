<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodData Central Health Tracker</title>
    <link rel="stylesheet" href="includes/homepage.css">
</head>
<body>
    <header>
        <nav class="homepage-Navbar">
            <div class="logo"><a href="index.php">FoodData Central Health/Food Tracker</a></div>
            <nav>
                <ul>
                    <li><a href="aboutPage.php" target="_blank">About</a></li>
                    <li><a href="FAQPage.php" target="_blank">FAQ/Fcd_Id</a></li>
                </ul>
            </nav>
        </nav>
        <div class="hero">
            <h1>Track Your Food, Manage Your Health</h1>
            <p>Using Data directly from FoodData Central so you can track your food accurately!</p>
            <!-- Setting up the two search bars -->
            <div class="searchBars">
                <form class="searchform" action="search.php" method="post">
                    <label for ="search">Search using the FCD_ID:</label>
                    <input id="search" type="number" name="usersearch" placeholder="Search...">
                    <button>Search</button>
                </form>

                <form class="searchform2" action="search.php" method="post">
                    <label for ="search">Search using name of the food item:</label>
                    <input id="search" type="text" name="usersearch" placeholder="Search...">
                    <button>Search</button>
                </form>
            </div>
        </div> 
    </header>

    <main>
        <div class="resourceBackground">
            <section id="resources">
                <h2>Educational Resources To Help You Get Started On Your Healthy Eating Journey!</h2>
                <p>Explore some guides and articles about nurtional facts as well as dietary guidelines about healthy eating:</p>
                <ul>
                    <li><a href="https://www.helpguide.org/articles/healthy-eating/healthy-eating.htm">Nutrional Facts guide</a></li>
                    <li><a href="https://www.fda.gov/food/nutrition-facts-label/how-understand-and-use-nutrition-facts-label">Healthy Eating Guide</a></li>
                    <li><a href="https://health.gov/our-work/nutrition-physical-activity/dietary-guidelines">Dietary Guidelines</a></li>
                </ul>
            </section>
        </div>
        <div class =creditsBackground>
            <section id="credits">
                <h2>FoodData Central Credits</h2>
                <p>This site uses sourced data located at FoodData Central, which is an essential dietary database.</p>
                <ul>
                    <li>This data breaks down what goes into your everyday meals!</li>
                    <li>This data showcases many types of food brands that you may be familar with!</li>
                    <li>If you wish to find the fcd_id documentation please click the button below</li>
                <ul>
                <button onclick="window.location='FAQPage.php'">Cick here to learn more about fcd_ids!</button>
            </section>
        </div>
    </main>

    <footer>
        <p><a href="aboutPage.php">About</a> | <a href="FAQPage.php">FAQ/Fdc_ID</a> | <a href="https://fdc.nal.usda.gov">FoodData Central Website</a></p>
    </footer>

</body>
</html>