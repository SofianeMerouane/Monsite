<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5cfeb7cc28706f2bead48bbcb05b7e756334eb6a926efb87d665c6ea8f42e559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d1cd5e93856672c6563c56400c2bf5a38148c1160659bfef4396332230c7375f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cd5e93856672c6563c56400c2bf5a38148c1160659bfef4396332230c7375f->enter($__internal_d1cd5e93856672c6563c56400c2bf5a38148c1160659bfef4396332230c7375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cd5e93856672c6563c56400c2bf5a38148c1160659bfef4396332230c7375f->leave($__internal_d1cd5e93856672c6563c56400c2bf5a38148c1160659bfef4396332230c7375f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d4c8f19851fa305fe504d6912f306d3851b4cb42bf45372452774a140df07f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4c8f19851fa305fe504d6912f306d3851b4cb42bf45372452774a140df07f1->enter($__internal_9d4c8f19851fa305fe504d6912f306d3851b4cb42bf45372452774a140df07f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9d4c8f19851fa305fe504d6912f306d3851b4cb42bf45372452774a140df07f1->leave($__internal_9d4c8f19851fa305fe504d6912f306d3851b4cb42bf45372452774a140df07f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
