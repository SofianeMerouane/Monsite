<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_46f8f9ca92bb4d4d5efb315f2a9a0204057a358d717c6baa7863cf2c9f8bd514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e3b1a47594b5de5f6d2e70081e32856713cd2cd1c414ca2fcdc9c58ee4077dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b1a47594b5de5f6d2e70081e32856713cd2cd1c414ca2fcdc9c58ee4077dea->enter($__internal_e3b1a47594b5de5f6d2e70081e32856713cd2cd1c414ca2fcdc9c58ee4077dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b1a47594b5de5f6d2e70081e32856713cd2cd1c414ca2fcdc9c58ee4077dea->leave($__internal_e3b1a47594b5de5f6d2e70081e32856713cd2cd1c414ca2fcdc9c58ee4077dea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaac9780a851b6a477fcc89f4617b2d10a359c84bf59befee844a5ca9554fef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaac9780a851b6a477fcc89f4617b2d10a359c84bf59befee844a5ca9554fef2->enter($__internal_eaac9780a851b6a477fcc89f4617b2d10a359c84bf59befee844a5ca9554fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eaac9780a851b6a477fcc89f4617b2d10a359c84bf59befee844a5ca9554fef2->leave($__internal_eaac9780a851b6a477fcc89f4617b2d10a359c84bf59befee844a5ca9554fef2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
