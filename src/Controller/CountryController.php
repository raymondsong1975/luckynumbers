<?php

namespace App\Controller;

use App\Entity\Country;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends Controller
{
    /**
     * @Route("/country", name="country")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $country = new Country();
        $country->setCountryName('Australia');
        $country->setCountryCode('AU');
        $em->persist($country);
        $em->flush();
        
        return new Response('Saved new country with id '.$country->getId());
        
    }
    
    /**
     * @Route("/country/{id}", name="country_show")
     */
    public function showAction($id)
    {
        
        $country = $this->findCountry($id);
        return new Response('Country found '. $country->getCountryName());
    }
    
    /**
     * @Route("country/edit/{id}", name="country_edit")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $country = $this->findCountry($id);
        
        $country->setCountryName('China');
        $em->flush();
    }
    
    private function findCountry($id)
    {
        $country = $this->getDoctrine()
        ->getRepository(Country::class)
        ->find($id);
        if(!$country) {
            return $this->createNotFoundException('No country found for id '.$id);
        }
        
        return $country;
    }
}
