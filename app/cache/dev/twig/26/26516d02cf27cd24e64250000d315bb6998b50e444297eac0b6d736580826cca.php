<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f441f1e77a728af2fb205e90a5766729db847c091102cf069682db8bf39f1e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e06e343fcfa44c09983c8ed1786bb9c5bc73a646fc33aeab8e485e2fd5af960e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06e343fcfa44c09983c8ed1786bb9c5bc73a646fc33aeab8e485e2fd5af960e->enter($__internal_e06e343fcfa44c09983c8ed1786bb9c5bc73a646fc33aeab8e485e2fd5af960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e06e343fcfa44c09983c8ed1786bb9c5bc73a646fc33aeab8e485e2fd5af960e->leave($__internal_e06e343fcfa44c09983c8ed1786bb9c5bc73a646fc33aeab8e485e2fd5af960e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
