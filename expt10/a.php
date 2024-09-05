<?php
class Employee {
    public $name;
    public $id;
    public $department;
    public $salary;
    public $doj;

    public function __construct($name, $id, $department, $salary, $doj) {
        $this->name = $name;
        $this->id = $id;
        $this->department = $department;
        $this->salary = $salary;
        $this->doj = $doj;
    }

    public function displayInfo() {
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee ID: " . $this->id . "<br>";
        echo "Employee Department: " . $this->department . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
        echo "Employee DOJ: " . $this->doj . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["empName"];
    $id = $_POST["empId"];
    $department = $_POST["empDept"];
    $salary = $_POST["empSalary"];
    $doj = $_POST["empDOJ"];

    $employee1 = new Employee($name, $id, $department, $salary, $doj);
    //$employee2 = new Employee("vishwas","12345","CSE",20000,date("09/08/2024"));
    $employee1->displayInfo();
    //$employee2->displayInfo();
}
?>
