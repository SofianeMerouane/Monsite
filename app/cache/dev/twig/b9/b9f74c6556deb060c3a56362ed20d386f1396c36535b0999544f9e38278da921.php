<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_151802f65d681dfd5d9db770d0864c7df709ed22d953a03b9937b7c38a3191af extends Twig_Template
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
        $__internal_88b273f40f247d22a01e9cc67cecdf62423413c167ed9ee664c6c409d8b83aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b273f40f247d22a01e9cc67cecdf62423413c167ed9ee664c6c409d8b83aea->enter($__internal_88b273f40f247d22a01e9cc67cecdf62423413c167ed9ee664c6c409d8b83aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_88b273f40f247d22a01e9cc67cecdf62423413c167ed9ee664c6c409d8b83aea->leave($__internal_88b273f40f247d22a01e9cc67cecdf62423413c167ed9ee664c6c409d8b83aea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
