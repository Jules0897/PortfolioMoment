<!--User: J. Verbruggen-->
<!--Date: 16/6/2021-->
<!--File: footer.php-->
<!--inlog vel-->
<div id="footer">
    <?php
        if(isset($_SESSION["User"]))
        {
            echo "<p>" . $_SESSION["User"] . " | " . date("d/m/Y") . "</p>";
        }
        else
        {
            echo "<p>" . date("d/m/Y") . "</p>";
        }
    ?>
</div>