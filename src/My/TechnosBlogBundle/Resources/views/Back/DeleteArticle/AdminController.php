<?php

namespace Umanis\HomeBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Umanis\HomeBundle\Form\RessourcesType;
use Umanis\HomeBundle\Form\RessourcesEditType;
use Umanis\HomeBundle\Form\NewsType;
use Umanis\HomeBundle\Form\NewsEditType;
use Umanis\HomeBundle\Form\MediasType;
use Umanis\HomeBundle\Form\MediasEditType;
use Umanis\UserBundle\Entity\Users;
use Umanis\HomeBundle\Entity\Ressources;
use Umanis\HomeBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\Common\Collections\ArrayCollection; 
use Exporter\Source\DoctrineDBALConnectionSourceIterator;
use Exporter\Handler;
use Exporter\Writer\XlsWriter;
use Exporter\Writer\XmlWriter;
use Exporter\Writer\JsonWriter;
use Exporter\Writer\CsvWriter;
use Symfony\Component\HttpFoundation\StreamedResponse;



class AdminController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
	
    public function indexAction(Request $request)
    {
         if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {

            // Sinon on déclenche une exception « Accès interdit »

             throw new AccessDeniedException('Accès limité aux auteurs.');

        }

    	// Récuperation des données users


        $users = $this->getDoctrine()->getManager()->getRepository('UmanisUserBundle:Users');

        $listUsers = $users->findBy(
            array(),
            array('id' => 'desc'),
            5,
            0
        );

    	// Récuperation des données events

    	$events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

    	$listEvents = $events->findBy(
    		array('type' => 'allevent'),
    		array('date' => 'desc'),
    		5,
    		0
    	);


        $allEvents = $events->findBy(
            array('type' => 'allevent'),
            array('date' => 'desc'),
            800,
            0
        );

        $lastEvent = $events->FindLast();



        $paginator = $this->get('knp_paginator');
        $statsEvents = $paginator->paginate(
            $allEvents,
            $request->query->get('page',1),
            15
        );





        // Nomre d'utilsateur d'inscrits

        $allUsers = $this->getDoctrine()->getManager()->getRepository('UmanisUserBundle:Users');


        $users = $allUsers->findAll();

        $paginator = $this->get('knp_paginator');
        $statsUsers = $paginator->paginate(
            $users,
            $request->query->get('page',1),
            15
        );






        // Récuperation du nombre total de médias

        $allMedias = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');


        $medias = $allMedias->findBy(
            array('type' => 'medias'),
            array(),
            800,
            0
        );



        $paginator = $this->get('knp_paginator');
        $statsMedias = $paginator->paginate(
            $medias,
            $request->query->get('page',1),
            15
        );

     



    	// Récuperation des données medias

    	$medias = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

    	$listMedias = $medias->findBy(
    		array('type' => 'medias'),
    		array('date' => 'desc'),
    		5,
    		0
    	);


        // Récuperation du nombre total de téléchargement

        $allDownloads = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Downloads');


        $downloads = $allDownloads->FindAllDownload();


        $paginator = $this->get('knp_paginator');
        $statsDownloads = $paginator->paginate(
            $downloads,
            $request->query->get('page',1),
            15
        );




    	$content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin.html.twig', array(
    		'listEvents' => $listEvents,
    		'listMedias' => $listMedias,
            'listUsers' => $listUsers,
            'statsUsers' => $statsUsers,
            'statsMedias' => $statsMedias,
            'statsDownloads' => $statsDownloads,
            'statsEvents' => $statsEvents,
            'lastEvent' => $lastEvent 

    	));

        return new Response($content);
    }


    public function indexdetailsAction(Request $request, $id)
    {
         
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        $listUser = $event->getUsers();


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listUser,
            $request->query->get('page',1),
            10
        );

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_evenement_details.html.twig',array(
            'id' => $id,
            'event' => $event,
            'listUser' => $listUser,
            'pagination' => $pagination
        ));

        return new Response($content);

    }
    

    public function cinqaseptAction(Request $request)
    {
        // Récuperation des 5 à 7

        $events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

        $list5a7 = $events->findBy(
            array('category' => '5 à 7'),
            array('date' => 'desc'),
            200,
            0
        );

        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $list5a7,
            $request->query->get('page',1),
            15
        );
        


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_cinqasept.html.twig',array(
            'list5a7' => $list5a7,
            'pagination' => $pagination
        ));

        return new Response($content);
    }


    public function cinqaseptaddAction(Request $request)
    {
        
        // Creation d'un objet

        $event = new Ressources();

        
        $event->setCategory("5 à 7");
        $event->setType("allevent");

        // Creation du FormBuilder

        $form = $this->get('form.factory')->create(new RessourcesType(),$event);

        $form->handleRequest($request);
    
        if($form->isValid())
        {
            
           // Recuperation de l'entity manager

            $manager = $this->getDoctrine()->getManager();

            // Il faut persister l'entité dans un premier temps

            $manager->persist($event);

            // Il faut flusher ce qui a été persisté

            $manager->flush();

            $request->getSession()->getFlashBag()->add('notice',' Le 5 à 7 a bien été ajouté');

            return $this->redirect($this->generateUrl('umanis_event_admin_cinqasept'));

        }
 

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_cinqaseptadd.html.twig',array(
            'form' => $form->createView(),
            'event' => $event

        ));

        return new Response($content);


    }


    public function cinqaseptupdateAction(Request $request,$id)
    {

        // Recuperation des données du 5 à 7 grace a l'id afin de remplir le formulaire

        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un objet et datas pour le form

        $newEvent = new Ressources();
        $newEvent->setTitle($event->getTitle());
        $newEvent->setCategory($event->getCategory());
        $newEvent->setDescription($event->getDescription());
        $newEvent->setProgramme($event->getProgramme());

        // Creation du Form

       $form = $this->get('form.factory')->create(new RessourcesEditType(),$event);

        if($form->handleRequest($request)->isValid())
        {

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Le 5 à 7 bien été modifié');

            return $this->redirect($this->generateUrl('umanis_event_admin_cinqasept'));


        };  // Le form contient mtn les données post


        //******************** UPDATE DE L'OBJET ***********************//


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_cinqaseptupdate.html.twig',array(
            'form' => $form->createView(),
            'id' => $id,
            'event' => $event
        ));

        return new Response($content);
    }


    public function cinqaseptdeleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($event);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice','Le 5 à 7 bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_cinqasept'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_cinqaseptdelete.html.twig',array(
            'form' => $form->createView(),
            'event' => $event
        ));

        return new Response($content);

    }

    //********************************* FONCTION VIP **************************************//
    //*************************************************************************************//



    public function vipAction(Request $request)
    {
        // Récuperation des 5 à 7

        $events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

        $listVip = $events->findBy(
            array('category' => 'Vip'),
            array('date' => 'desc'),
            200,
            0
        );

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listVip,
            $request->query->get('page',1),
            15
        );

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_vip.html.twig',array(
            'listVip' => $listVip,
            'pagination' => $pagination
        ));

        return new Response($content);
    }


    public function vipaddAction(Request $request)
    {
        
        // Creation d'un objet

        $event = new Ressources();
        
        $event->setCategory("Vip");
        $event->setType("allevent");

        // Creation du FormBuilder

        $form = $this->get('form.factory')->create(new RessourcesType(),$event);

        $form->handleRequest($request);
    
        if($form->isValid())
        {
            
           // Recuperation de l'entity manager

            $manager = $this->getDoctrine()->getManager();

            // Il faut persister l'entité dans un premier temps

            $manager->persist($event);

            // Il faut flusher ce qui a été persisté

            $manager->flush();

            $request->getSession()->getFlashBag()->add('notice',' Le VIP a bien été ajouté');

            return $this->redirect($this->generateUrl('umanis_event_admin_vip'));

        }
 

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_vipadd.html.twig',array(
            'form' => $form->createView(),
            'event' => $event

        ));

        return new Response($content);


    }

    public function vipupdateAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un objet et datas pour le form

        $newEvent = new Ressources();
        $newEvent->setTitle($event->getTitle());
        $newEvent->setCategory($event->getCategory());
        $newEvent->setDescription($event->getDescription());

        // Creation du Form

       $form = $this->get('form.factory')->create(new RessourcesEditType(),$event);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Le VIP bien été modifié');

            return $this->redirect($this->generateUrl('umanis_event_admin_vip'));

        };  // Le form contient mtn les données post


        //******************** UPDATE DE L'OBJET ***********************//


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_vipupdate.html.twig',array(
            'form' => $form->createView(),
            'id' => $id,
            'event' => $event
        ));

        return new Response($content);
    }

    public function vipdeleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($event);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice','Le VIP bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_vip'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_vipdelete.html.twig',array(
            'form' => $form->createView(),
            'event' => $event
        ));

        return new Response($content);

    }


    //********************************* FONCTION NEWS **************************************//
    //*************************************************************************************//



    public function newsAction(Request $request)
    {
        // Récuperation des 5 à 7

        $events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:News');

        $listNews = $events->findBy(
            array(),
            array('date' => 'desc'),
            200,
            0
        );




        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listNews,
            $request->query->get('page',1),
            15
        );

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_news.html.twig',array(
            'listNews' => $listNews,
            'pagination' => $pagination
        ));

        return new Response($content);
    }


    public function newsaddAction(Request $request)
    {
        
        // Creation d'un objet

        $news = new News();

        // Creation du FormBuilder

        $form = $this->get('form.factory')->create(new NewsType(),$news);

        $form->handleRequest($request);
    
        if($form->isValid())
        {
            
           // Recuperation de l'entity manager

            $manager = $this->getDoctrine()->getManager();

            // Il faut persister l'entité dans un premier temps

            $manager->persist($news);

            // Il faut flusher ce qui a été persisté

            $manager->flush();

            $request->getSession()->getFlashBag()->add('notice',' La news a bien été ajoutée');

            return $this->redirect($this->generateUrl('umanis_event_admin_news'));

        }
 

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_newsadd.html.twig',array(
            'form' => $form->createView(),
            'news' => $news

        ));

        return new Response($content);


    }

    public function newsupdateAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('UmanisHomeBundle:News')->find($id);

        if($news === null)
        {
            throw new NotFoundHttpException("La news n'existe pas");
        }

        // Creation d'un objet et datas pour le form

        $newNews = new News();
        $newNews->setTitle($news->getTitle());
        $newNews->setCategory($news->getCategory());
        $newNews->setUrl($news->getUrl());
        $newNews->setDescription($news->getDescription());

        // Creation du Form

       $form = $this->get('form.factory')->create(new NewsEditType(),$news);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','La news bien été modifié');

            return $this->redirect($this->generateUrl('umanis_event_admin_news'));

        };  // Le form contient mtn les données post


        //******************** UPDATE DE L'OBJET ***********************//


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_newsupdate.html.twig',array(
            'form' => $form->createView(),
            'id' => $id,
            'news' => $news
        ));

        return new Response($content);
    }

    public function newsdeleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('UmanisHomeBundle:News')->find($id);

        if($news === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($news);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice','La news bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_news'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_newsdelete.html.twig',array(
            'form' => $form->createView(),
            'news' => $news
        ));

        return new Response($content);

    }


    //********************************* MEDIATHEQUE ***************************************//
    //*************************************************************************************//


    public function mediasAction(Request $request)
    {
        
        $events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

        $listMedias = $events->findBy(
            array('type' => 'medias'),
            array('date' => 'desc'),
            200,
            0
        );;

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listMedias,
            $request->query->get('page',1),
            15
        );

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_medias.html.twig',array(
            'listMedias' => $listMedias,
            'pagination' => $pagination
        ));

        return new Response($content);
    }


    public function mediasdetailsAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $media = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        $downloads = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Downloads');

        $listDownload = $downloads->findBy(
            array('mediaId' => $id),
            array('id' => 'desc'),
            200,
            0
        );

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listDownload,
            $request->query->get('page',1),
            12
        );




        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_mediatech_details.html.twig',array(
            'id' => $id,
            'media' => $media,
            'listDownload' => $listDownload,
            'pagination' => $pagination
            
        ));

        return new Response($content);

        
    }


    public function excelexportAction(Request $request, $id, $title)
    {

        // Récuperation de l'identifiant de connexion de doctrine

        $doctrineDatabaseConnection = $this->get('database_connection');

        // Requete SQL d'exportation

        $sqlQuery = "SELECT username, firstname, society, function, email FROM downloads WHERE mediaId = '$id'";

        // itération de la requete sql

        $sourceIterator = new DoctrineDBALConnectionSourceIterator($doctrineDatabaseConnection, $sqlQuery);

        // Preparation du fichier d'export

        $format = 'xls';
        $contentType = 'application/vnd.ms-excel';
        $writer = new XlsWriter('php://output');


        $filename = strtolower($title);

        // Fonction de callback

        $callback = function() use ($sourceIterator, $writer) {
            Handler::create($sourceIterator, $writer)->export();
        };

       
        return new StreamedResponse($callback, 200, array(
            'Content-Type'        => $contentType,
            'Content-Disposition' => $filename
        ));


    }



    public function excelexportuserAction(Request $request, $username)
    {

        // Récuperation de l'identifiant de connexion de doctrine

        $doctrineDatabaseConnection = $this->get('database_connection');

        // Requete SQL d'exportation

        $sqlQuery = "SELECT downloads.username,downloads.firstname,downloads.email,downloads.function,downloads.society, downloads.titlemedia 
                     FROM users, downloads 
                     WHERE downloads.username = '$username' 
                     AND users.username = '$username' ";

        // itération de la requete sql

        $sourceIterator = new DoctrineDBALConnectionSourceIterator($doctrineDatabaseConnection, $sqlQuery);

        // Preparation du fichier d'export

        $format = 'xls';
        $contentType = 'application/vnd.ms-excel';
        $writer = new XlsWriter('php://output');


        $filename = 'Track_'.strtolower($username);

        // Fonction de callback

        $callback = function() use ($sourceIterator, $writer) {
            Handler::create($sourceIterator, $writer)->export();
        };

       
        return new StreamedResponse($callback, 200, array(
            'Content-Type'        => $contentType,
            'Content-Disposition' => $filename
        ));


    }

    public function excelexportAlluserAction(Request $request)
    {

        // Récuperation de l'identifiant de connexion de doctrine

        $doctrineDatabaseConnection = $this->get('database_connection');

        // Requete SQL d'exportation

        $sqlQuery = "SELECT email,username,firstname,society,function,last_login,consentGDPR5a7,consentGDPREvent FROM users";

        // itération de la requete sql

        $sourceIterator = new DoctrineDBALConnectionSourceIterator($doctrineDatabaseConnection, $sqlQuery);

        // Preparation du fichier d'export

        $format = 'xls';
        $contentType = 'application/vnd.ms-excel';
        $writer = new XlsWriter('php://output');


        $filename = 'Track_'.strtolower($username);

        // Fonction de callback

        $callback = function() use ($sourceIterator, $writer) {
            Handler::create($sourceIterator, $writer)->export();
        };


        return new StreamedResponse($callback, 200, array(
            'Content-Type'        => $contentType,
            'Content-Disposition' => $filename
        ));


    }


    public function mediasaddAction(Request $request)
    {
        
        // Creation d'un objet

        $medias = new Ressources();
        $medias->setType("medias");

        // Creation du FormBuilder

        $form = $this->get('form.factory')->create(new MediasType(),$medias);

        $form->handleRequest($request);
    
        if($form->isValid())
        {
            
           // Recuperation de l'entity manager

            $manager = $this->getDoctrine()->getManager();

            // Il faut persister l'entité dans un premier temps

            $manager->persist($medias);

            // Il faut flusher ce qui a été persisté

            $manager->flush();

            $request->getSession()->getFlashBag()->add('notice',' Le media a bien été ajouté');

            return $this->redirect($this->generateUrl('umanis_event_admin_medias'));

        }
 

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_mediasadd.html.twig',array(
            'form' => $form->createView(),
            'medias' => $medias

        ));

        return new Response($content);


    }

    public function mediasupdateAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $medias = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($medias === null)
        {
            throw new NotFoundHttpException("Le media n'existe pas");
        }

        // Creation d'un objet et datas pour le form

        $newMedias = new Ressources();
        $newMedias->setTitle($medias->getTitle());
        $newMedias->setCategory($medias->getCategory());
        $newMedias->setWords($medias->getWords());
        $newMedias->setDescription($medias->getDescription());

        // Creation du Form

       $form = $this->get('form.factory')->create(new MediasEditType(),$medias);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Le media bien été modifié');

            return $this->redirect($this->generateUrl('umanis_event_admin_medias'));

        };  // Le form contient mtn les données post


        //******************** UPDATE DE L'OBJET ***********************//


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_mediasupdate.html.twig',array(
            'form' => $form->createView(),
            'id' => $id,
            'medias' => $medias 
        ));

        return new Response($content);
    }

    public function mediasdeleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $medias = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($medias === null)
        {
            throw new NotFoundHttpException("Le media n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($medias);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Le media bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_medias'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_mediasdelete.html.twig',array(
            'form' => $form->createView(),
            'medias' => $medias
        ));

        return new Response($content);

    }



    //********************************* FONCTION EVENT **************************************//
    //*************************************************************************************//

    public function eventAction(Request $request)
    {
        // Récuperation des 5 à 7

        $events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

        $listEvent = $events->findBy(
            array('category' => 'Event'),
            array('date' => 'desc'),
            200,
            0
        );

           $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
            $listEvent,
            $request->query->get('page',1),
            15
        );

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_event.html.twig',array(
            'listEvent' => $listEvent,
            'pagination' => $pagination
        ));

        return new Response($content);
    }


    public function eventaddAction(Request $request)
    {
        
        // Creation d'un objet

        $event = new Ressources();
        
        $event->setCategory("Event");
        $event->setType("allevent");

        // Creation du FormBuilder

        $form = $this->get('form.factory')->create(new RessourcesType(),$event);

        $form->handleRequest($request);
    
        if($form->isValid())
        {
            
           // Recuperation de l'entity manager

            $manager = $this->getDoctrine()->getManager();

            // Il faut persister l'entité dans un premier temps

            $manager->persist($event);

            // Il faut flusher ce qui a été persisté

            $manager->flush();

            $request->getSession()->getFlashBag()->add('notice',' L\'Event a bien été ajouté');

            return $this->redirect($this->generateUrl('umanis_event_admin_event'));

        }
 

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_eventadd.html.twig',array(
            'form' => $form->createView(),
            'event' => $event

        ));

        return new Response($content);


    }

    public function eventupdateAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un objet et datas pour le form

        $newEvent = new Ressources();
        $newEvent->setTitle($event->getTitle());
        $newEvent->setCategory($event->getCategory());
        $newEvent->setDescription($event->getDescription());

        // Creation du Form

       $form = $this->get('form.factory')->create(new RessourcesEditType(),$event);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','L\'Event bien été modifié');

            return $this->redirect($this->generateUrl('umanis_event_admin_event'));

        };  // Le form contient mtn les données post


        //******************** UPDATE DE L'OBJET ***********************//


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_eventupdate.html.twig',array(
            'form' => $form->createView(),
            'id' => $id,
            'event' => $event
        ));

        return new Response($content);
    }

    public function eventdeleteAction(Request $request, $id)
    {

        
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($event);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice','L\'event bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_event'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_eventdelete.html.twig',array(
            'form' => $form->createView(),
            'event' => $event
        ));

        return new Response($content);

    }


    //********************************* FONCTION RUGBY ************************************//
    //*************************************************************************************//

    public function rugbyAction(Request $request)
    {
        // Récuperation des 5 à 7

        $events = $this->getDoctrine()->getManager()->getRepository('UmanisHomeBundle:Ressources');

        $listRugby = $events->findBy(
            array('category' => 'Rugby'),
            array('date' => 'desc'),
            200,
            0
        );

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listRugby,
            $request->query->get('page',1),
            15
        );


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_rugby.html.twig',array(
            'listRugby' => $listRugby,
            'pagination' => $pagination
        ));

        return new Response($content);
    }


    public function rugbyaddAction(Request $request)
    {
        
        // Creation d'un objet

        $event = new Ressources();
        
        $event->setCategory("Rugby");
        $event->setType("allevent");

        // Creation du FormBuilder

        $form = $this->get('form.factory')->create(new RessourcesType(),$event);

        $form->handleRequest($request);
    
        if($form->isValid())
        {
            
           // Recuperation de l'entity manager

            $manager = $this->getDoctrine()->getManager();

            // Il faut persister l'entité dans un premier temps

            $manager->persist($event);

            // Il faut flusher ce qui a été persisté

            $manager->flush();

            $request->getSession()->getFlashBag()->add('notice',' L\'event rugby a bien été ajouté');

            return $this->redirect($this->generateUrl('umanis_event_admin_rugby'));

        }
 

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_rugbyadd.html.twig',array(
            'form' => $form->createView(),
            'event' => $event

        ));

        return new Response($content);


    }

    public function rugbyupdateAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un objet et datas pour le form

        $newEvent = new Ressources();
        $newEvent->setTitle($event->getTitle());
        $newEvent->setCategory($event->getCategory());
        $newEvent->setDescription($event->getDescription());

        // Creation du Form

       $form = $this->get('form.factory')->create(new RessourcesEditType(),$event);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','L\'event rugby bien été modifié');

            return $this->redirect($this->generateUrl('umanis_event_admin_rugby'));

        };  // Le form contient mtn les données post


        //******************** UPDATE DE L'OBJET ***********************//


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_rugbyupdate.html.twig',array(
            'form' => $form->createView(),
            'id' => $id,
            'event' => $event
        ));

        return new Response($content);
    }

    public function rugbydeleteAction(Request $request, $id)
    {

        
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('UmanisHomeBundle:Ressources')->find($id);

        if($event === null)
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($event);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice','L\'event bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_rugby'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_rugbydelete.html.twig',array(
            'form' => $form->createView(),
            'event' => $event
        ));

        return new Response($content);

    }


    //********************************* FONCTION GESTION USERS **************************************//
    //***********************************************************************************************//


    public function usersAction(Request $request)
    {

        $events = $this->getDoctrine()->getManager()->getRepository('UmanisUserBundle:Users');


        $users = $events->findBy(
            array(),
            array('id' => 'desc'),
            1800,
            0
        );

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $users,
            $request->query->get('page',1),
            15
        );


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_users.html.twig',array(
            'users' => $users,
            'pagination' => $pagination
        ));

        return new Response($content);
    }

    public function usersdetailsAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('UmanisUserBundle:Users')->find($id);

        $listEvents = $user->getRessources();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $listEvents,
            $request->query->get('page',1),
            10
        );

        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_users_details.html.twig',array(
            'id' => $id,
            'user' => $user,
            'listEvents' => $listEvents,
            'pagination' => $pagination
        ));

        return new Response($content);
    }

    public function usersdeleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('UmanisUserBundle:Users')->find($id);

        if($user === null)
        {
            throw new NotFoundHttpException("L'utilisateur n'existe pas");
        }

        // Creation d'un formulaire vide pour éviter les attaques CSRF
        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($user);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice','L\'utilisateur bien été supprimé');

            return $this->redirect($this->generateUrl('umanis_event_admin_users'));
        }


        $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_users_delete.html.twig',array(
            'form' => $form->createView(),
            'user' => $user
        ));

        return new Response($content);

    }



    /************* RECUPERATION $_POST ********************** 

        public function cinqaseptpreviewAction(Request $request)
        {
        
            $form = $this->getRequest()->request->get('form');

            $content = $this->get('templating')->render('UmanisHomeBundle:Back:Admin\admin_cinqaseptpreview.html.twig', array(
                'form' => $form,

            ));

            return new Response($content);
        }

    *********************************************************/


    





	
}