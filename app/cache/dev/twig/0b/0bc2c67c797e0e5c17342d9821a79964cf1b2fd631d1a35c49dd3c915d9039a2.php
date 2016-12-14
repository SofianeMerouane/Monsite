<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_03d63386034d03045729530287d7f8f77e78a99b6f93277c78ec0135e9531993 extends Twig_Template
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
        $__internal_e4f3f5c49d19c582f7dc924d112afa36faddcabaf8a9dedc6d06cd4353795190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f3f5c49d19c582f7dc924d112afa36faddcabaf8a9dedc6d06cd4353795190->enter($__internal_e4f3f5c49d19c582f7dc924d112afa36faddcabaf8a9dedc6d06cd4353795190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e4f3f5c49d19c582f7dc924d112afa36faddcabaf8a9dedc6d06cd4353795190->leave($__internal_e4f3f5c49d19c582f7dc924d112afa36faddcabaf8a9dedc6d06cd4353795190_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
