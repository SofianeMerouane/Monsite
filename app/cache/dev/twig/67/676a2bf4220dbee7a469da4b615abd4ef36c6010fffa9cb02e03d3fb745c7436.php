<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3c66ac1ca73cba3ddccc20ab37161a8289da9cf907c25a0bda9b28499cb59fd5 extends Twig_Template
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
        $__internal_9536622c2f653b871c1ba1d02a944af3686af4dd8e3a27cb3f508d001ca5aab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9536622c2f653b871c1ba1d02a944af3686af4dd8e3a27cb3f508d001ca5aab7->enter($__internal_9536622c2f653b871c1ba1d02a944af3686af4dd8e3a27cb3f508d001ca5aab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9536622c2f653b871c1ba1d02a944af3686af4dd8e3a27cb3f508d001ca5aab7->leave($__internal_9536622c2f653b871c1ba1d02a944af3686af4dd8e3a27cb3f508d001ca5aab7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/sofiane/Bureau/MonSite/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}