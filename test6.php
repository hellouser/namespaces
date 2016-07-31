<?php
    require 'test4.php';
    
    use A\B\C\D\E\F\MaClasse as Hello;
    
    $a = new Hello; // Se transforme en $a = new A\B\C\D\E\F\MaClasse.
    $a->hello();
?>