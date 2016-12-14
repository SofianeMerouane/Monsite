<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_194706fb4b3b2c6577f0da863463986bf20ea997b61e1a3bba8eef1781b0252c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2b7bc76030796f4053ecc2e65749391f465b7ac7c1516a3bfe07c51ddf33f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b7bc76030796f4053ecc2e65749391f465b7ac7c1516a3bfe07c51ddf33f68->enter($__internal_a2b7bc76030796f4053ecc2e65749391f465b7ac7c1516a3bfe07c51ddf33f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a2b7bc76030796f4053ecc2e65749391f465b7ac7c1516a3bfe07c51ddf33f68->leave($__internal_a2b7bc76030796f4053ecc2e65749391f465b7ac7c1516a3bfe07c51ddf33f68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
