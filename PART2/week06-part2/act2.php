<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'];
    $sortingOrder = $_POST['sorting_order']; 
    $displayLimit = $_POST['display_limit'];

    $words = str_word_count(strtolower($inputText), 1);

    $stopWords = ["a", "an", "and", "but", "by", "in", "it", "is", "my", "of", "on", "them", "then", "this", "the", "so",];
    $filteredWords = array_diff($words, $stopWords);
        
    $wordFrequencies = array_count_values($filteredWords);
    if ($sortingOrder === 'ascending') {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }
    $limitedWordFrequencies = array_slice($wordFrequencies, 0, $displayLimit);

    if ($sortingOrder === 'ascending') {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }


    foreach ($limitedWordFrequencies as $word => $frequency) {
        echo "$word: $frequency<br>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Counter</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h1>Word Frequency Counter</h1>
    
    <form action="process.php" method="post">
        <label for="text">Paste your text here:</label><br>
        <textarea id="text" name="text" rows="10" cols="50" required></textarea><br><br>
        
        <label for="sort">Sort by frequency:</label>
        <select id="sort" name="sort">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select><br><br>
        
        <label for="limit">Number of words to display:</label>
        <input type="number" id="limit" name="limit" value="10" min="1"><br><br>
        
        <input type="submit" value="Calculate Word Frequency">
    </form>
</body>
</html>