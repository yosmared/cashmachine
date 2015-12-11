<?php 
namespace Cashmachine\CoreBundle\Services;

class CashMachineService{

	 const CIEN = 100;
	 const CINCUENTA = 50;
	 const VEINTE = 20;
	 const DIEZ = 10;

	public function getCash($monto){


		$b1 = $this->getBilletes($monto,self::CIEN);
		$b2 = $this->getBilletes($monto,self::CINCUENTA);
		$b3 = $this->getBilletes($monto,self::VEINTE);
		$b4 = $this->getBilletes($monto,self::DIEZ);

		return array('100' => $b1, '50' => $b2,'20' => $b3,'10' => $b4);

	}
	
	private function getBilletes(&$monto,$denominacion){

		$c = 0;

		while($monto>=$denominacion){

			$monto = $monto-$denominacion;

			$c++;
		}

		return $c;
	}
}