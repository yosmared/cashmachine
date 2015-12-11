<?php

namespace Cashmachine\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CashmachineCoreBundle:Default:index.html.twig');
    }


    /**
     * @Route("/getcash",name="cash")
     */
    public function getCashAction(Request $request)
    {
    	$service = $this->get('cashmachine.core.base');

    

	    $monto = $request->request->get('monto');

	    if($monto%10==0 && $monto>=10){

	    	$rs = $service->getCash($monto);
	    	$billetes = "Transacción exitosa ";

	    	if($rs['100']>0){

	    		$billetes .= " Billetes de 100 $: ".$rs['100'];
	    	}

	    	if($rs['50']>0){

	    		$billetes .= " Billetes de 50 $: ".$rs['50'];
	    	}


	    	if($rs['20']>0){

	    		$billetes .= " Billetes de 20 $: ".$rs['20'];
	    	}


	    	if($rs['10']>0){

	    		$billetes .= " Billetes de 10 $ ".$rs['10'];
	    	}

			$billetes .= " Suman un total de $".$monto."en efectivo";

	    	 $this->get('session')->getFlashBag()->add(
            'notice',
            $billetes);

	    	return $this->render('CashmachineCoreBundle:Default:index.html.twig');
	    }else{

	    	 $this->get('session')->getFlashBag()->add(
            'notice',
            'El monto tiene que ser multiplo de 10');

	    	return $this->render('CashmachineCoreBundle:Default:index.html.twig');

	    }

    }
}
