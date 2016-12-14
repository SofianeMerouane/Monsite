<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9af87f4e439bd60988560e45bd29a1fb9ec79753a1ab4801a774288e53d9c2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a661366e726ff767eb198793680738d15d7470223b1ec3e6a20ed6c638dcddcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a661366e726ff767eb198793680738d15d7470223b1ec3e6a20ed6c638dcddcc->enter($__internal_a661366e726ff767eb198793680738d15d7470223b1ec3e6a20ed6c638dcddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a661366e726ff767eb198793680738d15d7470223b1ec3e6a20ed6c638dcddcc->leave($__internal_a661366e726ff767eb198793680738d15d7470223b1ec3e6a20ed6c638dcddcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_758669cfcb63ff9030108b7a53d60efba6cd64f57f372117cb1c893d8ac8ddc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758669cfcb63ff9030108b7a53d60efba6cd64f57f372117cb1c893d8ac8ddc0->enter($__internal_758669cfcb63ff9030108b7a53d60efba6cd64f57f372117cb1c893d8ac8ddc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_758669cfcb63ff9030108b7a53d60efba6cd64f57f372117cb1c893d8ac8ddc0->leave($__internal_758669cfcb63ff9030108b7a53d60efba6cd64f57f372117cb1c893d8ac8ddc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
