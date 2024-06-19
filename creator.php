<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Creator" ;
    $description = "This site is intended to create your own Pokémon that you want to add in the game" ;
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
    <!--Pokemon Creator Form-->
    <h1>Pokémon Creator</h1>
    <p>Create your own Pokémon today! Give it a name, describe the strengths, add its weakness, its evolution, type and a little 
        description for what your Pokémon can do and anythign extra you feel like adding! Submit your responses below</p>

    <form class="form-container">
    <label>Pokémon Name</label>
        <input type="text" name="pname" required>

    <label>Strengths</label>
        <input type="text" name="strengths">

    <label>Weakness</label>
        <input type="text" name="weakness">

    <label>Will your Pokémon evolve?</label>
        <?php if(isset($_POST['evolution'])) ?>
        <input type="radio" name="evolution" value="yes" required>Yes <br>
        <input type="radio" name="evolution" value="no">No <br>

        <label>Choose your type:</label>
    <select name="p_type">
        <?php
          $p_types = array('Normal', 'Fire', 'Water', 'Grass', 'Electric', 'Ice', 'Fighting', 'Poison', 'Ground', 'Flying', 'Psychic', 'Bug', 'Rock', 'Ghost', 'Dark', 'Dragon', 'Steel', 'Fairy');
          foreach($p_types as $types) {
              echo "<option value =".strtolower($types).">$types</option>";
          }  
        ?>
    </select>
    <br><br>

    <label>Describe your Pokémon</label>
        <textarea rows="4"></textarea>
          <br>
    <?php if(isset($_POST['submit'])) ?>
        <input type="submit" value="Gotta submit them all!">
    </form>
    </div>
    <div class="right-sidebar"></div>
    </div>
<footer>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>