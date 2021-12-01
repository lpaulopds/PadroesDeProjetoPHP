<?php
// Página 281

interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "root";
    const PW = "root";
    const DBNAME = "sys";
    public function doConnect();
}
