<?php

 class Query_Builder{
    public $tableName , $where,$Orwhere , $order;

        function __construct($tableName)
        {
            $this->tableName = $tableName;
        }


        public function where($ColumnName, $Operator ,$value){
        $this->where[] = "$ColumnName $Operator $value" ; 
        return $this ; 
        }

        public function Orwhere($ColumnName, $Operator ,$value){
            $this->Orwhere[] = "$ColumnName $Operator $value" ; 
            return $this ; 
            }

            public function OrderBy($ColumnName , $order = "ASC"){
                $this->order[] = "$ColumnName $order";
                return $this;
            }
        
        
        public function sql(){
            
            $sql =  "SELECT * FROM {$this->tableName}";
            if(!empty($this->where)){
                $sql .= "Where" . join(" AND " , $this->where);
            }
            if(!empty($this->Orwhere)){
                $sql .= " OR " . join(" OR " , $this->Orwhere);
            }

            if(!empty($this->order)){
                $sql .= " ORDER BY " . join(", " , $this->order);
            }

            $sql .= ";";
            return $sql ; 

        }




 }