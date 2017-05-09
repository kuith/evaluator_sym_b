<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
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
        $__internal_7190e902d563a15226ac1469110b0d497ad2adc312617050a0ffbd63d9f72c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7190e902d563a15226ac1469110b0d497ad2adc312617050a0ffbd63d9f72c84->enter($__internal_7190e902d563a15226ac1469110b0d497ad2adc312617050a0ffbd63d9f72c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cc6847fc5614e48ffcf76d6303d721ed75e49301804e3ecc26c4fa4fd4c58fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6847fc5614e48ffcf76d6303d721ed75e49301804e3ecc26c4fa4fd4c58fe9->enter($__internal_cc6847fc5614e48ffcf76d6303d721ed75e49301804e3ecc26c4fa4fd4c58fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7190e902d563a15226ac1469110b0d497ad2adc312617050a0ffbd63d9f72c84->leave($__internal_7190e902d563a15226ac1469110b0d497ad2adc312617050a0ffbd63d9f72c84_prof);

        
        $__internal_cc6847fc5614e48ffcf76d6303d721ed75e49301804e3ecc26c4fa4fd4c58fe9->leave($__internal_cc6847fc5614e48ffcf76d6303d721ed75e49301804e3ecc26c4fa4fd4c58fe9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73ebd8338033e67ff5c7fb42ab549e580cc6851b868c70845c91b96db1c528f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ebd8338033e67ff5c7fb42ab549e580cc6851b868c70845c91b96db1c528f1->enter($__internal_73ebd8338033e67ff5c7fb42ab549e580cc6851b868c70845c91b96db1c528f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae743d53b1bfceb7763eef45cf2884abdf0838049428fa5614eef92d6678073b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae743d53b1bfceb7763eef45cf2884abdf0838049428fa5614eef92d6678073b->enter($__internal_ae743d53b1bfceb7763eef45cf2884abdf0838049428fa5614eef92d6678073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae743d53b1bfceb7763eef45cf2884abdf0838049428fa5614eef92d6678073b->leave($__internal_ae743d53b1bfceb7763eef45cf2884abdf0838049428fa5614eef92d6678073b_prof);

        
        $__internal_73ebd8338033e67ff5c7fb42ab549e580cc6851b868c70845c91b96db1c528f1->leave($__internal_73ebd8338033e67ff5c7fb42ab549e580cc6851b868c70845c91b96db1c528f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3880bdefaae83b0c58d1382bf92b64f2b72ff88f1f621f99b91c330e375588a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3880bdefaae83b0c58d1382bf92b64f2b72ff88f1f621f99b91c330e375588a9->enter($__internal_3880bdefaae83b0c58d1382bf92b64f2b72ff88f1f621f99b91c330e375588a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e24ebfd1a4e3c628ca1927826c05b962b03cdd8f5fa790677cdc6714cdfb440b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24ebfd1a4e3c628ca1927826c05b962b03cdd8f5fa790677cdc6714cdfb440b->enter($__internal_e24ebfd1a4e3c628ca1927826c05b962b03cdd8f5fa790677cdc6714cdfb440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e24ebfd1a4e3c628ca1927826c05b962b03cdd8f5fa790677cdc6714cdfb440b->leave($__internal_e24ebfd1a4e3c628ca1927826c05b962b03cdd8f5fa790677cdc6714cdfb440b_prof);

        
        $__internal_3880bdefaae83b0c58d1382bf92b64f2b72ff88f1f621f99b91c330e375588a9->leave($__internal_3880bdefaae83b0c58d1382bf92b64f2b72ff88f1f621f99b91c330e375588a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dc3f6da91bc5fff705201d84d9f6077f97aec784372a5c666a02e1052cc5bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc3f6da91bc5fff705201d84d9f6077f97aec784372a5c666a02e1052cc5bab->enter($__internal_5dc3f6da91bc5fff705201d84d9f6077f97aec784372a5c666a02e1052cc5bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1769a06ac06daadebb66a34a2c17a2819561c7cb9ae52ba06999023d056bae19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1769a06ac06daadebb66a34a2c17a2819561c7cb9ae52ba06999023d056bae19->enter($__internal_1769a06ac06daadebb66a34a2c17a2819561c7cb9ae52ba06999023d056bae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1769a06ac06daadebb66a34a2c17a2819561c7cb9ae52ba06999023d056bae19->leave($__internal_1769a06ac06daadebb66a34a2c17a2819561c7cb9ae52ba06999023d056bae19_prof);

        
        $__internal_5dc3f6da91bc5fff705201d84d9f6077f97aec784372a5c666a02e1052cc5bab->leave($__internal_5dc3f6da91bc5fff705201d84d9f6077f97aec784372a5c666a02e1052cc5bab_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
