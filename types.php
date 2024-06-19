<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Pokémon Types" ;
    $description = "This site is intended to teach you about the different Pokémon that you can encounter" ;
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

    <h1>Types</h1>
        <p>Here are the 18 different Pokémon types that you will come across in the movies/shows and games. To this day new Pokémons
            get released throughout the years</p>
    <h3>Normal</h3>
        <p>No strengths or weakness known. Immune to Ghost type moves, but in danger of Fighting types.</p>
    <h3>Fire</h3>
        <p>Advantage to Grass, Bug, Ice and Steel. Weakneass include Water, Rock and Ground types.</p>
    <h3>Water</h3>
        <p>Strongest against Fire, Rock and Ground types. Weak to Electric and Grass types.</p>
    <h3>Grass</h3>
        <p>Advantage to Water, Ground, Rock. Weak to Fire, Ice, Poison, Flying and Bug types.</p>
    <h3>Electric</h3>
        <p>Strong against Water and Flying types. Weak to Ground types.</p>
    <h3>Ice</h3>
        <p>Advantage to Grass, Ground, Flying and Dragon types. Weak to Fire, Fighting, Rock and Steel types.</p>
    <h3>Fighting</h3>
        <p>Strong against Normal, Rock, Ice, Dark and Steel Types. Weak to Flying, Psychic and Fairy types.</p>
    <h3>Poison</h3>
        <p>Advantage against Grass and Fairy types. Weak to Ground and Psychic types.</p>
    <h3>Ground</h3>
        <p>Strong against Electric, Rock, ice, Dark and Steel types. Weak to Water, Grass and Ice types. Immune to Electric attacks.</p>
    <h3>Flying</h3>
        <p>Advantage against Grass, Bug and Fighting types. Weak to Electric, Ice and Rock types.</p>
    <h3>Psychic</h3>
        <p>Strong against Fighting and Poison types. Weak to Bug, Ghost and Dark types.</p>
    <h3>Bug</h3>
        <p>Advantage against Grass, Psychic and Dark types. Weak to Fire, Flying and Rock types.</p>
    <h3>Rock</h3>
        <p>Strong against Fire, Ice, Flying and Bug types. Weak to Water, Grass, Fighting, Ground, Steel and Fairy types.</p>
    <h3>Ghost</h3>
        <p>Advantage against Psychic and Ghost types. Immune to Normal and Fighting type moves. Weak to Dark type attacks.</p>
    <h3>Dark</h3>
        <p>Strong against Psychic and Ghost types. Weak to Fighting, Bug and Fairy types.</p>
    <h3>Dragon</h3>
        <p>Advantage against Dragon types. Weak to Ice, Fairy and Dragon types.</p>
    <h3>Steel</h3>
        <p>Advantage against Ice, Rock and Fairy types. Weak to Fire, Fighting and Ground types.</p>
    <h3>Fairy</h3>
        <p>Strong against Fighting, Dragon and Dark types. Weak to Poison and Steel types. Immune to Dragon type moves.</p>
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>