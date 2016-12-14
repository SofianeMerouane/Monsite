<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4e403ebbd3ecc969ae90ecb58de18311db0987c7e021276727d80f1f84ce124b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_8da138d5787cc0ee76e08a93e31bfe54c29cd6d9199caa48e601b37c8c74136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da138d5787cc0ee76e08a93e31bfe54c29cd6d9199caa48e601b37c8c74136e->enter($__internal_8da138d5787cc0ee76e08a93e31bfe54c29cd6d9199caa48e601b37c8c74136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da138d5787cc0ee76e08a93e31bfe54c29cd6d9199caa48e601b37c8c74136e->leave($__internal_8da138d5787cc0ee76e08a93e31bfe54c29cd6d9199caa48e601b37c8c74136e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1930928a3d987f4ad37f31e2cbf0e4cca4ea9adb2693d76ffdfdf2dafc565a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1930928a3d987f4ad37f31e2cbf0e4cca4ea9adb2693d76ffdfdf2dafc565a6b->enter($__internal_1930928a3d987f4ad37f31e2cbf0e4cca4ea9adb2693d76ffdfdf2dafc565a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1930928a3d987f4ad37f31e2cbf0e4cca4ea9adb2693d76ffdfdf2dafc565a6b->leave($__internal_1930928a3d987f4ad37f31e2cbf0e4cca4ea9adb2693d76ffdfdf2dafc565a6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_588ffb019f604d91cff389dc9946c77c47cb240b9f5e7fc8994898fac130f72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588ffb019f604d91cff389dc9946c77c47cb240b9f5e7fc8994898fac130f72a->enter($__internal_588ffb019f604d91cff389dc9946c77c47cb240b9f5e7fc8994898fac130f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_588ffb019f604d91cff389dc9946c77c47cb240b9f5e7fc8994898fac130f72a->leave($__internal_588ffb019f604d91cff389dc9946c77c47cb240b9f5e7fc8994898fac130f72a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
