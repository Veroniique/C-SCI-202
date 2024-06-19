<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "PokémonGO" ;
    $description = "This site is intended to teach you how to play the popular PokémonGO game" ;
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
        <h1>PokémonGO</h1>
        <h3>What is it?</h3>
            <p>PokémonGO is a popular mobile game that was released in July 2016 by Niantic. 
                Combines the virtual world with the real world where players can catch
                Pokémon, fight battles, take over gyms, visit Pokéstops, hatch eggs and meet new friends! GPS is used
                at all times to keep track of your surroundings and give you the Pokémon world right on
                your phone as you're moving around.</p>

        <h3>How do I start?</h3>
            <p>In order to play the game you have to download the PokémonGO app on your device. Create a Niantic account or sign in with your Google account.
                After account creation you will set up your character profile. And you will pick between 3 teams: Red(Valor), Blue(Mystic) and Yellow(Instinct). 
                You will also be able to choose between 3 Pokémon as your first catch.
                You then have the option to set it as your Buddy who will follow you around on an awesome journey. 
                Your Buddy will generate candy every 1-20kms that you walk, depending on type.</p>

        <h3>Purpose</h3>
            <p>The purpose of the game is to allow users to interact with the real world by catching Pokémons in the virtual world. This game involves 
                phyiscal activity that includes walking. Make sure you are safe at all times while playing PokémonGO. You will meet other trainers in
                the real and virtual world to help you succeed on your journey. Catch Pokémons, power them up and evolve them! Test out their awesome
                skills by battling in gyms, against leaders or your friends to see how powerful your Pokémon has become. Need company? Use a walking 
                buddy by selecting one of your Pokémons to help you through challenges and gain experience. Make friends, send gifts explore new places.
                PokemonGO will not only keep you active, but social with all the new friends you'll make. It's a great way to see new parts of an area or
                explore a place you've already seen before.

        <h3>Key Terms</h3>
            <ul>
                <li>Catching Pokémon - Click the Pokémon you want to catch. Hold your finger on the Pokéball, spin it, and throw it towards the Pokémon
                    you're trying to capture. </li>
                <li>Fighting Battles - Enter the battle. To attack your opponent, tap on their Pokémon and keep going until they get knocked out.</li>
                <li>Gyms - There are 3 Gyms: Red(Valor), Blue(Mystic) and Yellow(Instinct). You can add your Pokémon to a gym, but only to your team color. 
                    Max of 6 Pokémons per gym, but only 1 per person. You can get up to 50 Pokécoins per day in a gym. Gyms can be taken over at any time 
                    of the day.</li>
                <li>Pokéstops - These are crucial in the game to gain new items. Here you can spin a Pokéstop at local attractions around the area you're in. 
                    You will find stardust, pokéballs, stickers, gifts, revivers, eggs and experience points. You can spin a Pokéstop every 5 minutes.</li>
                <li>Leveling Up - To level up in the game you need to gain experience. You can gain experience points in multiple ways through battling friends,
                    trading battling gyms, battling leaders, opening gifts, sending gifts, spinning pokestops, using lures, catching pokemon, doing challenges 
                    with your buddy, transfering Pokémon and evolving Pokémon.</li>
                <li>Hatching Eggs - You can hatch 9 eggs at a time. There are a 2km, 5km, 7km, 10km and 12km eggs. The higher the egg the more value your Pokémon has. 
                    To hatch your egg you have to walk the distance until it hatches, it gives experience when it hatches. To obtain more eggs you have to spin Pokéstops.</li>
                <li>Adding Friends - You can add friends to the game by using their trainer code. You will find your trainer code under your profile. There's also an 
                    option to use a QR code when adding friends.</li> 
                <li>Stardust - Stardust is used to power up or evolve your Pokémon. You can gain stardust by completing challenge, opening gifts or spinning Pokéstops.</li>
                <li>Pokécoins - Coins can be obtained by having your Pokémon in a gym for a couple hours. With coins you can buy item space, Pokémon space, potions, 
                    balls and apparel for your character.</li>
            </ul>
        <p>Have fun Trainer! And remember, please be safe out there in the Pokémon world!</p>
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>