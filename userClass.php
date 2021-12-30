<?php
require_once dirname(__FILE__).'/partials/dbClass.php';

class User extends Database{
    //Database table Name
    protected $tableName='users_table';

    //Function to add users into database
    public function addUser($data){
        if(!empty($data)){
            $fields=$placeHolder=[];
            foreach($data as $field => $value){
                $fields[]=$field;
                $placeHolder[]=":{$field}";
            }
        }
        $insertQuery="INSERT INTO {$this->tableName} (". implode(',', $fields).") VALUES(". implode(',', $placeHolder) .")";
        $stmt=$this->conn->prepare($insertQuery);
        try {

            $this->conn->beginTransaction();
            $stmt->execute($data);
            $this->conn->commit();
            return $lastID=$this->conn->lastInsertId();
            
        } catch (PDOException $e) {
            print "Error occurred: ".$e->getMessage();
            $this->conn->rollback();
        }
    }

    // Function to get rows from database
    public function getRows($start=0, $limit=4){
        $getRows="SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT{$start},{$limit}";
        $stmt=$this->conn->prepare($getRows);
        $stmt->execute();
        if($stmt->rowCount() >0){
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $results=[];
        }
        return $results;

    }


    // Function to get single row
    public function getSingleRow($field, $value){
        $getSingleRow="SELECT * FROM {$this->tableName} WHERE {$field}= :{$field}";
        $stmt=$this->conn->prepare($getSingleRow);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            $result=[];
        }
        return $result;
    }


    // Function to count number of rows
    public function countNumberOfRows(){
        $getRowCount="SELECT count(*) as pcount FROM {$this->tableName}";
        $stmt=$this->conn->prepare($getRowCount);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];

    }


    // Function to Upload photo
    public function uploadPhoto($file){
        if(!empty($file)){
            $fileTempPath=$file['tmp_name'];
            $fileName=$file['name'];
            $fileType=$file['type'];
            $fileNameCmps=explode('.', $fileName);
            $fileExtension=strtolower(end($fileNameCmps));
            $newFileName=md5(time().$fileName). '.'.$fileExtension;
            $allowedExtesion=['png','jpg','jpeg'];

            if(in_array($fileExtension, $allowedExtesion)){
                $uploadFileDirectory=getcwd().'/uploads/';
                $destinationFilePath=$uploadFileDirectory. $newFileName;
                if(move_uploaded_file($fileTempPath, $destinationFilePath)){
                    return $newFileName;
                }
            }
        }

    }


    // Function to update

    // Function to delete

    // Function to search





}























?>