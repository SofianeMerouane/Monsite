<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0ef0567d0b7b2f591d2e5b4fc04bc39606ac4412ae8579bf98953dc79e5e01a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_531839eee4676494a81eadb740772277ad88f0f2ab1ac3835aace2b0caa0a1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531839eee4676494a81eadb740772277ad88f0f2ab1ac3835aace2b0caa0a1cb->enter($__internal_531839eee4676494a81eadb740772277ad88f0f2ab1ac3835aace2b0caa0a1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_531839eee4676494a81eadb740772277ad88f0f2ab1ac3835aace2b0caa0a1cb->leave($__internal_531839eee4676494a81eadb740772277ad88f0f2ab1ac3835aace2b0caa0a1cb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ae39909897f5e449833f0a2b64364b22d77aaeadcf6f7c8b68d205c776fa9d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae39909897f5e449833f0a2b64364b22d77aaeadcf6f7c8b68d205c776fa9d88->enter($__internal_ae39909897f5e449833f0a2b64364b22d77aaeadcf6f7c8b68d205c776fa9d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ae39909897f5e449833f0a2b64364b22d77aaeadcf6f7c8b68d205c776fa9d88->leave($__internal_ae39909897f5e449833f0a2b64364b22d77aaeadcf6f7c8b68d205c776fa9d88_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80757f82d8ce6e120b4cb6802b9445f78da6a69be79b079fdf5333714d277feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80757f82d8ce6e120b4cb6802b9445f78da6a69be79b079fdf5333714d277feb->enter($__internal_80757f82d8ce6e120b4cb6802b9445f78da6a69be79b079fdf5333714d277feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_80757f82d8ce6e120b4cb6802b9445f78da6a69be79b079fdf5333714d277feb->leave($__internal_80757f82d8ce6e120b4cb6802b9445f78da6a69be79b079fdf5333714d277feb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f5a7d66424151f0dbc3cd8915d50ae03590a660bc856907baf539062f2ab6d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a7d66424151f0dbc3cd8915d50ae03590a660bc856907baf539062f2ab6d3d->enter($__internal_f5a7d66424151f0dbc3cd8915d50ae03590a660bc856907baf539062f2ab6d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f5a7d66424151f0dbc3cd8915d50ae03590a660bc856907baf539062f2ab6d3d->leave($__internal_f5a7d66424151f0dbc3cd8915d50ae03590a660bc856907baf539062f2ab6d3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
