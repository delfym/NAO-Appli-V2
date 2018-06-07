<?php

/* pages/about.html.twig */
class __TwigTemplate_c2a5f97ab8b3d1bb361e27857bc7ea7286c5125e98b696bf66383d09b0e20066 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/about.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/about.html.twig"));

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
    <header id=\"head\" class=\"secondary\"></header>
<!-- container -->
<div class=\"container\">

    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
        <li class=\"active\">A propos</li>
    </ol>

    <div class=\"row\">

        <!-- Article main content -->
        <article class=\"col-sm-8 maincontent\">
            <header class=\"page-header\">
                <h1 class=\"page-title\">A propos de notre association</h1>
            </header>
            <h3>Notre travail</h3>
            <p><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/geese.jpg"), "html", null, true);
        echo "\" alt=\"canards sur un lac\" class=\"img-rounded pull-right\" width=\"300\" > </p>
            <p>L'association \"NOS AMIS LES OISEAUX\" participe à un programme de recherche visant à étudier les effets du climat, de l'urbanisation et de l'agriculture sur la biodiversité.
                Passionnés d'ornithologie, professionnels ou non, l'association souhaite votre participation à cette étude organisée dans le cadre d'un projet européen. Vos promenades seront l'occasion d'alimenter notre base de données grâce à vos observations.

                Pour cela, il suffit de vous inscrire. Vous aurez alors accès à notre application qui vous permettra de :

                rechercher les différentes espèces d’oiseaux parmi la base de données (téléchargement via la base de données TAXREF du Muséum National d’Histoire Naturelle)

                les afficher sur une carte (après filtre par espèce)

                saisir une « observation » d’un oiseau sur le terrain, avec nom, date, coordonnées GPS et photo facultative.


                Professionnels, nous avons aussi besoin de vous pour contribuer à ces recherches, et valider les observations faites par les bénévoles non professionnels.</p>
            <!--h3>Necessitatibus</h3>
            <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
            <h3>Fugit, laboriosam</h3>
            <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
            <h3>Doloribus, illo ipsum</h3>
            <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
            <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p-->

        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class=\"col-sm-4 sidebar sidebar-right\">

            <div class=\"widget\">
                <h4>Dernières observations</h4>
                <ul class=\"list-unstyled list-spaces\">
                    <li><a href=\"\">Lorem ipsum dolor</a><br><span class=\"small text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
                    <li><a href=\"\">Totam, libero, quis</a><br><span class=\"small text-muted\">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
                    <li><a href=\"\">Enim, sequi dignissimos</a><br><span class=\"small text-muted\">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
                    <li><a href=\"\">Suscipit, consequatur, aut</a><br><span class=\"small text-muted\">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
                    <li><a href=\"\">Nam, illo, veritatis</a><br><span class=\"small text-muted\">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
                </ul>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>\t<!-- /container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
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
        <li class=\"active\">A propos</li>
    </ol>

    <div class=\"row\">

        <!-- Article main content -->
        <article class=\"col-sm-8 maincontent\">
            <header class=\"page-header\">
                <h1 class=\"page-title\">A propos de notre association</h1>
            </header>
            <h3>Notre travail</h3>
            <p><img src=\"{{ asset('images/geese.jpg') }}\" alt=\"canards sur un lac\" class=\"img-rounded pull-right\" width=\"300\" > </p>
            <p>L'association \"NOS AMIS LES OISEAUX\" participe à un programme de recherche visant à étudier les effets du climat, de l'urbanisation et de l'agriculture sur la biodiversité.
                Passionnés d'ornithologie, professionnels ou non, l'association souhaite votre participation à cette étude organisée dans le cadre d'un projet européen. Vos promenades seront l'occasion d'alimenter notre base de données grâce à vos observations.

                Pour cela, il suffit de vous inscrire. Vous aurez alors accès à notre application qui vous permettra de :

                rechercher les différentes espèces d’oiseaux parmi la base de données (téléchargement via la base de données TAXREF du Muséum National d’Histoire Naturelle)

                les afficher sur une carte (après filtre par espèce)

                saisir une « observation » d’un oiseau sur le terrain, avec nom, date, coordonnées GPS et photo facultative.


                Professionnels, nous avons aussi besoin de vous pour contribuer à ces recherches, et valider les observations faites par les bénévoles non professionnels.</p>
            <!--h3>Necessitatibus</h3>
            <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
            <h3>Fugit, laboriosam</h3>
            <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
            <h3>Doloribus, illo ipsum</h3>
            <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
            <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p-->

        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class=\"col-sm-4 sidebar sidebar-right\">

            <div class=\"widget\">
                <h4>Dernières observations</h4>
                <ul class=\"list-unstyled list-spaces\">
                    <li><a href=\"\">Lorem ipsum dolor</a><br><span class=\"small text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
                    <li><a href=\"\">Totam, libero, quis</a><br><span class=\"small text-muted\">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
                    <li><a href=\"\">Enim, sequi dignissimos</a><br><span class=\"small text-muted\">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
                    <li><a href=\"\">Suscipit, consequatur, aut</a><br><span class=\"small text-muted\">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
                    <li><a href=\"\">Nam, illo, veritatis</a><br><span class=\"small text-muted\">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
                </ul>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>\t<!-- /container -->

{% endblock %}
", "pages/about.html.twig", "C:\\wamp\\www\\NAO-App\\templates\\pages\\about.html.twig");
    }
}
