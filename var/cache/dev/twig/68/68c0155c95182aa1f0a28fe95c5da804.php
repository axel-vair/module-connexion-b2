<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./pages/home.html.twig */
class __TwigTemplate_4c37f344e4d0fc18efd56209caadc7f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./pages/home.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "./pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Symrecipe - Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container mt-4\">
        <div class=\"jumbotron\">
            <h1 class=\"display-4\">Bienvenue sur Symrecipe!</h1>
            <p class=\"lead\">Symrecipe est un site internet qui permet de créer des recettes à l'aide d'ingrédients que tu auras ajoutés toi-même. Tu pourras ensuite partager ces recettes avec la communauté ou bien simplement les garder sur ton espace <privé></privé>.</p>
            <hr class=\"my-4\">
            <p>Pour commencer à créer des recettes, rendez-vous sur la page d'inscription.</p>
            <p class=\"lead\">
                <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.registration");
        echo "\" role=\"button\">S'inscrire</a>
            </p>
        </div>

        <div class=\"recipes\">
            <h2 class=\"mt-4\">Recettes de la communauté</h2>
            <div class=\"d-flex justify-content-between\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 22
            echo "                    <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\"> <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.show", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">Recette n°";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">
                               ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "
                            </h4>
                            <p class=\"card-text\">";
            // line 28
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 28), 0, 100) . "..."), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>

    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "./pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 32,  128 => 28,  123 => 26,  115 => 23,  112 => 22,  108 => 21,  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/base.html.twig\" %}

{% block title %} Symrecipe - Accueil
{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"jumbotron\">
            <h1 class=\"display-4\">Bienvenue sur Symrecipe!</h1>
            <p class=\"lead\">Symrecipe est un site internet qui permet de créer des recettes à l'aide d'ingrédients que tu auras ajoutés toi-même. Tu pourras ensuite partager ces recettes avec la communauté ou bien simplement les garder sur ton espace <privé></privé>.</p>
            <hr class=\"my-4\">
            <p>Pour commencer à créer des recettes, rendez-vous sur la page d'inscription.</p>
            <p class=\"lead\">
                <a class=\"btn btn-primary btn-lg\" href=\"{{ path('security.registration') }}\" role=\"button\">S'inscrire</a>
            </p>
        </div>

        <div class=\"recipes\">
            <h2 class=\"mt-4\">Recettes de la communauté</h2>
            <div class=\"d-flex justify-content-between\">
                {% for recipe in recipes %}
                    <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\"> <a href=\"{{ path('recipe.show', {id: recipe.id}) }}\">Recette n°{{ recipe.id }}</a></div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">
                               {{ recipe.name }}
                            </h4>
                            <p class=\"card-text\">{{ recipe.description|slice(0, 100) ~ '...' }}</p>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>

    </div>



{%  endblock %}", "./pages/home.html.twig", "/Users/axelvair/Documents/Workspace/Symrecipe3/symrecipe/templates/pages/home.html.twig");
    }
}
