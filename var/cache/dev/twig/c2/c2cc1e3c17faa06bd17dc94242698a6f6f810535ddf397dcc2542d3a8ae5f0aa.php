<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3d2d1a8a200c7dc1c0b7ce933826694148e454688dd5d4b52c177db8734e78d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2d1a8a200c7dc1c0b7ce933826694148e454688dd5d4b52c177db8734e78d8->enter($__internal_3d2d1a8a200c7dc1c0b7ce933826694148e454688dd5d4b52c177db8734e78d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b13f01af5a39549e22b468f3f22daaf18a5cbaeabb45f20616b795420faeb4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13f01af5a39549e22b468f3f22daaf18a5cbaeabb45f20616b795420faeb4cb->enter($__internal_b13f01af5a39549e22b468f3f22daaf18a5cbaeabb45f20616b795420faeb4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2d1a8a200c7dc1c0b7ce933826694148e454688dd5d4b52c177db8734e78d8->leave($__internal_3d2d1a8a200c7dc1c0b7ce933826694148e454688dd5d4b52c177db8734e78d8_prof);

        
        $__internal_b13f01af5a39549e22b468f3f22daaf18a5cbaeabb45f20616b795420faeb4cb->leave($__internal_b13f01af5a39549e22b468f3f22daaf18a5cbaeabb45f20616b795420faeb4cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8837032eb9d65ca73efcbdf8d2de0f693bd8b13b59b4b4af87450cca82496801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8837032eb9d65ca73efcbdf8d2de0f693bd8b13b59b4b4af87450cca82496801->enter($__internal_8837032eb9d65ca73efcbdf8d2de0f693bd8b13b59b4b4af87450cca82496801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1f1453be3f17a39d11d0447a86540a2741e6b8c826d19b3e0065f9a32ad421bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1453be3f17a39d11d0447a86540a2741e6b8c826d19b3e0065f9a32ad421bd->enter($__internal_1f1453be3f17a39d11d0447a86540a2741e6b8c826d19b3e0065f9a32ad421bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f1453be3f17a39d11d0447a86540a2741e6b8c826d19b3e0065f9a32ad421bd->leave($__internal_1f1453be3f17a39d11d0447a86540a2741e6b8c826d19b3e0065f9a32ad421bd_prof);

        
        $__internal_8837032eb9d65ca73efcbdf8d2de0f693bd8b13b59b4b4af87450cca82496801->leave($__internal_8837032eb9d65ca73efcbdf8d2de0f693bd8b13b59b4b4af87450cca82496801_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_056bdfc8d1b4805812c3fa6b7da289fa1ea89a4800babefd7e4cb8bee81533b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056bdfc8d1b4805812c3fa6b7da289fa1ea89a4800babefd7e4cb8bee81533b5->enter($__internal_056bdfc8d1b4805812c3fa6b7da289fa1ea89a4800babefd7e4cb8bee81533b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5af98b7d21a1a110a510863fdfca76b9fe1e37100717bfe63781a6d983459643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af98b7d21a1a110a510863fdfca76b9fe1e37100717bfe63781a6d983459643->enter($__internal_5af98b7d21a1a110a510863fdfca76b9fe1e37100717bfe63781a6d983459643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5af98b7d21a1a110a510863fdfca76b9fe1e37100717bfe63781a6d983459643->leave($__internal_5af98b7d21a1a110a510863fdfca76b9fe1e37100717bfe63781a6d983459643_prof);

        
        $__internal_056bdfc8d1b4805812c3fa6b7da289fa1ea89a4800babefd7e4cb8bee81533b5->leave($__internal_056bdfc8d1b4805812c3fa6b7da289fa1ea89a4800babefd7e4cb8bee81533b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7652fc66a15799827e6870012557bfd27a5ab274439abb2029051c619ba053c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7652fc66a15799827e6870012557bfd27a5ab274439abb2029051c619ba053c8->enter($__internal_7652fc66a15799827e6870012557bfd27a5ab274439abb2029051c619ba053c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_534656a5d6ea2c0a4e47d9084da3be7f0a3666de692c2f82ec9f02b8b5b5270d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534656a5d6ea2c0a4e47d9084da3be7f0a3666de692c2f82ec9f02b8b5b5270d->enter($__internal_534656a5d6ea2c0a4e47d9084da3be7f0a3666de692c2f82ec9f02b8b5b5270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_534656a5d6ea2c0a4e47d9084da3be7f0a3666de692c2f82ec9f02b8b5b5270d->leave($__internal_534656a5d6ea2c0a4e47d9084da3be7f0a3666de692c2f82ec9f02b8b5b5270d_prof);

        
        $__internal_7652fc66a15799827e6870012557bfd27a5ab274439abb2029051c619ba053c8->leave($__internal_7652fc66a15799827e6870012557bfd27a5ab274439abb2029051c619ba053c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/CV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
