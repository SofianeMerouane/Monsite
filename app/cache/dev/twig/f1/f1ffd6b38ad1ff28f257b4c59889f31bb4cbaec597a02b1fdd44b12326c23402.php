<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_87fb5c8afb054de634def49b89e923b784ea46d11876115ada0facfab022848d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8d32d1e1839f3603ba39468ed8021fae8804c3ce99f22c4342f00f9e83f79986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d32d1e1839f3603ba39468ed8021fae8804c3ce99f22c4342f00f9e83f79986->enter($__internal_8d32d1e1839f3603ba39468ed8021fae8804c3ce99f22c4342f00f9e83f79986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d32d1e1839f3603ba39468ed8021fae8804c3ce99f22c4342f00f9e83f79986->leave($__internal_8d32d1e1839f3603ba39468ed8021fae8804c3ce99f22c4342f00f9e83f79986_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_436d9f10585e097f9d2a2a3d709cf21138271276ab893d5f38567bf6b95b6d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436d9f10585e097f9d2a2a3d709cf21138271276ab893d5f38567bf6b95b6d7a->enter($__internal_436d9f10585e097f9d2a2a3d709cf21138271276ab893d5f38567bf6b95b6d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_436d9f10585e097f9d2a2a3d709cf21138271276ab893d5f38567bf6b95b6d7a->leave($__internal_436d9f10585e097f9d2a2a3d709cf21138271276ab893d5f38567bf6b95b6d7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
