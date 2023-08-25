<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Strings</title>
</head>

<body>
    <h1>hello world..!</h1><br>
    <p>Return the length of the string</p>

    <?php
    echo strlen('hello  world..!');
    ?> <br>
    <p>Count the number of word in the string</p>
    <?php
    echo str_word_count("<h1></h1>"); // outputs 2
    ?>
    <p>Reverse the string</p>
    <?php
    echo strrev("hello  world..!"); // outputs !dlrow olleH
    ?>
    <p>Search for the text "world" in the string </p>
    <?php
    echo strpos("Hello world!", "world"); // outputs 6
    ?>
    <p>Replace the text "world" with "Dolly"</p>
    <?php
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    ?>


</body>

</html>