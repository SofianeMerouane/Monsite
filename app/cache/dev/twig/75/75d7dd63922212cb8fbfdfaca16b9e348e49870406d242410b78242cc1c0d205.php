<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ad1f9dc4b48472515abb91a14711330e906459eb3ee88693fafcb35ff670e469 extends Twig_Template
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
        $__internal_e933cdd66345c9ab27909faa626b0301e2c483f4460c953cd232802d2073c255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e933cdd66345c9ab27909faa626b0301e2c483f4460c953cd232802d2073c255->enter($__internal_e933cdd66345c9ab27909faa626b0301e2c483f4460c953cd232802d2073c255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e933cdd66345c9ab27909faa626b0301e2c483f4460c953cd232802d2073c255->leave($__internal_e933cdd66345c9ab27909faa626b0301e2c483f4460c953cd232802d2073c255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
