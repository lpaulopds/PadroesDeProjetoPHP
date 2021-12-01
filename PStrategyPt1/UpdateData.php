<?php
// Página 313

class UpdateData implements IStrategy
{
    public function algorithm()
    {
        $tableMaster = "survey";
        $hookup = new UniversalConnect();

        $idCompany = $_POST['update'];
        $company = $_POST['data'];

        $parametros = [
            'idCompany' => filter_var($idCompany, FILTER_SANITIZE_SPECIAL_CHARS),
            ':company' => filter_var($company, FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $sql = $hookup->prepare("UPDATE $tableMaster SET company = :company WHERE id = :idCompany", $parametros);
        $sql->execute($parametros);
        var_dump($parametros);

        $hookup = NULL;
    }
}
