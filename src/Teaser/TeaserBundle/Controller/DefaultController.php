<?php

namespace Teaser\TeaserBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Teaser\TeaserBundle\Entity\Blog;
use Teaser\TeaserBundle\Form\BlogType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
class DefaultController extends Controller
{
    /**
     * @Route("/",name="front_index")
     * @Template()
     */
    public function indexAction()
    {
        $name = "Kevin";  
        return array('name' => $name);
    }
    /**
     * @Route("/change",name="front_change")
     * @Template()
     */
    public function changeAction()
    {
        return array();
    }
    /**
     * @Route("/teaser",name="front_teaser")
     * @Template()
     * 
     */
    public function teaserAction()
    {
        $blog = new Blog();
        $form = $this->createForm(new BlogType() ,$blog);
        return array('form'=>$form->createView());
    }
    
    /**
     * @Route("/document/{name}",name="front_document")
     * @Template()
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of document action",
     *  input="$name | Your Name",
     *  output="$name | Your Name"
     *  )
     */
    public function documentAction($name)
    {
        
        return array('name'=>$name);
    }
    
    /**
     * @Route("/download",name="front_download")
     * @Template()
     */
    public function downloadAction()
    {
        $options = array(
        'serve_filename' => 'VERSION.txt',
        'absolute_path' => true,
        'inline' => false,
        );
        
        $response = $this->get('igorw_file_serve.response_factory')
            ->create('VERSION.txt', 'text/plain', $options);
        return $response;
      }
      
}
