<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6d2c1eb9090689e7e1b03ea0040e3f2729c4eb697646ee3a99604db41fcb3fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_ed6f584b5565f8452e3ed7778113e862db0d37d0bd954a978b021ce456d87351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6f584b5565f8452e3ed7778113e862db0d37d0bd954a978b021ce456d87351->enter($__internal_ed6f584b5565f8452e3ed7778113e862db0d37d0bd954a978b021ce456d87351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6f584b5565f8452e3ed7778113e862db0d37d0bd954a978b021ce456d87351->leave($__internal_ed6f584b5565f8452e3ed7778113e862db0d37d0bd954a978b021ce456d87351_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b86c84699766bfbf7d53761a50bea9637be3ac0443341f0532350d073c938749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86c84699766bfbf7d53761a50bea9637be3ac0443341f0532350d073c938749->enter($__internal_b86c84699766bfbf7d53761a50bea9637be3ac0443341f0532350d073c938749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b86c84699766bfbf7d53761a50bea9637be3ac0443341f0532350d073c938749->leave($__internal_b86c84699766bfbf7d53761a50bea9637be3ac0443341f0532350d073c938749_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
