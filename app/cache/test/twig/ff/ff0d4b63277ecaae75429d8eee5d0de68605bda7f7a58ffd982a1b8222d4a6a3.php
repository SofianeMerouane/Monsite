<?php

/* ::base.html.twig */
class __TwigTemplate_867bc448acdda9831f9e748ffda5db58725d30e3443e0b1ddbe253fe6e023001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a5b4c8ea4aebdd7024e2279c22d1b15f0a919f44f6c17a17f44821d423d43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a5b4c8ea4aebdd7024e2279c22d1b15f0a919f44f6c17a17f44821d423d43e->enter($__internal_f6a5b4c8ea4aebdd7024e2279c22d1b15f0a919f44f6c17a17f44821d423d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>MohCoin</title> 
   
    
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
         
   
    
  </head>
 
    <body>
<div class=\"panel-body\">        
<div class =\"container\">
      <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">le Moh Coin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Acceuil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces");
        echo "\">Annonces</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"blog-home-1.html\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"blog-home-2.html\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"blog-post.html\">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"full-width.html\">Full Width Page</a>
                            </li>
                            <li>
                                <a href=\"sidebar.html\">Sidebar Page</a>
                            </li>
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   <br /><br/>
    
         ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "         <br />
         <hr>
          <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"text-align:center\">Retrouvez tous nos offres</h2>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
         </div>

       
            <hr>
                <div class=\"col-lg-4 col-lg-offset-4 text-center\">
                    <ul class=\"list-inline\" style=\"\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                </div>
</div>                   
        <nav class=\"navbar navbar-default navbar-bottom\" style=\"padding:0 0 120px 0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <h5 id='footer-header'> SITEMAP </h3>
                    <div class=\"col-sm-4\" style=\"padding: 0 0 0 0px\">
                        <p>News</p>
                        <p>contact</p>
                    </div>
                    <div class=\"col-sm-4\" style=\"padding: 0 0 0 0px\">
                        <p>FAQ</p>
                        <p>Privacy Policy</p>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <h5 id='footer-header'> xxxx </h3>
                    <p>yyyyyyyyyyyyy</p>
                </div>
                <div class=\"col-sm-4\">
                    <h5 id='footer-header'> xxxxx </h3>
                    <p>uuuuuuuuuuuuuuu</p>
                </div>
            </div>
        </div>
    </nav>

   
    <!-- /.container -->

     

    
    ";
        // line 179
        $this->displayBlock('javascripts', $context, $blocks);
        // line 188
        echo " 
  </body>
</html>";
        
        $__internal_f6a5b4c8ea4aebdd7024e2279c22d1b15f0a919f44f6c17a17f44821d423d43e->leave($__internal_f6a5b4c8ea4aebdd7024e2279c22d1b15f0a919f44f6c17a17f44821d423d43e_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_07cf7ae56ec66263f93c9c10439857d22fe203777d50bea795523010451c8aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf7ae56ec66263f93c9c10439857d22fe203777d50bea795523010451c8aef->enter($__internal_07cf7ae56ec66263f93c9c10439857d22fe203777d50bea795523010451c8aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_07cf7ae56ec66263f93c9c10439857d22fe203777d50bea795523010451c8aef->leave($__internal_07cf7ae56ec66263f93c9c10439857d22fe203777d50bea795523010451c8aef_prof);

    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92ee41269232de5551498c250766b5ef727217a0e7a62a53b9d35c5e0e76fba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ee41269232de5551498c250766b5ef727217a0e7a62a53b9d35c5e0e76fba0->enter($__internal_92ee41269232de5551498c250766b5ef727217a0e7a62a53b9d35c5e0e76fba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 180
        echo "        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.vmap.france.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/myjs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       
        
         
    ";
        
        $__internal_92ee41269232de5551498c250766b5ef727217a0e7a62a53b9d35c5e0e76fba0->leave($__internal_92ee41269232de5551498c250766b5ef727217a0e7a62a53b9d35c5e0e76fba0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 183,  278 => 182,  274 => 181,  271 => 180,  265 => 179,  254 => 107,  245 => 188,  243 => 179,  191 => 130,  185 => 127,  179 => 124,  173 => 121,  167 => 118,  161 => 115,  152 => 108,  150 => 107,  80 => 40,  74 => 37,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>MohCoin</title> 
   
    
    <link href=\"{{ asset('./css/jqvmap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('./css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('./css/modern-business.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('./font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
         
   
    
  </head>
 
    <body>
<div class=\"panel-body\">        
<div class =\"container\">
      <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">le Moh Coin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"{{path('home')}}\">Acceuil</a>
                    </li>
                    <li>
                        <a href=\"{{path('annonces')}}\">Annonces</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"blog-home-1.html\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"blog-home-2.html\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"blog-post.html\">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"full-width.html\">Full Width Page</a>
                            </li>
                            <li>
                                <a href=\"sidebar.html\">Sidebar Page</a>
                            </li>
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   <br /><br/>
    
         {% block body %}{% endblock %}
         <br />
         <hr>
          <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"text-align:center\">Retrouvez tous nos offres</h2>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"{{asset('./img/new_York.jpg')}}\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"{{asset('./img/new_York.jpg')}}\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"{{asset('./img/new_York.jpg')}}\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"{{asset('./img/new_York.jpg')}}\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"{{asset('./img/new_York.jpg')}}\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"{{asset('./img/new_York.jpg')}}\" alt=\"\">
            </div>
         </div>

       
            <hr>
                <div class=\"col-lg-4 col-lg-offset-4 text-center\">
                    <ul class=\"list-inline\" style=\"\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                </div>
</div>                   
        <nav class=\"navbar navbar-default navbar-bottom\" style=\"padding:0 0 120px 0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <h5 id='footer-header'> SITEMAP </h3>
                    <div class=\"col-sm-4\" style=\"padding: 0 0 0 0px\">
                        <p>News</p>
                        <p>contact</p>
                    </div>
                    <div class=\"col-sm-4\" style=\"padding: 0 0 0 0px\">
                        <p>FAQ</p>
                        <p>Privacy Policy</p>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <h5 id='footer-header'> xxxx </h3>
                    <p>yyyyyyyyyyyyy</p>
                </div>
                <div class=\"col-sm-4\">
                    <h5 id='footer-header'> xxxxx </h3>
                    <p>uuuuuuuuuuuuuuu</p>
                </div>
            </div>
        </div>
    </nav>

   
    <!-- /.container -->

     

    
    {% block javascripts %}
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('./js/jquery.vmap.js') }}\" type=\"text/javascript\"></script>
       <script src=\"{{ asset('./js/jquery.vmap.france.js') }}\" type=\"text/javascript\"></script>
       <script src=\"{{ asset('./js/myjs.js') }}\" type=\"text/javascript\"></script>
       
        
         
    {% endblock %}
 
  </body>
</html>", "::base.html.twig", "/home/sofiane/NetBeansProjects/MonSite/app/Resources/views/base.html.twig");
    }
}
