<a href="/">Index</a>
<br><br>
<form method="post">
    <input type="" name="paragraph">
    <button type="submit">Submit Paragraph</button>
</form>

<?php
if (isset($_POST['paragraph'])) {
    preg_match_all("/[a-z’]+/", strtolower($_POST['paragraph']), $words);

    own($words);
    reference($words[0]);

}

function own($words)
{
    $list = array();
    $longestword = "";
    foreach ($words[0] as $word) {
        if (strlen($word) > strlen($longestword)) {
            $longestword = $word;
        }
        if (isset($list[$word])) {
            $list[$word]++;
        } else {
            $list[$word] = 1;
        }
    }
    echo array_search(max($list), $list) . ' ' . $longestword . '.<br>';
    return;
}

function reference($arr)
{
    $arr2 = array_count_values($arr);
    $word1 = array_search(max($arr2), $arr2);
    $word2 = '';
    foreach ($arr as $s) {
        if (strlen($s) > strlen($word2)) {
            $word2 = $s;
        }
    }
    printf("%s %s\n", $word1, $word2);
}
