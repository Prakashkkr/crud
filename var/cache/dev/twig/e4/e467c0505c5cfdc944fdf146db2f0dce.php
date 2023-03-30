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

/* project/_form.html.twig */
class __TwigTemplate_7641005afc251f85270afe5cda6855b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <button class=\"btn ";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 8, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
        echo "  mt-3\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 8, $this->source); })()), "Save Project")) : ("Save Project")), "html", null, true);
        echo "</button>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_end');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "project/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  56 => 8,  51 => 6,  45 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(form.description, {'attr': {'class': 'form-control'}}) }}
    </div>
    <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\">{{ button_label|default('Save Project') }}</button>
{{ form_end(form) }}", "project/_form.html.twig", "/var/www/html/crud/templates/project/_form.html.twig");
    }
}
