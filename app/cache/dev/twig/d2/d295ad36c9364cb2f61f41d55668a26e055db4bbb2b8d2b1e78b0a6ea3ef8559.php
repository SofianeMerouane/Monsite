<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ceabd75a1919cdbdd9c39d019220e5a3e095af5f36f89151ed1984f1d34c633f extends Twig_Template
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
        $__internal_37cfa25fa36e21dd29a7dae6b34847872f2f8b1683d2f4ccb2725680652e326b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cfa25fa36e21dd29a7dae6b34847872f2f8b1683d2f4ccb2725680652e326b->enter($__internal_37cfa25fa36e21dd29a7dae6b34847872f2f8b1683d2f4ccb2725680652e326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37cfa25fa36e21dd29a7dae6b34847872f2f8b1683d2f4ccb2725680652e326b->leave($__internal_37cfa25fa36e21dd29a7dae6b34847872f2f8b1683d2f4ccb2725680652e326b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
