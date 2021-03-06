<?php

namespace MobileSplash\SplashRequestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityManager;
use  MobileSplash\SplashRequestBundle\Form\EventListener\AddVendorFieldSubscriber;
 
class SplashRequestType extends AbstractType
{
    protected $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        $propertyPathToCity = 'vendor';
       
          $builder->add("brand",'entity',array(
                        'class'=>'MobileSplashSplashRequestBundle:Brands',
                        'attr'=>array('id'=>'brand'),
                        'placeholder'=>'Choose you brand'
                        ))
                ->add('country','entity',array(
                        'class' =>'MobileSplashSplashRequestBundle:Countries',
                        'placeholder'=>'Choose you country'))
                ->addEventSubscriber(new AddVendorFieldSubscriber($propertyPathToCity))
 
                //->add('vendor','choice',array('attr'=>array('placeholder'=>'select Vendor')))
                ->add('logoUrl', 'text',array('attr'=>array('class'=>'form-control')))
                ->add('vendorDomain', 'text',array('attr'=>array('class'=>'form-control')))
                ->add('headline', 'text',array('attr'=>array('class'=>'form-control')))
                ->add('subline','text',array('attr' => array('class'=>'form-control')))
                ->add('customizedBackground','choice',array('choices'=> array('0' => 'No', '1' => 'Yes'),'attr' => array('class'=>'form-control')))

                ->add('isoPortrait', 'text',array('attr'=>array('class'=>'form-control customized')))
                ->add('isoLandscape', 'text',array('attr'=>array('class'=>'form-control customized')))
                ->add('androidPortrait', 'text',array('attr'=>array('class'=>'form-control customized')))
                ->add('androidLandscape', 'text',array('attr'=>array('class'=>'form-control customized')))
                ->add('wp8Portrait', 'text',array('attr'=>array('class'=>'form-control customized')))
                ->add('wp8Landscape', 'text',array('attr'=>array('class'=>'form-control customized')))
                  
                ->add('save', 'submit',array('attr'=>array('class'=>'btn btn-primary')));
             
    }
 
    public function getName()
    {
        return 'splash';
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MobileSplash\SplashRequestBundle\Entity\SplashDetails',
        ));
    }
    
    private function getBrands() {
           
            $emm = $this->em->getRepository('MobileSplashSplashRequestBundle:Brands');        
            $query = $emm ->createQueryBuilder('t')
            ->select('t.id','t.name');
            $query = $query->getQuery();
             $results = $query->getResult();
        
            return $results;
}
}