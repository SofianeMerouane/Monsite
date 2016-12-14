<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dc44dcfb54c205f7c93d0764232145cc12f9615b79c97f775e55642b85f7c788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2029754a91a6dfe4c96ba25c94b6b3215788f76b374e5a44ef1469f10544b23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2029754a91a6dfe4c96ba25c94b6b3215788f76b374e5a44ef1469f10544b23a->enter($__internal_2029754a91a6dfe4c96ba25c94b6b3215788f76b374e5a44ef1469f10544b23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2029754a91a6dfe4c96ba25c94b6b3215788f76b374e5a44ef1469f10544b23a->leave($__internal_2029754a91a6dfe4c96ba25c94b6b3215788f76b374e5a44ef1469f10544b23a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8d7c92c36fe706b416c579f3c2f6776ecd042bdf5b42ed831389d8f9313492f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d7c92c36fe706b416c579f3c2f6776ecd042bdf5b42ed831389d8f9313492f->enter($__internal_c8d7c92c36fe706b416c579f3c2f6776ecd042bdf5b42ed831389d8f9313492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8d7c92c36fe706b416c579f3c2f6776ecd042bdf5b42ed831389d8f9313492f->leave($__internal_c8d7c92c36fe706b416c579f3c2f6776ecd042bdf5b42ed831389d8f9313492f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
