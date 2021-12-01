<?php
// Página 313

class DeleteRecord implements IStrategy
{
    public function algorithm()
    {
        $tableMaster = "survey";
        $hookup = new UniversalConnect();

        $idDelete = $_POST['data'];
        
        $parametros = [
            'idDel' => filter_var($idDelete, FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $sql = $hookup->prepare("DELETE FROM $tableMaster WHERE id = :idDel");
        $sql->execute($parametros);

        echo "The record: " . $idDelete . " removed from table " . $tableMaster;
    }
}
