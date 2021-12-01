<?php
// Página 390

require_once('UniversalConnect.php');

class DataEntry
{
    private $tableMaster;
    private $hookup;
    private $sql;

    public function __construct()
    {
        $this->tableMaster = "infos";
        $this->hookup = new UniversalConnect();

        if (empty($_POST['dpHeader']) || empty($_POST['textBlock']) || empty($_POST['imageURL']))
        {
            die('Preencha todos os campos de formulário');
        }

        $parametros = [
            ':dpHeader' => filter_var($_POST['dpHeader'], FILTER_SANITIZE_SPECIAL_CHARS),
            ':textBlock' => filter_var($_POST['textBlock'], FILTER_SANITIZE_SPECIAL_CHARS),
            ':imageURL' => filter_var($_POST['imageURL'], FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $this->sql = $this->hookup->prepare("INSERT INTO $this->tableMaster VALUES (0, :dpHeader, :textBlock, :imageURL)", $parametros);
        $this->sql->execute($parametros);

        echo "<b>Design Pattern Name:</b><br>" . $_POST['dpHeader'] . "<hr><br>";
        echo "<b>Write up for desgin pattern:</b><br>" . $_POST['textBlock'] . "<hr><br>";
        echo "<b>Image URL:</b><br>" . $_POST['imageURL'] . "<hr><br>";


        $this->hookup = NULL;
    }
}

$worker = new DataEntry();
