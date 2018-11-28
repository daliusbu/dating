<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 18.11.22
 * Time: 20.23
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RegisterController extends AbstractController
{

    public function registerAction()
    {
        
    }

    /**
     * @param $name
     * @param \Swift_Mailer $mailer
     * @Route("/testing", name="testing")
     * @return Response
     */
    public function testingsomething( \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Emails/registration.html.twig',
                    array('name' => 'Mane')
                ),
                'text/html'
            );
        $mailer->send($message);
        return new Response(
            '<html><body>Lucky number: Fucks</body></html>'
        );
    }
}