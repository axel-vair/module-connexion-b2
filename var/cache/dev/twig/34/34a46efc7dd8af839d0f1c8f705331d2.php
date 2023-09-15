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

/* pages/recipe/index.html.twig */
class __TwigTemplate_7565c3de0e502a536f227c96767f10fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "pages/recipe/index.html.twig", 1);
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

        echo "Symrecipe - Recettes ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-4\">
        <h1>Mes recettes</h1>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.new");
        echo "\" class=\"btn btn-primary mb-4 mt-2\">Créer une recette</a>
        ";
        // line 9
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9) === [])) {
            // line 10
            echo "

            ";
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "                <div class=\"alert alert-success mt-4\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                <div class=\"alert alert-warning mt-4\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th scope=\"col\">Numéro</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Difficulté</th>
                    <th scope=\"col\">Date de création</th>
                    <th scope=\"col\">Edition</th>
                    <th scope=\"col\">Suppression</th>

                </tr>
                </thead>
                <tbody>

                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 41
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "</th>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 45
                if ((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 45))) {
                    // line 46
                    echo "                                Non renseigné
                            ";
                } else {
                    // line 48
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 48), "html", null, true);
                    echo "
                            ";
                }
                // line 50
                echo "                        </td>
                        <td>
                            ";
                // line 52
                if ((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 52))) {
                    // line 53
                    echo "                                Non renseignée
                            ";
                } else {
                    // line 55
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 55), "html", null, true);
                    echo "
                            ";
                }
                // line 57
                echo "                        </td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>                        </td>
                        <td>
                            <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </tbody>
            </table>
            <div class=\"navigation d-flex justify-content-center\">
                ";
            // line 69
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 69, $this->source); })()));
            echo "
            </div>
        ";
        } else {
            // line 72
            echo "            <div class=\"count\">
                Il n'y a pas de recettes
            </div>
        ";
        }
        // line 76
        echo "    </div>
    ";
        // line 78
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 78,  240 => 76,  234 => 72,  228 => 69,  223 => 66,  213 => 62,  208 => 60,  203 => 58,  200 => 57,  194 => 55,  190 => 53,  188 => 52,  184 => 50,  178 => 48,  174 => 46,  172 => 45,  167 => 43,  163 => 42,  160 => 41,  156 => 40,  138 => 24,  129 => 21,  126 => 20,  122 => 19,  119 => 18,  110 => 15,  107 => 14,  102 => 13,  98 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block title %}Symrecipe - Recettes {% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Mes recettes</h1>
        <a href=\"{{ path('recipe.new') }}\" class=\"btn btn-primary mb-4 mt-2\">Créer une recette</a>
        {% if not recipes.items is same as ([]) %}


            {#  Display message flash when modify or suppress recipe #}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success mt-4\">
                    {{ message }}
                </div>
            {% endfor %}

            {% for message in app.flashes('warning') %}
                <div class=\"alert alert-warning mt-4\">
                    {{ message }}
                </div>
            {% endfor %}

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th scope=\"col\">Numéro</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Difficulté</th>
                    <th scope=\"col\">Date de création</th>
                    <th scope=\"col\">Edition</th>
                    <th scope=\"col\">Suppression</th>

                </tr>
                </thead>
                <tbody>

                {% for recipe in recipes %}
                    <tr>
                        <th scope=\"row\">{{ recipe.id }}</th>
                        <td>{{ recipe.name }}</td>
                        <td>
                            {% if recipe.price is null %}
                                Non renseigné
                            {% else %}
                                {{ recipe.price }}
                            {% endif %}
                        </td>
                        <td>
                            {% if recipe.difficulty is null %}
                                Non renseignée
                            {% else %}
                                {{ recipe.difficulty }}
                            {% endif %}
                        </td>
                        <td>{{ recipe.createdAt|date('d/m/Y')  }}</td>
                        <td>
                            <a href=\"{{ path('recipe.edit', {id: recipe.id}) }}\" class=\"btn btn-info\">Modifier</a>                        </td>
                        <td>
                            <a href=\"{{ path('recipe.delete', {id: recipe.id}) }}\" class=\"btn btn-warning\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <div class=\"navigation d-flex justify-content-center\">
                {{ knp_pagination_render(recipes) }}
            </div>
        {% else %}
            <div class=\"count\">
                Il n'y a pas de recettes
            </div>
        {% endif %}
    </div>
    {# display navigation #}

{% endblock %}
", "pages/recipe/index.html.twig", "/Users/axelvair/Documents/Workspace/Symrecipe3/symrecipe/templates/pages/recipe/index.html.twig");
    }
}
