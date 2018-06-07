<?php

/* pages/observForm.html.twig */
class __TwigTemplate_4f061128c05848a9beee8074478bb85a0b4690def631c35b932e4112a2b2b984 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/observForm.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/observForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/observForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
   
    <header id=\"head\" class=\"secondary\"></header>
    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
            <li class=\"active\">Vos observations</li>
        </ol>
        <div class=\"row\">
            <header class=\"page-header\">
                <h1 class=\"page-title\">Saisir votre observation</h1>
            </header>
        </div>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-md-8 maincontent\">
                <!--div class=\"row widget\"></div-->

                <h3>Situer l'oiseau sur la carte</h3>
                <!-- intégration de la carte -->
                <div id=\"mapid\"></div>
            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left asideTheme\">
                <!--div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p></p>
                    </div>
                </div-->
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h3>Formulaire de saisie</h3>

                        <form class=\"form-group\" action=\"\" method=\"post\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "bird", array()), 'label');
        echo "
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "bird", array()), 'errors');
        echo "
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "bird", array()), 'widget');
        echo "

                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "geographic_coordinates", array()), 'label');
        echo "
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "geographic_coordinates", array()), 'errors');
        echo "
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "geographic_coordinates", array()), 'widget');
        echo "

                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "observation_title", array()), 'label');
        echo "
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "observation_title", array()), 'errors');
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "observation_title", array()), 'widget');
        echo "

                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "comment", array()), 'label');
        echo "
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "comment", array()), 'errors');
        echo "
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "comment", array()), 'widget');
        echo "

                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "save", array()), 'widget');
        echo "

                            <!--<label>Votre observation :</label>
                            <textarea class=\"form-control\" name=\"commentObs\"></textarea>
                            <label>Coordonnées de l'observation :</label>
                            <input class=\"form-control\" type=\"text\" id=\"gpsObs\"/>

                            <label>Date de l'observation :</label>
                            <input class=\"form-control\" type=\"date\" name=\"dateObs\"/>
                            <label>Photo de l'oiseau (facultatif):</label>
                            <input class=\"form-control\" type=\"file\" name=\"imgObs\"/>

                            <input class=\"btn btn-action btnLigtht\" type=\"submit\" name=\"submitObs\"/> -->
                        </form>
                    </div>
                </div>

                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p><img src=\"\" alt=\"\"></p>
                        <p></p>
                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->


        </div>
    </div>    <!-- /container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/observForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  145 => 60,  141 => 59,  137 => 58,  132 => 56,  128 => 55,  124 => 54,  119 => 52,  115 => 51,  111 => 50,  106 => 48,  102 => 47,  98 => 46,  62 => 13,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}

   
    <header id=\"head\" class=\"secondary\"></header>
    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"{{ asset('home') }}\">Accueil</a></li>
            <li class=\"active\">Vos observations</li>
        </ol>
        <div class=\"row\">
            <header class=\"page-header\">
                <h1 class=\"page-title\">Saisir votre observation</h1>
            </header>
        </div>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-md-8 maincontent\">
                <!--div class=\"row widget\"></div-->

                <h3>Situer l'oiseau sur la carte</h3>
                <!-- intégration de la carte -->
                <div id=\"mapid\"></div>
            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left asideTheme\">
                <!--div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p></p>
                    </div>
                </div-->
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h3>Formulaire de saisie</h3>

                        <form class=\"form-group\" action=\"\" method=\"post\">
                            {{ form_label(form.bird) }}
                            {{ form_errors(form.bird) }}
                            {{ form_widget(form.bird) }}

                            {{ form_label(form.geographic_coordinates) }}
                            {{ form_errors(form.geographic_coordinates) }}
                            {{ form_widget(form.geographic_coordinates) }}

                            {{ form_label(form.observation_title) }}
                            {{ form_errors(form.observation_title) }}
                            {{ form_widget(form.observation_title) }}

                            {{ form_label(form.comment) }}
                            {{ form_errors(form.comment) }}
                            {{ form_widget(form.comment) }}

                            {{ form_widget(form.save) }}

                            <!--<label>Votre observation :</label>
                            <textarea class=\"form-control\" name=\"commentObs\"></textarea>
                            <label>Coordonnées de l'observation :</label>
                            <input class=\"form-control\" type=\"text\" id=\"gpsObs\"/>

                            <label>Date de l'observation :</label>
                            <input class=\"form-control\" type=\"date\" name=\"dateObs\"/>
                            <label>Photo de l'oiseau (facultatif):</label>
                            <input class=\"form-control\" type=\"file\" name=\"imgObs\"/>

                            <input class=\"btn btn-action btnLigtht\" type=\"submit\" name=\"submitObs\"/> -->
                        </form>
                    </div>
                </div>

                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p><img src=\"\" alt=\"\"></p>
                        <p></p>
                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->


        </div>
    </div>    <!-- /container -->

{% endblock %}

", "pages/observForm.html.twig", "C:\\wamp\\www\\NAO-App\\templates\\pages\\observForm.html.twig");
    }
}
