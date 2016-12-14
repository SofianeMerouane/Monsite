<?php

/* leBoncoinMyBundle:Home\layout:annonces.html.twig */
class __TwigTemplate_3f402624d2d94cbf31d0bb7e1ca17b4adba2ac1150ee3375855307772da93429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "leBoncoinMyBundle:Home\\layout:annonces.html.twig", 1);
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
        $__internal_72db9ac0e88bbb161b6d0af67e464b9895113a7227d8f2c6aa7ce701003837e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72db9ac0e88bbb161b6d0af67e464b9895113a7227d8f2c6aa7ce701003837e5->enter($__internal_72db9ac0e88bbb161b6d0af67e464b9895113a7227d8f2c6aa7ce701003837e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "leBoncoinMyBundle:Home\\layout:annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72db9ac0e88bbb161b6d0af67e464b9895113a7227d8f2c6aa7ce701003837e5->leave($__internal_72db9ac0e88bbb161b6d0af67e464b9895113a7227d8f2c6aa7ce701003837e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_547801d2ecc9885fed769481768947a417b7131ea9319c9430ea29b6d0c1b69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547801d2ecc9885fed769481768947a417b7131ea9319c9430ea29b6d0c1b69c->enter($__internal_547801d2ecc9885fed769481768947a417b7131ea9319c9430ea29b6d0c1b69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
     <!-- Page Content -->
  

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                 <form>
                 <select name=\"select\">   
                    
                 ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")));
        foreach ($context['_seq'] as $context["_key"] => $context["marques"]) {
            // line 15
            echo "                   
                     <option>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["marques"], "nom", array()), "html", null, true);
            echo "</option>
                     
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marques'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
                 
                   </select>
                 
                  <select name=\"select\">  
                      
                 ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carburant"]) ? $context["carburant"] : $this->getContext($context, "carburant")));
        foreach ($context['_seq'] as $context["_key"] => $context["carburants"]) {
            // line 25
            echo "                   
                     <option>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["carburants"], "nom", array()), "html", null, true);
            echo "</option>
                     
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carburants'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  
                 
                   </select>
                 
                  <select name=\"select\"> 
                     
                 ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BoiteVitesse"]) ? $context["BoiteVitesse"] : $this->getContext($context, "BoiteVitesse")));
        foreach ($context['_seq'] as $context["_key"] => $context["BoiteVitesses"]) {
            // line 35
            echo "                   
                     <option>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["BoiteVitesses"], "nom", array()), "html", null, true);
            echo "</option>
                     
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BoiteVitesses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  
                 
                   </select>
                 
                   </form>
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonces"]) {
            echo " 
    
        <div class=\"row\">
            <div class=\"col-md-5\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonces"], "media", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonces"], "media", array()), "alt", array()), "html", null, true);
            echo "\">
                </a>
            </div>
            <div class=\"col-md-7\">
                <h3>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonces"], "titre", array()), "html", null, true);
            echo "</h3>
                <h4>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonces"], "ville", array()), "nom", array()), "html", null, true);
            echo "</h4>
                <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonces"], "description", array()), "html", null, true);
            echo "</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">Voir annonce</i></a>
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
        // line 78
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
        
        $__internal_547801d2ecc9885fed769481768947a417b7131ea9319c9430ea29b6d0c1b69c->leave($__internal_547801d2ecc9885fed769481768947a417b7131ea9319c9430ea29b6d0c1b69c_prof);

    }

    public function getTemplateName()
    {
        return "leBoncoinMyBundle:Home\\layout:annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 78,  166 => 70,  162 => 69,  158 => 68,  149 => 64,  139 => 59,  116 => 38,  107 => 36,  104 => 35,  100 => 34,  92 => 28,  83 => 26,  80 => 25,  76 => 24,  68 => 18,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
                 <form>
                 <select name=\"select\">   
                    
                 {% for marques in marque %}
                   
                     <option>{{marques.nom}}</option>
                     
                 {% endfor %}  
                 
                   </select>
                 
                  <select name=\"select\">  
                      
                 {% for carburants in carburant %}
                   
                     <option>{{carburants.nom}}</option>
                     
                 {% endfor %}  
                 
                   </select>
                 
                  <select name=\"select\"> 
                     
                 {% for BoiteVitesses in BoiteVitesse %}
                   
                     <option>{{BoiteVitesses.nom}}</option>
                     
                 {% endfor %}  
                 
                   </select>
                 
                   </form>
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
                    <img class=\"img-responsive img-hover\" src=\"{{annonces.media.path}}\" alt=\"{{annonces.media.alt}}\">
                </a>
            </div>
            <div class=\"col-md-7\">
                <h3>{{annonces.titre}}</h3>
                <h4>{{annonces.ville.nom}}</h4>
                <p>{{annonces.description}}</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">Voir annonce</i></a>
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
", "leBoncoinMyBundle:Home\\layout:annonces.html.twig", "/home/sofiane/Bureau/MonSite/src/le/Boncoin/MyBundle/Resources/views/Home/layout/annonces.html.twig");
    }
}
