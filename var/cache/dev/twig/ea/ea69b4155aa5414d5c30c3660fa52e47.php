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

/* project/index.html.twig */
class __TwigTemplate_dba831b404ac886f97b39835c285d38d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Project index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Crud</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_new");
        echo "\"> 
                    Create New Project 
                </a>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th width=\"240px\">Action</th>
                    </tr>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 22
            echo "                    <tr>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                <a
                                    class=\"btn btn-outline-info\"
                                    href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_show", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                                    Show
                                </a>
                                <a
                                    class=\"btn btn-outline-success\"
                                    href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">
                                    Edit
                                </a>
  
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 38))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-outline-danger\">Delete</button>
                            </form>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </table>
            </div>
        </div>
    </div>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  130 => 38,  123 => 34,  115 => 29,  109 => 26,  104 => 24,  100 => 23,  97 => 22,  93 => 21,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}Project index{% endblock %}
  
{% block body %}
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Crud</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"{{ path('app_project_new') }}\"> 
                    Create New Project 
                </a>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th width=\"240px\">Action</th>
                    </tr>
                    {% for project in projects %}
                    <tr>
                        <td>{{ project.name }}</td>
                        <td>{{ project.description }}</td>
                        <td>
                            <form method=\"post\" action=\"{{ path('app_project_delete', {'id': project.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                <a
                                    class=\"btn btn-outline-info\"
                                    href=\"{{ path('app_project_show', {'id': project.id}) }}\">
                                    Show
                                </a>
                                <a
                                    class=\"btn btn-outline-success\"
                                    href=\"{{ path('app_project_edit', {'id': project.id}) }}\">
                                    Edit
                                </a>
  
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ project.id) }}\">
                                <button class=\"btn btn-outline-danger\">Delete</button>
                            </form>
                        </td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
  
{% endblock %}", "project/index.html.twig", "/var/www/html/crud/templates/project/index.html.twig");
    }
}
