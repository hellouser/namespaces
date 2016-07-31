<?php
    require 'test4.php';
    
    use A\B\C\D\E\F\MaClasse;
    
    $a = new MaClasse; // Se transforme en $a = new A\B\C\D\E\F\MaClasse.
    $a->hello();
?>