<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Pokémon Characters" ;
    $description = "This site is intended to teach you about the main characters in Pokémon" ;
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
    <h1>Characters</h1>
        <p>This page will describe all the main characters from Pokémon and give you a little more insight about their personalities</p>
    <h2>Ash Ketchum and Pikachu</h2>
        <p>Ash is the main character of Pokémon. He dreams of becoming a Pokémon Master. Pikachu is his Pokémon and together they travel through all the regions to fight battles. 
            Ash is determined and adventurous. Pikachu is loyal and stays by his side all the time. He's an electric type and very fierce. He loves to sits on Ash's shoulders.</p>
    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/pikachuash.png" 
        alt="Pikachu is a Pokémon and he belongs to Ash Ketchum. He is yellow with red cheeks and has an electric tail">

    <h2>Misty and Togepi</h2>
        <p>One of Ash's first friends. Misty is feisty and spirited. Togepi is her Pokémon and a fairy type. She wants to become a Water Pokémon Master. Togepi can be shy and often
            hides its eggshell. Misty and Togepi both joined Ash on his adventures.</p>
    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/mistytogepi.jpg" 
        alt="Togepi is Misty's Pokémon and is a fairy type.Misty is very smiley and a friend of Ash">

    <h2>Brock</h2>
        <p>Mainly battles with rock Pokémon. He is kind, wise and puts others needs before himself. One of the tallest main characters. Became a Pokémon breeder and doctor
            after his plans fell through to become a Pokémon Master, as he had to take care of his family.</p>
    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/brock.jpg" 
        alt="A friend of Ash and Misty. He is a gym leader for Kanto region">

    <h2>Professor Oak</h2>
        <p>A well known researcher that studies Pokémon, usually seen in his white lab coat. Always carrying a Pokédex with him that shows information
            of all Pokémon he has worked with. Professor Oak is kind and caring and wants the best for all the trainers. He is the one that gives each
            trainer their first Pokémon.</p>
    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/professoroak.png" 
        alt="Pokémon reasearcher. Helps healing process of Pokémon. Good friends with Ash, Brock and  Misty">

    <h2>Team Rocket</h2>
    <h3>Jessie, James and Meowth</h3>
        <p>Team Rocket are the bad guys of the show that consists of a trio that includes Jessie, James and their talking cat, Meowth. Jessie is fierce with red hair, and very 
            determined to steal other Pokémons. James is a very comical character with an amazing fashion style. Meowth is the only Pokémon in the series that can speak fluently
            human language.</p>
    <img src="https://chelan.highline.edu/~Veronique/csci202/project/images/teamrocket.png" 
        alt="Jessie, James and Meowth belong to Team Rocket. They are the bad guys">
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>