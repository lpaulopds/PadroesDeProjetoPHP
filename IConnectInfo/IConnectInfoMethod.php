<?php
// Página 49

// Interfaces não podem conter variáveis, mas, podem conter constantes
interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "user_clube";
    const DBNAME = "clube";
    const PW = "ZqEdCfp4KFU7jWW3";
    function testConnection();
}
