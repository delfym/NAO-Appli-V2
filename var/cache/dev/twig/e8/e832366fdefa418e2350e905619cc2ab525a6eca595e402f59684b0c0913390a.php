<?php

/* pages/index.html.twig */
class __TwigTemplate_f405e9926ca2849908befe5309530c01c5bc784e69e5b22d4ff67fdc7db982fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<!-- Header -->
\t<header id=\"head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1 class=\"lead\">BIENVENUE SUR LE SITE DE LA NAO</h1>
\t\t\t\t<p class=\"tagline\">Association Nos Amis les Oiseaux</p>
\t\t\t\t<p><a class=\"btn btn-default btn-lg\" role=\"button\">Pour les particuliers</a> <a class=\"btn btn-action btn-lg\" role=\"button\">Pour les naturalistes</a></p>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /Header -->

\t<!-- Intro -->
\t<div class=\"container text-center\">
\t\t<br> <br>
\t\t<h2 class=\"thin\">Vous cherchez une espèce ou souhaitez nous en signaler une?</h2>
\t\t<p class=\"text-muted\">
\t\t\tVous êtes au bon endroit!
\t\t</p>
\t</div>
\t<!-- /Intro-->
\t\t
\t<!-- Highlights - jumbotron -->
\t<div class=\"jumbotron top-space\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<h3 class=\"text-center thin\">Vous allez pouvoir rechercher de nombreuses espèces.</h3>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-8 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-search fa-5\"></i>Rechercher un oiseau</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Vous allez pouvoir retrouver un oiseau parmi les nombreuses espèces répertoriées.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-8 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-binoculars fa-5\"></i>Signaler un oiseau</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Vous allez pouvoir saisir une observation, via notre formulaire, et notre carte interactive.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-8 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-heart fa-5\"></i>Les oiseaux du mois</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Les gagnants du mois sont...</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-smile-o fa-5\"></i>Author's support</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
\t\t\t\t\t</div>
\t\t\t\t</div-->
\t\t\t</div> <!-- /row  -->
\t\t
\t\t</div>
\t</div>
\t<!-- /Highlights -->

\t<!-- container -->
\t<div class=\"container\">

\t\t<h2 class=\"text-center top-space\">Les oiseaux du moment</h2>
\t\t<br>

\t\t<!--div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Which code editor would you recommend?</h3>
\t\t\t\t<p>I'd highly recommend you <a href=\"http://www.sublimetext.com/\">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Nice header. Where do I find more images like that one?</h3>
\t\t\t\t<p>
\t\t\t\t\tWell, there are thousands of stock art galleries, but personally, 
\t\t\t\t\tI prefer to use photos from these sites: <a href=\"http://unsplash.com\">Unsplash.com</a> 
\t\t\t\t\tand <a href=\"http://www.flickr.com/creativecommons/by-2.0/tags/\">Flickr - Creative Commons</a></p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>L'oiseau le plus recherché du mois!!!</h3>
\t\t\t\t<p>La mouette est l'oiseau du mois!!!</p>
                <p>
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/oiseau-blanc.jpg"), "html", null, true);
        echo "\" alt=\"oiseau du mois\"  class=\"img-rounded center-block\" width=\"200\">
                </p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>L'oiseau le plus observé du mois</h3>
\t\t\t\t<p>Le piou piou est l'oiseau le plus observé ce mois-ci !</p>
                <p>
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/oiseau-blanc.jpg"), "html", null, true);
        echo "\" alt=\"oiseau du mois\"  class=\"img-rounded center-block\" width=\"200\">
                </p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"jumbotron top-space\">
\t\t\t<h4>Vous voulez saisir de nouvelles observations? C'est très simple grace à notre carte interactive.</h4>
     \t\t<p class=\"text-right\"><a class=\"btn btn-primary btn-large\">Accéder à la carte</a></p>
  \t\t</div>

