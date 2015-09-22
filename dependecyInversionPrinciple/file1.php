<?php
/**
 * @author David Mezquíriz.
 * Example of one of the main methods of Clean Code
 */


/*
 * Instead of
 * public class BasicEmployeeSalaryCalculator {
	public float getSalary (Employee employee) {
		// calcula el salario del empleado	
	}	
}

public class Employee {
	public float calculateSalary (BasicEmployeeSalaryCalculator employeeSalaryCalculator) {
		return employeeSalaryCalculator.getSalary(this);	
	}
}

 */

interface IemployeeSalaryCalculator {
	public function getSalary ();
}

class Employee {
	//Insert an interface as a parameter
	public function calculateSalary (IemployeeSalaryCalculator $employeeSalaryCalculator) {
			return $employeeSalaryCalculator.getSalary($this);
	}
}

class BasicEmployeeSalaryCalculator implements IemployeeSalaryCalculator {
	public function getSalary (Employee $employee) {
		//Calculate his gross salary
	}
}

class ExtraPaySalaryCalculator implements IemployeeSalaryCalculator {
	public function getSalary (Employee $employee) {
		//Calculate his salary depending of ExtraPay
	}
}