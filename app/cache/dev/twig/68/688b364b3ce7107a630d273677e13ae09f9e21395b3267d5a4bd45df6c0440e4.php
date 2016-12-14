<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_319674f5426808f8deaec3c5b67ed0506c6fc745a487c2b68018578a95b7a63e extends Twig_Template
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
        $__internal_c0b8113ecec220e5e7ca737bfe0b1ea492bf0ca1bc147e5fcff46aa23e897e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b8113ecec220e5e7ca737bfe0b1ea492bf0ca1bc147e5fcff46aa23e897e5f->enter($__internal_c0b8113ecec220e5e7ca737bfe0b1ea492bf0ca1bc147e5fcff46aa23e897e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c0b8113ecec220e5e7ca737bfe0b1ea492bf0ca1bc147e5fcff46aa23e897e5f->leave($__internal_c0b8113ecec220e5e7ca737bfe0b1ea492bf0ca1bc147e5fcff46aa23e897e5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
