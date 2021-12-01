<?php
// Página 333

class DisplayAll implements IStrategy
{
    private $tableMaster;
    private $hookup;

    public function algorithm(Array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = new UniversalConnect();
        
        // Cria instrução para consulta para saber os nomes das colunas
        $selCol = "SHOW columns FROM $this->tableMaster";
        $selec = $this->hookup->prepare($selCol);
        $selec->execute();
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

        // Cria instrução para consulta dos dados
        $sql = "SELECT * FROM $this->tableMaster";
        $stmt = $this->hookup->prepare($sql);
        $stmt->execute();

        // Chama todas as linhas da tabela
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            foreach ($rows as $rowsTable)
            {
                echo "<td>";
                    echo $rowsTable;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
        $this->hookup = NULL;
    }
}
