<?php

/* pages/adminSpace.html.twig */
class __TwigTemplate_6da7947075b4f7cdd39f324c4de6aad52d400b8febc0e744141bfc4e8b49021f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/adminSpace.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/adminSpace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/adminSpace.html.twig"));

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
\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">
\t\t
\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t<li class=\"active\">Page d'administration</li>
\t\t</ol>

\t\t<div class=\"row\">
            <div class=\"row\">
                <p></p>
            </div>
\t\t\t<!-- Sidebar -->
\t\t\t<aside class=\"col-md-4 sidebar sidebar-left \" id=\"sidebarMenu\">

                <!--div class=\"row\" id=\"sidebarMenu\"></div-->
\t\t\t\t<div class=\"row widget\" id=\"obsLink\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Mes observations</a></h4>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row widget\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Saisir une observation</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row widget\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Gérer les membres</a></h4>
                        <p>Commun à tous les admins</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row widget\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Les saisies à valider</a></h4>
                        <p>Commun à tous les admins</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</aside>
\t\t\t<!-- /Sidebar -->

\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-md-8 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">Mon tableau de bord</h1>
\t\t\t\t</header>
                <p>Mes dernières observations
                <ul><a href=\"#\">Mes dernières observations</a></ul>
                        <li>obs 1 <a href=\"#\">...</a></li>
                        <li>obs 2 <a href=\"#\">...</a></li>
                        <li>obs 3 <a href=\"#\">...</a></li>
                        <li>obs 4 <a href=\"#\">...</a></li>
                </p>
                <p><a href=\"#\">Saisir de nouvelles observations</a></p>


                <p>Mes observations à valider
                <ul><a href=\"#\">On récupère ici les 3 premières obs en attente</a></ul>
                <li>obs 1 <a href=\"#\">...</a></li>
                <li>obs 2 <a href=\"#\">...</a></li>
                <li>obs 3 <a href=\"#\">...</a></li>

                </p>


                <p>Les nouveaux naturalistes à valider</p>
                <ul><a href=\"#\">On récupère ici les 3 premièrs memebres en attente de validation</a></ul>
                <li>nat 1 <a href=\"#\">...</a></li>
                <li>nat 2 <a href=\"#\">...</a></li>
                <li>nat 3 <a href=\"#\">...</a></li>

            </article>
\t\t\t<!-- /Article -->

\t\t</div>
\t</div>\t<!-- /container -->
\t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/adminSpace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">
\t\t
\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t<li class=\"active\">Page d'administration</li>
\t\t</ol>

\t\t<div class=\"row\">
            <div class=\"row\">
                <p></p>
            </div>
\t\t\t<!-- Sidebar -->
\t\t\t<aside class=\"col-md-4 sidebar sidebar-left \" id=\"sidebarMenu\">

                <!--div class=\"row\" id=\"sidebarMenu\"></div-->
\t\t\t\t<div class=\"row widget\" id=\"obsLink\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Mes observations</a></h4>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row widget\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Saisir une observation</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row widget\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Gérer les membres</a></h4>
                        <p>Commun à tous les admins</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row widget\">
\t\t\t\t\t<div class=\"col-xs-12\">
                        <h4><a href=\"#\">Les saisies à valider</a></h4>
                        <p>Commun à tous les admins</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</aside>
\t\t\t<!-- /Sidebar -->

\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-md-8 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">Mon tableau de bord</h1>
\t\t\t\t</header>
                <p>Mes dernières observations
                <ul><a href=\"#\">Mes dernières observations</a></ul>
                        <li>obs 1 <a href=\"#\">...</a></li>
                        <li>obs 2 <a href=\"#\">...</a></li>
                        <li>obs 3 <a href=\"#\">...</a></li>
                        <li>obs 4 <a href=\"#\">...</a></li>
                </p>
                <p><a href=\"#\">Saisir de nouvelles observations</a></p>


                <p>Mes observations à valider
                <ul><a href=\"#\">On récupère ici les 3 premières obs en attente</a></ul>
                <li>obs 1 <a href=\"#\">...</a></li>
                <li>obs 2 <a href=\"#\">...</a></li>
                <li>obs 3 <a href=\"#\">...</a></li>

                </p>


                <p>Les nouveaux naturalistes à valider</p>
                <ul><a href=\"#\">On récupère ici les 3 premièrs memebres en attente de validation</a></ul>
                <li>nat 1 <a href=\"#\">...</a></li>
                <li>nat 2 <a href=\"#\">...</a></li>
                <li>nat 3 <a href=\"#\">...</a></li>

            </article>
\t\t\t<!-- /Article -->

\t\t</div>
\t</div>\t<!-- /container -->
\t\t

{% endblock %}", "pages/adminSpace.html.twig", "C:\\wamp\\www\\NAO-App\\templates\\pages\\adminSpace.html.twig");
    }
}
