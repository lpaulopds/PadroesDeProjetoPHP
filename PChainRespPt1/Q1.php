<?php
// Página 354

class Q1 extends Handler
{
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }

    public function handleRequest($request)
    {
        $this->handle = "q1";

        if ($request->getService() == $this->handle)
        {
            $this->tableMaster = "helpdesk";
            $this->hookup = new UniversalConnect();

            $this->sql = "SELECT response FROM $this->tableMaster WHERE chain = '$this->handle'";
            $stmt = $this->hookup->prepare($this->sql);
            
            if ($stmt->execute())
            {
                while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                {
                    echo $row->response;
                }
            }

            $this->hookup = NULL;
        }
        elseif ($this->successor != NULL)
        {
            $this->successor->handleRequest($request);
        }
    }
}
