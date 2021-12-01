<?php
// Página 334

class SearchData implements IStrategy
{
    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = new UniversalConnect();
        $this->dataPack = $dataPack;
        $field = $this->dataPack[0];
        $term = $this->dataPack[1];

        // Cria instrução para consultar os nomes das colunas
        $selCol = "SHOW columns FROM $this->tableMaster";
        $selec = $this->hookup->prepare($selCol);
        $selec->execute();

        $this->sql = $this->hookup->prepare("SELECT * FROM $this->tableMaster WHERE $field = '$term'");
        $this->sql->execute();

        echo "<link rel='stylesheet' href='style.css'>";
        echo "<table>";
        echo "<tr>";
        while ($columns = $selec->fetch(PDO::FETCH_ASSOC))
        {
            echo "<th>";
                echo $columns['Field'];
            echo "</th>";
        }
        echo "</tr>";
        
        while ($row = $this->sql->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            foreach ($row as $rowSelec)
            {
                echo "<td>";
                    echo $rowSelec;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "<table>";

        $this->hookup = NULL;
    }
}
