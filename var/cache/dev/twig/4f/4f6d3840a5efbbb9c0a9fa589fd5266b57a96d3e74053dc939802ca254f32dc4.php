<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_003c57c660e3d6c43834af320c4e93baf468766e8837497f5c83b6299b0691e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003c57c660e3d6c43834af320c4e93baf468766e8837497f5c83b6299b0691e7->enter($__internal_003c57c660e3d6c43834af320c4e93baf468766e8837497f5c83b6299b0691e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cd99a3eb547386884b29336b1fe6c9b813cb456ac0a67ae5060e8819c3592e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd99a3eb547386884b29336b1fe6c9b813cb456ac0a67ae5060e8819c3592e4b->enter($__internal_cd99a3eb547386884b29336b1fe6c9b813cb456ac0a67ae5060e8819c3592e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003c57c660e3d6c43834af320c4e93baf468766e8837497f5c83b6299b0691e7->leave($__internal_003c57c660e3d6c43834af320c4e93baf468766e8837497f5c83b6299b0691e7_prof);

        
        $__internal_cd99a3eb547386884b29336b1fe6c9b813cb456ac0a67ae5060e8819c3592e4b->leave($__internal_cd99a3eb547386884b29336b1fe6c9b813cb456ac0a67ae5060e8819c3592e4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cf6678663d9aeaee819c6102e4912d374c3c0eb00e1ad9cf8946e24b9289ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf6678663d9aeaee819c6102e4912d374c3c0eb00e1ad9cf8946e24b9289ad4->enter($__internal_5cf6678663d9aeaee819c6102e4912d374c3c0eb00e1ad9cf8946e24b9289ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_413e26a37f5920a866f933cb774cd4bbbdfe0e96782d0a73e0eafb7107120771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413e26a37f5920a866f933cb774cd4bbbdfe0e96782d0a73e0eafb7107120771->enter($__internal_413e26a37f5920a866f933cb774cd4bbbdfe0e96782d0a73e0eafb7107120771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_413e26a37f5920a866f933cb774cd4bbbdfe0e96782d0a73e0eafb7107120771->leave($__internal_413e26a37f5920a866f933cb774cd4bbbdfe0e96782d0a73e0eafb7107120771_prof);

        
        $__internal_5cf6678663d9aeaee819c6102e4912d374c3c0eb00e1ad9cf8946e24b9289ad4->leave($__internal_5cf6678663d9aeaee819c6102e4912d374c3c0eb00e1ad9cf8946e24b9289ad4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a158d47b690c6518932b86f9dd6c77aba994263da26f5a248726a161c1d4446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a158d47b690c6518932b86f9dd6c77aba994263da26f5a248726a161c1d4446->enter($__internal_7a158d47b690c6518932b86f9dd6c77aba994263da26f5a248726a161c1d4446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8578f4d2956be47772bf2eb6a4720f90e76590d2f4fce3309f9a2626fc62a3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8578f4d2956be47772bf2eb6a4720f90e76590d2f4fce3309f9a2626fc62a3c4->enter($__internal_8578f4d2956be47772bf2eb6a4720f90e76590d2f4fce3309f9a2626fc62a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8578f4d2956be47772bf2eb6a4720f90e76590d2f4fce3309f9a2626fc62a3c4->leave($__internal_8578f4d2956be47772bf2eb6a4720f90e76590d2f4fce3309f9a2626fc62a3c4_prof);

        
        $__internal_7a158d47b690c6518932b86f9dd6c77aba994263da26f5a248726a161c1d4446->leave($__internal_7a158d47b690c6518932b86f9dd6c77aba994263da26f5a248726a161c1d4446_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1d1dfdf92ffe215356117e3b8f35e5acaf2fa3bd813757d7c395430f789fc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d1dfdf92ffe215356117e3b8f35e5acaf2fa3bd813757d7c395430f789fc2e->enter($__internal_b1d1dfdf92ffe215356117e3b8f35e5acaf2fa3bd813757d7c395430f789fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7675df35587d85edda5ddbfa9efadc7ffaeccfe17158fc9086ee3997a85d475a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7675df35587d85edda5ddbfa9efadc7ffaeccfe17158fc9086ee3997a85d475a->enter($__internal_7675df35587d85edda5ddbfa9efadc7ffaeccfe17158fc9086ee3997a85d475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7675df35587d85edda5ddbfa9efadc7ffaeccfe17158fc9086ee3997a85d475a->leave($__internal_7675df35587d85edda5ddbfa9efadc7ffaeccfe17158fc9086ee3997a85d475a_prof);

        
        $__internal_b1d1dfdf92ffe215356117e3b8f35e5acaf2fa3bd813757d7c395430f789fc2e->leave($__internal_b1d1dfdf92ffe215356117e3b8f35e5acaf2fa3bd813757d7c395430f789fc2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/CV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
