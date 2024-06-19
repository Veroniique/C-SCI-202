<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Pokémon Movies" ;
    $description = "This site is intended to teach you about the different Pokémon movies over the years" ;
    $author = "Author of this page is Veronique Fick" ;
    $mainheading = "Pokémon Index" ;
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
    <div class="grid-container">
    <div class="left-sidebar">
    </div>
    <div class="main-content">
    <h1>Movies</h1>
    <table id="table1" class="table-styling">
        <caption>Movies released by year</caption>
        <thead>
            <tr>
                <th scope="col">MOVIE NAME</th>
                <th scope="col">YEAR RELEASED</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mewtwo Strikes Back</td>
                <td>1998</td>
            </tr>
            <tr>
                <td>Celebi - Voice of the Forest</td>
                <td>2001</td>
            </tr>
            <tr>
                <td>Spell of the Unknown</td>
                <td>2000</td>
            </tr>
            <tr>
                <td>Pokémon the Movie</td>
                <td>2000</td>
            </tr>
            <tr>
                <td>Pokémon Heroes</td>
                <td>2002</td>
            </tr>
            <tr>
                <td>Jirachi - Wish Maker</td>
                <td>2003</td>
            </tr>
            <tr>
                <td>Destiny Deoxys</td>
                <td>2004</td>
            </tr>
            <tr>
                <td>Lucario and the Mystery of Mew</td>
                <td>2005</td>
            </tr>
            <tr>
                <td>Ranger and the Temple of the Sea</td>
                <td>2006</td>
            </tr>
            <tr>
                <td>The Rise of Dakrai</td>
                <td>2007</td>
            </tr>
            <tr>
                <td>Giratina and the Sky Warrior</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>Arceus and the Jewel of Life</td>
                <td>2009</td>
            </tr>
            <tr>
                <td>Zoroark: Master of Illusions</td>
                <td>2010</td>
            </tr>
            <tr>
                <td>White - Victini and Zekrom</td>
                <td>2011</td>
            </tr>
            <tr>
                <td>Black - Victini and Reshiram</td>
                <td>2011</td>
            </tr>
            <tr>
                <td>Kyurem vs. the Sword of Justice</td>
                <td>2012</td>
            </tr>
            <tr>
                <td>Genesect and the Legend Awakened</td>
                <td>2013</td>
            </tr>
            <tr>
                <td>Diancie and the Cocoon of Destruction </td>
                <td>2014</td>
            </tr>
            <tr>
                <td>Hoopa and the Clash of Ages</td>
                <td>2015</td>
            </tr>
            <tr>
                <td>Volcanion and the Mechnical Marvel</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>I Choose you!</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>The Power of Us</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Mewtwo Strikes Back - Evolution</td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Detective Pikachu</td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Secrets of the Jungle</td>
                <td>2020</td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>