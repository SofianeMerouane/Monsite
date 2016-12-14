<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4a6c25b67bc7d10ad39913298ea5e45c4952750838a9798e743dfdf6768b80a8 extends Twig_Template
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
        $__internal_f50c9efe9d0ba0b3169c664eeaba9f8221bb45caae2c068a0418ef28bc28115a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50c9efe9d0ba0b3169c664eeaba9f8221bb45caae2c068a0418ef28bc28115a->enter($__internal_f50c9efe9d0ba0b3169c664eeaba9f8221bb45caae2c068a0418ef28bc28115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f50c9efe9d0ba0b3169c664eeaba9f8221bb45caae2c068a0418ef28bc28115a->leave($__internal_f50c9efe9d0ba0b3169c664eeaba9f8221bb45caae2c068a0418ef28bc28115a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
