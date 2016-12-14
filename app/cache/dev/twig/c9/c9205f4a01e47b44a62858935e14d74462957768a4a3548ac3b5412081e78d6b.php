<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1699657484abae6a53408b6b03e96582f756e09f3034026689ba9bc71f697f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4ceb9fdbb523a9a0292a4207222b31e82a39eec3b70f00e59a55905e029f243f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceb9fdbb523a9a0292a4207222b31e82a39eec3b70f00e59a55905e029f243f->enter($__internal_4ceb9fdbb523a9a0292a4207222b31e82a39eec3b70f00e59a55905e029f243f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ceb9fdbb523a9a0292a4207222b31e82a39eec3b70f00e59a55905e029f243f->leave($__internal_4ceb9fdbb523a9a0292a4207222b31e82a39eec3b70f00e59a55905e029f243f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67a25449970ed8357e536200f7117e48984aad6f1f0ff4dbe4d0ae4248d83fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a25449970ed8357e536200f7117e48984aad6f1f0ff4dbe4d0ae4248d83fc9->enter($__internal_67a25449970ed8357e536200f7117e48984aad6f1f0ff4dbe4d0ae4248d83fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_67a25449970ed8357e536200f7117e48984aad6f1f0ff4dbe4d0ae4248d83fc9->leave($__internal_67a25449970ed8357e536200f7117e48984aad6f1f0ff4dbe4d0ae4248d83fc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
