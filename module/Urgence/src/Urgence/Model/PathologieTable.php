<?php

namespace Urgence\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class PathologieTable {
	
	protected $tableGateway;
	
	
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}

    public function getListePathologie(){
		$rowset = $this->tableGateway->select ( )->toArray();
		
		return $rowset;
	}
	
	public function getLaPathologie($idPathologie){
		return $this->tableGateway->select ( array('id' => $idPathologie))->current();
	}
	
}