<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IFeelController extends Controller
{
	/**
	 * @Route("/ifeel/text", name="i_feel_text")
	 */
	public function iFeelTextAction()
	{
		$emojis = ['grimacing', 'smile', 'heart_eyes', 'cold_sweat', 'thinking_face'];
		shuffle($emojis);
		$emoji = $emojis[0];

	return new Response('<html><body> '.$emoji. '</body></html>');
	}

		/**
	 * @Route("/ifeel/image", name="i_feel_image")
	 */
	public function iFeelImageAction()
	{
		$emojis = ['grimacing', 'smile', 'heart_eyes', 'cold_sweat', 'thinking_face'];
		shuffle($emojis);
		$emoji = $emojis[0];

	return $this->render('ifeel/image.html.twig', [
		'emoji' => $emoji
		
	]);
	}
}
