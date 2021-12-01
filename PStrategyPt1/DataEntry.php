<?php
// Página 312

class DataEntry implements IStrategy
{
    public function algorithm()
    {
        $tableMaster = "survey";
        $hookup = new UniversalConnect();

        $parametros = [
            ':company' => filter_var($_POST['data'], FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $sql = $hookup->prepare("INSERT INTO $tableMaster VALUES(0, :company)", $parametros);
        $sql->execute($parametros);

        $hookup = NULL;
    }
}
