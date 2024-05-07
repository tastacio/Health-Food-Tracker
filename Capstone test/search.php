<?php
// If the server is receiving a POST request from the search bar
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userSearch = $_POST["usersearch"];
    $keyword = "%{$userSearch}%";
    
    try {
        // Using the PHP file which establishes the database connection
        require_once "includes/dbh.inc.php";
        
        // Setting up the query to grab elements we will use on this page
        $query = "SELECT DISTINCT bf.*, f.description
                  FROM branded_food AS bf
                  LEFT JOIN food AS f ON bf.fdc_id = f.fdc_id 
                  WHERE bf.fdc_id = :usersearch OR bf.gtin_upc = :usersearch OR f.description LIKE :keyword";
        
        // Prepare the query
        $stmt = $pdo->prepare($query);
        
        // Bind the values from HTML to PHP
        $stmt->bindParam(":usersearch", $userSearch);
        $stmt->bindParam(":keyword", $keyword);
        
        // Execute the query
        $stmt->execute();
        
        // Fetch results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Close the database connection
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    // If none of the code above works, redirect the user to the homepage
    header("Location: ../index.php");
    exit;
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="includes/Search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="searchResultsHeader">
            <h1>Search Results: </h1>
        </div>
    </header>

    <main>
        <div class="SearchResults">
            <section id="brandAttributes">
                <h2>This shows brand information:</h2>
                <ul>
                    <?php if(empty($results)): ?>
                        <li><div><p>NO RESULTS FOUND!!</p></div></li>
                    <?php else: ?>
                        <?php foreach ($results as $row): ?>
                            <li><p><strong>Brand Owner: <?php echo htmlspecialchars($row["brand_owner"]); ?></strong></p></li>
                            <li><p><strong>Branded Food Category: <?php echo htmlspecialchars($row["branded_food_category"]); ?></strong></p></li>
                            <li><p><strong>Market Country: <?php echo htmlspecialchars($row["market_country"]); ?></strong></p></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </section>
            <section id="NutrientData"> 
                <h2>This shows Nutrient Data:</h2>
                <ul>
                    <?php if(empty($results)): ?>
                        <li><div><p>NO RESULTS FOUND!!</p></div></li>
                    <?php else: ?>
                        <?php foreach ($results as $row): ?>
                            <li><p><strong>Ingredients: <?php echo htmlspecialchars($row["ingredients"]); ?></strong></p></li>
                            <li><p><strong>Serving Size: <?php echo htmlspecialchars($row["serving_size"]); ?> <?php echo htmlspecialchars($row["serving_size_unit"]); ?></strong></p></li>
                            <li><p><strong>Description: <?php echo htmlspecialchars($row["description"]); ?></strong></p></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </section>
        </div>
    </main>
    <footer>
        <p><a href="aboutPage.php">About</a> | <a href="FAQPage.php">FAQ/Fdc_ID</a> | <a href="https://fdc.nal.usda.gov">FoodData Central Website</a></p>
    </footer>
</body>
</html>