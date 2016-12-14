<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_858132bbe95c2920a63afd0902f258ec19aba139a06b7af0367f9b597e7c1f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cc9d17f39eac00e88e618ae47ed58a439ab98f6f19f9280a6a26cbec23ae5afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9d17f39eac00e88e618ae47ed58a439ab98f6f19f9280a6a26cbec23ae5afc->enter($__internal_cc9d17f39eac00e88e618ae47ed58a439ab98f6f19f9280a6a26cbec23ae5afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9d17f39eac00e88e618ae47ed58a439ab98f6f19f9280a6a26cbec23ae5afc->leave($__internal_cc9d17f39eac00e88e618ae47ed58a439ab98f6f19f9280a6a26cbec23ae5afc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_081dddeaa9d59176762c1d80807c124cf6b2712d17a3cc34028a82aeec054675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081dddeaa9d59176762c1d80807c124cf6b2712d17a3cc34028a82aeec054675->enter($__internal_081dddeaa9d59176762c1d80807c124cf6b2712d17a3cc34028a82aeec054675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_081dddeaa9d59176762c1d80807c124cf6b2712d17a3cc34028a82aeec054675->leave($__internal_081dddeaa9d59176762c1d80807c124cf6b2712d17a3cc34028a82aeec054675_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
