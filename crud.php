<?php
class crud
{
    private $serverName = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "e_banking";
    public $con;

    public $arrTypeName = array();
    public $accNumber = array();
    public $accTypeID = array();

    function __Construct()
    {
        $this->con = new mysqli($this->serverName ,$this->user ,$this->pwd ,$this->dbName);
        if(!$this->con)
        {
            echo 'Connection failed with database.';
        }
    }
    
    public function insertregForm($NAME,$CONTACT,$EMAIL,$GENDER,$LANG,$USERNAME,$PASSWORD)
    {
        $sqlInsert = "INSERT INTO registration_form(Name,Contact,Email,gender,lang,Username,Password)
                VALUES('$NAME','$CONTACT','$EMAIL','$GENDER','$LANG','$USERNAME','$PASSWORD')";
        $insert = $this->con->query($sqlInsert);
        if($insert)
        {
            echo "Record Inserted Successfully";
        }
        return $insert;
    }

    public function displayregForm()
    {
        $sqlDisplay = "SELECT * FROM registration_form";
        $display = $this->con->query($sqlDisplay);
        return $display;
    }

    public function insertaccTypes($TYPE_ID , $TYPE_NAME)
    {
        $sqlInsert = "INSERT INTO account_types(type_id,type_name)
        VALUES('$TYPE_ID' , '$TYPE_NAME')";
        $insert = $this->con->query($sqlInsert);
        if($insert)
        {
            echo "Record Inserted Successfully";
        }
        return $insert;
    }
    
    public function displayaccTypes()
    {
        $sqlDisplay = "SELECT * FROM account_types";
        $display = $this->con->query($sqlDisplay);
        return $display;
    }

    public function insertuserDetails($AC_NO,$U_EMAIL,$U_AC_TY,$UN,$U_CN,$KYC,$CUR_BAL,$OP_DATE,$U_ADDRESS)
    {
        $sqlInsert = "INSERT INTO user_details(account_no,user_email,user_account_type,user_name,user_contact_no,kyc_no,user_current_bal,opening_date,user_address)
        VALUES('$AC_NO','$U_EMAIL','$U_AC_TY','$UN','$U_CN','$KYC','$CUR_BAL','$OP_DATE','$U_ADDRESS');";
        $insert = $this->con->query($sqlInsert);
        if($insert)
        {
            echo "Record Inserted Successfully";
        }
        return $insert;
    }

    public function displayuserDet()
    {
        $sqlDisplay = "SELECT * FROM user_details";
        $display = $this->con->query($sqlDisplay);
        return $display;
    }
    
    public function insertaccTrans($TRA_ID,$ACC_NO,$TYPE_ID,$TR_TYPE,$TR_AMT,$TR_DATE)
    {
        $sqlInsert = "INSERT INTO account_transactions(transaction_id,account_no,type_id,transaction_type,transaction_amount,transaction_date)
        VALUES('$TRA_ID','$ACC_NO','$TYPE_ID','$TR_TYPE','$TR_AMT','$TR_DATE')";
        $insert = $this->con->query($sqlInsert);
        if($insert)
        {
            echo "Record Inserted Successfully";
        }
        return $insert;

    }

    public function displayaccTrans()
    {
        $sqlDisplay = "SELECT * FROM account_transactions";
        $display = $this->con->query($sqlDisplay);
        return $display;
    }

    public function deleteRegForm($id)
    {
        $sqlDelete = "DELETE FROM registration_form WHERE R_ID = '$id' ";
        $delete = $this -> con ->query($sqlDelete);
        return $delete;
    }
    public function delAccTrans($id)
    {
        $sqlDelete = "DELETE FROM account_transactions WHERE transaction_id = '$id' ";
        $delete = $this -> con ->query($sqlDelete);
        return $delete;
    }
    public function delUseDetails($id)
    {
        $sqlDelete = "DELETE FROM user_details WHERE account_no = '$id' ";
        $delete = $this -> con ->query($sqlDelete);
        return $delete;
    }
    public function delAccType($id)
    {
        $sqlDelete = "DELETE FROM account_types WHERE type_id = '$id' ";
        $delete = $this -> con ->query($sqlDelete);
        return $delete;
    }

  
    public function formData($id)
    {
        $sqlOld = "SELECT * FROM registration_form WHERE R_ID=$id";
        $run = $this -> con ->query($sqlOld);
        return $run;
    }
    public function updateFormData($id,$name,$cn,$email,$gender,$lang,$un,$pwd)
    {
        $sqlUpdate = "UPDATE registration_form SET
        Name='$name',Contact='$cn',Email='$email',gender='$gender',lang='$lang',Username='$un',Password='$pwd'
        WHERE R_ID=$id ";
        $update = $this -> con ->query($sqlUpdate);
        return  $update;
    }

    public function accTypeData($id)
    {
        $sqlOld = "SELECT * FROM account_types WHERE type_id = '$id' ";
        $run = $this -> con ->query($sqlOld);
        return $run;
    }
    public function updateAccType($id , $typeName)
    {
        $sqlUpdate = "UPDATE account_types SET type_name = '$typeName' 
        WHERE type_id = '$id' ";
        $update = $this -> con ->query($sqlUpdate);
        return  $update;
    }

    public function userDetData($id)
    {
        $sqlOld = "SELECT * FROM user_details WHERE account_no = '$id' ";
        $run = $this -> con ->query($sqlOld);
        return $run;
    }
    public function updateuserDetails($AC_NO,$U_EMAIL,$U_AC_TY,$UN,$U_CN,$KYC,$CUR_BAL,$OP_DATE,$U_ADDRESS)
    {
        $sqlUpdate = "UPDATE user_details SET user_email = '$U_EMAIL',user_account_type = '$U_AC_TY',user_name = '$UN',user_contact_no = '$U_CN',kyc_no = '$KYC',user_current_bal ='$CUR_BAL',opening_date ='$OP_DATE',user_address = '$U_ADDRESS'  
        WHERE account_no = '$AC_NO' ";
        $update = $this -> con ->query($sqlUpdate);
        return  $update;
        // echo "In the method";
    }
    
    public function accTransData($id)
    {
        $sqlOld = "SELECT * FROM  account_transactions WHERE transaction_id = '$id' ";
        $run = $this -> con ->query($sqlOld);
        return $run;
    }
    public function updateAccTrans($TRA_ID,$ACC_NO,$TYPE_ID,$TR_TYPE,$TR_AMT,$TR_DATE)
    {
        $sqlUpdate = "UPDATE account_transactions SET account_no = '$ACC_NO', type_id = '$TYPE_ID',transaction_type='$TR_TYPE',transaction_amount='$TR_AMT',transaction_date = '$TR_DATE'
        WHERE transaction_id = '$TRA_ID' ";
        $update = $this -> con ->query($sqlUpdate);
        return  $update;
    }
}

?>