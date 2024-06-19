<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Pokémon Games" ;
    $description = "This site is intended to teach you about Pokémon games over the years" ;
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
    <h1>Games</h1>
    <table id="table3" class="table-styling">
        <caption>Games released by year</caption>
        <thead>
            <tr>
                <th scope="col">GAME NAME</th>
                <th scope="col">YEAR RELEASED</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Red and Blue</td>
                <td>1996</td>
            </tr>
            <tr>
                <td>Yellow</td>
                <td>1998</td>
            </tr>
            <tr>
                <td>Gold and Silver</td>
                <td>1999</td>
            </tr>
            <tr>
                <td>Crystal</td>
                <td>2000</td>
            </tr>
            <tr>
                <td>Ruby and Sapphire</td>
                <td>2002</td>
            </tr>
            <tr>
                <td>FireRed and LeafGreen Emerald</td>
                <td>2004</td>
            </tr>
            <tr>
                <td>Diamond and Pearl</td>
                <td>2006</td>
            </tr>
            <tr>
                <td>Platinum</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>HeartGold and SoulSilver</td>
                <td>2009</td>
            </tr>
            <tr>
                <td>Black and White</td>
                <td>2010</td>
            </tr>
            <tr>
                <td>Black and White 2</td>
                <td>2012</td>
            </tr>
            <tr>
                <td>X and Y</td>
                <td>2013</td>
            </tr>
            <tr>
                <td>Omega Ruby and Alpha Sapphire</td>
                <td>2014</td>
            </tr>
            <tr>
                <td>Sun and Moon</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>Ultra Sun and Ultra Moon</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>Let's Go, Pikachu!</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Let's Go, Eevee!</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Sword and Shield</td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Brilliant Diamond and Shining Pearl</td>
                <td>2021</td>
            </tr>
            <tr>
                <td>Legends: Arceus</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>Scarlet and Violet</td>
                <td>2022</td>
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