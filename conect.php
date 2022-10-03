<?php 
        $dbHost =  'us-east.connect.psdb.cloud';
        $dbUsername = '2q6ws37julrb13cg0afd';
        $dbPassword = 'pscale_pw_mzXiXozHhZwPsBFIXuPq0m6iw24JnHaINgWWrYMgVty';
        $dbName = 'avaliacoes';
        
        $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

        $sql = "INSERT INTO avaliacoes(nota) VALUES(10)"
?>