<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_83c104dd52f71565951969e613ec372581fcb9565adb36658303fd06e8cf7b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1b8329260b2e0b6602ba1029aef988fdda89e6686d5b89fd288aa0bcaf25f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b8329260b2e0b6602ba1029aef988fdda89e6686d5b89fd288aa0bcaf25f30->enter($__internal_a1b8329260b2e0b6602ba1029aef988fdda89e6686d5b89fd288aa0bcaf25f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b8329260b2e0b6602ba1029aef988fdda89e6686d5b89fd288aa0bcaf25f30->leave($__internal_a1b8329260b2e0b6602ba1029aef988fdda89e6686d5b89fd288aa0bcaf25f30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5b6d11133335c2a687bd460fb4c44bf869d086fe5551173742c7b34e37573cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b6d11133335c2a687bd460fb4c44bf869d086fe5551173742c7b34e37573cd->enter($__internal_f5b6d11133335c2a687bd460fb4c44bf869d086fe5551173742c7b34e37573cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5b6d11133335c2a687bd460fb4c44bf869d086fe5551173742c7b34e37573cd->leave($__internal_f5b6d11133335c2a687bd460fb4c44bf869d086fe5551173742c7b34e37573cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f98402506072a2df62d5406c94f168056c3af1bc1104c1c21a3dae5636704250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98402506072a2df62d5406c94f168056c3af1bc1104c1c21a3dae5636704250->enter($__internal_f98402506072a2df62d5406c94f168056c3af1bc1104c1c21a3dae5636704250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f98402506072a2df62d5406c94f168056c3af1bc1104c1c21a3dae5636704250->leave($__internal_f98402506072a2df62d5406c94f168056c3af1bc1104c1c21a3dae5636704250_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9d00561412b88be3277dba8a53e1afc087c505b69b7d1d5d1e9d150658b075a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d00561412b88be3277dba8a53e1afc087c505b69b7d1d5d1e9d150658b075a->enter($__internal_f9d00561412b88be3277dba8a53e1afc087c505b69b7d1d5d1e9d150658b075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9d00561412b88be3277dba8a53e1afc087c505b69b7d1d5d1e9d150658b075a->leave($__internal_f9d00561412b88be3277dba8a53e1afc087c505b69b7d1d5d1e9d150658b075a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
