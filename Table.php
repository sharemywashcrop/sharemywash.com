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
            <a href="HowTo.php?lp=2">
                <?php Class1::l($_GET[lp],2,"How to use it") ?>
            </a>
        </li>
        <li>
            <a href="Download.php?lp=3">
                <?php Class1::l($_GET[lp],3,"Download the application") ?>
            </a>
        </li>
        <li>
            <a href="Team.php?lp=4">
                <?php Class1::l($_GET[lp],4,"The Team") ?>
            </a>
        </li>
        <li>
            <a href="Contact.php?lp=5">
                <?php Class1::l($_GET[lp],5,"Contact") ?>
            </a>
        </li>
        <li>
            <a href="admin_mod.php?lp=6">
                <?php Class1::l($_GET[lp],6,"Member area") ?>
            </a>
        </li>
    </ul>
</nav>