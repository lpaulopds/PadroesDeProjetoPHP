<?php
// Página 402

require_once('ConcreteSubject.php');

class ConcreteObserverPhone implements Observer
{
    private $currentState = array();
    private $dpHeader;
    private $bodytext;
    private $imageURL;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        $this->dpHeader = $this->currentState[0];
        $this->bodytext = $this->currentState[1];
        $this->imageURL = $this->currentState[2];
        $this->doMobile();
    }

    private function doMobile()
    {
        $showPage = <<<MOBILE
        <html>
        <head>
        <title>Mobile Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="desktop.css">
        </head>
        <body>
        <h1>$this->dpHeader</h1>
        <p>$this->bodytext</p>
        <img src="$this->imageURL" alt="$this->imageURL" width=100%>
        </body>
        </html>
        MOBILE;
        echo $showPage;
    }
}
