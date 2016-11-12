<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *
 * Class PhotoGalleryController
 * @package AppBundle\Controller
 *
 * @Route("/admin/gallery")
 */
class GalleryController extends Controller
{
    /**
     * @Route("/", name="gallery_index")
     * @Method("GET")
     */
    public function index()
    {
        return $this->render('gallery/index.html.twig');
    }
}