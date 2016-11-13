<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class CategoryController
 * @package AppBundle\Controller
 *
 * @Route("/admin/category")
 */
class CategoryController extends Controller
{
    /**
     * @Route("/", name="category_list")
     * @Method("GET")
     */
    public function indexAction()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->getUserCategories($this->getUser()->getId());

        return $this->json($categories);
    }

    /**
     * @Route("/create", name="category_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $content = json_decode($request->getContent(), true);

        $category = new Category();
        $category->setName($content['name']);
        $category->setUserId($this->getUser()->getId());

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();

        return $this->json(['result' => true, 'category' => ['name' => $category->getName(), 'id' => $category->getId()]]);
    }

    /**
     * @param Request $request
     *
     * @Route("/edit/{categoryId}", name="category_edit")
     * @Method("PUT")
     */
    public function editAction(Request $request)
    {
        $content = json_decode($request->getContent(), true);

        $categoryId = $request->get('categoryId');
        
        $category = $this->getDoctrine()->getRepository(Category::class)->getCategoryByIdAndUser(
            $categoryId,
            $this->getUser()->getId()
        );

        $category->setName($content['name']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();

        return $this->json(['result' => true]);

    }

    /**
     * @param Request $request
     *
     * @Route("/delete/{categoryId}", name="category_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request)
    {
        $categoryId = $request->get('categoryId');

        $category = $this->getDoctrine()->getRepository(Category::class)->getCategoryByIdAndUser(
            $categoryId,
            $this->getUser()->getId()
        );

        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        return $this->json(['result' => true]);
    }

}