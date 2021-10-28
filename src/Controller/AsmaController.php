<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AsmaController extends AbstractController
{
    /**
     * @Route("/asma", name="asma")
     */
    public function index(): Response
    {
        return $this->render('asma/index.html.twig', [
            'controller_name' => 'AsmaController',
        ]);
    }
// /**  
//  * @Route("/voir/{id}",name="voir",requirements={"id"="\d+"})
  
//  */
// public function voir($id): Response
// {
    
//     return new  Response("hello page voir avec id".$id);
// }

/**  
 * @Route("/voir",name="voir")
  
 */
public function voir(): Response
{
    
    return $this->render('asma/voir.html.twig');
}
public function menu(): Response
{
  $mymenu= array(
['route' => 'asma' , 'intitule' => 'Accueil'],
['route' => 'voir' , 'intitule' => 'voir un job']);
// ['route' => 'list' , 'intitule' => 'Afficher tous les jobs']);

return $this->render('asma/menu.html.twig',[
    'mymenu'  =>$mymenu
]);  
}


public function sidebar(): Response
{
  $listjobs= array(
['id' => 1, 'nomjob' => 'Developpeur web'],
['id' => 2, 'nomjob' => 'Responsable marketing'],
['id' => 3 , 'nomjob' => 'Team Leader']);


return $this->render('asma/sidebar.html.twig',[
    'listjobs'  =>$listjobs
]);  
}








}
