<?php

namespace Urgence\Model;

use Zend\Db\TableGateway\TableGateway;

class TypePathologieTable {
	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getPatientAdmis(){

		var_dump('eeeaaaa'); exit();
		
		$rowset = $this->tableGateway->select ( array (
				'id_admission' => $id_admission
		) );
		$row =  $rowset->current ();
		if (! $row) {
			$row = null;
		}
		return $row;
	}
	
}