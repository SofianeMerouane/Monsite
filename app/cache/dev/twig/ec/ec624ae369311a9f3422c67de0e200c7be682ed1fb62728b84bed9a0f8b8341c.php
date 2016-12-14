<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0ccd554ada5983bbdab3bfdd453ab3907056b26d3c7231c4c303718e2071bc7d extends Twig_Template
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
        $__internal_b9149f0abcf89676926b383d14f4df32d23902e0e2f91408a27dfc125a7d117c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9149f0abcf89676926b383d14f4df32d23902e0e2f91408a27dfc125a7d117c->enter($__internal_b9149f0abcf89676926b383d14f4df32d23902e0e2f91408a27dfc125a7d117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b9149f0abcf89676926b383d14f4df32d23902e0e2f91408a27dfc125a7d117c->leave($__internal_b9149f0abcf89676926b383d14f4df32d23902e0e2f91408a27dfc125a7d117c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
