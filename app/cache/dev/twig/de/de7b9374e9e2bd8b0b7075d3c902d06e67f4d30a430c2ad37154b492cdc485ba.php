<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f4ddde66a7fff09f3d9f1b1375f9ff3030cd744c73545c91f8fc37987a407cea extends Twig_Template
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
        $__internal_529e3acab8e55675eccfeaa82349c36c044efa8b4c38b50c7006ecf9ed03597e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529e3acab8e55675eccfeaa82349c36c044efa8b4c38b50c7006ecf9ed03597e->enter($__internal_529e3acab8e55675eccfeaa82349c36c044efa8b4c38b50c7006ecf9ed03597e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_529e3acab8e55675eccfeaa82349c36c044efa8b4c38b50c7006ecf9ed03597e->leave($__internal_529e3acab8e55675eccfeaa82349c36c044efa8b4c38b50c7006ecf9ed03597e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
