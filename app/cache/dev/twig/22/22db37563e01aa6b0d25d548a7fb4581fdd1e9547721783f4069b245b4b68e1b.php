<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e3d8be9d87d57b6c20e976351d61da0b54d092bec94b4d4aa85b73c7b915766e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c8947212a7c88a6383372e47916fbded7a20ae5ef01ee868d81bbd1c8cf0f5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8947212a7c88a6383372e47916fbded7a20ae5ef01ee868d81bbd1c8cf0f5a4->enter($__internal_c8947212a7c88a6383372e47916fbded7a20ae5ef01ee868d81bbd1c8cf0f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8947212a7c88a6383372e47916fbded7a20ae5ef01ee868d81bbd1c8cf0f5a4->leave($__internal_c8947212a7c88a6383372e47916fbded7a20ae5ef01ee868d81bbd1c8cf0f5a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28eb05c2dd68ef99f39e698a42d1b14d9b4cc1e39c5376108ff266f878490ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eb05c2dd68ef99f39e698a42d1b14d9b4cc1e39c5376108ff266f878490ddc->enter($__internal_28eb05c2dd68ef99f39e698a42d1b14d9b4cc1e39c5376108ff266f878490ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28eb05c2dd68ef99f39e698a42d1b14d9b4cc1e39c5376108ff266f878490ddc->leave($__internal_28eb05c2dd68ef99f39e698a42d1b14d9b4cc1e39c5376108ff266f878490ddc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f5fc8f2adbe109e1ff3c5c779278aa00aa40926635e442788e9ea6219924d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5fc8f2adbe109e1ff3c5c779278aa00aa40926635e442788e9ea6219924d34->enter($__internal_9f5fc8f2adbe109e1ff3c5c779278aa00aa40926635e442788e9ea6219924d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f5fc8f2adbe109e1ff3c5c779278aa00aa40926635e442788e9ea6219924d34->leave($__internal_9f5fc8f2adbe109e1ff3c5c779278aa00aa40926635e442788e9ea6219924d34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_244779e4a254063b1e6743648bd300442ec141615e80f1fcf6012c16f6d9c120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244779e4a254063b1e6743648bd300442ec141615e80f1fcf6012c16f6d9c120->enter($__internal_244779e4a254063b1e6743648bd300442ec141615e80f1fcf6012c16f6d9c120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_244779e4a254063b1e6743648bd300442ec141615e80f1fcf6012c16f6d9c120->leave($__internal_244779e4a254063b1e6743648bd300442ec141615e80f1fcf6012c16f6d9c120_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
