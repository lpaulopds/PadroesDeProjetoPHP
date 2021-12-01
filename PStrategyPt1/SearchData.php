<?php
// Página 313

class SearchData implements IStrategy
{
    public function algorithm()
    {
        $this->tableMaster = "survey";
        $this->hookup = new UniversalConnect();

        $pesquisar = filter_var($_POST['data'], FILTER_SANITIZE_SPECIAL_CHARS);

        $sql = $this->hookup->prepare("SELECT id, company FROM $this->tableMaster WHERE company = '$pesquisar'");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo "Here's what you were looking for: " . $result[0]['company'];

        $this->hookup = NULL;
    }
}