</div>\t<!-- /container -->
\t
\t<!-- Social links. @TODO: replace by link/instructions in template -->
\t<section id=\"social\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper clearfix\">
\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t<div class=\"addthis_toolbox addthis_default_style\">
\t\t\t\t<a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
\t\t\t\t<a class=\"addthis_button_tweet\"></a>
\t\t\t\t<a class=\"addthis_button_linkedin_counter\"></a>
\t\t\t\t<a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"></a>
\t\t\t\t</div>
\t\t\t\t<!-- AddThis Button END -->
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /social links -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 96,  140 => 89,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<!-- Header -->
\t<header id=\"head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1 class=\"lead\">BIENVENUE SUR LE SITE DE LA NAO</h1>
\t\t\t\t<p class=\"tagline\">Association Nos Amis les Oiseaux</p>
\t\t\t\t<p><a class=\"btn btn-default btn-lg\" role=\"button\">Pour les particuliers</a> <a class=\"btn btn-action btn-lg\" role=\"button\">Pour les naturalistes</a></p>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /Header -->

\t<!-- Intro -->
\t<div class=\"container text-center\">
\t\t<br> <br>
\t\t<h2 class=\"thin\">Vous cherchez une espèce ou souhaitez nous en signaler une?</h2>
\t\t<p class=\"text-muted\">
\t\t\tVous êtes au bon endroit!
\t\t</p>
\t</div>
\t<!-- /Intro-->
\t\t
\t<!-- Highlights - jumbotron -->
\t<div class=\"jumbotron top-space\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<h3 class=\"text-center thin\">Vous allez pouvoir rechercher de nombreuses espèces.</h3>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-8 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-search fa-5\"></i>Rechercher un oiseau</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Vous allez pouvoir retrouver un oiseau parmi les nombreuses espèces répertoriées.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-8 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-binoculars fa-5\"></i>Signaler un oiseau</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Vous allez pouvoir saisir une observation, via notre formulaire, et notre carte interactive.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-8 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-heart fa-5\"></i>Les oiseaux du mois</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Les gagnants du mois sont...</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\"><h4><i class=\"fa fa-smile-o fa-5\"></i>Author's support</h4></div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
\t\t\t\t\t</div>
\t\t\t\t</div-->
\t\t\t</div> <!-- /row  -->
\t\t
\t\t</div>
\t</div>
\t<!-- /Highlights -->

\t<!-- container -->
\t<div class=\"container\">

\t\t<h2 class=\"text-center top-space\">Les oiseaux du moment</h2>
\t\t<br>

\t\t<!--div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Which code editor would you recommend?</h3>
\t\t\t\t<p>I'd highly recommend you <a href=\"http://www.sublimetext.com/\">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Nice header. Where do I find more images like that one?</h3>
\t\t\t\t<p>
\t\t\t\t\tWell, there are thousands of stock art galleries, but personally, 
\t\t\t\t\tI prefer to use photos from these sites: <a href=\"http://unsplash.com\">Unsplash.com</a> 
\t\t\t\t\tand <a href=\"http://www.flickr.com/creativecommons/by-2.0/tags/\">Flickr - Creative Commons</a></p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>L'oiseau le plus recherché du mois!!!</h3>
\t\t\t\t<p>La mouette est l'oiseau du mois!!!</p>
                <p>
                    <img src=\"{{ asset('images/oiseau-blanc.jpg') }}\" alt=\"oiseau du mois\"  class=\"img-rounded center-block\" width=\"200\">
                </p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>L'oiseau le plus observé du mois</h3>
\t\t\t\t<p>Le piou piou est l'oiseau le plus observé ce mois-ci !</p>
                <p>
                    <img src=\"{{ asset('images/oiseau-blanc.jpg') }}\" alt=\"oiseau du mois\"  class=\"img-rounded center-block\" width=\"200\">
                </p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"jumbotron top-space\">
\t\t\t<h4>Vous voulez saisir de nouvelles observations? C'est très simple grace à notre carte interactive.</h4>
     \t\t<p class=\"text-right\"><a class=\"btn btn-primary btn-large\">Accéder à la carte</a></p>
  \t\t</div>

</div>\t<!-- /container -->
\t
\t<!-- Social links. @TODO: replace by link/instructions in template -->
\t<section id=\"social\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper clearfix\">
\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t<div class=\"addthis_toolbox addthis_default_style\">
\t\t\t\t<a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
\t\t\t\t<a class=\"addthis_button_tweet\"></a>
\t\t\t\t<a class=\"addthis_button_linkedin_counter\"></a>
\t\t\t\t<a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"></a>
\t\t\t\t</div>
\t\t\t\t<!-- AddThis Button END -->
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /social links -->

{% endblock %}


", "pages/index.html.twig", "C:\\wamp\\www\\NAO-App\\templates\\pages\\index.html.twig");
    }
}
