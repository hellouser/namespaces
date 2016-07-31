<?php
    namespace A
    {
        function quelNamespace()
        {
            echo 'A';
        }
        
        quelNamespace();
    }
    
    namespace B
    {
        function quelNamespace()
        {
            echo 'B';
        }
        
        quelNamespace();
    }
    
    namespace // Le code contenu dans ce namespace fera partie du namespace global.
    {
        echo strlen('Hello world !');
    }
?>