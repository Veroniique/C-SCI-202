<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Snorlax" ;
    $description = "This site is intended to show you Veronique's favorite Pokémon" ;
    $author = "Author of this page is Veronique Fick" ;
    $mainheading = "Pokémon Index";
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
    <div class="grid-container">
    <div class="left-sidebar">
    </div>
    <div class="main-content">
        <h1>My Favorite Pokémon</h1>
            <h3>Snorlax</h3>
        <p>Snorlax is my favorite Pokémon of all time! He's my favorite because he's always sleepy and can
            sleep anywhere in the world. From mountains, foresets and urban areas. Wish I had the ability
            to sleep anywhere like him. Unfortanetly my sleeping schedule is terrible and I only need a 
            couple hours to get me through the day. I do regret staying up late most nights. Snorlax is 
            very sweet and friendly, but don't take his friendliness for granted! He will help defend his 
            loved ones with all his strength.</p>

        <p>Here are some random facts about Snorlax
        <ol>
            <li>Sleepiest Pokémon you will ever meet! Number 132 in the Pokdéx</li>
            <li>Height: 6'11 and Weight: 1014.1lbs</li>
            <li>Usually found sleeping on its back, no matter the environment</li>
            <li>Known for eating almost anything</li>
            <li>Snorlax is a 'Normal' type Pokémon, doesn't have any weaknesses.</li>
        </ol>
        <picture>
            <source media="(min-width: 60em)" srcset="images/sleepysnorlax.jpg" >
            <source media="(min-width: 40em)" srcset="images/sleepysnorlax.jpg" >
            <source media="(min-width: 20em)" srcset="images/sleepsnorlax.jpg" >
            <img src="smiley_medium.png" alt="Sleepy snorlax in its natural habitat">
            </picture>
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>