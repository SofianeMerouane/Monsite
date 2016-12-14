<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d74dfe66b0c99b4a8a81bb9dd9e9d4525d2f0d0e9df076492ad855cce6d64e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_70a67a8b95c17c89e94132fe698feb8290bb496269add388dc8ab2fe6db2bcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a67a8b95c17c89e94132fe698feb8290bb496269add388dc8ab2fe6db2bcad->enter($__internal_70a67a8b95c17c89e94132fe698feb8290bb496269add388dc8ab2fe6db2bcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a67a8b95c17c89e94132fe698feb8290bb496269add388dc8ab2fe6db2bcad->leave($__internal_70a67a8b95c17c89e94132fe698feb8290bb496269add388dc8ab2fe6db2bcad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2e0f125c64f5972d8ec8fe18cfbbfe1e17e9c05525f43c5c58f79db90c779e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e0f125c64f5972d8ec8fe18cfbbfe1e17e9c05525f43c5c58f79db90c779e4->enter($__internal_c2e0f125c64f5972d8ec8fe18cfbbfe1e17e9c05525f43c5c58f79db90c779e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c2e0f125c64f5972d8ec8fe18cfbbfe1e17e9c05525f43c5c58f79db90c779e4->leave($__internal_c2e0f125c64f5972d8ec8fe18cfbbfe1e17e9c05525f43c5c58f79db90c779e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
