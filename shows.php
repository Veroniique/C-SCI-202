<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Pokémon Shows" ;
    $description = "This site is intended to teach you about the different Pokémon shows over the years" ;
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
    <h1>Shows</h1>
    <table id="table2" class="table-styling">
        <caption>Shows released by year</caption>
        <thead>
            <tr>
                <th scope="col">SHOW NAME</th>
                <th scope="col">YEAR RELEASED</th>
            </tr>
        </thead>    
        <tbody>
            <tr>
                <td>Indigo League</td>
                <td>1997 - 1999</td>
            </tr>
            <tr>
                <td>Adventures in the Orange Islands</td>
                <td>1999</td>
            </tr>
            <tr>
                <td>The Johto Journeys</td>
                <td>1999 - 2000</td>
            </tr>
            <tr>
                <td>Jotho League Champions</td>
                <td>2000 - 2001</td>
            </tr>
            <tr>
                <td>Master Quest</td>
                <td>2001 - 2002</td>
            </tr>
            <tr>
                <td>Advanced</td>
                <td>2002 - 2003 </td>
            </tr>
            <tr>
                <td>Advanced Challenge</td>
                <td>2003 - 2004</td>
            </tr>
            <tr>
                <td>Advanced Battle</td>
                <td>2004 - 2005</td>
            </tr>
            <tr>
                <td>Battle Frontier</td>
                <td>2005 - 2006</td>
            </tr>
            <tr>
                <td>Diamond and Pearl</td>
                <td>2006 - 2007</td>
            </tr>
            <tr>
                <td>Diamond and Pearl: Battle Dimension</td>
                <td>2007 - 2008</td>
            </tr>
            <tr>
                <td>Diamond and Pearl: Galatic Battles</td>
                <td>2008 - 2009</td>
            </tr>
            <tr>
                <td>Diamond and Pearl: Sinnoh League Victors</td>
                <td>2010</td>
            </tr>
            <tr>
                <td>Black and White</td>
                <td>2010 - 2011</td>
            </tr>
            <tr>
                <td>Black and White: Rival Destinies</td>
                <td>2011 - 2012</td>
            </tr>
            <tr>
                <td>Black and White: Adventures in Unova and Beyond</td>
                <td>2012 - 2013</td>
            </tr>
            <tr>
                <td>XY</td>
                <td>2013 - 2014</td>
            </tr>
            <tr>
                <td>XY: Kalos Quest</td>
                <td>2014 - 2015</td>
            </tr>
            <tr>
                <td>XYZ</td>
                <td>2015 - 2016</td>
            </tr>
            <tr>
                <td>Sun & Moon</td>
                <td>2016 - 2017</td>
            </tr>
            <tr>
                <td>Sun & Moon: Ultra Adventures</td>
                <td>2017 - 2018</td>
            </tr>
            <tr>
                <td>Sun & Moon: Ultra Legends</td>
                <td>2018 - 2019</td>
            </tr>
            <tr>
                <td>Journeys</td>
                <td>2019 - 2020</td>
            </tr>
            <tr>
                <td>Master Journeys</td>
                <td>2020 - 2021</td>
            </tr>
            <tr>
                <td>Ultimate Journeys</td>
                <td>2021 - 2023</td>
            </tr>
            <tr>
                <td>Horizon</td>
                <td>2023 - TBA</td>
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