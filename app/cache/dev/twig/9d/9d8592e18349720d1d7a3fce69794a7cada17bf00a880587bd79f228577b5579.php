<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_fad57360c856970bb8b8d338a08f1bd3027ce4ffda3c224ebb92937e18640e2b extends Twig_Template
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
        $__internal_9f33eaa57f9ccd57d32a74c922ac4c528e14154b4d5c4c55454f4a9c8084b049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f33eaa57f9ccd57d32a74c922ac4c528e14154b4d5c4c55454f4a9c8084b049->enter($__internal_9f33eaa57f9ccd57d32a74c922ac4c528e14154b4d5c4c55454f4a9c8084b049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9f33eaa57f9ccd57d32a74c922ac4c528e14154b4d5c4c55454f4a9c8084b049->leave($__internal_9f33eaa57f9ccd57d32a74c922ac4c528e14154b4d5c4c55454f4a9c8084b049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
