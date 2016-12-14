<?php

/* leBoncoinMyBundle:Home\layout:index.html.twig */
class __TwigTemplate_b58b6414914719b53cd047015e77839978b29e1ad8027fa6b0b4622467838ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "leBoncoinMyBundle:Home\\layout:index.html.twig", 1);
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
        $__internal_492eea44d0b60b0f43fbd9fb3cbff8696a76ae2037ff2e4090ded3abd94fd8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492eea44d0b60b0f43fbd9fb3cbff8696a76ae2037ff2e4090ded3abd94fd8eb->enter($__internal_492eea44d0b60b0f43fbd9fb3cbff8696a76ae2037ff2e4090ded3abd94fd8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "leBoncoinMyBundle:Home\\layout:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492eea44d0b60b0f43fbd9fb3cbff8696a76ae2037ff2e4090ded3abd94fd8eb->leave($__internal_492eea44d0b60b0f43fbd9fb3cbff8696a76ae2037ff2e4090ded3abd94fd8eb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_650ade0158a4c4ca536e825de4ae1b10626baa29ccb9b960854389a4d5b831f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650ade0158a4c4ca536e825de4ae1b10626baa29ccb9b960854389a4d5b831f4->enter($__internal_650ade0158a4c4ca536e825de4ae1b10626baa29ccb9b960854389a4d5b831f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leBoncoinMyBundle:Home\\layout:index.html.twig"));

        // line 5
        echo "     <div class =\"row\">  
         
         <div class=\"col-lg-3 col-lg-offset-1 text-center\">
             <p>Trouvez la bonne affaire parmi </p><p style =\"color:blue\">27 792 638 petites annonces</p>
              
                <div class=\"panel panel-primary text-center\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Plus <span class=\"label label-success\"></span></h3>
                    </div>
                    <div class=\"panel-body\">
                         <img class=\"img-responsive\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" style=\"height:100px;width:270px\" alt=\"ny\">
                    </div>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\"><strong>100</strong> offres Immobilier</li>
                        <li class=\"list-group-item\"><strong>500</strong> offres Emplois</li>
                        <li class=\"list-group-item\"><strong>900</strong> Commerces</li>
                        <li class=\"list-group-item\"><strong>1000</strong> Materiels professionnels</li>
            
                        </li>
                    </ul>
               </div>
         </div>            
                    
          <div class =\"col-lg-5\">  
             <div id=\"francemap\" style=\"width: 400px; height: 400px;\" ></div>
          </div>  
         
         <div class=\"col-lg-2\">
               
                  
                  <option value=\"//www.leboncoin.fr/annonces/offres/alsace/\" data-region=\"alsace\">Alsace</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/aquitaine/\" data-region=\"aquitaine\">Aquitaine</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/auvergne/\" data-region=\"auvergne\">Auvergne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/basse_normandie/\" data-region=\"basse_normandie\">Basse-Normandie</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/bourgogne/\" data-region=\"bourgogne\">Bourgogne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/bretagne/\" data-region=\"bretagne\">Bretagne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/centre/\" data-region=\"centre\">Centre</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/champagne_ardenne/\" data-region=\"champagne_ardenne\">Champagne-Ardenne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/corse/\" data-region=\"corse\">Corse</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/franche_comte/\" data-region=\"franche_comte\">Franche-Comté</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/haute_normandie/\" data-region=\"haute_normandie\">Haute-Normandie</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/ile_de_france/\" data-region=\"ile_de_france\">Ile-de-France</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/languedoc_roussillon/\" data-region=\"languedoc_roussillon\">Languedoc-Roussillon</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/limousin/\" data-region=\"limousin\">Limousin</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/lorraine/\" data-region=\"lorraine\">Lorraine</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/midi_pyrenees/\" data-region=\"midi_pyrenees\">Midi-Pyrénées</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/nord_pas_de_calais/\" data-region=\"nord_pas_de_calais\">Nord-Pas-de-Calais</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/pays_de_la_loire/\" data-region=\"pays_de_la_loire\">Pays de la Loire</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/picardie/\" data-region=\"picardie\">Picardie</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/poitou_charentes/\" data-region=\"poitou_charentes\">Poitou-Charentes</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/provence_alpes_cote_d_azur/\" data-region=\"provence_alpes_cote_d_azur\">Provence-Alpes-Côte d'Azur</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/rhone_alpes/\" data-region=\"rhone_alpes\">Rhône-Alpes</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/guadeloupe/\" data-region=\"guadeloupe\">Guadeloupe</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/martinique/\" data-region=\"martinique\">Martinique</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/guyane/\" data-region=\"guyane\">Guyane</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/reunion/\" data-region=\"reunion\">Réunion</a>
