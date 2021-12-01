<?php
// Página 312

class DisplayData implements IStrategy
{
    public function algorithm()
    {
        $tableMaster = "survey";
        $hookup = new UniversalConnect();

        $sql = "SELECT * FROM $tableMaster";
        $stmt = $hookup->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // echo "Here's all the data: <br>" . $result[1]['company'];
        // var_dump($result);

        foreach ($result as $resultTable)
        {
            echo $resultTable['id'];
            echo $resultTable['company'];
        }

        $hookup = NULL;
    }
}
