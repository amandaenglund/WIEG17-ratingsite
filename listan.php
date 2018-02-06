<?php
require "./header.php";



require "./functions.php";
require "./data.php";

// lista($songs);
listan($songArray);



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