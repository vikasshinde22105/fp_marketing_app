<?php

namespace MobileSplash\SplashRequestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MobileSplash\SplashRequestBundle\Entity\SplashDetails;
use MobileSplash\SplashRequestBundle\Form\Type\SplashRequestType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Response;

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
            $this->get('session')->getFlashBag()->add('success','Your Request Saved Succesfully!');
            return $this->redirectToRoute('mobile_splash_request_add');
           }

        return $this->render('MobileSplashSplashRequestBundle:SplashRequest:splash_request_form.html.twig', [
        'entity' => $splashDetails,
        'RequestForm' => $RequestForm->createView(),
         ]);
    }
    
    public function requestListAction() 
    {
                $em = $this->getDoctrine()->getEntityManager();
                $request_list = $em->getRepository('MobileSplashSplashRequestBundle:SplashDetails')->findAll();
                return $this->render('MobileSplashSplashRequestBundle:SplashRequest:splash_requests.html.twig',array('request_list'=>$request_list));

    }
    
    public function requestDetailsAction($id)
    {
          $em = $this->getDoctrine()->getManager();
          $requestdetails = $em->getRepository('MobileSplashSplashRequestBundle:SplashDetails')
            ->find($id);

           $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($requestdetails, 'json');
            return $this->render('MobileSplashSplashRequestBundle:SplashRequest:splash_request_details.html.twig', array('requestdetails'=>$requestdetails));

    }
    
    public function getVendorsAction($country_id){
     
          
           $em = $this->getDoctrine()->getManager();
           $vendors = $em->getRepository('MobileSplashSplashRequestBundle:Vendors')
            ->findVendorsByCountry($country_id);
           $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($vendors, 'json');
            return new Response($json);
 
 
    }
    public function addRequestForm(SplashDetails $splashDetails) {
        
        $em = $this->getDoctrine()->getEntityManager();
        $form=$this->createForm(new SplashRequestType($em),$splashDetails);
        return $form;
    }
}