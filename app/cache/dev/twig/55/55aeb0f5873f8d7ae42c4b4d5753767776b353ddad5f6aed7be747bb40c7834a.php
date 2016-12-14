<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_cc5cd3c1e957e097008cc581dd7b3fb2c3704d0ce2c1ae90f97c86f059834448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2ccd9122c8d68ce171fbb720cb73b70236b8c54f6e3c8ec4c3ec8adb8962865b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccd9122c8d68ce171fbb720cb73b70236b8c54f6e3c8ec4c3ec8adb8962865b->enter($__internal_2ccd9122c8d68ce171fbb720cb73b70236b8c54f6e3c8ec4c3ec8adb8962865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ccd9122c8d68ce171fbb720cb73b70236b8c54f6e3c8ec4c3ec8adb8962865b->leave($__internal_2ccd9122c8d68ce171fbb720cb73b70236b8c54f6e3c8ec4c3ec8adb8962865b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48e01c27d08c84118a708e613cafa5d4a1dc9dff358e31e2541a5c483d061f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e01c27d08c84118a708e613cafa5d4a1dc9dff358e31e2541a5c483d061f2e->enter($__internal_48e01c27d08c84118a708e613cafa5d4a1dc9dff358e31e2541a5c483d061f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_48e01c27d08c84118a708e613cafa5d4a1dc9dff358e31e2541a5c483d061f2e->leave($__internal_48e01c27d08c84118a708e613cafa5d4a1dc9dff358e31e2541a5c483d061f2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
