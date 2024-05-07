<?php
// Establish a database connection
require_once "includes/dbh.inc.php";  

try {
    $sql = "SELECT bf.fdc_id, f.description FROM branded_food bf JOIN food f ON bf.fdc_id = f.fdc_id";  // Start with a basic SQL query

    // Append a condition if fcd_id is specified in the GET request might make a feature out of this but for now is just error handling
    if (isset($_GET['fdc_id'])) {
        $sql .= " WHERE fdc_id = :fdc_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':fdc_id', $_GET['fdc_id'], PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        // If no specific fcd_id is requested, fetch all(I am using this part)
        $stmt = $pdo->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Some error catching
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQPage</title>
    <link rel="stylesheet" href="includes/FAQ.css">
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
        <div class="FAQHeader">
            <h1>Welcome to the FAQ/FDC_ID Page!</h1>
        </div>
    </header>

    <main>
        <div class="FAQStuff">
            <section id="Questions">
                <h2>Frequently Asked Questions: </h2>
                <ul>
                    <li><p>Q: What are fdc_ids?</p></li>
                    <li><p>A: They are unique identifiers for individual food items located in the database</p></li>
                    <li><p>Q: How does the searching work?</p></li>
                    <li><p>A: The searching works by breaking down individual elements contained within the food item and showcases it to the user. If you want more information please visit the About page.</p></li>
                </ul>
            </section>
        <div class="fdc_SearchResults">
            <form class="searchform" action="search.php" method="post">
                <label for ="search">Test out the FCD_IDs using this:</label>
                <input id="search" type="number" name="usersearch" placeholder="Search...">
                <button>Search</button>
            </form>
        </div>
        <div>
            <section id="FDC">
                <h2><strong>These are all the FDC_ids located in the branded food database from FoodData Central!</strong></h2>
                <ol>
                    <!-- Looping thru each fcd_id item in my database-->
                    <?php if (!empty($results)): ?>
                    <?php foreach ($results as $row): ?>
                        <li><p><strong>FDC_id: <?php echo htmlspecialchars($row["fdc_id"]); ?></strong> - <?php echo htmlspecialchars($row["description"]); ?></p></li>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <li><div><p>NO RESULTS FOUND!!</p></div></li>
                    <?php endif; ?>
                </ol>
            </section>
        </div>
    </main>
    <footer>
        <p><a href="aboutPage.php">About</a> | <a href="FAQPage.php">FAQ/Fdc_ID</a> | <a href="https://fdc.nal.usda.gov">FoodData Central Website</a></p>
    </footer>
</body>
</html>
