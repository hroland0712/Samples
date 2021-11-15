<?php

try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $statement = $pdo->prepare($query);

        $statement->execute($qery_params);


} catch (Exception $e) {

        echo "Error -> ";
        var_dump($e->getMessage());
            
}
