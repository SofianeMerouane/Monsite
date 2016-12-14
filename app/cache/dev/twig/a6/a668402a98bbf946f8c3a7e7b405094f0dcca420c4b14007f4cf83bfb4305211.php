<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0d031845ef8655b1ab4b03ee0fd27bfaa87cb6c634ffd205818df76e322712f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0cbf6f15583a0f357371b80fccd7fba6c11fffa8a637e6d22ec06786ea005911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbf6f15583a0f357371b80fccd7fba6c11fffa8a637e6d22ec06786ea005911->enter($__internal_0cbf6f15583a0f357371b80fccd7fba6c11fffa8a637e6d22ec06786ea005911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbf6f15583a0f357371b80fccd7fba6c11fffa8a637e6d22ec06786ea005911->leave($__internal_0cbf6f15583a0f357371b80fccd7fba6c11fffa8a637e6d22ec06786ea005911_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43e2d1a2a5fd6125677b80c948b34373b869470dadc1818cdc7a1b033a40752c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e2d1a2a5fd6125677b80c948b34373b869470dadc1818cdc7a1b033a40752c->enter($__internal_43e2d1a2a5fd6125677b80c948b34373b869470dadc1818cdc7a1b033a40752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_43e2d1a2a5fd6125677b80c948b34373b869470dadc1818cdc7a1b033a40752c->leave($__internal_43e2d1a2a5fd6125677b80c948b34373b869470dadc1818cdc7a1b033a40752c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
