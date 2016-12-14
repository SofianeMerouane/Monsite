<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b8d15cca3f542679777cea9944af4791734044b1c42570f9f846bbbb047058fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdd2af1e59a1eaa7a98a296f1ba88f2fe5fab811c253b18af3c303b35414fc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd2af1e59a1eaa7a98a296f1ba88f2fe5fab811c253b18af3c303b35414fc4d->enter($__internal_bdd2af1e59a1eaa7a98a296f1ba88f2fe5fab811c253b18af3c303b35414fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd2af1e59a1eaa7a98a296f1ba88f2fe5fab811c253b18af3c303b35414fc4d->leave($__internal_bdd2af1e59a1eaa7a98a296f1ba88f2fe5fab811c253b18af3c303b35414fc4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d67d94c20aa72830eac6a8887559ea23ce318aa9d6ada2bac1fd2058297a9252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67d94c20aa72830eac6a8887559ea23ce318aa9d6ada2bac1fd2058297a9252->enter($__internal_d67d94c20aa72830eac6a8887559ea23ce318aa9d6ada2bac1fd2058297a9252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d67d94c20aa72830eac6a8887559ea23ce318aa9d6ada2bac1fd2058297a9252->leave($__internal_d67d94c20aa72830eac6a8887559ea23ce318aa9d6ada2bac1fd2058297a9252_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee9a9a77f62c586ef6bb4924363ef47fa5d0a051492a11163395f407ddc5c1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9a9a77f62c586ef6bb4924363ef47fa5d0a051492a11163395f407ddc5c1f1->enter($__internal_ee9a9a77f62c586ef6bb4924363ef47fa5d0a051492a11163395f407ddc5c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee9a9a77f62c586ef6bb4924363ef47fa5d0a051492a11163395f407ddc5c1f1->leave($__internal_ee9a9a77f62c586ef6bb4924363ef47fa5d0a051492a11163395f407ddc5c1f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0269f95b23285e636eab8fdc96cc004a7c3519fd4c28c31acca43e75c245b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0269f95b23285e636eab8fdc96cc004a7c3519fd4c28c31acca43e75c245b70->enter($__internal_f0269f95b23285e636eab8fdc96cc004a7c3519fd4c28c31acca43e75c245b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f0269f95b23285e636eab8fdc96cc004a7c3519fd4c28c31acca43e75c245b70->leave($__internal_f0269f95b23285e636eab8fdc96cc004a7c3519fd4c28c31acca43e75c245b70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
