<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2938926de9d8b83522d977f79913fde8fdbd62af62bc457c49198bdb9dfa2254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_755ea904ce2c839d43a46bef6eb8b66055800e2e64dcbcaf91ef760eff115ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755ea904ce2c839d43a46bef6eb8b66055800e2e64dcbcaf91ef760eff115ab1->enter($__internal_755ea904ce2c839d43a46bef6eb8b66055800e2e64dcbcaf91ef760eff115ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_755ea904ce2c839d43a46bef6eb8b66055800e2e64dcbcaf91ef760eff115ab1->leave($__internal_755ea904ce2c839d43a46bef6eb8b66055800e2e64dcbcaf91ef760eff115ab1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b982479259093467e69e75bd362bafc563ebaf0ca78a0c006ca758e9192933ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b982479259093467e69e75bd362bafc563ebaf0ca78a0c006ca758e9192933ac->enter($__internal_b982479259093467e69e75bd362bafc563ebaf0ca78a0c006ca758e9192933ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b982479259093467e69e75bd362bafc563ebaf0ca78a0c006ca758e9192933ac->leave($__internal_b982479259093467e69e75bd362bafc563ebaf0ca78a0c006ca758e9192933ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd25ec04d321d55f5a4344a8d41dc2e7838fe4c39837dd819486561d7f7ba19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd25ec04d321d55f5a4344a8d41dc2e7838fe4c39837dd819486561d7f7ba19a->enter($__internal_cd25ec04d321d55f5a4344a8d41dc2e7838fe4c39837dd819486561d7f7ba19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd25ec04d321d55f5a4344a8d41dc2e7838fe4c39837dd819486561d7f7ba19a->leave($__internal_cd25ec04d321d55f5a4344a8d41dc2e7838fe4c39837dd819486561d7f7ba19a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b92a2a8b27ec815f670f2cf7eddef84a469fdb829d19ab12f8892ab4123d4399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92a2a8b27ec815f670f2cf7eddef84a469fdb829d19ab12f8892ab4123d4399->enter($__internal_b92a2a8b27ec815f670f2cf7eddef84a469fdb829d19ab12f8892ab4123d4399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b92a2a8b27ec815f670f2cf7eddef84a469fdb829d19ab12f8892ab4123d4399->leave($__internal_b92a2a8b27ec815f670f2cf7eddef84a469fdb829d19ab12f8892ab4123d4399_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
