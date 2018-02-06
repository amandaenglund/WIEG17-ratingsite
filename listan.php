<?php
require "./header.php";


$songs = array("8. Imse vimse spindel", "6. Björnen sover", "7. Prästens lilla kråka", "9. Gullefjun", "10. När lillan kom till jorden", "10. Är du vaken Lars?", "2. Vi komma ifrån ria ra askedaskeda", "3. Hipp hurra, för här kommer bumbibjönarna", "4. Lille Katt", "7. Idas sommarvisa");
rsort($songs);

require "./functions.php";

lista($songs);




?>

<form method="GET" action="lyrics.php">
    <select name="song">
        <option value="gullefjun">Gullefjun</option>
        <option value="imse">Imse vimse spindel</option>
        <option value="prasten">Prästens lilla kråka</option>
        <option value="ida">Idas sommarvisa</option>
        <option value="bjornen">Björnen sover</option>
        <option value="lille">Lille Katt</option>
        <option value="hipp">Hipp hurra, för här kommer bumbibjönarna</option>
        <option value="vi">Vi komma ifrån ria ra askedaskeda</option>
        <option value="ar">Är du vaken Lars?</option>
        <option value="nar">När lillan kom till jorden</option>
    </select>
    <button type="submit">Till text</button>
<form>

<?php
require "./footer.php";
?>