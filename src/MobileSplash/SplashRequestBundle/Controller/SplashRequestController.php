<?php

namespace MobileSplash\SplashRequestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MobileSplash\SplashRequestBundle\Entity\SplashDetails;
use MobileSplash\SplashRequestBundle\Form\Type\SplashRequestType;


class SplashRequestController extends Controller
{
    public function indexAction()
    {

    }
    public function addAction(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
         $splashDetails = new SplashDetails();
         $RequestForm = $this->addRequestForm($splashDetails);
         $RequestForm->handleRequest($request);
            if ($RequestForm->isValid()) 
               {
                $em->persist($splashDetails);
                $em->flush();
               // $this->addFlash('success', $this->get('translator')->trans('admin.admin_user.flash.updated'));
                return $this->redirectToRoute('mobile_splash_request_add');
               }
        return $this->render('MobileSplashSplashRequestBundle:SplashRequest:splash_request_form.html.twig', [
        'entity' => $splashDetails,
        'RequestForm' => $RequestForm->createView(),
         ]);
    }
     public function getVendorsAction($country_id){
     
          
           $em = $this->getDoctrine()->getManager();
           $vendors = $em->getRepository('MobileSplashSplashRequestBundle:Vendors')
            ->findVendorsByCountry($country_id);
       /*    $query = $repository->createQueryBuilder('v')
            ->select('v.id,v.name')       
            ->where('v.country = :country_id')
            ->setParameter('country_id', $country_id)
            ->orderBy('v.id', 'ASC')
            ->getQuery();
           
            $vendors= $query->getResult();
         */
           
           $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($vendors, 'json');
            return new Response($json);
 
 
    }
    public function addRequestForm(SplashDetails $splashDetails) {
        $em = $this->getDoctrine()->getEntityManager();
          $form=$this->createForm(new SplashRequestType($em),$splashDetails);
        $form->add('submit','submit');
         return $form;
    }
}