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

/* pages/ingredient/index.html.twig */
class __TwigTemplate_518078e3ae7f1798ff4d6cf7a0d65f1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "pages/ingredient/index.html.twig", 1);
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

        echo "Symrecipe - Ingrédients";
        
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
        ";
        // line 7
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 7, $this->source); })()), "items", [], "any", false, false, false, 7) === [])) {
            // line 8
            echo "        <h1>Mes ingrédients</h1>
            <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary mb-4 mt-2\">Créer un ingrédient</a>

            ";
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                <div class=\"alert alert-success mt-4\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Date de création</th>
                <th scope=\"col\">Edition</th>
                <th scope=\"col\">Suppression</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 31
                echo "            <tr>
                <th scope=\"row\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "</th>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>
                </td>
                <td>
                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>

                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </tbody>
        </table>
        <div class=\"navigation d-flex justify-content-center\">
            ";
            // line 48
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 48, $this->source); })()));
            echo "
        </div>
        ";
        } else {
            // line 51
            echo "        <div class=\"count\">
            Il n'y a pas d'ingrédient
        </div>
        ";
        }
        // line 55
        echo "    </div>
    ";
        // line 57
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  191 => 55,  185 => 51,  179 => 48,  174 => 45,  163 => 40,  157 => 37,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  137 => 31,  133 => 30,  118 => 17,  109 => 14,  106 => 13,  101 => 12,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block title %}Symrecipe - Ingrédients{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        {% if not ingredients.items is same as ([]) %}
        <h1>Mes ingrédients</h1>
            <a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary mb-4 mt-2\">Créer un ingrédient</a>

            {#  Display message flash when modify or suppress ingredient #}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success mt-4\">
                    {{ message }}
                </div>
            {% endfor %}

        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Date de création</th>
                <th scope=\"col\">Edition</th>
                <th scope=\"col\">Suppression</th>
            </tr>
            </thead>
            <tbody>
            {% for ingredient in ingredients %}
            <tr>
                <th scope=\"row\">{{ ingredient.id }}</th>
                <td>{{ ingredient.name }}</td>
                <td>{{ ingredient.price }}</td>
                <td>{{ ingredient.createdAt|date('d/m/Y')  }}</td>
                <td>
                    <a href=\"{{ path('ingredient.edit', {id: ingredient.id}) }}\" class=\"btn btn-info\">Modifier</a>
                </td>
                <td>
                    <a href=\"{{ path('ingredient.delete', {id: ingredient.id}) }}\" class=\"btn btn-warning\">Supprimer</a>

                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"navigation d-flex justify-content-center\">
            {{ knp_pagination_render(ingredients) }}
        </div>
        {% else %}
        <div class=\"count\">
            Il n'y a pas d'ingrédient
        </div>
        {% endif %}
    </div>
    {# display navigation #}

{% endblock %}
", "pages/ingredient/index.html.twig", "/Users/axelvair/Documents/Workspace/Symrecipe3/symrecipe/templates/pages/ingredient/index.html.twig");
    }
}
