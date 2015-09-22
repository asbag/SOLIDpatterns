<?php
/**
 * @author David Mezquíriz Osés
 * 
 * public class Sql {
	public Sql (String table, Column[] columns) {...}
	public String insert (Object[] fields) {...}
	public String findByKey (String keyColumn, String keyValue) {...}
	public String select (Criteria criteria) {...}
}

 * If a new method is needed such as update one we loose SRP and OCP principles
 * If we need up
 */

abstract class Sql {
	public function Sql (string $table, array $columns);
	public abstract function generate ();
}

class InsertSql extends Sql {
	public function InsertSql (string $table, array $columns, string $keyColumn, string $keyValue) {
		
	}
	
	public function generate() {
		
	}
}

class FindByKeySql extends Sql {
	public function InsertSql (string $table, array $columns, string $keyColumn, string $keyValue) {
	}
	
	public function generate() {
		
	}
}