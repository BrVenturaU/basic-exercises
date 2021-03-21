<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    nav{
        background-color: black;
        height: 3.5em;
        display: flex;
        margin-bottom: 2em;
    }
    nav a {
        padding: 16px;
        background-color: gray;
        color: white;
        text-decoration: none;
        transition: color 0.5s ease;
        transition: background-color 0.5s ease;
    }

    nav a:hover{
        background-color: white;
        color: gray;
    }
</style>

<nav>
    <?php
        for ($i=1; $i < 8; $i++) { 
            echo "
                <a href='exercise-$i.php'>Ejercicio $i</a>
            ";
        }
    
    ?>
</nav>