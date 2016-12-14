<?php

/* ::base.html.twig */
class __TwigTemplate_2ad168c4e1f919cf4e4f5ee78349232a25a7844368254fab070488686cb0bd7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82ec1dab9092e40f905221c63528ae54cb6ae333dc910a40dd108eece71daaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ec1dab9092e40f905221c63528ae54cb6ae333dc910a40dd108eece71daaab->enter($__internal_82ec1dab9092e40f905221c63528ae54cb6ae333dc910a40dd108eece71daaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  
     <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   
    
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Acceuil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 41
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
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "         <br />
         <hr>
          <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"text-align:center\">Retrouvez tous nos offres</h2>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/new_York.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"";
        // line 131
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
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 189
        echo " 
  </body>
</html>";
        
        $__internal_82ec1dab9092e40f905221c63528ae54cb6ae333dc910a40dd108eece71daaab->leave($__internal_82ec1dab9092e40f905221c63528ae54cb6ae333dc910a40dd108eece71daaab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5f42dabdd60cdf6f0b41af031fd8eca83a1342b34fb95d6fac1ba3ac45a4e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f42dabdd60cdf6f0b41af031fd8eca83a1342b34fb95d6fac1ba3ac45a4e40->enter($__internal_d5f42dabdd60cdf6f0b41af031fd8eca83a1342b34fb95d6fac1ba3ac45a4e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "le bon coin";
        
        $__internal_d5f42dabdd60cdf6f0b41af031fd8eca83a1342b34fb95d6fac1ba3ac45a4e40->leave($__internal_d5f42dabdd60cdf6f0b41af031fd8eca83a1342b34fb95d6fac1ba3ac45a4e40_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_d384f0f6883a339f4a04d207a5f19e0e5ccc447af03b96d178bebdd511ed7bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d384f0f6883a339f4a04d207a5f19e0e5ccc447af03b96d178bebdd511ed7bcb->enter($__internal_d384f0f6883a339f4a04d207a5f19e0e5ccc447af03b96d178bebdd511ed7bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d384f0f6883a339f4a04d207a5f19e0e5ccc447af03b96d178bebdd511ed7bcb->leave($__internal_d384f0f6883a339f4a04d207a5f19e0e5ccc447af03b96d178bebdd511ed7bcb_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_019c788f040812cb2cc8bcdfa0a6c678635885e398f4ebf6979dd67c34427ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019c788f040812cb2cc8bcdfa0a6c678635885e398f4ebf6979dd67c34427ef0->enter($__internal_019c788f040812cb2cc8bcdfa0a6c678635885e398f4ebf6979dd67c34427ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        echo "        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.vmap.france.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/myjs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       
        
         
    ";
        
        $__internal_019c788f040812cb2cc8bcdfa0a6c678635885e398f4ebf6979dd67c34427ef0->leave($__internal_019c788f040812cb2cc8bcdfa0a6c678635885e398f4ebf6979dd67c34427ef0_prof);

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
        return array (  299 => 184,  295 => 183,  291 => 182,  288 => 181,  282 => 180,  271 => 108,  259 => 6,  250 => 189,  248 => 180,  196 => 131,  190 => 128,  184 => 125,  178 => 122,  172 => 119,  166 => 116,  157 => 109,  155 => 108,  85 => 41,  79 => 38,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  32 => 6,  25 => 1,);
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
  
     <title>{% block title %}le bon coin{% endblock %}</title>
   
    
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
</html>", "::base.html.twig", "/home/sofiane/Bureau/MonSite/app/Resources/views/base.html.twig");
    }
}
