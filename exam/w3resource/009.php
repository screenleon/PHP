    <form method="post">
        <h2>Please input your name:</h2>
        <input type="text" name="word">
        <button type="submit">Submit Word</button>
    </form>
    <?php
    if (isset($_POST['word'])) {
        $answer = preg_replace('/(\b[a-z])/i', '<span style="color: green;">\1</span>', $_POST['word']);
        echo $answer;
        echo "<br>";
        preg_match_all('/[a-z]+/i', $_POST['word'], $words);
        foreach ($words[0] as $word) {
            echo '<span style="color: red;">' . $word[0] . '</span>' . substr($word, 1);
        }
    }
    ?>