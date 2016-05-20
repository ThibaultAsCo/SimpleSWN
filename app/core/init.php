<?php

/*
 *
 * Config connexion BDD (switch auto local / remote)
 *
 */

    if( strpos(gethostname(), '.local') !== false ) {

        /*** LOCAL ***/

        $host = 'localhost';
        $dbName = 'dev';
        $user = 'root';
        $password = 'root';

    }else{

        /*** REMOTE ***/

        $host = '';
        $dbName = '';
        $user = '';
        $password = '';

    }

    try
    {
        $db_config = array();
        $db_config['SGBD']	= 'mysql';
        $db_config['HOST']	= $host;
        $db_config['DB_NAME']	= $dbName;
        $db_config['USER']	= $user;
        $db_config['PASSWORD']	= $password;
        $db_config['OPTIONS']	= array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        $pdo = new PDO($db_config['SGBD'] .':host='. $db_config['HOST'] .';dbname='. $db_config['DB_NAME'],
            $db_config['USER'],
            $db_config['PASSWORD'],
            $db_config['OPTIONS']);
        unset($db_config);
    }
    catch(Exception $e)
    {
        trigger_error($e->getMessage(), E_USER_ERROR);
    }