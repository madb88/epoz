<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Charts;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\EntityRepository;

class MainController extends Controller
{
		
	 /**
     * @Route("/", name="showAllCharts")
     * @Template("AppBundle:Charts:main.html.twig")
     */
    public function showAllChartsAction(){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Charts');
        $newestCharts = $repository->findNewestCharts();
        return ['newestCharts'=>$newestCharts];
    }

     /**
     * @Route("/founded", name="foundedCharts");
     * @Method("POST");
     * @Template("AppBundle:Charts:main.html.twig");
     */
    public function showLandingPageAction(Request $request){
   		$title = $request->get('searchPhrase');
   		$repository = $this->getDoctrine()->getRepository('AppBundle:Charts');
        $charts = $repository->findChartsByTitle($title);
        return ['charts' => $charts, 'title'=> $title];
    }

     /**
     * @Route("/index/{letter}", defaults={"letter"= "A"}, name="chartsByLetters");
     * @Template("AppBundle:Charts:showAll.html.twig");
     */
    public function showChartsByLetterAction(Request $request, $letter){
        $letters = range('A', 'Z');
        $letter = $request->get('letter');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Charts');
        $charts = $repository->findChartsByLetter($letter);
        return ['charts' => $charts, 'title'=> $letter, 'letters' =>$letters, 'letter'=>$letter,];
    }


}
