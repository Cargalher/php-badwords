<?php 
var_dump($_GET);
$badWord = $_GET['***'];
$quote = "Memories, even your most precious ones, fade surprisingly quickly. But I don’t go along with that. The memories I value most, I don’t ever see them fading.";
$quote_len = strlen($quote);
$quote_clean = str_replace('surprisingly', '***', $quote);
$quote_clean_len = strlen($quote_clean);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-Words</title>
</head>
<body>
    <p>
        <?php echo $quote.$quote_len; ?>
    </p> 
    <p>
        <?php echo $quote_clean.$quote_clean_len; ?> 

    </p>

</p>
</body>
</html>
