<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Pokémon Index" ;
    $description = "This site is intended to teach you about the world of Pokémon" ;
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

    <!-- Your HTML for the main content of the page will go here. -->
    <h1>Welcome Trainer!</h1>
    <h2>Introduction</h2>

    <p>Welcome to the world of Pokémon, where adventure awaits and friendships are forged! 
        This is your one way ticket for all things Pokémon related where you'll learn more
        about characters, regions, shows, games and Pokémon types. Whether you're an expert 
        trainer or a curious newbie, hop along for a ride full of adventure!</p>
    <p>Dive into our character profiles and unravel their exciting stories. Explore what all
        our regions has to offer. From the iconic Kanto to the enchanting Alola region.
        We have the latest scoop on the animated shows and games that bring these lovable 
        creatures to life.</p>
    <p>Join our subscriber list below to stay up to date with the hottest Pokémon news, 
        upcoming game and show releases. You'll be the first to know about new content drops 
        and receive insider information straight to your inbox.</p>
    <p>Now grab your Pokédex and join us for a wild adventure in the Pokémon universe while we catch 
        them all and create awesome memories that will last a lifetime!</p>

    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/pokeball.png" 
        alt="Pokéball that is used to capture Pokémon. Has the colors: black, red and white">
        
    <!--Subscriber form-->
    <h2>Subscribe For Epic Adventures and Exclusive Updates</h2>
        <h3>Don't be like Snorlax and sleep on this amazing deal!</h3>

    <form class="form-container">
    <label>First Name</label>
        <input type="text" name="fname" required>

    <label>Last Name</label>
        <input type="text" name="lname">

    <label>Email Adress</label>
        <input type="text" name="email_sub">

    <label>Rate your trainer level</label>
        <?php if(isset($_POST['experience'])) ?>
        <input type="radio" name="experience" value="ex_newbie" required>Newbie <br>
        <input type="radio" name="experience" value="ex_junior">Junior <br>
        <input type="radio" name="experience" value="ex_elite">Elite <br>
        <input type="radio" name="experience" value="ex_master">Master <br>

    <?php if(isset($_POST['submit'])) ?>
        <input type="submit" value="Gotta submit them all!">
    </form>
    
    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/snorlax.png" 
        alt="A sleepy blue giant Pokémon called Snorlax that has claws and sharp tiny teeth but very friendly">
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>