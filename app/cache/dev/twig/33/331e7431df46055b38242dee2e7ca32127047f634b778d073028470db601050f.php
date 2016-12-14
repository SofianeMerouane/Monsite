<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f0376aeeb02ff0006785def48d7e013e32b126d9fc29a6962dfcc413d9d5a78f extends Twig_Template
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
        $__internal_9ae4d6f22369961cb2bc7108fdba67fb99b276e2c07da236fcd583193f1ceb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae4d6f22369961cb2bc7108fdba67fb99b276e2c07da236fcd583193f1ceb8f->enter($__internal_9ae4d6f22369961cb2bc7108fdba67fb99b276e2c07da236fcd583193f1ceb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9ae4d6f22369961cb2bc7108fdba67fb99b276e2c07da236fcd583193f1ceb8f->leave($__internal_9ae4d6f22369961cb2bc7108fdba67fb99b276e2c07da236fcd583193f1ceb8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
