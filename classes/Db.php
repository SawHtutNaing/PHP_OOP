<?php 

class Db{
    public $conn , $tableName; 
    function __construct($tableName)
    {
        $hostname = "localhost";
$username = "sawhtut";
$password = "sawhtut";
$database = "mvc_learning";
$this->conn = mysqli_connect($hostname, $username, $password,$database);
$this->tableName = $tableName ; 
    } 

    public function create(array $data){

        // $sql = "INSERT INTO your_table_name (column1, column2, column3) VALUES ('value1', 'value2', 'value3')";
        $sql = "INSERT INTO  mvcs " ; 
        $sql .= "(".  join( ",", array_keys($data) )." )" ; 
        $sql .= "VALUES ( " ."'" . join("','" , array_values($data))."'".")" ; 

        $query = mysqli_query($this->conn , $sql ) ;
        // return $this->conn; 


    }

    public function index(){
$sql = "SELECT * FROM $this->tableName " ;
$query = mysqli_query($this->conn , $sql ) ;
$rows = [] ;

while ($row = mysqli_fetch_object($query)) {
    $rows[] = $row ; ;
}

return $rows;

    
}

public function first($id){
    $sql = "SELECT * FROM $this->tableName WHERE id = $id" ;
    $query = mysqli_query($this->conn , $sql ) ;
    
    $row = mysqli_fetch_object($query);
    return $row;
    }


    public function update(int $id , array $data){

        // $sql = "UPDATE my SET name='$name',money=$money WHERE id=$id";

        $sql = "UPDATE   mvcs SET " ; 
        $combine = [] ;
       foreach ($data as $key => $value) {
            $combine[] = "$key ='$value'";
        };

$sql .= join("," , $combine);
        
$sql.= "WHERE id = $id";
        $query = mysqli_query($this->conn , $sql ) ;
        return $this->first($id);


    }

    public function delete($id){
        $sql = "DELETE FROM mvcs WHERE id=$id";

        $query = mysqli_query($this->conn , $sql ) ;
        
        
        return $this->index();
        }
    
}