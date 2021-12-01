<?php
// Página 316

// Classe auxiliar
class SecureData
{
    private $changeField;
    private $company;
    private $devdes;
    private $device;
    private $disappear;
    private $field;
    private $lang;
    private $newData;
    private $oldData;
    private $plat;
    private $style;
    private $term;
    // $dataPack será um array
    private $dataPack;

    public function enterData()
    {
        $this->hookup = new UniversalConnect();
        $this->company = filter_var($_POST['company'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->devdes = filter_var($_POST['devdes'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lang = filter_var($_POST['lang'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->plat = filter_var($_POST['plat'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->style = filter_var($_POST['style'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->device = filter_var($_POST['device'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->dataPack = array(
            $this->company,
            $this->devdes,
            $this->lang,
            $this->plat,
            $this->style,
            $this->device
        );
        $this->hookup = NULL;
    }

    public function conductSearch()
    {
        $this->hookup = new UniversalConnect();
        $this->field = filter_var($_POST['field'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->term = filter_var($_POST['term'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->dataPack = array(
            $this->field,
            $this->term
        );
        $this->hookup = NULL;
    }

    public function makeChange()
    {
        $this->hookup = new UniversalConnect();
        $this->changeField = filter_var($_POST['update'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->oldData = filter_var($_POST['old'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->newData = filter_var($_POST['new'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->dataPack = array(
            $this->changeField,
            $this->oldData,
            $this->newData
        );
        $this->hookup = NULL;
    }

    public function removeRecord()
    {
        $this->hookup = new UniversalConnect();
        $this->disappear = filter_var($_POST['delete'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->dataPack = array($this->disappear);
        $this->hookup = NULL;
    }

    // Retorna dados seguros na forma de array para o Client solicitante
    public function setEntry()
    {
        return $this->dataPack;
    }
}
