<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_489175b787564bd735408531f4b4cbcf451a50dc485d56df45e18d3f4b544310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79cd504869ceb561e74d406462cb2c759a500ea5631267f9537ca3f0f38b8fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cd504869ceb561e74d406462cb2c759a500ea5631267f9537ca3f0f38b8fc9->enter($__internal_79cd504869ceb561e74d406462cb2c759a500ea5631267f9537ca3f0f38b8fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79cd504869ceb561e74d406462cb2c759a500ea5631267f9537ca3f0f38b8fc9->leave($__internal_79cd504869ceb561e74d406462cb2c759a500ea5631267f9537ca3f0f38b8fc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3a718722f9c4bebc6912d7fd9857439b7d32c20a9ad7bc200e9b286ed81b25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a718722f9c4bebc6912d7fd9857439b7d32c20a9ad7bc200e9b286ed81b25e->enter($__internal_b3a718722f9c4bebc6912d7fd9857439b7d32c20a9ad7bc200e9b286ed81b25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b3a718722f9c4bebc6912d7fd9857439b7d32c20a9ad7bc200e9b286ed81b25e->leave($__internal_b3a718722f9c4bebc6912d7fd9857439b7d32c20a9ad7bc200e9b286ed81b25e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
