<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0049fb88e44584da5993a6cd9b14c2d81522707c913b48324c7630a70829d5d9 extends Twig_Template
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
        $__internal_2f8f20afd208b3167f45d3cb83d40e3760dcc2b944e6065352799c2c4a56216e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8f20afd208b3167f45d3cb83d40e3760dcc2b944e6065352799c2c4a56216e->enter($__internal_2f8f20afd208b3167f45d3cb83d40e3760dcc2b944e6065352799c2c4a56216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2f8f20afd208b3167f45d3cb83d40e3760dcc2b944e6065352799c2c4a56216e->leave($__internal_2f8f20afd208b3167f45d3cb83d40e3760dcc2b944e6065352799c2c4a56216e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
