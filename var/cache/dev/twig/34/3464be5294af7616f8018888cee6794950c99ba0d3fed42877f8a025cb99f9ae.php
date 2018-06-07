<?php

/* pages/contact.html.twig */
class __TwigTemplate_8753d43b7d2270b94bf5dc5d0a03b87ca2f70abc42c25790a296925a9c2398e4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

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

\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
\t\t\t<li class=\"active\">About</li>
\t\t</ol>

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-sm-9 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">Contact us</h1>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\tWe’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\"> Sign up for newsletter</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-action\" type=\"submit\" value=\"Send message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t</article>
\t\t\t<!-- /Article -->
\t\t\t
\t\t\t<!-- Sidebar -->
\t\t\t<aside class=\"col-sm-3 sidebar sidebar-right\">

\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4>Address</h4>
\t\t\t\t\t<address>
\t\t\t\t\t\t2002 Holcombe Boulevard, Houston, TX 77030, USA
\t\t\t\t\t</address>
\t\t\t\t\t<h4>Phone:</h4>
\t\t\t\t\t<address>
\t\t\t\t\t\t(713) 791-1414
\t\t\t\t\t</address>
\t\t\t\t</div>

\t\t\t</aside>
\t\t\t<!-- /Sidebar -->

\t\t</div>
\t</div>\t<!-- /container -->

\t<section class=\"container-full top-space\">
\t\t<div id=\"map\"></div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">

\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"{{ asset('home') }}\">Accueil</a></li>
\t\t\t<li class=\"active\">About</li>
\t\t</ol>

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-sm-9 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">Contact us</h1>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\tWe’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\"> Sign up for newsletter</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-action\" type=\"submit\" value=\"Send message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t</article>
\t\t\t<!-- /Article -->
\t\t\t
\t\t\t<!-- Sidebar -->
\t\t\t<aside class=\"col-sm-3 sidebar sidebar-right\">

\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4>Address</h4>
\t\t\t\t\t<address>
\t\t\t\t\t\t2002 Holcombe Boulevard, Houston, TX 77030, USA
\t\t\t\t\t</address>
\t\t\t\t\t<h4>Phone:</h4>
\t\t\t\t\t<address>
\t\t\t\t\t\t(713) 791-1414
\t\t\t\t\t</address>
\t\t\t\t</div>

\t\t\t</aside>
\t\t\t<!-- /Sidebar -->

\t\t</div>
\t</div>\t<!-- /container -->

\t<section class=\"container-full top-space\">
\t\t<div id=\"map\"></div>
\t</section>
{% endblock %}", "pages/contact.html.twig", "C:\\wamp\\www\\NAO-App\\templates\\pages\\contact.html.twig");
    }
}
