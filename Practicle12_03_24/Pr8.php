<!-- Pro-3 : Write PHP Script to generate results and display grades.  -->
<?php
// It is Desplay Result 

use LDAP\Result as LDAPResult;

class Result{
    private $sRollNo; 
    private $marks = []; 

    public function __construct($sRollNo,$marks)
    {
        $this->sRollNo = $sRollNo;
        $this->marks = $marks;
    }

    public function calculatePer(){
        $sum = 0;
        for($i = 0; $i < sizeof($this->marks); $i++){
            $sum += $this->marks[$i];
        }
        $per = $sum / sizeof($this->marks);
        return $per;
    }

    public function getGread(){
        $average = $this->calculatePer();
        if ($average >= 90) {
            return 'A';
        } elseif ($average >= 80) {
            return 'B';
        } elseif ($average >= 70) {
            return 'C';
        } elseif ($average >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    public function dispalyResult(){
        echo "STUDENT ROLL NO:".$this->sRollNo;
        echo "STUDENT GET PERSENTAGE:".$this->calculatePer();
        echo "STUDENT GREAD".$this->getGread();
    }

}

$student1 = new Result(41,[90,70,80]);
$student1->dispalyResult();

?>
