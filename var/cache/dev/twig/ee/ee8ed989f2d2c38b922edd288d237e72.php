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

/* pages/recipe/show.html.twig */
class __TwigTemplate_05c8523cb93833d247481a3b26f87d98 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/recipe/show.html.twig", 1);
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

        // line 4
        echo "    SymRecipe -
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"alert alert-success mt-4\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        <h1 class=\"mt-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>

        <p>
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 20, $this->source); })()), "average", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <p>Note moyenne :
            ";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 22, $this->source); })()), "average", [], "any", false, false, false, 22), 1, ".", ","), "html", null, true);
            echo " / 5</p>
    ";
        } else {
            // line 24
            echo "        <p>Pas de notes</p>
        ";
        }
        // line 26
        echo "
           </p>


        <div>
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 32, $this->source); })()), "createdAt", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
        echo "</span>
        </div>

        <div class=\"mt-4\">
            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 36, $this->source); })()), "time", [], "any", false, false, false, 36)) {
            // line 37
            echo "                <p>Temps (en minute) :
                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 38, $this->source); })()), "time", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 40
            echo "                <p>Temps non renseigné</p>
            ";
        }
        // line 42
        echo "        </div>

        <div class=\"mt-4\">
            ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 45, $this->source); })()), "time", [], "any", false, false, false, 45)) {
            // line 46
            echo "                <p>Difficulté :
                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 47, $this->source); })()), "difficulty", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 49
            echo "                <p>Difficulté non renseigné</p>
            ";
        }
        // line 51
        echo "        </div>

        <div class=\"mt-4\">
            ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 54, $this->source); })()), "time", [], "any", false, false, false, 54)) {
            // line 55
            echo "                <p>Pour
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 56, $this->source); })()), "nbPeople", [], "any", false, false, false, 56), "html", null, true);
            echo "
                    personnes</p>
            ";
        } else {
            // line 59
            echo "                <p>Nombre de personnes non renseigné</p>
            ";
        }
        // line 61
        echo "        </div>

        <div class=\"mt-4\">
            ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64)) {
            // line 65
            echo "                <p>Prix (en €) :
                    ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 66, $this->source); })()), "price", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 68
            echo "                <p>Prix non renseigné</p>
            ";
        }
        // line 70
        echo "        </div>

        <div class=\"mt-4\">
            ";
        // line 73
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73);
        echo "
        </div>

        <div class=\"mt-4\">
            <p class=\"mt-4\">Ingrédients</p>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 78, $this->source); })()), "ingredients", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 79
            echo "                <span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </div>

        <div class=\"mark mt-4\">
            ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form');
        echo "
        </div>



    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 84,  250 => 81,  241 => 79,  237 => 78,  229 => 73,  224 => 70,  220 => 68,  215 => 66,  212 => 65,  210 => 64,  205 => 61,  201 => 59,  195 => 56,  192 => 55,  190 => 54,  185 => 51,  181 => 49,  176 => 47,  173 => 46,  171 => 45,  166 => 42,  162 => 40,  157 => 38,  154 => 37,  152 => 36,  145 => 32,  137 => 26,  133 => 24,  128 => 22,  125 => 21,  123 => 20,  117 => 17,  114 => 16,  105 => 13,  102 => 12,  98 => 11,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
    SymRecipe -
    {{ recipe.name }}
{% endblock %}

{% block body %}
    <div class=\"container\">

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success mt-4\">
                {{ message }}
            </div>
        {% endfor %}

        <h1 class=\"mt-4\">{{ recipe.name }}</h1>

        <p>
            {% if recipe.average %}
        <p>Note moyenne :
            {{ recipe.average|number_format(1, '.', ',') }} / 5</p>
    {% else %}
        <p>Pas de notes</p>
        {% endif %}

           </p>


        <div>
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t{{ recipe.createdAt|date('d/m/Y') }}</span>
        </div>

        <div class=\"mt-4\">
            {% if recipe.time %}
                <p>Temps (en minute) :
                    {{ recipe.time}}</p>
            {% else %}
                <p>Temps non renseigné</p>
            {% endif %}
        </div>

        <div class=\"mt-4\">
            {% if recipe.time %}
                <p>Difficulté :
                    {{ recipe.difficulty }}</p>
            {% else %}
                <p>Difficulté non renseigné</p>
            {% endif %}
        </div>

        <div class=\"mt-4\">
            {% if recipe.time %}
                <p>Pour
                    {{ recipe.nbPeople }}
                    personnes</p>
            {% else %}
                <p>Nombre de personnes non renseigné</p>
            {% endif %}
        </div>

        <div class=\"mt-4\">
            {% if recipe.price %}
                <p>Prix (en €) :
                    {{ recipe.price }}</p>
            {% else %}
                <p>Prix non renseigné</p>
            {% endif %}
        </div>

        <div class=\"mt-4\">
            {{ recipe.description|raw }}
        </div>

        <div class=\"mt-4\">
            <p class=\"mt-4\">Ingrédients</p>
            {% for ingredient in recipe.ingredients %}
                <span class=\"badge bg-primary\">{{ ingredient.name }}</span>
            {% endfor %}
        </div>

        <div class=\"mark mt-4\">
            {{ form(form) }}
        </div>



    </div>
{% endblock %}

", "pages/recipe/show.html.twig", "/Users/axelvair/Documents/Workspace/Symrecipe3/symrecipe/templates/pages/recipe/show.html.twig");
    }
}
