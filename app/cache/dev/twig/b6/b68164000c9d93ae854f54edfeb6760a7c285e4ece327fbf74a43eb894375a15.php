<?php

/* leBoncoinMyBundle:Home/layout:annonces.html.twig */
class __TwigTemplate_3e55cafab7df2eeb1bb163d32b2e997b96de7a349ae1d202e9316ffc09c4dc50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "leBoncoinMyBundle:Home/layout:annonces.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc57079113428414768a3abfbfd77bce1ee4b12a727f93f489eef4f0270fe148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc57079113428414768a3abfbfd77bce1ee4b12a727f93f489eef4f0270fe148->enter($__internal_cc57079113428414768a3abfbfd77bce1ee4b12a727f93f489eef4f0270fe148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "leBoncoinMyBundle:Home/layout:annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc57079113428414768a3abfbfd77bce1ee4b12a727f93f489eef4f0270fe148->leave($__internal_cc57079113428414768a3abfbfd77bce1ee4b12a727f93f489eef4f0270fe148_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_220edf5741bd1bb457ebb660c4b7f00118ebeea2efc41c826b5449b0aa9516dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220edf5741bd1bb457ebb660c4b7f00118ebeea2efc41c826b5449b0aa9516dd->enter($__internal_220edf5741bd1bb457ebb660c4b7f00118ebeea2efc41c826b5449b0aa9516dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
     <!-- Page Content -->
  

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">One Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"index.html\">Home</a>
                    </li>
                    <li class=\"active\">One Column Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

       ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonces"]) {
            echo " 
    
        <div class=\"row\">
            <div class=\"col-md-5\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonces"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"annonce\">
                </a>
            </div>
            <div class=\"col-md-7\">
                <h3>Project One</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">View Project</i></a>
            </div>
        </div>
                <hr>
                <br />
        <!-- /.row -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonces'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        

       

        <hr>

        <!-- Pagination -->
        <div class=\"row text-center\">
            <div class=\"col-lg-12\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">1</a>
                    </li>
                    <li>
                        <a href=\"#\">2</a>
                    </li>
                    <li>
                        <a href=\"#\">3</a>
                    </li>
                    <li>
                        <a href=\"#\">4</a>
                    </li>
                    <li>
                        <a href=\"#\">5</a>
                    </li>
                    <li>
                        <a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    
";
        
        $__internal_220edf5741bd1bb457ebb660c4b7f00118ebeea2efc41c826b5449b0aa9516dd->leave($__internal_220edf5741bd1bb457ebb660c4b7f00118ebeea2efc41c826b5449b0aa9516dd_prof);

    }

    public function getTemplateName()
    {
        return "leBoncoinMyBundle:Home/layout:annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  71 => 28,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"::base.html.twig\"%}

{%block body %}
    
     <!-- Page Content -->
  

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">One Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"index.html\">Home</a>
                    </li>
                    <li class=\"active\">One Column Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

       {% for annonces in annonce %} 
    
        <div class=\"row\">
            <div class=\"col-md-5\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"{{annonces.image.path}}\" alt=\"annonce\">
                </a>
            </div>
            <div class=\"col-md-7\">
                <h3>Project One</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">View Project</i></a>
            </div>
        </div>
                <hr>
                <br />
        <!-- /.row -->
      {% endfor %}
        

       

        <hr>

        <!-- Pagination -->
        <div class=\"row text-center\">
            <div class=\"col-lg-12\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">1</a>
                    </li>
                    <li>
                        <a href=\"#\">2</a>
                    </li>
                    <li>
                        <a href=\"#\">3</a>
                    </li>
                    <li>
                        <a href=\"#\">4</a>
                    </li>
                    <li>
                        <a href=\"#\">5</a>
                    </li>
                    <li>
                        <a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    
{%endblock%}    
", "leBoncoinMyBundle:Home/layout:annonces.html.twig", "/home/sofiane/Bureau/MonSite/src/le/Boncoin/MyBundle/Resources/views/Home/layout/annonces.html.twig");
    }
}
