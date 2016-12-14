<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c8a783b26e91f930c49aa7c30dae099283def5a230d1337642895a4f724c5bc3 extends Twig_Template
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
        $__internal_39275fc8d8a0da565845c148d2c646b4d64d4c8bb05b0e201a92f17d23829f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39275fc8d8a0da565845c148d2c646b4d64d4c8bb05b0e201a92f17d23829f23->enter($__internal_39275fc8d8a0da565845c148d2c646b4d64d4c8bb05b0e201a92f17d23829f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_39275fc8d8a0da565845c148d2c646b4d64d4c8bb05b0e201a92f17d23829f23->leave($__internal_39275fc8d8a0da565845c148d2c646b4d64d4c8bb05b0e201a92f17d23829f23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
