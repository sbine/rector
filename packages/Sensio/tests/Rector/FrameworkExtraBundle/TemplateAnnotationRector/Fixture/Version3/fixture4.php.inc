<?php declare (strict_types=1);

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ClassWithNamedService43
{
    /**
     * @Template("AdminBundle:Payment:create.html.twig")
     */
    public function indexAction()
    {
        return $this->render('payment/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

?>
-----
<?php declare (strict_types=1);

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ClassWithNamedService43
{
    public function indexAction()
    {
        return $this->render('payment/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

?>
