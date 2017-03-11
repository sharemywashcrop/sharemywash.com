<?php
    header( 'content-type: text/html; charset=utf-8' );
    include"Class1.php";
?>         
<!--English version-->
<nav id="nav">
    <ul>
        <li>
            <a href="index.php?lp=1">
                <?php Class1::l($_GET[lp],1,"Home") ?>
            </a>
        </li>
        <li>
            <a href="howto.php?lp=2">
                <?php Class1::l($_GET[lp],2,"How to use it") ?>
            </a>
        </li>
        <li>
            <a href="download.php?lp=3">
                <?php Class1::l($_GET[lp],3,"Download the application") ?>
            </a>
        </li>
        <li>
            <a href="presentation.php?lp=4">
                <?php Class1::l($_GET[lp],4,"The Team") ?>
            </a>
        </li>
        <li>
            <a href="contact.php?lp=5">
                <?php Class1::l($_GET[lp],5,"Contact") ?>
            </a>
        </li>
        <li>
            <a href="membre.php?lp=6">
                <?php Class1::l($_GET[lp],6,"Member area") ?>
            </a>
        </li>
    </ul>
</nav>