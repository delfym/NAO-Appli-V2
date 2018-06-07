<?php

/* base.html.twig */
class __TwigTemplate_b34658598d996fc1ccb01d0cca2dae779cb782a022e7e40d0044b25e2e8b6061 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"NAO Application\">
        <meta name=\"author\"      content=\"watching birds\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\"
                integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
                crossorigin=\"\"></script>


    </head>

    <body>
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-nao.png"), "html", null, true);
        echo "\" alt=\"NAO logo\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"active\"><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about"), "html", null, true);
        echo "\">A propos</a></li>
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("observForm"), "html", null, true);
        echo " \">Saisir une observation</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <!--li><a href=\"";
        // line 55
        echo "\">Left Sidebar</a></li-->
                            <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("observForm"), "html", null, true);
        echo " \">Saisir une observation</a></li>
                            <li class=\"active\"><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sidebarRight"), "html", null, true);
        echo "\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Contact</a></li>
                    <li><a class=\"btn\" href=\"";
        // line 61
        echo "signin";
        echo "\">Se connecter / S'inscrire</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- ***************** INTEGRATION DES CONTENUS DES AUTRES PAGES ****************** -->
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "    <!-- ****************************************************************************** -->

    <footer id=\"footer\" class=\"top-space\">

        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">contact@nao.fr</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Suivez-nous</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"\"><i class=\"fab fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-github fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook fa-2\"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class=\"footer2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"simplenav\">
                                <a href=\"#\">Accueil</a> |
                                <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about"), "html", null, true);
        echo "\">A propos</a> |
                                <a href=\"sidebar-right.html\">Sidebar</a> |
                                <a href=\"";
        // line 125
        echo "contact";
        echo "\">Contact</a> |
                                <b><a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("signup"), "html", null, true);
        echo "\">S'enregistrer</a></b>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"text-right\">
                                Copyright &copy; 2014, Watching Birds Group. Designed by <a href=\"http://gettemplate.com/\" rel=\"designer\">gettemplate</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>

    ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 166
        echo "    </body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NAO App";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nao_favicon.png"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.8.24/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!--link rel=\"stylesheet\" href=\" ";
        // line 19
        echo " \"-->
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
                  integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
                  crossorigin=\"\"/>


            <!-- Custom styles for our template -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\" >
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]-->
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\" integrity=\"sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
       
            <!--<script src=\"https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script> -->
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autocomplete.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/template.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/leaflet-map.js"), "html", null, true);
        echo "\"></script>

    <!--[endif]-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 162,  345 => 161,  341 => 160,  337 => 159,  333 => 158,  320 => 148,  316 => 147,  312 => 145,  303 => 144,  292 => 70,  283 => 69,  271 => 28,  267 => 27,  257 => 19,  253 => 18,  244 => 13,  235 => 12,  217 => 10,  207 => 166,  205 => 144,  184 => 126,  180 => 125,  175 => 123,  122 => 72,  120 => 69,  109 => 61,  105 => 60,  99 => 57,  95 => 56,  92 => 55,  85 => 51,  81 => 50,  77 => 49,  68 => 45,  51 => 30,  49 => 12,  44 => 10,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"NAO Application\">
        <meta name=\"author\"      content=\"watching birds\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

        <title>{% block title %}NAO App{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"shortcut icon\" href=\"{{ asset('images/nao_favicon.png') }}\">

            <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.8.24/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <!--link rel=\"stylesheet\" href=\" {#  asset('css/font-awesome.min.css')  #} \"-->
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
                  integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
                  crossorigin=\"\"/>


            <!-- Custom styles for our template -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.css')}}\" media=\"screen\" >
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css')}}\">
        {% endblock %}

        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\"
                integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
                crossorigin=\"\"></script>


    </head>

    <body>
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"{{ asset('index')}}\"><img src=\"{{ asset('images/logo-nao.png') }}\" alt=\"NAO logo\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"active\"><a href=\"{{ asset('home') }}\">Accueil</a></li>
                    <li><a href=\"{{ asset('about') }}\">A propos</a></li>
                    <li><a href=\"{{ asset('observForm') }} \">Saisir une observation</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <!--li><a href=\"{# {{ path('sidebarLeft') }} #}\">Left Sidebar</a></li-->
                            <li><a href=\"{{ asset('observForm') }} \">Saisir une observation</a></li>
                            <li class=\"active\"><a href=\"{{ asset('sidebarRight') }}\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{  asset('contact') }}\">Contact</a></li>
                    <li><a class=\"btn\" href=\"{{ ('signin') }}\">Se connecter / S'inscrire</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- ***************** INTEGRATION DES CONTENUS DES AUTRES PAGES ****************** -->
        {% block body %}

        {% endblock %}
    <!-- ****************************************************************************** -->

    <footer id=\"footer\" class=\"top-space\">

        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">contact@nao.fr</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Suivez-nous</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"\"><i class=\"fab fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-github fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook fa-2\"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class=\"footer2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"simplenav\">
                                <a href=\"#\">Accueil</a> |
                                <a href=\"{{  asset('about') }}\">A propos</a> |
                                <a href=\"sidebar-right.html\">Sidebar</a> |
                                <a href=\"{{  ('contact') }}\">Contact</a> |
                                <b><a href=\"{{ asset('signup') }}\">S'enregistrer</a></b>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"text-right\">
                                Copyright &copy; 2014, Watching Birds Group. Designed by <a href=\"http://gettemplate.com/\" rel=\"designer\">gettemplate</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>

    {% block javascripts %}
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]-->
            <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
            <script src=\"{{ asset('js/respond.min.js') }}\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\" integrity=\"sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
       
            <!--<script src=\"https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script> -->
            <script src=\"{{ asset('js/autocomplete.js')}}\"></script>
            <script src=\"{{ asset('js/headroom.min.js') }}\"></script>
            <script src=\"{{ asset('js/jQuery.headroom.min.js')}}\"></script>
            <script src=\"{{ asset('js/template.js')}}\"></script>
            <script src=\"{{ asset('js/leaflet-map.js') }}\"></script>

    <!--[endif]-->
        {% endblock %}
    </body>", "base.html.twig", "C:\\wamp\\www\\NAO-App\\templates\\base.html.twig");
    }
}