\t\t  </option>
\t\t\t
         </div> 
         
        
    </div>    
    
    ";
        
        $__internal_650ade0158a4c4ca536e825de4ae1b10626baa29ccb9b960854389a4d5b831f4->leave($__internal_650ade0158a4c4ca536e825de4ae1b10626baa29ccb9b960854389a4d5b831f4_prof);

    }

    public function getTemplateName()
    {
        return "leBoncoinMyBundle:Home\\layout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\"%}


    {%block body %}
     <div class =\"row\">  
         
         <div class=\"col-lg-3 col-lg-offset-1 text-center\">
             <p>Trouvez la bonne affaire parmi </p><p style =\"color:blue\">27 792 638 petites annonces</p>
              
                <div class=\"panel panel-primary text-center\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Plus <span class=\"label label-success\"></span></h3>
                    </div>
                    <div class=\"panel-body\">
                         <img class=\"img-responsive\" src=\"{{asset('./img/new_York.jpg')}}\" style=\"height:100px;width:270px\" alt=\"ny\">
                    </div>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\"><strong>100</strong> offres Immobilier</li>
                        <li class=\"list-group-item\"><strong>500</strong> offres Emplois</li>
                        <li class=\"list-group-item\"><strong>900</strong> Commerces</li>
                        <li class=\"list-group-item\"><strong>1000</strong> Materiels professionnels</li>
            
                        </li>
                    </ul>
               </div>
         </div>            
                    
          <div class =\"col-lg-5\">  
             <div id=\"francemap\" style=\"width: 400px; height: 400px;\" ></div>
          </div>  
         
         <div class=\"col-lg-2\">
               
                  
                  <option value=\"//www.leboncoin.fr/annonces/offres/alsace/\" data-region=\"alsace\">Alsace</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/aquitaine/\" data-region=\"aquitaine\">Aquitaine</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/auvergne/\" data-region=\"auvergne\">Auvergne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/basse_normandie/\" data-region=\"basse_normandie\">Basse-Normandie</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/bourgogne/\" data-region=\"bourgogne\">Bourgogne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/bretagne/\" data-region=\"bretagne\">Bretagne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/centre/\" data-region=\"centre\">Centre</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/champagne_ardenne/\" data-region=\"champagne_ardenne\">Champagne-Ardenne</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/corse/\" data-region=\"corse\">Corse</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/franche_comte/\" data-region=\"franche_comte\">Franche-Comté</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/haute_normandie/\" data-region=\"haute_normandie\">Haute-Normandie</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/ile_de_france/\" data-region=\"ile_de_france\">Ile-de-France</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/languedoc_roussillon/\" data-region=\"languedoc_roussillon\">Languedoc-Roussillon</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/limousin/\" data-region=\"limousin\">Limousin</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/lorraine/\" data-region=\"lorraine\">Lorraine</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/midi_pyrenees/\" data-region=\"midi_pyrenees\">Midi-Pyrénées</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/nord_pas_de_calais/\" data-region=\"nord_pas_de_calais\">Nord-Pas-de-Calais</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/pays_de_la_loire/\" data-region=\"pays_de_la_loire\">Pays de la Loire</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/picardie/\" data-region=\"picardie\">Picardie</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/poitou_charentes/\" data-region=\"poitou_charentes\">Poitou-Charentes</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/provence_alpes_cote_d_azur/\" data-region=\"provence_alpes_cote_d_azur\">Provence-Alpes-Côte d'Azur</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/rhone_alpes/\" data-region=\"rhone_alpes\">Rhône-Alpes</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/guadeloupe/\" data-region=\"guadeloupe\">Guadeloupe</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/martinique/\" data-region=\"martinique\">Martinique</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/guyane/\" data-region=\"guyane\">Guyane</a>
\t\t\t\t</option>
\t\t\t<option value=\"//www.leboncoin.fr/annonces/offres/reunion/\" data-region=\"reunion\">Réunion</a>
\t\t  </option>
\t\t\t
         </div> 
         
        
    </div>    
    
    {% endblock %}

 
 ", "leBoncoinMyBundle:Home\\layout:index.html.twig", "/home/sofiane/NetBeansProjects/MonSite/src/le/Boncoin/MyBundle/Resources/views/Home/layout/index.html.twig");
    }
}
