<?php
Abstract Class Model_Base {
    protected $db;
    protected $table;
    private $dataResult;

    public function __construct($select = false) {
        //Объект БД коннекта
        global $dbObject;
        $this->db = $dbObject;
        //Имя таблицы
        $modelName = get_class($this);
        $arrExp = explode('_', $modelName);
        $tableName = strtolower($arrExp[1]);
        $this->table = $tableName;
        //Обработка запроса, если нужно
        $sql = $this->_getSelect($select);
        if ($sql) $this->_getResult("SELECT * FROM $this->table" . $sql);
    }

    //Получить имя таблицы
    public function getTableName() {
        return $this->table;
    }

    //Получить все записи
    function getAllRows() {
        if (!isset($this->dataResult)) OR empty($this->dataResult) return false;
        return $this->dataResult[0];
    }

    //Получить одну запись
    function getOneRow() {
        if (!isset($this->dataResult)) OR empty($this->dataResult) return false;
        return $this->dataResult[0];
    }

    //Извлечь из БД одну запись
    function fetchOne() {
        if (!isset($this->dataResult)) OR empty($this->dataResult) return false;
        foreach ($this->dataResult[0] as $key => $val) {
            $this->$key = $val;
        }
        return true;
    }

    //Получить запись по id
    function getRowBuId($id) {
        try {
            $db = $this->db;
            $stmt = $db->query("SELECT * from $this->table WHERE id = $id");
            $row = $stmt->fetch();
        }catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
        return $row;
    }

    //Запись в БД
    public function save() {
        $arrayAllFields = array_keys($this->fieldsTable());
        $arraySetFields = array();
        $arrayData = array();
        foreach ($arrayAllFields as $field) {
            if (!empty($this->$field)) {
                $arraySetFields[] = $field;
                $arrayData[] = $this->$field;
            }
        }
        $forQueryFields = implode(',', $arraySetFields);
        $rangePlace = array_fill(0, count($arraySetFields), '?');
        $forQueryPlace = implode(',', $rangePlace);

        try {
            $db = $this->db;
            $stmt = $db->prepare("INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)");
            $result = $stmt->execute($arrayData);
        }catch (PDOException $e) {
            echo 'Error : '.$e->getMessage();
            echo '<br/Error sql : ' . "'INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)";
            exit();
        }
        return $result;
    }

    //Составление запроса к БД












}